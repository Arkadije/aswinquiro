<?php require('core/init.php'); ?>

<?php
if (isset($_SESSION['user_name'])) {
	if (($_SESSION['user_type']) == 'adm') {

		//Create user object
		$user = new User;

		//Create Validator object
		$validate = new Validator;

		//Get Template & Assing Vars
		$template = new Template('templates/userAdmin.php');

		$template->adminUsers = $user->getAllUsers();
		$adminUsers = $user->getAllUsers();

		foreach ($adminUsers as $adminUser) {
			if (isset($_POST['editUser' . $adminUser->id])) {
				// Sanitize POST data
					$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

				//Get Vars
					$data = [
						'adminId' => $adminUser->id,
						'adminUserName' => trim($_POST['adminUserName']),
						'adminName' => trim($_POST['adminName']),
						'adminEmail' => trim($_POST['adminEmail']),
						'adminPassword' => md5(trim($_POST['adminPassword'])),
						'adminType' => trim($_POST['adminType'])
					];

				//Required array
				$field_array = array('adminUserName', 'adminName', 'adminEmail', 'adminPassword', 'adminType');

				if ($validate->isRequired($field_array)) {
					if ($user->updateUsers($data)) {
						redirect('userAdmin.php', 'Uspešno ste izmenili korisnika', 'success');
					} else {
						redirect('userAdmin.php', 'Izmena korisnika nije uspela', 'error');
					}
				} else {
					redirect('userAdmin.php', 'Molim vas popunite sva obavezna polja', 'error');
				}
			} elseif (isset($_POST['deleteUser' . $adminUser->id])) {

				//Get Vars
				$data = [
					'adminId' => $adminUser->id,
					'adminUserName' => trim($_POST['adminUserName']),
				];

				if ($user->deleteUser($data)) {
					redirect('userAdmin.php', 'Uspešno ste obrisali korisnika', 'success');
				} else {
					redirect('userAdmin.php', 'Brisanje korisnika nije uspelo', 'error');
				}
			}
		}
			// Display template
			echo $template;
	} else {
		redirect('index.php', 'Niste prijavljeni kao Administrator, nemate prava za izmenu korisnika!', 'error');
	}
} else {
	redirect('index.php', 'Niste prijavljeni na sistem', 'error');
}

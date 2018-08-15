<?php require('core/init.php'); ?>

<?php

if (isset($_SESSION['user_name'])) {

	// Create User Object
	$user = new User;
	//Create Validator object
	$validate = new Validator;

	//Get Template & Assing Vars
	$template = new Template('templates/editUser.php');

	if (isset($_POST['changePassword'])) {
		// Sanitize POST data
		$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);


		//Get Vars
		$data = [
			'id' => $_SESSION['user_id'],
			'name' => $_SESSION['user_name'],
			'oldPassword' => md5(trim($_POST['oldPassword'])),
			'password' => md5(trim($_POST['password'])),
			'confirmPassword' => md5(trim($_POST['confirmPassword']))
		];

		$field_array = array('oldPassword', 'password', 'confirmPassword');

		if($validate->isRequired($field_array)){
			if ($validate->oldPasswordCheck($data['name'], $data['oldPassword'])){
				if($validate->passwordsMatch($data['password'], $data['confirmPassword'])){
					if($user->changePassword($data)){
						redirect('editUser.php', 'Uspešno ste izmenili lozinku', 'success');
					} else {
						redirect('editUser.php', 'Desilo se ne objašnjivo', 'error');
					}
				} else {
					redirect('editUser.php', 'Kontrolna lozinka se razlikuje', 'error');
				}
			} else {
				redirect('editUser.php', 'Nije ispravna star lozinka', 'error');
			}
		} else {
			redirect('editUser.php', 'Molim vas popunite sva obavezna polja', 'error');
		}
	}

		// Display template
	echo $template;
} else {
	redirect('index.php', 'Niste prijavljeni na sistem', 'error');
}
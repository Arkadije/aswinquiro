<?php require('core/init.php'); ?>

<?php

if (!isset($_SESSION['user_name'])) {
	redirect('index.php', 'Niste prijavljeni na sistem', 'error');
} else {
	// Create Company Object
	$editCompany = new EditCompany;

	// Create Company Object
	$company = new Company;

	//Create Validator object
	$validate = new Validator;

	// Get Template
	$template = new Template('templates/editUserData.php');
	//Get Vars
	$companyId = $_SESSION['company_id'];

	// Get values and forvard to template
	$template->centralUsers = $company->getCentralUsers($companyId);
	$template->retailUsers = $company->getRetailUsers($companyId);
	$template->erpUsers = $company->getErpUsers($companyId);
	$template->ipAddress = $company->getIpAdr($companyId);
	$template->transponder = $company->getTrans($companyId);

	// Collect all posible submit Id's
	$usersData = $editCompany->getAllUserData($companyId);

	foreach ($usersData as $userData) {
		if (isset($_POST['editData' . $userData->id])) {
			// Sanitize POST data
			$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

			//Get Vars
			$data = [
				'userId' => $userData->id,
				'userCompany_id' => $userData->company_id,
				'userName' => trim($_POST['userName']),
				'userPassword' => trim($_POST['userPassword']),
				'userTestPassword' => trim($_POST['userTestPassword'])
			];

			//Required array
			$field_array = array('userName', 'userPassword');

			if ($validate->isRequired($field_array)) {
				if ($editCompany->editUserData($data)) {
					redirect('editUserData.php', 'Uspešno ste izmenili podatak', 'success');
				} else {
					redirect('editUserData.php', 'Izmena podatka nije uspela', 'error');
				}
			} else {
				redirect('editUserData.php', 'Molim vas popunite sva obavezna polja', 'error');
			}

		} elseif (isset($_POST['deleteData' . $userData->id])){

			//Get Vars
			$data = [
				'userId' => $userData->id,
				'userCompany_id' => $userData->company_id
			];
			if ($editCompany->deleteUserData($data)) {
				redirect('editUserData.php', 'Uspešno ste obrisali podatak', 'success');
			} else {
				redirect('editUserData.php', 'Brisanje podatka nije uspelo', 'error');
			}
		}

	}

		// Display template
	echo $template;

}
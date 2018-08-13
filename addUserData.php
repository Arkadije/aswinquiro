<?php require('core/init.php'); ?>

<?php

if (!isset($_SESSION['user_name'])) {
	redirect('index.php', 'Niste prijavljeni na sistem', 'error');
} else {
	//Get Template & Assing Vars
	$template = new Template('templates/addUserData.php');

	//Create Validator object
	$validate = new Validator;

	// Create Company Object
	$addUserData = new NewCompany;

	if (isset($_POST['addUserData'])) {
		// Sanitize POST data
		$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

		//Get Vars
		$data = [
			'company_id' => $_SESSION['company_id'],
			'userName' => trim($_POST['userName']),
			'password' => trim($_POST['password']),
			'ipAddress' => trim($_POST['ipAddress']),
			'userType' => trim($_POST['userType'])
		];

		//Required array
		$field_array = array('userName', 'password', 'userType');

		if ($validate->isRequired($field_array)) {
			if ($addUserData->addData($data)) {
				redirect('addUserData.php', 'Uspešno ste dodali link', 'success');
			} else {
				redirect('addUserData.php', 'Desilo se ne objašnjivo', 'error');
			}
		} else {
			redirect('addUserData.php', 'Molim vas popunite sva obavezna polja', 'error');
		}


	}

	// Display template
	echo $template;

}
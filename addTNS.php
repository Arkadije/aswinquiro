<?php require('core/init.php'); ?>

<?php

if (!isset($_SESSION['user_name'])) {
	redirect('index.php', 'Niste prijavljeni na sistem', 'error');
} else {
	//Get Template & Assing Vars
	$template = new Template('templates/addTNS.php');

	//Create Validator object
	$validate = new Validator;

	// Create Company Object
	$addTNS = new NewCompany;

	if (isset($_POST['addTNS'])) {
		// Sanitize POST data
		$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

		//Get Vars
		$data = [
			'company_id' => $_SESSION['company_id'],
			'server' => trim($_POST['server']),
			'houstName' => trim($_POST['houstName']),
			'serviceName' => trim($_POST['serviceName']),
			'userName' => trim($_POST['userName']),
			'password' => trim($_POST['password'])
		];

		//Required array
		$field_array = array('server', 'houstName', 'serviceName', 'userName', 'password');

		if ($validate->isRequired($field_array)) {
			if ($addTNS->addTNS($data)) {
				redirect('addTNS.php', 'Uspešno ste dodali TNS', 'success');
			} else {
				redirect('addTNS.php', 'Desilo se ne objašnjivo', 'error');
			}
		} else {
			redirect('addTNS.php', 'Molim vas popunite sva obavezna polja', 'error');
		}


	}

		// Display template
	echo $template;
}
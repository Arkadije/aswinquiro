<?php require('core/init.php'); ?>

<?php

if (!isset($_SESSION['user_name'])) {
	redirect('index.php', 'Niste prijavljeni na sistem', 'error');
} else {
	// Create Company Object
	$addCompany = new NewCompany;

	//Create Validator object
	$validate = new Validator;

	//Get Template & Assing Vars
	$template = new Template('templates/addCompany.php');

	if (isset($_POST['addCompany'])) {

		// Sanitize POST data
		$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

		//Get Vars
		$data = [
			'newCompany' => trim(strtolower($_POST['newCompany']))
		];


		//Required array
		$field_array = array('newCompany');

		if ($validate->isRequired($field_array)) {
			if ($addCompany->findCompanyByName($data['newCompany'])) {
				if($addCompany->createCompany($data['newCompany'])){
					redirect('addCompany.php', 'Kompanija kreirana, možete je koristiti u pretrazi', 'success');
				} else {
					redirect('addCompany.php', 'Kreiranje companije nije uspelo', 'error');
				}
			} else {
				redirect('addCompany.php', 'Kompanija sa tim imenomv već postoi', 'error');
			}
		} else {
			redirect('addCompany.php', 'Molim vas popunite sva obavezna polja', 'error');
		}

	}

		// Display template
	echo $template;

}
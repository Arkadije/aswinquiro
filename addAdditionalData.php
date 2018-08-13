<?php require('core/init.php'); ?>

<?php

if (!isset($_SESSION['user_name'])) {
	redirect('index.php', 'Niste prijavljeni na sistem', 'error');
} else {
	//Get Template & Assing Vars
	$template = new Template('templates/addAdditionalData.php');

	//Create Validator object
	$validate = new Validator;

	// Create Company Object
	$addAdditionalData = new NewCompany;

	if (isset($_POST['addAdditionalData'])) {
		// Sanitize POST data
		$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

		//Get Vars
		$data = [
			'company_id' => $_SESSION['company_id'],
			'linkName' => trim($_POST['linkName']),
			'link' => trim($_POST['link']),
			'linkType' => trim($_POST['linkType'])
		];

		//Required array
		$field_array = array('linkName', 'link', 'linkType');

		if ($validate->isRequired($field_array)) {
			if ($addAdditionalData->addAdditionalData($data)) {
				redirect('addAdditionalData.php', 'Uspešno ste dodali dodatne informacije', 'success');
			} else {
				redirect('addAdditionalData.php', 'Desilo se ne objašnjivo', 'error');
			}
		} else {
			redirect('addAdditionalData.php', 'Molim vas popunite sva obavezna polja', 'error');
		}


	}

	// Display template
	echo $template;
}
<?php require('core/init.php'); ?>

<?php
if (!isset($_SESSION['user_name'])) {
	redirect('index.php', 'Niste prijavljeni na sistem', 'error');
} else {
	// Create Company Object
	$editCompany = new EditCompany;

	//Create Validator object
	$validate = new Validator;

	//Get Template & Assing Vars
	$template = new Template('templates/editCompany.php');

	if (isset($_POST['editCompany'])) {
		// Sanitize POST data
		$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

		//Get Vars
		$data = [
			'companyid' => trim($_POST['companyId']),
			'companyName' => trim(strtolower($_POST['companyName']))
		];

		//Required array
		$field_array = array('companyId', 'companyName');

		if ($validate->isRequired($field_array)) {
			if ($editCompany->editCompany($data)) {
				redirect('company.php', 'Uspešno ste izmenili naziv kompanije', 'success');
			} else {
				redirect('editCompany.php', 'Izmena kompanije nije uspela', 'error');
			}
		} else {
				redirect('editCompany.php', 'Molim vas popunite sva obavezna polja', 'error');
		}

	} elseif (isset($_POST['deleteCompany'])) {
		// Sanitize POST data
		$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

		//Get Vars
		$data = [
			'companyid' => trim($_POST['companyId']),
			'companyName' => trim($_POST['companyName'])
		];
		// Create Company Object
		$editCompany = new EditCompany;
		if ($editCompany->deleteAll($data)) {
			redirect('index.php', 'Uspešno ste obrisali kompaniju ' . $data['companyName'], 'success');
		} else {
			redirect('editCompany.php', 'Izmena kompanije nije uspela', 'error');
		}
	}

		// Display template
	echo $template;
}
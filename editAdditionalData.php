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
	$template = new Template('templates/editAdditionalData.php');
	//Get Vars
	$companyId = $_SESSION['company_id'];

	$template->additionalData = $company->getAdditionalData($companyId);
	$additionalData = $company->getAdditionalData($companyId);


	foreach ($additionalData as $additionalItem){
		if (isset($_POST['editData' . $additionalItem->id])){
			// Sanitize POST data
			$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

			//Get Vars
			$data = [
				'dataId' => $additionalItem->id,
				'dataCompany_id' => $additionalItem->company_id,
				'dataName' => trim($_POST['dataName']),
				'dataLink' => trim($_POST['dataLink']),
				'dataType' => trim($_POST['dataType'])
			];

			//Required array
			$field_array = array('dataName', 'dataLink', 'dataType');

			if ($validate->isRequired($field_array)) {
				if ($editCompany->editAditionalData($data)) {
					redirect('editAdditionalData.php', 'Uspešno ste izmenili podatak', 'success');
				} else {
					redirect('editAdditionalData.php', 'Izmena podatka nije uspela', 'error');
				}
			} else {
				redirect('editAdditionalData.php', 'Molim vas popunite sva obavezna polja', 'error');
			}
		} elseif (isset($_POST['deleteData' . $additionalItem->id])) {

			//Get Vars
			$data = [
				'dataId' => $additionalItem->id,
				'dataCompany_id' => $additionalItem->company_id
			];

			if ($editCompany->deleteAditionalData($data)) {
				redirect('editAdditionalData.php', 'Uspešno ste obrisali podatak', 'success');
			} else {
				redirect('editAdditionalData.php', 'Brisanje podatka nije uspelo', 'error');
			}
		}
	}

		// Display template
	echo $template;
}
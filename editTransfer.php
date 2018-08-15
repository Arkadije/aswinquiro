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
	$template = new Template('templates/editTransfer.php');
	//Get Vars
	$companyId = $_SESSION['company_id'];

	$template->urls = $company->getUrlData($companyId);
	$urls = $company->getUrlData($companyId);


	foreach ($urls as $url){
		if (isset($_POST['editLink' . $url->id])){
			// Sanitize POST data
			$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

			//Get Vars
			$data = [
				'linkId' => $url->id,
				'linkCompany_id' => $url->company_id,
				'linkName' => trim($_POST['linkName']),
				'linkLink' => trim($_POST['linkLink']),
				'linkType' => trim($_POST['linkType'])
			];

			//Required array
			$field_array = array('linkName', 'linkLink', 'linkType');

			if ($validate->isRequired($field_array)) {
				if ($editCompany->editUrlLink($data)) {
					redirect('editTransfer.php', 'Uspešno ste izmenili Link', 'success');
				} else {
					redirect('editTransfer.php', 'Izmena linka nije uspela', 'error');
				}
			} else {
				redirect('editTransfer.php', 'Molim vas popunite sva obavezna polja', 'error');
			}
		} elseif (isset($_POST['deleteLink' . $url->id])) {

			//Get Vars
			$data = [
				'linkId' => $url->id,
				'linkCompany_id' => $url->company_id
			];

			if ($editCompany->deleteUrlLink($data)) {
				redirect('editTransfer.php', 'Uspešno ste obrisali Link', 'success');
			} else {
				redirect('editCompany.php', 'Brisanje linka nije uspelo', 'error');
			}
		}
	}

		// Display template
	echo $template;
}
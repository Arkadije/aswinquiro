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
	$template = new Template('templates/editTNS.php');
	//Get Vars
	$companyId = $_SESSION['company_id'];

	$template->tnsNames = $company->getTNS($companyId);
	$tnsNames = $company->getTNS($companyId);


	foreach ($tnsNames as $tnsName) {
		if (isset($_POST['editTns' . $tnsName->id])) {
			// Sanitize POST data
			$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

			//Get Vars
			$data = [
				'tnsId' => $tnsName->id,
				'tnsCompanyId' => $tnsName->company_id,
				'tnsServer' => trim($_POST['tnsServer']),
				'tnsHoustName' => trim($_POST['tnsHoustName']),
				'tnsServiceName' => trim($_POST['tnsServiceName']),
				'tnsUserName' => trim($_POST['tnsUserName']),
				'tnsPassword' => trim($_POST['tnsPassword'])
			];

			//Required array
			$field_array = array('tnsServer', 'tnsHoustName', 'tnsServiceName', 'tnsUserName', 'tnsPassword');

			if ($validate->isRequired($field_array)) {
				if ($editCompany->editTns($data)) {
					redirect('editTNS.php', 'Uspešno ste izmenili TNS podatak', 'success');
				} else {
					redirect('editTNS.php', 'Izmena TNS podatka nije uspela', 'error');
				}
			} else {
				redirect('editTNS.php', 'Molim vas popunite sva obavezna polja', 'error');
			}
		} elseif (isset($_POST['deleteTns' . $tnsName->id])) {

			//Get Vars
			$data = [
				'tnsId' => $tnsName->id,
				'tnsCompanyId' => $tnsName->company_id
			];

			if ($editCompany->deleteTns($data)) {
				redirect('editTNS.php', 'Uspešno ste obrisali TNS konekciju', 'success');
			} else {
				redirect('editTNS.php', 'Brisanje TNS podatka nije uspelo', 'error');
			}
		}
	}

		// Display template
	echo $template;
}
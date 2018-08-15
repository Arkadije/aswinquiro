<?php require('core/init.php'); ?>

<?php
if(isset($_SESSION['user_name'])){
	if (isset($_POST['companySerach'])) {
		// Sanitize POST data
		$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

		//Get Vars
		$companySerch = trim($_POST['searchCompany']);

		// Create Company Object
		$company = new Company;

		if ($company->fatchCompany($companySerch)) {
			//Get Template & Assing Vars
			$template = new Template('templates/company.php');
			$companyId = $_SESSION['company_id'];

			//Assign Values
			$template->traUrls = $company->getUrlDataTra($companyId);
			$template->erpUrls = $company->getUrlDataErp($companyId);
			$template->centralUsers = $company->getCentralUsers($companyId);
			$template->retailUsers = $company->getRetailUsers($companyId);
			$template->erpUsers = $company->getErpUsers($companyId);
			$template->ipAddress = $company->getIpAdr($companyId);
			$template->transponder = $company->getTrans($companyId);
			$template->tnsNames = $company->getTNS($companyId);
			$template->additionalDataErp = $company->getAdditionalDataErp($companyId);
			$template->additionalDataMlp = $company->getAdditionalDataMlp($companyId);


		} else {
			redirect('index.php', 'Kompanija nije nađena', 'error');
		}

	} else {
		// Create Company Object
		$company = new Company;

		$template = new Template('templates/company.php');
		$companyId = $_SESSION['company_id'];

			//Assign Values
		$template->traUrls = $company->getUrlDataTra($companyId);
		$template->erpUrls = $company->getUrlDataErp($companyId);
		$template->centralUsers = $company->getCentralUsers($companyId);
		$template->retailUsers = $company->getRetailUsers($companyId);
		$template->erpUsers = $company->getErpUsers($companyId);
		$template->ipAddress = $company->getIpAdr($companyId);
		$template->transponder = $company->getTrans($companyId);
		$template->tnsNames = $company->getTNS($companyId);
		$template->additionalDataErp = $company->getAdditionalDataErp($companyId);
		$template->additionalDataMlp = $company->getAdditionalDataMlp($companyId);

	}
	// Display template
	echo $template;
} else {
	redirect('index.php', 'Niste prijavljeni na sistem', 'error');
}



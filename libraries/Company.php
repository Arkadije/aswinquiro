<?php
class Company
{
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}
	// Search Companuy
	public function fatchCompany($companySerch){
		$this->db->query('SELECT * FROM company where name = :company');
			//Bind values
		$this->db->bind(':company', $companySerch);

			// Assign Result Set
		$companyResult = $this->db->single();
		if($this->db->rowCount() > 0){
			$this->setCompanyData($companyResult);
			return $companyResult;
		} else {
			return false;
		}

	}

	// Fatch URL Data for ALL
	public function getUrlData($companyId){
		$this->db->query('SELECT * FROM url where company_id = :companyId ORDER BY type DESC, id DESC');
		//Bind values
		$this->db->bind(':companyId', $companyId);
		$resultsUrl = $this->db->resultSet();
		return $resultsUrl;
	}

	// Fatch URL Data for Transfer
	public function getUrlDataTra($companyId){
		$this->db->query('SELECT * FROM url where company_id = :companyId AND type = :type ORDER BY name');
		//Bind values
		$type ='tra';
		$this->db->bind(':companyId', $companyId);
		$this->db->bind(':type', $type);
		$resultsUrl = $this->db->resultSet();
		return $resultsUrl;

	}

	// Fatch URL Data for ERP
	public function getUrlDataErp($companyId)
	{
		$this->db->query('SELECT * FROM url where company_id = :companyId AND type = :type ORDER BY name');
		//Bind values
		$type = 'erp';
		$this->db->bind(':companyId', $companyId);
		$this->db->bind(':type', $type);
		$resultsUrl = $this->db->resultSet();
		return $resultsUrl;

	}

	// Fatch data for Central users
	public function getCentralUsers($companyId){
		$this->db->query('SELECT * FROM user_data where company_id = :companyId AND type = :type');
		//Bind values
		$type = 'cent';
		$this->db->bind(':companyId', $companyId);
		$this->db->bind(':type', $type);
		$resultsUrl = $this->db->resultSet();
		return $resultsUrl;
	}

	// Fatch data for Retail users
	public function getRetailUsers($companyId)
	{
		$this->db->query('SELECT * FROM user_data where company_id = :companyId AND type = :type');
		//Bind values
		$type = 'prod';
		$this->db->bind(':companyId', $companyId);
		$this->db->bind(':type', $type);
		$resultsUrl = $this->db->resultSet();
		return $resultsUrl;
	}

	// Fatch data for ERP admin user
	public function getErpUsers($companyId)
	{
		$this->db->query('SELECT * FROM user_data where company_id = :companyId AND type = :type');
		//Bind values
		$type = 'erpa';
		$this->db->bind(':companyId', $companyId);
		$this->db->bind(':type', $type);
		$resultsUrl = $this->db->resultSet();
		return $resultsUrl;
	}

	// Fatch data for IPAdres
	public function getIpAdr($companyId)
	{
		$this->db->query('SELECT * FROM user_data where company_id = :companyId AND type = :type');
		//Bind values
		$type = 'ipad';
		$this->db->bind(':companyId', $companyId);
		$this->db->bind(':type', $type);
		$resultsUrl = $this->db->resultSet();
		return $resultsUrl;
	}

	// Fatch data for Transponder
	public function getTrans($companyId)
	{
		$this->db->query('SELECT * FROM user_data where company_id = :companyId AND type = :type');
		//Bind values
		$type = 'tran';
		$this->db->bind(':companyId', $companyId);
		$this->db->bind(':type', $type);
		$resultsUrl = $this->db->resultSet();
		return $resultsUrl;
	}

	// Fatch data for TNS Connection
	public function getTNS($companyId)
	{
		$this->db->query('SELECT * FROM tns_connection where company_id = :companyId ORDER BY id');
		//Bind values
		$this->db->bind(':companyId', $companyId);
		$resultsUrl = $this->db->resultSet();
		return $resultsUrl;
	}




	// Set Company Data ass sesion
	private function setCompanyData($companyResult)
	{
		$_SESSION['company_id'] = $companyResult->id;
		$_SESSION['company_name'] = $companyResult->name;
	}

	// Fatch URL Data for ALL
	public function getAdditionalData($companyId)
	{
		$this->db->query('SELECT * FROM additional_data where company_id = :companyId ORDER BY type DESC, id DESC');
		//Bind values
		$this->db->bind(':companyId', $companyId);
		$resultsUrl = $this->db->resultSet();
		return $resultsUrl;
	}

	// Fatch Additional Data Erp
	public function getAdditionalDataErp($companyId)
	{
		$this->db->query('SELECT * FROM additional_data where company_id = :companyId AND type = :type');
		//Bind values
		$type = 'erp';
		$this->db->bind(':companyId', $companyId);
		$this->db->bind(':type', $type);
		$resultsUrl = $this->db->resultSet();
		return $resultsUrl;
	}

	// Fatch Additional Data Mlp
	public function getAdditionalDataMlp($companyId)
	{
		$this->db->query('SELECT * FROM additional_data where company_id = :companyId AND type = :type');
		//Bind values
		$type = 'mlp';
		$this->db->bind(':companyId', $companyId);
		$this->db->bind(':type', $type);
		$resultsUrl = $this->db->resultSet();
		return $resultsUrl;
	}


}
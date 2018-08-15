<?php
class NewCompany
{
	private $db;

	public function __construct(){
		$this->db = new Database;
	}

	// Create  Company
	public function createCompany($newCompany){
		$this->db->query('INSERT INTO company (name) VALUES (:name)');
		//Bind values
		$this->db->bind(':name', $newCompany);

		//Execute
		if ($this->db->execute()) {
			return true;
		} else {
			return false;
		}
	}

	// Find company by name
	public function findCompanyByName($companyName){
		$this->db->query('SELECT * FROM company WHERE name = :name');
		$this->db->bind(':name', $companyName);

		$row = $this->db->resultSet();
		// Check row
		if ($this->db->rowCount() > 0) {
			return false;
		} else {
			return true;
		}

	}


	// Add Link
	public function addLink($data){
		$this->db->query('INSERT INTO url (company_id	, name, link, type) VALUES (:company_id, :name, :link, :type)');
				//Bind values
		$this->db->bind(':company_id', $data['company_id']);
		$this->db->bind(':name', $data['linkName']);
		$this->db->bind(':link', $data['link']);
		$this->db->bind(':type', $data['linkType']);

				//Execute
		if ($this->db->execute()) {
			return true;
		} else {
			return false;
		}
	}


	// Add Link
	public function addAdditionalData($data)
	{
		$this->db->query('INSERT INTO additional_data (company_id	, name, link, type) VALUES (:company_id, :name, :link, :type)');
				//Bind values
		$this->db->bind(':company_id', $data['company_id']);
		$this->db->bind(':name', $data['linkName']);
		$this->db->bind(':link', $data['link']);
		$this->db->bind(':type', $data['linkType']);

				//Execute
		if ($this->db->execute()) {
			return true;
		} else {
			return false;
		}
	}

	// Add Link
	public function addData($data){
		$this->db->query('INSERT INTO user_data (company_id	, user_name, user_password, user_test_password, type ) VALUES (:company_id, :user_name, :user_password, :user_test_password, :type)');
				//Bind values
		$this->db->bind(':company_id', $data['company_id']);
		$this->db->bind(':user_name', $data['userName']);
		$this->db->bind(':user_password', $data['password']);
		$this->db->bind(':user_test_password', $data['ipAddress']);
		$this->db->bind(':type', $data['userType']);

				//Execute
		if ($this->db->execute()) {
			return true;
		} else {
			return false;
		}
	}

	// Add TNS
	public function addTNS($data)
	{
		$this->db->query('INSERT INTO tns_connection (company_id	,server, houst_name, service_name, user_name, password )
																					VALUES (:company_id, :server, :houst_name, :service_name, :user_name, :password)');
				//Bind values
		$this->db->bind(':company_id', $data['company_id']);
		$this->db->bind(':server', $data['server']);
		$this->db->bind(':houst_name', $data['houstName']);
		$this->db->bind(':service_name', $data['serviceName']);
		$this->db->bind(':user_name', $data['userName']);
		$this->db->bind(':password', $data['password']);

				//Execute
		if ($this->db->execute()) {
			return true;
		} else {
			return false;
		}
	}



}
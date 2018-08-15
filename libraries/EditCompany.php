<?php
class EditCompany
{
	private $db;

	public function __construct(){
		$this->db = new Database;
	}

	// Edit  Company
	public function editCompany($data){
		$this->db->query('UPDATE company SET name = :companyName WHERE id = :id');
		//Bind values
		$this->db->bind(':id', $data['companyid']);
		$this->db->bind(':companyName', $data['companyName']);
		//Execute
		if ($this->db->execute()) {
			$this->setEditCompanyData($data);
			return true;
		} else {
			return false;
		}
	}


	// Set Edit Company Data
	private function setEditCompanyData($data)
	{
		$_SESSION['company_id'] = $data['companyid'];
		$_SESSION['company_name'] = $data['companyName'];
	}

	// --------------------------------------------
	// --------------- DELETE ALL---------------------
	// --------------------------------------------

	// DELETE ALL
	public function deleteAll($data){
		$this->deleteAllLinks($data);
		$this->deleteAllUserData($data);
		$this->deleteAllTNS($data);
		$this->deleteCompany($data);
		$this->noCompany($data);
		return true;
	}


	// Delete ALL Links for Company
	public function deleteAllLinks($data){
		$this->db->query('DELETE FROM url WHERE company_id = :id');
		//Bind data
		$this->db->bind(':id', $data['companyid']);

		// Execute method
		if ($this->db->execute()) {
			return true;
		} else {
			return false;
		}
	}

	// Delete ALL User data for Company
	public function deleteAllUserData($data)
	{
		$this->db->query('DELETE FROM user_data WHERE company_id = :id');
		//Bind data
		$this->db->bind(':id', $data['companyid']);

		// Execute method
		if ($this->db->execute()) {
			return true;
		} else {
			return false;
		}
	}

	// Delete ALL TNS connections for Company
	public function deleteAllTNS($data)
	{
		$this->db->query('DELETE FROM tns_connection WHERE company_id = :id');
		//Bind data
		$this->db->bind(':id', $data['companyid']);

		// Execute method
		if ($this->db->execute()) {
			return true;
		} else {
			return false;
		}
	}

	// Delete COMPANY
	public function deleteCompany($data)
	{
		$this->db->query('DELETE FROM company WHERE id = :id');
		//Bind data
		$this->db->bind(':id', $data['companyid']);

		// Execute method
		if ($this->db->execute()) {
			return true;
		} else {
			return false;
		}
	}


	public function noCompany()
	{
		unset($_SESSION['company_id']);
		unset($_SESSION['company_name']);
		return true;
	}

// --------------------------------------------
// ---------- EDIT URL / Transfer -------------
// --------------------------------------------

	// EDIT TRANSFER URL
	public function editUrlLink($data)
	{
		$this->db->query('UPDATE url SET name = :name, link = :link, type = :type WHERE id = :id AND company_id = :company_id');
		//Bind data
		$this->db->bind(':id', $data['linkId']);
		$this->db->bind(':company_id', $data['linkCompany_id']);
		$this->db->bind(':name', $data['linkName']);
		$this->db->bind(':link', $data['linkLink']);
		$this->db->bind(':type', $data['linkType']);


		// Execute method
		if ($this->db->execute()) {
			return true;
		} else {
			return false;
		}
	}

	// DELETE TRANSFER URL
	public function deleteUrlLink($data)
	{
		$this->db->query('DELETE FROM url WHERE id = :id AND company_id = :company_id');
		//Bind data
		$this->db->bind(':id', $data['linkId']);
		$this->db->bind(':company_id', $data['linkCompany_id']);

		// Execute method
		if ($this->db->execute()) {
			return true;
		} else {
			return false;
		}
	}

	// --------------------------------------------
	// ------------ EDIT USER DATA ----------------
	// --------------------------------------------


	// Fatch All User Data
	public function getAllUserData($companyId)
	{
		$this->db->query('SELECT * FROM user_data where company_id = :companyId');
		//Bind values
		$this->db->bind(':companyId', $companyId);
		$resultsData = $this->db->resultSet();
		return $resultsData;
	}



	// Edit User Data
	public function editUserData($data){
		$this->db->query('UPDATE user_data SET
											user_name = :user_name,
											user_password = :user_password,
											user_test_password = :user_test_password
											WHERE id = :id
											AND company_id = :company_id');
		//Bind data
		$this->db->bind(':id', $data['userId']);
		$this->db->bind(':company_id', $data['userCompany_id']);
		$this->db->bind(':user_name', $data['userName']);
		$this->db->bind(':user_password', $data['userPassword']);
		$this->db->bind(':user_test_password', $data['userTestPassword']);


		// Execute method
		if ($this->db->execute()) {
			return true;
		} else {
			return false;
		}
	}


	// Delete User Data
	public function deleteUserData($data)
	{
		$this->db->query('DELETE FROM user_data WHERE id = :id AND company_id = :company_id');
		//Bind data
		$this->db->bind(':id', $data['userId']);
		$this->db->bind(':company_id', $data['userCompany_id']);


		// Execute method
		if ($this->db->execute()) {
			return true;
		} else {
			return false;
		}
	}

	// --------------------------------------------
	// ------------ EDIT TNS DATA ----------------
	// --------------------------------------------

	// Edit TNS Data
	public function editTns($data)
	{
		$this->db->query('UPDATE tns_connection SET
											server = :server,
											houst_name = :houst_name,
											service_name = :service_name,
											user_name = :user_name,
											password = :password
											WHERE id = :id
											AND company_id = :company_id');
		//Bind data
		$this->db->bind(':id', $data['tnsId']);
		$this->db->bind(':company_id', $data['tnsCompanyId']);
		$this->db->bind(':server', $data['tnsServer']);
		$this->db->bind(':houst_name', $data['tnsHoustName']);
		$this->db->bind(':service_name', $data['tnsServiceName']);
		$this->db->bind(':user_name', $data['tnsUserName']);
		$this->db->bind(':password', $data['tnsPassword']);

		// Execute method
		if ($this->db->execute()) {
			return true;
		} else {
			return false;
		}
	}


	// Delete TNS Data
	public function deleteTns($data)
	{
		$this->db->query('DELETE FROM tns_connection WHERE id = :id AND company_id = :company_id');
		//Bind data
		$this->db->bind(':id', $data['tnsId']);
		$this->db->bind(':company_id', $data['tnsCompanyId']);


		// Execute method
		if ($this->db->execute()) {
			return true;
		} else {
			return false;
		}
	}

	// -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- --
	// ---------- EDIT Additional Data -------------
	// --------------------------------------------

	// EDIT TRANSFER URL
	public function editAditionalData($data)
	{
		$this->db->query('UPDATE additional_data SET name = :name, link = :link, type = :type WHERE id = :id AND company_id = :company_id');
		//Bind data
		$this->db->bind(':id', $data['dataId']);
		$this->db->bind(':company_id', $data['dataCompany_id']);
		$this->db->bind(':name', $data['dataName']);
		$this->db->bind(':link', $data['dataLink']);
		$this->db->bind(':type', $data['dataType']);


		// Execute method
		if ($this->db->execute()) {
			return true;
		} else {
			return false;
		}
	}

	// DELETE TRANSFER URL
	public function deleteAditionalData($data)
	{
		$this->db->query('DELETE FROM additional_data WHERE id = :id AND company_id = :company_id');
		//Bind data
		$this->db->bind(':id', $data['dataId']);
		$this->db->bind(':company_id', $data['dataCompany_id']);

		// Execute method
		if ($this->db->execute()) {
			return true;
		} else {
			return false;
		}
	}

}



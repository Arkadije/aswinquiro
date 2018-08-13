<?php
	class User {
		private $db;

		public function __construct(){
			$this->db = new Database;
		}
		// Register User
		public function register($data)
		{
			$this->db->query('INSERT INTO users (user_name, name, email, password, type) VALUES (:userName, :name, :email, :password, :userType)');
				//Bind values
			$this->db->bind(':userName', $data['userName']);
			$this->db->bind(':name', $data['name']);
			$this->db->bind(':email', $data['email']);
			$this->db->bind(':password', $data['password']);
			$this->db->bind(':userType', $data['userType']);

				//Execute
			if ($this->db->execute()) {
				return true;
			} else {
				return false;
			}
		}

		// Login User
		public function login($userName, $password)
		{
			$this->db->query('SELECT * FROM users
																WHERE user_name = :userName
																AND password = :password');
			$this->db->bind(':userName', $userName);
			$this->db->bind(':password', $password);

			$row = $this->db->single();

			//Check Rows
			if ($this->db->rowCount() > 0) {
				$this->setUserData($row);
				return true;
			} else {
				return false;
			}
		}

		// Find user by email
		public function findUserByEmail($email)
		{
			$this->db->query('SELECT * FROM users WHERE email = :email');
				//Bind values
			$this->db->bind(':email', $email);

			$row = $this->db->single();
				// Check row
			if ($this->db->rowCount() > 0) {
				return true;
			} else {
				return false;
			}

		}

		// Find user by userName
		public function findUserByUserName($userName)
		{
			$this->db->query('SELECT * FROM users WHERE user_name = :userName');
			$this->db->bind(':userName', $userName);

			$row = $this->db->single();
					// Check row
			if ($this->db->rowCount() > 0) {
				return true;
			} else {
				return false;
			}

		}


		// Find user by userName
		public function changePassword($data)
		{
			$this->db->query('UPDATE users SET password = :password WHERE id = :id');
			$this->db->bind(':id', $data['id']);
			$this->db->bind(':password', $data['password']);

			if ($this->db->execute()) {
				return true;
			} else {
				return false;
			}

		}

		// Get all Users
		public function getAllUsers(){
			$this->db->query('SELECT * FROM users');

			$resultsData = $this->db->resultSet();
			return $resultsData;
		}

		// Update Users
		public function updateUsers($data)
		{
			$this->db->query('UPDATE users SET user_name = :user_name, name = :name, email = :email, password = :password, type = :type WHERE id = :id');
			//Bind values
			$this->db->bind(':id', $data['adminId']);
			$this->db->bind(':user_name', $data['adminUserName']);
			$this->db->bind(':name', $data['adminName']);
			$this->db->bind(':email', $data['adminEmail']);
			$this->db->bind(':password', $data['adminPassword']);
			$this->db->bind(':type', $data['adminType']);


			if ($this->db->execute()) {
				return true;
			} else {
				return false;
			}
		}

		// Delete User
		public function deleteUser($data)
		{
			$this->db->query('DELETE FROM users WHERE id = :id AND user_name = :user_name');
			//Bind values
			$this->db->bind(':id', $data['adminId']);
			$this->db->bind(':user_name', $data['adminUserName']);

			if ($this->db->execute()) {
				return true;
			} else {
				return false;
			}
		}


		// Set User Data
		private function setUserData($row){
			$_SESSION['is_loged_in'] = true;
			$_SESSION['user_id'] = $row->id;
			$_SESSION['user_name'] = $row->user_name;
			$_SESSION['name'] = $row->name;
			$_SESSION['user_type'] = $row->type;
		}

		public function logout(){
			unset($_SESSION['is_loged_in']);
			unset($_SESSION['user_id']);
			unset($_SESSION['user_name']);
			unset($_SESSION['name']);
			unset($_SESSION['user_type']);
			unset($_SESSION['company_id']);
			unset($_SESSION['company_name']);
			return true;
		}

	}
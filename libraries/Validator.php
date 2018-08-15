<?php
	class Validator{
		private $db;

		public function __construct(){
			$this->db = new Database;
		}

		// Chec Required Fields
		public function isRequired($field_array){
			foreach($field_array as $field){
				if($_POST[''.$field.''] == ''){
					return false;
				}
			}
			return true;
		}

		//Validate Email Fieald
		public function isValidEmail($email){
			if(filter_var($email, FILTER_VALIDATE_EMAIL)){
				return true;
			} else {
				return false;
			}
		}

		// Check Password Mathc
		public function passwordsMatch($pw1,$pw2){
			if($pw1 == $pw2){
				return true;
			} else {
				return false;
			}
		}

			// Login User
		public function oldPasswordCheck($userName, $password)
		{
			$this->db->query('SELECT * FROM users
																	WHERE user_name = :userName
																	AND password = :password');
			$this->db->bind(':userName', $userName);
			$this->db->bind(':password', $password);

			$row = $this->db->single();

				//Check Rows
			if ($this->db->rowCount() > 0) {
				return true;
			} else {
				return false;
			}
		}

		// Find user by userName
		public function findUser($userName, $email)
		{
			$this->db->query('SELECT * FROM users WHERE user_name = :userName OR email = :email');
			$this->db->bind(':userName', $userName);
			$this->db->bind(':email', $email);

			$row = $this->db->single();
					// Check row
			if ($this->db->rowCount() > 0) {
				return false;
			} else {
				return true;
			}
		}

	}
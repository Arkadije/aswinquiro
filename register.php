<?php require('core/init.php'); ?>

<?php
if (isset($_SESSION['user_name'])) {
	if (($_SESSION['user_type']) =='adm'){

		//Create user object
		$user = new User;

		//Create Validator object
		$validate = new Validator;

		//Get Template & Assing Vars
		$template = new Template('templates/register.php');

		if(isset($_POST['register'])){

			// Sanitize POST data
			$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

			// Init data
			$data = [
				'userName' => trim($_POST['userName']),
				'name' => trim($_POST['name']),
				'email' => trim($_POST['email']),
				'password' => md5(trim($_POST['password'])),
				'confirmPassword' => md5(trim($_POST['confirmPassword'])),
				'userType' => trim($_POST['userType'])
			];

			//Required array
			$field_array = array('userName', 'name', 'email', 'password', 'confirmPassword', 'userType');


			if($validate->isRequired($field_array)){
				if($validate->isValidEmail($data['email'])){
					if($validate->passwordsMatch($data['password'],$data['confirmPassword'])){
						if($validate->findUser($data['userName'], $data['email'])){
							//Register user
							if($user->register($data)){
								redirect('login.php', 'Uspešno ste se registorvali, možete se logovati', 'success');
							} else {
								redirect('register.php', 'Desilo se ne objašnjivo', 'error');
							}
						} else {
							redirect('register.php', 'Korisnik već postoji', 'error');
						}
					} else {
						redirect('register.php', 'Kontrolna lozinka se razlikuje','error');
					}
				} else {
					redirect('register.php', 'Molivas koristite ispravan email', 'error');
				}
			} else {
				redirect('register.php', 'Molim vas popunite sva obavezna polja', 'error');
			}

		}

			// Display template
		echo $template;
	} else {
		redirect('index.php', 'Niste prijavljeni kao Administrator, nemate prava za kreiranje korisnika!', 'error');
	}
} else {
	redirect('index.php', 'Niste prijavljeni na sistem', 'error');
}
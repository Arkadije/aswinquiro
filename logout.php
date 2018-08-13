<?php require('core/init.php'); ?>

<?php

		// Create User Object
		$user = new User;

		if($user->logout()){
			redirect('login.php', 'Uspešno ste se izlogovali', 'success');
		} else {
		redirect('company.php');
	}

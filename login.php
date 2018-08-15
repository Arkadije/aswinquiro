<?php require('core/init.php'); ?>

<?php
	//Get Template & Assing Vars
$template = new Template('templates/login.php');

if (isset($_POST['do_login'])) {
	// Sanitize POST data
	$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

	//Get Vars
	$userName = trim($_POST['userName']);
	$password = md5(trim($_POST['password']));

	// Create User Object
	$user = new User;

	if($user->login($userName, $password)){
		redirect('index.php','Uspešno ste se logovali', 'success');
	} else {
		redirect('login.php', 'Greška prilikom logovanja', 'error');
	}
}

	// Display template
echo $template;
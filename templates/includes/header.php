<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title><?php echo SITE_TITLE; ?></title>
	<link rel="icon" href="<?php echo URLROOT; ?>/templates/assets/img/A.png" type="image/png">

	<!-- Bootstrap core CSS-->
	<link href="<?php echo URLROOT; ?>/templates/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom fonts for this template-->
	<link href="<?php echo URLROOT; ?>/templates/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

	<!-- Page level plugin CSS-->
	<link href="<?php echo URLROOT; ?>/templates/assets/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

	<!-- Custom styles for this template-->
	<link href="<?php echo URLROOT; ?>/templates/assets/css/sb-admin.css" rel="stylesheet">
	<link href="<?php echo URLROOT; ?>/templates/assets/css/style.css" rel="stylesheet">

</head>

<body id="page-top">
  <?php require 'navbar.php'; ?>

		<div id="content-wrapper">
			<div class="container-fluid">

			<?php if (isset($_SESSION['user_id'])) : ?>

			<?php else : ?>
				<div class="row">
					<div class="col-md-6 mx-auto">
						<?php displayMessage(); ?>
					</div>
				</div>
			<?php endif; ?>

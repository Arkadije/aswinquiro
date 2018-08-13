<?php require 'includes/header.php';?>

<div class="row">
		<div class="col-md-6 mx-auto">
			<dvi class="card card-body bg-light ">
				<h2>Registracija korisnika</h2>

				<form action="<?php echo URLROOT; ?>/register.php" method="post">
					<div class="form-group">
						<label for="userName">Korisničko Ime: <sup>*</sup></label>
						<input type="text" name="userName" class="form-control form-control-lg" value="">
						<span class="invalid-feedback"></span>
					</div>
					<div class="form-group">
						<label for="name">Ime i Prezime korisnika: <sup>*</sup></label>
						<input type="text" name="name" class="form-control form-control-lg " value="">
						<span class="invalid-feedback"></span>
					</div>
					<div class="form-group">
						<label for="email">Email: <sup>*</sup></label>
						<input type="email" name="email" class="form-control form-control-lg " value="">
						<span class="invalid-feedback"></span>
					</div>
					<div class="form-group">
						<label for="password">Lozinka: <sup>*</sup></label>
						<input type="password" name="password" class="form-control form-control-lg " value="">
						<span class="invalid-feedback"></span>
					</div>
					<div class="form-group">
						<label for="confirmPassword">Provera Lozinke: <sup>*</sup></label>
						<input type="password" name="confirmPassword" class="form-control form-control-lg " value="">
						<span class="invalid-feedback"></span>
					</div>
					<div class="form-group">
						<label for="userType">Tip korisnika: <sup>*</sup></label>
						<select name="userType" class="form-control form-control-lg " value="">
							<option value="" selected>Izaberite ...</option>
							<option value="usr">Korisnik</option>
							<option value="adm">Administrator</option>
						</select>
						<span class="invalid-feedback"></span>
					</div>

					<div class="row">
						<div class="col">
							<input name="register" type="submit" value="Register" class="btn btn-outline-secondary btn-block">
						</div>
						<div class="col">
							<a href="<?php echo URLROOT; ?>/login.php"	class="btn btn-light btn-block">Imaš nalog? Uloguj se</a>
						</div>
					</div>
				</form>
			</dvi>
		</div>
	</div>


<?php require 'includes/footer.php'; ?>
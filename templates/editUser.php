<?php require 'includes/header.php'; ?>
<div class="row">
	<div class="col-md-6 mx-auto">
		<?php displayMessage(); ?>
	</div>
</div>
<div class="row">
		<div class="col-md-6 mx-auto">
			<dvi class="card card-body bg-light">
				<h2>Promena lozinke</h2>
				<p>Molim vas popunite sva polja</p>
				<form action="<?php echo URLROOT; ?>/editUser.php" method="post">
					<div class="form-group">
						<label for="oldPassword">Stara Lozinka: <sup>*</sup></label>
						<input type="password" name="oldPassword" class="form-control form-control-lg" value="">
					</div>
					<div class="form-group">
						<label for="password">Nova Lozinka: <sup>*</sup></label>
						<input type="password" name="password" class="form-control form-control-lg" value="">
					</div>
					<div class="form-group">
						<label for="confirmPassword">Verifikacija Nove Lozinke: <sup>*</sup></label>
						<input type="password" name="confirmPassword" class="form-control form-control-lg " value="">
					</div>

					<div class="row">
						<div class="col">
							<input name="changePassword" type="submit" value="Potvrda" class="btn btn-outline-success btn-block">
						</div>
						<div class="col">
							<a href="<?php echo URLROOT; ?>/index.php"	class="btn btn-outline-secondary btn-block">Odustani</a>
						</div>
					</div>
				</form>
			</dvi>
		</div>
	</div>

<?php require 'includes/footer.php'; ?>
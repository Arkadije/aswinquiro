<?php require 'includes/header.php'; ?>

<div class="row">
		<div class="col-md-6 mx-auto">
			<dvi class="card card-body bg-light">
				<h2>Prijava na sistem</h2>
				<p>Molimo vas da unesete vase podatke</p>
				<form action="<?php echo URLROOT; ?>/login.php" method="post">
					<div class="form-group">
						<label for="userName">Korisničko Ime: <sup>*</sup></label>
						<input type="text" name="userName" class="form-control form-control-lg" value="">
					</div>
					<div class="form-group">
						<label for="password">Lozinka: <sup>*</sup></label>
						<input type="password" name="password" class="form-control form-control-lg " value="">
					</div>
					<div class="row">
						<div class="col">
							<input name="do_login" type="submit" value="Prijava" class="btn btn-outline-secondary btn-block">
					</div>
					</div>
				</form>
			</dvi>
		</div>
	</div>

<?php require 'includes/footer.php'; ?>

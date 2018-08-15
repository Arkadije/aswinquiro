<?php require 'includes/header.php'; ?>

<div class="row">
	<div class="col-md-6 mx-auto">
		<?php displayMessage(); ?>
	</div>
</div>
<div class="row">
		<div class="col-md-6 mx-auto">
			<dvi class="card card-body bg-light">
				<h2>Nova kompanija</h2>
				<p>Molimo vas da unesete naziv nove kopanije. Ovaj naziv će te koristiti za pretragu</p>
				<form action="<?php echo URLROOT; ?>/addCompany.php" method="post">
					<div class="form-group">
						<label for="userName">Naziv kompanije: <sup>*</sup></label>
						<input type="text" name="newCompany" class="form-control form-control-lg" autocomplete="off">
					</div>
					<div class="row">
						<div class="col">
							<input name="addCompany" type="submit" value="Potvrdi" class="btn btn-outline-success btn-block">
						</div>
						<div class="col">
							<a href="<?php echo URLROOT; ?>/index.php"	class="btn btn-outline-secondary btn-block">Nazad</a>
						</div>
					</div>
				</form>
			</dvi>
		</div>
	</div>

<?php require 'includes/footer.php'; ?>

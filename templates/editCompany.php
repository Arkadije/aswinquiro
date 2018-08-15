<?php require 'includes/header.php'; ?>
<?php
	$companyName = $_SESSION['company_name'];
	$companyId = $_SESSION['company_id'];
?>
<div class="row">
	<div class="col-md-6 mx-auto">
		<?php displayMessage(); ?>
	</div>
</div>
<div class="row">
		<div class="col-md-6 mx-auto">
			<dvi class="card card-body bg-light">
			<h2 class="text-muted">Izmena kompanije</h2>
				<p>Unesite novi naziv kompanije koji će te koristiti za pretragu, ili obrišite kompaniju.</p>
				<?php if ((isset($_SESSION['user_id'])) && (($_SESSION['user_type']) == 'adm')) : ?>
				<p class="text-danger font-italic" ><strong class="text-muted"> NAPOMENA:</strong> Brisanje kompanije uklanja kompaniju iz baze.</p>
				<?php else : ?>
				<?php endif; ?>
				<form action="<?php echo URLROOT; ?>/editCompany.php" method="post">

					<div class="form-group">
						<label for="userName">Naziv kompanije: <sup>*</sup></label>
						<input type="text" name="companyName" class="form-control form-control-lg" autocomplete="off" value="<?php echo $companyName; ?>">
						<input type="hidden" name="companyId" class="form-control form-control-lg" autocomplete="off" value="<?php echo $companyId; ?>">
					</div>
					<div class="row">
						<?php if ((isset($_SESSION['user_id'])) && (($_SESSION['user_type']) == 'adm')) : ?>
							<div class="col">
								<input name="editCompany" type="submit" value="Potvrdi" class="btn btn-outline-success btn-block">
							</div>
							<div class="col">
								<a href="<?php echo URLROOT; ?>/company.php"	class="btn btn-outline-secondary btn-block">Nazad</a>
							</div>
							<div class="col">
								<input name="deleteCompany" type="submit" value="Brisanje"	class="btn btn-outline-danger btn-block">
							</div>
						<?php else : ?>
							<div class="col">
								<input name="editCompany" type="submit" value="Potvrdi" class="btn btn-outline-success btn-block">
							</div>
							<div class="col">
								<a href="<?php echo URLROOT; ?>/company.php"	class="btn btn-outline-secondary btn-block">Nazad</a>
							</div>
						<?php endif; ?>
					</div>
				</form>
			</dvi>
		</div>
	</div>

<?php require 'includes/footer.php'; ?>

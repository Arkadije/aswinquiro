<?php require 'includes/header.php'; ?>

<div class="row">
	<div class="col-md-6 mx-auto">
		<?php displayMessage(); ?>
	</div>
</div>
<div class="row">
		<div class="col-md-6 mx-auto">
			<dvi class="card card-body bg-light">
				<h4 class="text-muted" >Novi Transfer/ERP link</h4>
				<p>Kompanija za koju dodajemo lik je <strong class="text-uppercase font-weight-bold text-body" ><?php echo $_SESSION['company_name'] ?></strong></p>
				<form action="<?php echo URLROOT; ?>/addTransfer.php" method="post">
					<div class="form-group">
						<label for="linkName">Naziv linka: <sup>*</sup></label>
						<input type="text" name="linkName" class="form-control form-control-lg" autocomplete="off">
					</div>
					<div class="form-group">
						<label for="link">Link Adresa: <sup>*</sup></label>
						<input type="text" name="link" class="form-control form-control-lg" autocomplete="off">
					</div>
					<div class="form-group">
						<label for="linkType">Tip korisnika: <sup>*</sup></label>
						<select name="linkType" class="form-control form-control-lg">
							<option value="" selected>Izaberite tip linka...</option>
							<option value="tra">Transfer</option>
							<option value="erp">ERP</option>
						</select>
						<span class="invalid-feedback"></span>
					</div>
					<div class="row">
						<div class="col">
							<input name="addTransfer" type="submit" value="Potvrdi" class="btn btn-outline-success btn-block">
						</div>
						<div class="col">
							<a href="<?php echo URLROOT; ?>/company.php"	class="btn btn-outline-secondary btn-block">Nazad</a>
						</div>
					</div>
				</form>
			</dvi>
		</div>
	</div>

<?php require 'includes/footer.php'; ?>

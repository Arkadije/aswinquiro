<?php require 'includes/header.php'; ?>

<div class="row">
	<div class="col-md-6 mx-auto">
		<?php displayMessage(); ?>
	</div>
</div>
<div class="row">
		<div class="col-md-6 mx-auto">
			<dvi class="card card-body bg-light">
				<h4 class="text-muted" >Noa TNS Konekcija</h4>
				<p>Kompanija za koju dodajemo TNS konekciju je <strong class="text-uppercase font-weight-bold text-body" ><?php echo $_SESSION['company_name'] ?></strong></p>
				<form action="<?php echo URLROOT; ?>/addTNS.php" method="post">
					<div class="form-group">
						<label for="server">Naziv Servera: <sup>*</sup></label>
						<input type="text" name="server" class="form-control form-control-lg" autocomplete="off">
					</div>
					<div class="form-group">
						<label for="houstName">Host: <sup>*</sup></label>
						<input type="text" name="houstName" class="form-control form-control-lg" autocomplete="off">
					</div>
					<div class="form-group">
						<label for="serviceName">Service Name: <sup>*</sup></label>
						<input type="text" name="serviceName" class="form-control form-control-lg" autocomplete="off">
					</div>
					<div class="form-group">
						<label for="userName">Korisničko Ime: <sup>*</sup></label>
						<input type="text" name="userName" class="form-control form-control-lg" autocomplete="off">
					</div>
					<div class="form-group">
						<label for="password">Lozinka: <sup>*</sup></label>
						<input type="text" name="password" class="form-control form-control-lg" autocomplete="off">
					</div>
					<div class="row">
						<div class="col">
							<input name="addTNS" type="submit" value="Potvrdi" class="btn btn-outline-success btn-block">
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

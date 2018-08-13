<?php require 'includes/header.php'; ?>

<div class="row">
	<div class="col-md-6 mx-auto">
		<?php displayMessage(); ?>
	</div>
</div>
<div class="row">
		<div class="col-md-6 mx-auto">
			<dvi class="card card-body bg-light">
				<h4 class="text-muted" >Novi korisnički podaci</h4>
				<p>Kompanija za koju dodajemo korisniče podatke je <strong class="text-uppercase font-weight-bold text-body" ><?php echo $_SESSION['company_name'] ?></strong></p>
				<form action="<?php echo URLROOT; ?>/addUserData.php" method="post">
					<div class="form-group">
						<label for="userType">Tip podatka: <sup>*</sup></label>
						<select name="userType" id="dataTypeSelector" class="form-control form-control-lg">
							<option value="" selected>Izaberite tip ...</option>
							<option value="cent">Centrala</option>
							<option value="prod">Prodavnica</option>
							<option value="ipad">Ipadrese cent. servera</option>
							<option value="tran">Transponder</option>
							<option value="erpa">ERP Administrator</option>
						</select>
					</div>
					<div class="form-group">
						<label for="userName" id="changeUserLabel" >Korisnicko Ime: *</label>
						<input type="text" name="userName" class="form-control form-control-lg" autocomplete="off">
					</div>
					<div class="form-group">
						<label for="password" id="changePasswordLabel">Lozinka: *</label>
						<input type="text" name="password" class="form-control form-control-lg" autocomplete="off">
					</div>
					<div class="form-group">
						<label for="ipAddress" id="changeIPLabel" >Lozinka Test: *</label>
						<input type="text" name="ipAddress" id="ipHide" style="visibility:visible" class="form-control form-control-lg" autocomplete="off">
					</div>
					<div class="row">
						<div class="col">
							<input name="addUserData" type="submit" value="Potvrdi" class="btn btn-outline-success btn-block">
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

<?php require 'includes/header.php'; ?>


<div class="row">
	<div class="col-md-9">
		<div class="card card-body bg-light">
			<h2>Administracija korisnika</h2>
			<hr>
			<form>
				<div class="form-row">
					<div class="form-group col-md-2">
						<label for="">Korisničko Ime:</label>
					</div>
					<div class="form-group col-md-2">
						<label for="">Naziv:</label>
					</div>
					<div class="form-group col-md-2">
						<label for="">Email:</label>
					</div>
					<div class="form-group col-md-2">
						<label for="">Lozinka:</label>
					</div>
					<div class="form-group col-md-2">
						<label for="">Tip Korisnika:</label>
					</div>
				</div>
			</form>
			<?php if ($adminUsers) : ?>
				<?php foreach ($adminUsers as $adminUser) : ?>
					<form action="<?php echo URLROOT; ?>/userAdmin.php" method="post">
						<div class="form-row">
							<div class="form-group col-md-2">
								<input type="text" class="form-control" name="adminUserName" value="<?php echo $adminUser->user_name; ?>">
							</div>
							<div class="form-group col-md-2">
								<input type="text" class="form-control" name="adminName" value="<?php echo $adminUser->name; ?>">
							</div>
							<div class="form-group col-md-2">
								<input type="text" class="form-control" name="adminEmail" value="<?php echo $adminUser->email; ?>">
							</div>
							<div class="form-group col-md-2">
								<input type="password" class="form-control" name="adminPassword" value="">
							</div>
							<div class="form-group col-md-2">
								<select name="adminType" class="form-control">
									<option value="adm" <?php if ($adminUser->type == 'adm') {echo 'selected';} ?>>Administraotr</option>
									<option value="usr" <?php if ($adminUser->type == 'usr') {	echo 'selected';} ?>>Korisnik</option>
								</select>
								<span class="invalid-feedback"></span>
							</div>
							<div class="form-group col-md-1">
								<input name="editUser<?php echo $adminUser->id; ?>" type="submit" value="Izmena"	class="btn btn-outline-success btn-block" >
								<input type="hidden" id="btnInfo" >
							</div>
							<div class="form-group col-md-1">
								<input name="deleteUser<?php echo $adminUser->id; ?>" type="submit" value="Brisanje"	class="btn btn-outline-danger btn-block">
							</div>
						</div>
					</form>
				<?php endforeach; ?>
				<div class="row">
					<div class="col">
						<a href="<?php echo URLROOT; ?>/index.php"	class="btn btn-outline-secondary btn-block">Nazad</a>
					</div>
				</div>
			<?php endif; ?>
		</div>
	</div>
	<div class="col-md-3">
			<h5 class="text-center text-muted ">Sistemske Poruke</h5>
			<div class="text-center">
				<?php displayMessage(); ?>
			</div>
			<hr>
		</div>
</div>


<?php require 'includes/footer.php'; ?>
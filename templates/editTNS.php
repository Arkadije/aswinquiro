<?php require 'includes/header.php'; ?>


<div class="row">
	<div class="col-md-9">
		<div class="card card-body bg-light">
			<h2>Izmena TNS konekcije</h2>
			<p>Kompanija za koju menjate TNS konekciju je <strong class="text-uppercase font-weight-bold text-body" ><?php echo $_SESSION['company_name'] ?></strong></p>
			<hr>
			<form>
				<div class="form-row">
					<div class="form-group col-md-2">
						<label for="">Naziv TNS Konekcije:</label>
					</div>
					<div class="form-group col-md-2">
						<label for="">Naziv Servera:</label>
					</div>
					<div class="form-group col-md-2">
						<label for="">Service Name:</label>
					</div>
					<div class="form-group col-md-2">
						<label for="">Korisničko Ime:</label>
					</div>
					<div class="form-group col-md-2">
						<label for="">Lozinka:</label>
					</div>
				</div>
			</form>
			<?php if ($tnsNames) : ?>
				<?php foreach ($tnsNames as $tnsName) : ?>
					<form action="<?php echo URLROOT; ?>/editTNS.php" method="post">
						<div class="form-row">
							<div class="form-group col-md-2">
								<input type="text" class="form-control" name="tnsServer" value="<?php echo $tnsName->server; ?>">
							</div>
							<div class="form-group col-md-2">
								<input type="text" class="form-control" name="tnsHoustName" value="<?php echo $tnsName->houst_name; ?>">
							</div>
							<div class="form-group col-md-2">
								<input type="text" class="form-control" name="tnsServiceName" value="<?php echo $tnsName->service_name; ?>">
							</div>
							<div class="form-group col-md-2">
								<input type="text" class="form-control" name="tnsUserName" value="<?php echo $tnsName->user_name; ?>">
							</div>
							<div class="form-group col-md-2">
								<input type="text" class="form-control" name="tnsPassword" value="<?php echo $tnsName->password; ?>">
							</div>
							<div class="form-group col-md-1">
								<input name="editTns<?php echo $tnsName->id; ?>" type="submit" value="Izmena"	class="btn btn-outline-success btn-block" >
								<input type="hidden" id="btnInfo" >
							</div>
							<div class="form-group col-md-1">
								<input name="deleteTns<?php echo $tnsName->id; ?>" type="submit" value="Brisanje"	class="btn btn-outline-danger btn-block">
							</div>
						</div>
					</form>
				<?php endforeach; ?>
			<?php endif; ?>
			<div class="row">
				<div class="col">
					<a href="<?php echo URLROOT; ?>/company.php"	class="btn btn-outline-secondary btn-block">Nazad</a>
				</div>
			</div>
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
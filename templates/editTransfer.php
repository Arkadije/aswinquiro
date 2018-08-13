<?php require 'includes/header.php'; ?>


<div class="row">
	<div class="col-md-9">
		<div class="card card-body bg-light">
			<h2>Izmena Transfer /  ERP linkova</h2>
			<p>Kompanija za koju menjate lik je <strong class="text-uppercase font-weight-bold text-body" ><?php echo $_SESSION['company_name'] ?></strong></p>
			<hr>
			<form>
				<div class="form-row">
					<div class="form-group col-md-2">
						<label for="">Naziv linka:</label>
					</div>
					<div class="form-group col-md-6">
						<label for="">Link Adresa:</label>
					</div>
					<div class="form-group col-md-2">
						<label for="">Tip Linka:</label>
					</div>
				</div>
			</form>
			<?php if ($urls) : ?>
				<?php foreach ($urls as $url) : ?>
					<form action="<?php echo URLROOT; ?>/editTransfer.php" method="post">
						<div class="form-row">
							<div class="form-group col-md-2">
								<input type="text" class="form-control" name="linkName" value="<?php echo $url->name; ?>">
							</div>
							<div class="form-group col-md-6">
								<input type="text" class="form-control" name="linkLink" value="<?php echo $url->link; ?>">
							</div>
							<div class="form-group col-md-2">
								<select name="linkType" class="form-control">
									<option value="tra" <?php if ($url->type == 'tra') { echo 'selected';} ?>>Transfer</option>
									<option value="erp" <?php if ($url->type == 'erp') {echo 'selected';} ?>>ERP</option>
								</select>
								<span class="invalid-feedback"></span>
							</div>
							<div class="form-group col-md-1">
								<input name="editLink<?php echo $url->id; ?>" type="submit" value="Izmena"	class="btn btn-outline-success btn-block" >
								<input type="hidden" id="btnInfo" >
							</div>
							<div class="form-group col-md-1">
								<input name="deleteLink<?php echo $url->id; ?>" type="submit" value="Brisanje"	class="btn btn-outline-danger btn-block">
							</div>
						</div>
					</form>
				<?php endforeach; ?>
				<div class="row">
					<div class="col">
						<a href="<?php echo URLROOT; ?>/company.php"	class="btn btn-outline-secondary btn-block">Nazad</a>
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
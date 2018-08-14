<?php require 'includes/header.php'; ?>


<div class="row">
	<div class="col-md-9">
		<div class="card card-body bg-light">
			<h2>Izmena dodatnih informacija</h2>
			<p>Kompanija za koju menjate podatke je <strong class="text-uppercase font-weight-bold text-body" ><?php echo $_SESSION['company_name'] ?></strong></p>
			<hr>
			<form>
				<div class="form-row">
					<div class="form-group col-md-2">
						<label for="">Naziv linka:</label>
					</div>
					<div class="form-group col-md-7">
						<label for="">Link Adresa:</label>
					</div>
					<div class="form-group col-md-1">
						<label for="">Grupa:</label>
					</div>
				</div>
			</form>
			<?php if ($additionalData) : ?>
				<?php foreach ($additionalData as $additionalItem) : ?>
					<form action="<?php echo URLROOT; ?>/editAdditionalData.php" method="post">
						<div class="form-row">
							<div class="form-group col-md-2">
								<input type="text" class="form-control" name="dataName" value="<?php echo $additionalItem->name; ?>">
							</div>
							<div class="form-group col-md-7">
								<input type="text" class="form-control" name="dataLink" value="<?php echo $additionalItem->link; ?>">
							</div>
							<div class="form-group col-md-1">
								<select name="dataType" class="form-control">
									<option value="erp" <?php if ($additionalItem->type == 'erp') {echo 'selected';} ?>>ERP</option>
									<option value="mlp" <?php if ($additionalItem->type == 'mlp') {echo 'selected';} ?>>MLP</option>
								</select>
								<span class="invalid-feedback"></span>
							</div>
							<div class="form-group col-md-1">
								<input name="editData<?php echo $additionalItem->id; ?>" type="submit" value="Izmena"	class="btn btn-outline-success btn-block" >
								<input type="hidden" id="btnInfo" >
							</div>
							<div class="form-group col-md-1">
								<input name="deleteData<?php echo $additionalItem->id; ?>" type="submit" value="Brisanje"	class="btn btn-outline-danger btn-block">
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
<?php require 'includes/header.php'; ?>


	<?php if (isset($_SESSION['user_id'])) : ?>
		<div class="row">
			<div class="col-md-9 ">
				<div class="row">
					<div class="col-md-10">
						<h3 class="">Dodajte novu kopaniju</h3>
					</div>
					<div class="col-md-2">
						<a href="<?php echo URLROOT; ?>/addCompany.php" class="btn btn-outline-secondary float-right ">
							<i class="fas fa-plus"></i>
						</a>
					</div>
				</div>
				<hr>
			</div>
			<div class="col-md-3">
				<h5 class="text-center text-muted ">Sistemske Poruke</h5>
				<div class="text-center">
					<?php displayMessage(); ?>
				</div>
				<hr>
			</div>
		</div>
	<?php else : ?>
		<div class="row">
			<div class="col mt-5 pt-5">
				<h3 class="text-center text-muted">Trenutno niste prijavljeni</h3>
				<h5 class="text-center text-muted mt-5">Kako bi koristili sistem neophodno je da se prijavite.</h5>
			</div>
		</div>
	<?php endif; ?>



<?php require 'includes/footer.php'; ?>

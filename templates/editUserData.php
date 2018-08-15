<?php require 'includes/header.php'; ?>


<div class="row">
	<div class="col-md-9">
		<div class="card card-body bg-light">
			<h2>Izmena Pristupnih informacija</h2>
			<p>Kompanija za koju menjate podatke je <strong class="text-uppercase font-weight-bold text-body" ><?php echo $_SESSION['company_name'] ?></strong></p>
			<hr>
				<form>
					<div class="form-row">
						<div class="form-group col">
							<h4>Centrala</h4>
						</div>
					</div>
				</form>
				<form>
					<div class="form-row">
						<div class="form-group col-md-4">
							<label for="">Korisničko Ime:</label>
						</div>
						<div class="form-group col-md-4">
							<label for="">Lozinka:</label>
						</div>
						<div class="form-group col-md-2">
							<label for="">Lozinka Test:</label>
						</div>
					</div>
				</form>
				<?php if ($centralUsers) : ?>
					<?php foreach ($centralUsers as $centUser) : ?>
						<form action="<?php echo URLROOT; ?>/editUserData.php" method="post">
							<div class="form-row">
								<div class="form-group col-md-4">
									<input type="text" class="form-control" name="userName" value="<?php echo $centUser->user_name; ?>">
								</div>
								<div class="form-group col-md-4">
									<input type="text" class="form-control" name="userPassword" value="<?php echo $centUser->user_password; ?>">
								</div>
								<div class="form-group col-md-2">
									<input type="text" class="form-control" name="userTestPassword" value="<?php echo $centUser->user_test_password; ?>">
								</div>
								<div class="form-group col-md-1">
									<input name="editData<?php echo $centUser->id; ?>" type="submit" value="Izmena"	class="btn btn-outline-success btn-block" >
									<input type="hidden" id="btnInfo" >
								</div>
								<div class="form-group col-md-1">
									<input name="deleteData<?php echo $centUser->id; ?>" type="submit" value="Brisanje"	class="btn btn-outline-danger btn-block">
								</div>
							</div>
						</form>
					<?php endforeach; ?>
				<?php endif; ?>
				<hr>
				<form>
					<div class="form-row">
						<div class="form-group col">
							<h4>Prodavnica</h4>
						</div>
					</div>
				</form>
				<form>
					<div class="form-row">
						<div class="form-group col-md-4">
							<label for="">Korisničko Ime:</label>
						</div>
						<div class="form-group col-md-4">
							<label for="">Lozinka:</label>
						</div>
						<div class="form-group col-md-2">
							<label for="">Lozinka Test:</label>
						</div>
					</div>
				</form>
				<?php if ($retailUsers) : ?>
					<?php foreach ($retailUsers as $retailUser) : ?>
						<form action="<?php echo URLROOT; ?>/editUserData.php" method="post">
							<div class="form-row">
								<div class="form-group col-md-4">
									<input type="text" class="form-control" name="userName" value="<?php echo $retailUser->user_name; ?>">
								</div>
								<div class="form-group col-md-4">
									<input type="text" class="form-control" name="userPassword" value="<?php echo $retailUser->user_password; ?>">
								</div>
								<div class="form-group col-md-2">
									<input type="text" class="form-control" name="userTestPassword" value="<?php echo $retailUser->user_test_password; ?>">
								</div>
								<div class="form-group col-md-1">
									<input name="editData<?php echo $retailUser->id; ?>" type="submit" value="Izmena"	class="btn btn-outline-success btn-block" >
									<input type="hidden" id="btnInfo" >
								</div>
								<div class="form-group col-md-1">
									<input name="deleteData<?php echo $retailUser->id; ?>" type="submit" value="Brisanje"	class="btn btn-outline-danger btn-block">
								</div>
							</div>
						</form>
					<?php endforeach; ?>
				<?php endif; ?>
				<hr>
				<form>
					<div class="form-row">
						<div class="form-group col">
							<h4>Ip adrese centralnih servera</h4>
						</div>
					</div>
				</form>
				<form>
					<div class="form-row">
						<div class="form-group col-md-4">
							<label for="">Tip Računara:</label>
						</div>
						<div class="form-group col-md-4">
							<label for="">Ime servera:</label>
						</div>
						<div class="form-group col-md-2">
							<label for="">IP Adresa:</label>
						</div>
					</div>
				</form>
				<?php if ($ipAddress) : ?>
					<?php foreach ($ipAddress as $ipA) : ?>
						<form action="<?php echo URLROOT; ?>/editUserData.php" method="post">
							<div class="form-row">
								<div class="form-group col-md-4">
									<input type="text" class="form-control" name="userName" value="<?php echo $ipA->user_name; ?>">
								</div>
								<div class="form-group col-md-4">
									<input type="text" class="form-control" name="userPassword" value="<?php echo $ipA->user_password; ?>">
								</div>
								<div class="form-group col-md-2">
									<input type="text" class="form-control" name="userTestPassword" value="<?php echo $ipA->user_test_password; ?>">
								</div>
								<div class="form-group col-md-1">
									<input name="editData<?php echo $ipA->id; ?>" type="submit" value="Izmena"	class="btn btn-outline-success btn-block" >
									<input type="hidden" id="btnInfo" >
								</div>
								<div class="form-group col-md-1">
									<input name="deleteData<?php echo $ipA->id; ?>" type="submit" value="Brisanje"	class="btn btn-outline-danger btn-block">
								</div>
							</div>
						</form>
					<?php endforeach; ?>
				<?php endif; ?>
				<hr>
				<div class="form-row">
				<div class="form-group col-6">
					<form>
						<div class="form-row">
							<div class="form-group col">
								<h4>Transponder</h4>
							</div>
						</div>
					</form>
					<form>
						<div class="form-row">
							<div class="form-group col-md-4">
								<label for="">Naziv Transpondera:</label>
							</div>
							<div class="form-group col-md-4">
								<label for="">IP Adresa:</label>
							</div>
						</div>
					</form>
					<?php if ($transponder) : ?>
						<?php foreach ($transponder as $trans) : ?>
							<form action="<?php echo URLROOT; ?>/editUserData.php" method="post">
								<div class="form-row">
									<div class="form-group col-md-4">
										<input type="text" class="form-control" name="userName" value="<?php echo $trans->user_name; ?>">
									</div>
									<div class="form-group col-md-4">
										<input type="text" class="form-control" name="userPassword" value="<?php echo $trans->user_password; ?>">
										<input type="hidden" class="form-control" name="userTestPassword" value="">
									</div>
									<div class="form-group col-md-2">
										<input name="editData<?php echo $trans->id; ?>" type="submit" value="Izmena"	class="btn btn-outline-success btn-block" >
										<input type="hidden" id="btnInfo" >
									</div>
									<div class="form-group col-md-2">
										<input name="deleteData<?php echo $trans->id; ?>" type="submit" value="Brisanje"	class="btn btn-outline-danger btn-block">
									</div>
								</div>
							</form>
						<?php endforeach; ?>
						<?php endif; ?>
					</div>
					<div class="form-group col-6">
						<form>
						<div class="form-row">
							<div class="form-group col">
								<h4>ERP Administrator</h4>
							</div>
						</div>
					</form>
					<form>
						<div class="form-row">
							<div class="form-group col-md-4">
								<label for="">Korisničko Ime:</label>
							</div>
							<div class="form-group col-md-4">
								<label for="">Lozinka:</label>
							</div>
						</div>
					</form>
					<?php if ($erpUsers) : ?>
						<?php foreach ($erpUsers as $erpUser) : ?>
							<form action="<?php echo URLROOT; ?>/editUserData.php" method="post">
								<div class="form-row">
									<div class="form-group col-md-4">
										<input type="text" class="form-control" name="userName" value="<?php echo $erpUser->user_name; ?>">
									</div>
									<div class="form-group col-md-4">
										<input type="text" class="form-control" name="userPassword" value="<?php echo $erpUser->user_password; ?>">
										<input type="hidden" class="form-control" name="userTestPassword" value="">
									</div>
									<div class="form-group col-md-2">
										<input name="editData<?php echo $erpUser->id; ?>" type="submit" value="Izmena"	class="btn btn-outline-success btn-block" >
										<input type="hidden" id="btnInfo" >
									</div>
									<div class="form-group col-md-2">
										<input name="deleteData<?php echo $erpUser->id; ?>" type="submit" value="Brisanje"	class="btn btn-outline-danger btn-block">
									</div>
								</div>
							</form>
						<?php endforeach; ?>
						<?php endif; ?>
					</div>
				</div>
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
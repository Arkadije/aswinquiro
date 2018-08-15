<?php require 'includes/header.php'; ?>
<script>
var compId = "<?php echo $data['companyId']; ?>";
</script>

	<div class="row">
		<div class="col-md-9">
			<div class="row">
				<div class="col-sm-8">
					<h3 class="text-uppercase"><?php echo $_SESSION['company_name']; ?></h3>

				</div>
				<div class="col-sm-4">
					<a href="<?php echo URLROOT; ?>/editCompany.php" class="btn btn-outline-secondary float-right ">
						<i class="fas fa-pencil-alt"></i>
					</a>
					<a href="<?php echo URLROOT; ?>/addCompany.php" class="btn btn-outline-secondary float-right mr-3">
						<i class="fas fa-plus"></i>
					</a>
				</div>
			</div>
			<hr>
			<div class="row mb-2">
				<div class="col-sm-8">
					<h4>Transfer / ERP</h4>
				</div>
				<div class="col-sm-4">
					<a href="<?php echo URLROOT; ?>/editTransfer.php" class="btn btn-outline-secondary float-right ">
						<i class="fas fa-pencil-alt"></i>
					</a>
					<a href="<?php echo URLROOT; ?>/addTransfer.php" class="btn btn-outline-secondary float-right mr-3">
						<i class="fas fa-plus"></i>
					</a>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<?php if($traUrls) : ?>
						<div id="link-tra" class="row mb-1">
							<?php foreach ($traUrls as $url) : ?>
								<div class="col">
									<a href="<?php echo $url->link; ?>" class="btn btn-outline-danger btn-block"><?php echo $url->name; ?></a>
								</div>
							<?php endforeach; ?>
						</div>
					<?php else : ?>
					<?php endif; ?>
					<?php if ($erpUrls) : ?>
						<div id="link-tra" class="row mb-1">
							<?php foreach ($erpUrls as $url) : ?>
								<div class="col">
									<a href="<?php echo $url->link; ?>" class="btn btn-outline-danger btn-block"><?php echo $url->name; ?></a>
								</div>
							<?php endforeach; ?>
						</div>
					<?php else : ?>
					<?php endif; ?>
				</div>
			</div>
			<hr>
			<div class="row mb-2">
				<div class="col-sm-8">
					<h4>Pristupne informacije</h4>
				</div>
				<div class="col-sm-4">
					<a href="<?php echo URLROOT; ?>/editUserData.php" class="btn btn-outline-secondary float-right ">
						<i class="fas fa-pencil-alt"></i>
					</a>
					<a href="<?php echo URLROOT; ?>/addUserData.php" class="btn btn-outline-secondary float-right mr-3">
						<i class="fas fa-plus"></i>
					</a>
				</div>
			</div>
			<h4>Centrala</h4>
			<div class="row">
				<div class="col-md-8">
					<table class="table table-condensed table-hover">
						<thead>
							<tr class="table-secondary">
								<th>Korisničko ime</th>
								<th>Lozinka</th>
								<th>Lozinka Test</th>
							</tr>
						</thead>
						<tbody>
							<?php if ($centralUsers) : ?>
								<?php foreach ($centralUsers as $centUser) : ?>
									<tr>
										<td><?php echo $centUser->user_name; ?></td>
										<td><?php echo $centUser->user_password; ?></td>
										<td><?php echo $centUser->user_test_password; ?></td>
									</tr>
								<?php endforeach; ?>
							<?php endif; ?>
						</tbody>
					</table>
				</div>
				<div class="col-md-4">
					<table class="table table-condensed table-hover">
						<thead>
							<tr class="table-secondary">
								<th>ERP Administrator</th>
								<th>&nbsp;</th>
								<th>&nbsp;</th>
							</tr>
						</thead>
						<tbody>
							<?php if ($erpUsers) : ?>
								<?php foreach ($erpUsers as $erpUser) : ?>
									<tr>
										<td><?php echo $erpUser->user_name; ?></td>
										<td><?php echo $erpUser->user_password; ?></td>
									</tr>
								<?php endforeach; ?>
							<?php else : ?>
							<?php endif; ?>
						</tbody>
					</table>
				</div>
			</div>
			<h4>Prodavnica</h4>
			<div class="row">
				<div class="col-md-8">
					<table class="table table-condensed table-hover">
						<thead>
							<tr class="table-secondary">
								<th>Korisničko ime</th>
								<th>Lozinka</th>
								<th>Lozinka Test</th>
							</tr>
						</thead>
						<tbody>
							<?php if ($retailUsers) : ?>
								<?php foreach ($retailUsers as $retailUser) : ?>
									<tr>
										<td><?php echo $retailUser->user_name; ?></td>
										<td><?php echo $retailUser->user_password; ?></td>
										<td><?php echo $retailUser->user_test_password; ?></td>
									</tr>
								<?php endforeach; ?>
							<?php else : ?>
							<?php endif; ?>
						</tbody>
					</table>
				</div>
			</div>
			<h4>Ip adrese centralnih servera</h4>
			<div class="row">
				<div class="col-md-7">
					<table class="table table-condensed table-hover">
						<thead>
							<tr class="table-secondary">
								<th>Tip racunara</th>
								<th>Ime servera</th>
								<th>IP Adresa</th>
							</tr>
						</thead>
						<tbody>
							<?php if ($ipAddress) : ?>
								<?php foreach ($ipAddress as $ipA) : ?>
									<tr>
										<td><?php echo $ipA->user_name; ?></td>
										<td><?php echo $ipA->user_password; ?></td>
										<td><?php echo $ipA->user_test_password; ?></td>
									</tr>
								<?php endforeach; ?>
							<?php else : ?>
							<?php endif; ?>
						</tbody>
					</table>
				</div>
				<div class="col-md-5">
					<table class="table table-condensed table-hover">
						<thead>
							<tr class="table-secondary">
								<th>Transponder</th>
								<th>&nbsp;</th>
							</tr>
						</thead>
						<tbody>
							<?php if ($transponder) : ?>
								<?php foreach ($transponder as $trans) : ?>
									<tr>
										<td><?php echo $trans->user_name; ?></td>
										<td><?php echo $trans->user_password; ?></td>
									</tr>
								<?php endforeach; ?>
							<?php else : ?>
							<?php endif; ?>
						</tbody>
					</table>
				</div>
			</div>
			<hr>
			<div class="row mb-2">
				<div class="col-sm-8">
					<h4>TNS Names</h4>
				</div>
				<div class="col-sm-4">
					<a href="<?php echo URLROOT; ?>/editTNS.php" class="btn btn-outline-secondary float-right ">
						<i class="fas fa-pencil-alt"></i>
					</a>
					<a href="<?php echo URLROOT; ?>/addTNS.php" class="btn btn-outline-secondary float-right mr-3">
						<i class="fas fa-plus"></i>
					</a>
				</div>
			</div>
			<div class="row">
				<div class="col text-aligh-left">
					<div class="row">
						<?php if ($tnsNames) : ?>
							<?php foreach ($tnsNames as $tns) : ?>
								<div class="col text-aligh-left">
									<table class="table table-condensed table-hover">
										<thead>
											<tr class="table-secondary">
												<th><?php echo $tns->server; ?></th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>HOST = <?php echo $tns->houst_name; ?></td>
											</tr>
											<tr>
												<td>SERVICE_NAME = <?php echo $tns->service_name; ?></td>
											</tr>
											<tr>
												<td>Korisnicko ime = <?php echo $tns->user_name; ?></td>
											</tr>
											<tr>
												<td>Lozinka = <?php echo $tns->password; ?></td>
											</tr>
										</tbody>
									</table>
								</div>
							<?php endforeach; ?>
						<?php else : ?>
						<?php endif; ?>
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
			<div class="row mt-2">
				<div class="col-sm-5">
					<h5 class="text-aligh-left text-muted ">Dodatno</h5>
				</div>
				<div class="col-sm-7">
					<a href="<?php echo URLROOT; ?>/editAdditionalData.php" class="btn btn-outline-secondary float-right ">
						<i class="fas fa-pencil-alt"></i>
					</a>
					<a href="<?php echo URLROOT; ?>/addAdditionalData.php" class="btn btn-outline-secondary float-right mr-3">
						<i class="fas fa-plus"></i>
					</a>
				</div>
			</div>
			<hr>
			<h6 class="text-aligh-left text-muted ">ERP dosije</h6>
				<?php if ($additionalDataErp) : ?>
					<?php foreach ($additionalDataErp as $dataErp) : ?>
						<div class="col text-aligh-left">
							<?php echo $dataErp->name; ?> <a href="<?php echo $dataErp->link; ?>"><i class="far fa-folder-open fa-lg" style="color: #dc3545;"></i></i></a>
						</div>
					<?php endforeach; ?>
				<?php else : ?>
				<?php endif; ?>
			<hr>
			<h6 class="text-aligh-left text-muted ">MLP dosije</h6>
				<?php if ($additionalDataMlp) : ?>
					<?php foreach ($additionalDataMlp as $dataMlp) : ?>
						<div class="col text-aligh-left">
							<?php echo $dataMlp->name; ?> <a href="<?php echo $dataMlp->link; ?>"><i class="far fa-folder-open fa-lg" style="color: #dc3545;"></i></a>
						</div>
					<?php endforeach; ?>
				<?php else : ?>
				<?php endif; ?>
		</div>
	</div>


<?php require 'includes/footer.php'; ?>

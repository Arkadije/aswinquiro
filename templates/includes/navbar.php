<?php if ((isset($_SESSION['user_id'])) && (($_SESSION['user_type']) != 'adm')) : ?>
		<nav class="navbar navbar-expand navbar-dark bg-dark static-top">
			<button class="btn btn-link btn-sm text-white order-1 order-sm-0 mr-1" id="sidebarToggle" href="#">
				<i class="fas fa-bars fa-lg" style="color: #dc3545;"></i>
			</button>
			<a class="navbar-brand ml-2" href="<?php echo URLROOT; ?>"><strong><spam class="asw">A</spam>SW<spam class="asw">:</spam></strong> <span class="ml-1">INQUIRO</span></a>
			<!-- Navbar Search -->
			<form action="<?php echo URLROOT; ?>/company.php" method="post" class="d-none d-md-inline-block form-inline ml-2  mr-0 mr-md-3 my-2 my-md-0">
				<div tabindex="0" class="input-group" id="search">
					<input type="text" id="companyInput" class="form-control" placeholder="Pretraga Kompanije" name="searchCompany" autocomplete="off" aria-label="Search" aria-describedby="basic-addon2">
					<div class="input-group-append">
						<button class="btn btn-muted" type="submit" id="name-submit" name="companySerach">
						<i class="fas fa-search" style="color: #dc3545;"></i>
						</button>
					</div>
				</div>
			</form>
			<!-- Navbar -->
			<ul class="navbar-nav float-right ml-auto">
				<li class="nav-item dropdown no-arrow">
					<a class="nav-link dropdown-toggle" href="#" id="linkDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					linkovi  <i class="fas fa-external-link-alt fa-lg" style="color: #dc3545;"></i></a>
					<div class="dropdown-menu dropdown-menu-right" aria-labelledby="linkDropdown">
						<a class="dropdown-item" href="<?php echo URLROOT; ?>/assets/formulari/Templejt_za_dijagnostiku_problema_tip_zahteva_Greska_u_programu.doc">Pravila za prijavu BUG-ova</a>
						<a class="dropdown-item" href="<?php echo URLROOT; ?>/templates/assets/formulari/prijava_bug.xls">Prijava BUG-ova</a>
						<a class="dropdown-item" href="<?php echo URLROOT; ?>/templates/assets/formulari/Nove_funkcionalnosti.doc">Specifikacija novih funkcionalnosti</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="<?php echo URLROOT; ?>/templates/assets/formulari/Transfer_checksumm.txt">Transfer Checksum</a>
						<a class="dropdown-item" href="<?php echo URLROOT; ?>/templates/assets/MLP/formulari/transfer_checksumm_danas.txt">Transfer Checksum Danas</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="<?php echo URLROOT; ?>/templates/assets/SQL/sql/"">Korisni SQL Skriptovi</a>
						<a class="dropdown-item" href="<?php echo URLROOT; ?>/templates/assets/SQL/track/">Track SQL Skriptovi</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="http://lav:8081/alfresco/d/d/workspace/SpacesStore/c780a27e-0744-48e7-9229-edf766262707/%5bPontis%5d-Kompatibilnost%20verzija.ods">Kompatibilnost verzija</a>
						<a class="dropdown-item" href="http://lav:8081/alfresco/d/d/workspace/SpacesStore/aa68206e-55ca-471c-a8cc-731b6ff01f6d/%5bMercantis%5d-Snimanje%20stanja%20-%20Maloprodaja.doc">Snimanje stanja - Maloprodaje</a>
						<a class="dropdown-item" href="http://mamut/wiki/index.php/HD_009:Template_za_podno%C5%A1enje_zahteva_za_novim_izve%C5%A1tajem">Pitanja za spec. novih izvestaja</a>
						<a class="dropdown-item" href="http://portal.asw.eu/doc/sr/mlp/mlprazvoj/mlpostalo/795-specifikacija-podrzanih-printera.html">Podrzani fiskalni uredjaji</a>
					</div>
				</li>
				<li class="nav-item dropdown no-arrow">
					<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<strong><?php echo $_SESSION['user_name']; ?></strong>  <i class="fas fa-sliders-h fa-lg" style="color: #dc3545;"></i>
					</a>
					<div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
						<a class="dropdown-item" href="<?php echo URLROOT; ?>/editUser.php"">Promena Lozinke</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="<?php echo URLROOT; ?>/logout.php">Odjava</a>
					</div>
				</li>
			</ul>
		</nav>
	<?php elseif ((isset($_SESSION['user_id'])) && (($_SESSION['user_type']) == 'adm')) : ?>
		<nav class="navbar navbar-expand navbar-dark bg-dark static-top">
			<button class="btn btn-link btn-sm text-white order-1 order-sm-0 mr-1" id="sidebarToggle" href="#">
				<i class="fas fa-bars fa-lg" style="color: #dc3545;"></i>
			</button>
			<a class="navbar-brand ml-2" href="<?php echo URLROOT; ?>"><strong><spam class="asw">A</spam>SW<spam class="asw">:</spam></strong> <span class="ml-1">INQUIRO</span></a>
			<!-- Navbar Search -->
			<form action="<?php echo URLROOT; ?>/company.php" method="post" class="d-none d-md-inline-block form-inline ml-2  mr-0 mr-md-3 my-2 my-md-0">
				<div class="input-group">
					<input type="text" id="companyInput" class="form-control" placeholder="Pretraga Kompanije" name="searchCompany" autocomplete="off" aria-label="Search" aria-describedby="basic-addon2">
					<div class="input-group-append">
						<button class="btn btn-muted" type="submit" id="name-submit" name="companySerach">
						<i class="fas fa-search" style="color: #dc3545;"></i>
						</button>
					</div>
				</div>
			</form>
			<!-- Navbar -->
			<ul class="navbar-nav float-right ml-auto">
				<li class="nav-item dropdown no-arrow">
					<a class="nav-link dropdown-toggle" href="#" id="linkDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					linkovi  <i class="fas fa-external-link-alt fa-lg" style="color: #dc3545;"></i></a>
					<div class="dropdown-menu dropdown-menu-right" aria-labelledby="linkDropdown">
						<a class="dropdown-item" href="<?php echo URLROOT; ?>/assets/formulari/Templejt_za_dijagnostiku_problema_tip_zahteva_Greska_u_programu.doc">Pravila za prijavu BUG-ova</a>
						<a class="dropdown-item" href="<?php echo URLROOT; ?>/templates/assets/formulari/prijava_bug.xls">Prijava BUG-ova</a>
						<a class="dropdown-item" href="<?php echo URLROOT; ?>/templates/assets/formulari/Nove_funkcionalnosti.doc">Specifikacija novih funkcionalnosti</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="<?php echo URLROOT; ?>/templates/assets/formulari/Transfer_checksumm.txt">Transfer Checksum</a>
						<a class="dropdown-item" href="<?php echo URLROOT; ?>/templates/assets/MLP/formulari/transfer_checksumm_danas.txt">Transfer Checksum Danas</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="<?php echo URLROOT; ?>/templates/assets/SQL/sql/"">Korisni SQL Skriptovi</a>
						<a class="dropdown-item" href="<?php echo URLROOT; ?>/templates/assets/SQL/track/">Track SQL Skriptovi</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="http://lav:8081/alfresco/d/d/workspace/SpacesStore/c780a27e-0744-48e7-9229-edf766262707/%5bPontis%5d-Kompatibilnost%20verzija.ods">Kompatibilnost verzija</a>
						<a class="dropdown-item" href="http://lav:8081/alfresco/d/d/workspace/SpacesStore/aa68206e-55ca-471c-a8cc-731b6ff01f6d/%5bMercantis%5d-Snimanje%20stanja%20-%20Maloprodaja.doc">Snimanje stanja - Maloprodaje</a>
						<a class="dropdown-item" href="http://mamut/wiki/index.php/HD_009:Template_za_podno%C5%A1enje_zahteva_za_novim_izve%C5%A1tajem">Pitanja za spec. novih izvestaja</a>
						<a class="dropdown-item" href="http://portal.asw.eu/doc/sr/mlp/mlprazvoj/mlpostalo/795-specifikacija-podrzanih-printera.html">Podrzani fiskalni uredjaji</a>
					</div>
				</li>
				<li class="nav-item dropdown no-arrow">
					<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<strong><?php echo $_SESSION['user_name']; ?></strong>  <i class="fas fa-sliders-h fa-lg" style="color: #dc3545;"></i>
					</a>
					<div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
						<a class="dropdown-item" href="<?php echo URLROOT; ?>/editUser.php">Promena Lozinke</a>
						<a class="dropdown-item" href="<?php echo URLROOT; ?>/register.php">Dodaj korisnika</a>
						<a class="dropdown-item" href="<?php echo URLROOT; ?>/userAdmin.php">Administracija Korisnika</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="<?php echo URLROOT; ?>/logout.php">Odjava</a>
					</div>
				</li>
			</ul>
		</nav>
	<?php else : ?>
		<nav class="navbar navbar-expand navbar-dark bg-dark static-top">
			<button class="btn btn-link btn-sm text-white order-1 order-sm-0 mr-1" id="sidebarToggle" href="#">
				<i class="fas fa-bars fa-lg" style="color: #dc3545;"></i>
			</button>
			<a class="navbar-brand ml-2" href="<?php echo URLROOT; ?>"><strong><spam class="asw">A</spam>SW<spam class="asw">:</spam></strong> <span class="ml-1">INQUIRO</span></a>

			<!-- Navbar -->
			<ul class="navbar-nav float-right ml-auto">
				<li class="nav-item dropdown no-arrow">
					<a class="nav-link dropdown-toggle" href="#" id="linkDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					linkovi  <i class="fas fa-external-link-alt fa-lg" style="color: #dc3545;"></i></a>
					<div class="dropdown-menu dropdown-menu-right" aria-labelledby="linkDropdown">
						<a class="dropdown-item" href="<?php echo URLROOT; ?>/assets/formulari/Templejt_za_dijagnostiku_problema_tip_zahteva_Greska_u_programu.doc">Pravila za prijavu BUG-ova</a>
						<a class="dropdown-item" href="<?php echo URLROOT; ?>/templates/assets/formulari/prijava_bug.xls">Prijava BUG-ova</a>
						<a class="dropdown-item" href="<?php echo URLROOT; ?>/templates/assets/formulari/Nove_funkcionalnosti.doc">Specifikacija novih funkcionalnosti</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="<?php echo URLROOT; ?>/templates/assets/formulari/Transfer_checksumm.txt">Transfer Checksum</a>
						<a class="dropdown-item" href="<?php echo URLROOT; ?>/templates/assets/MLP/formulari/transfer_checksumm_danas.txt">Transfer Checksum Danas</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="<?php echo URLROOT; ?>/templates/assets/SQL/sql/"">Korisni SQL Skriptovi</a>
						<a class="dropdown-item" href="<?php echo URLROOT; ?>/templates/assets/SQL/track/">Track SQL Skriptovi</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="http://lav:8081/alfresco/d/d/workspace/SpacesStore/c780a27e-0744-48e7-9229-edf766262707/%5bPontis%5d-Kompatibilnost%20verzija.ods">Kompatibilnost verzija</a>
						<a class="dropdown-item" href="http://lav:8081/alfresco/d/d/workspace/SpacesStore/aa68206e-55ca-471c-a8cc-731b6ff01f6d/%5bMercantis%5d-Snimanje%20stanja%20-%20Maloprodaja.doc">Snimanje stanja - Maloprodaje</a>
						<a class="dropdown-item" href="http://mamut/wiki/index.php/HD_009:Template_za_podno%C5%A1enje_zahteva_za_novim_izve%C5%A1tajem">Pitanja za spec. novih izvestaja</a>
						<a class="dropdown-item" href="http://portal.asw.eu/doc/sr/mlp/mlprazvoj/mlpostalo/795-specifikacija-podrzanih-printera.html">Podrzani fiskalni uredjaji</a>
					</div>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="login.php"><span>Prijava </span><i class="fas fa-sign-in-alt fa-lg" style="color: #dc3545;"></i></a>
				</li>
			</ul>
		</nav>
	<?php endif; ?>

    </nav>

    <div id="wrapper">
			<!-- Sidebar -->
			<ul class="sidebar navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="https://portal.asw.eu/servis/"><i class="fa fa-wrench" style="color: #dc3545;"></i><span> Servis</span></a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="fa fa-book" style="color: #dc3545;"></i>
						<span> Doc's</span>
					</a>
					<div class="dropdown-menu" aria-labelledby="pagesDropdown">
						<a class="dropdown-item" href="http://portal.asw.eu/doc/">Doc MLP</a>
						<a class="dropdown-item" href="http://portal.asw.eu/doc/j16/">Doc ERP</a>
						<a class="dropdown-item" href="http://trex:8990/doc/instalacija/uvod.html">Doc Transfer</a>
					</div>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="http://lav:8081/alfresco/""><i class="fa fa-archive" style="color: #dc3545;"></i><span> Alfresco</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="charts.html"><i class="fab fa-wikipedia-w" style="color: #dc3545;"></i><span> Wiki</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="http://mamut/nagios.html"><i class="fa fa-stethoscope" style="color: #dc3545;"></i><span> Nagios</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="http://mamut/bugzilla/"><i class="fa fa-bug" style="color: #dc3545;"></i><span> Bugzilla</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="charts.html"><i class="fa fa-globe" style="color: #dc3545;"></i><span> Portal</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="http://mamut/testlnk/"><i class="fa fa-link" style="color: #dc3545;"></i><span> Test Link</span></a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="fas fa-chart-pie" style="color: #dc3545;"></i>
						<span> Business Intelligence</span>
					</a>
					<div class="dropdown-menu" aria-labelledby="pagesDropdown">
						<a class="dropdown-item" href="">MicroStrategy</a>
						<a class="dropdown-item" href="">Pentaho</a>
						<a class="dropdown-item" href="">Tableau</a>
					</div>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="http://portal.asw.eu/doc/sr/mlp/dosije/525-dodatno.html"><i class="far fa-copy" style="color: #dc3545;"></i><span> Dosije</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="http://www.asw.eu/webmail/"><i class="fa fa-envelope" style="color: #dc3545;"></i><span> Web-Mail</span></a>
				</li>
			</ul>

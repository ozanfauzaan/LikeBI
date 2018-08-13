<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">

</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-dark bg-primary rounded">
		<div class="container">
			<a class="navbar-brand" href="<?php echo base_url();?>">
				<img src="<?php echo base_url('assets/icon.png'); ?>" width="30" height="30" class="d-inline-block align-top" alt="">
			LIKE-BI</a>
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a href="<?php echo base_url(); ?>index.php/Provinsi"  class="nav-link <?php if($this->uri->segment(1)=="Provinsi"){echo 'active';}?>">Provinsi</a>
				</li>
				<li class="nav-item">
					<a href="<?php echo base_url(); ?>index.php/Laboratorium"  class="nav-link <?php if($this->uri->segment(1)=="Laboratorium"){echo 'active';}?>">Laboratorium</a>
				</li>
				<li class="nav-item">
					<a href="<?php echo base_url(); ?>index.php/RumahSakit"  class="nav-link <?php if($this->uri->segment(1)=="RumahSakit"){echo 'active';}?>">Rumah Sakit</a>
				</li>
				<li class="nav-item">
					<a href="<?php echo base_url(); ?>index.php/Apotik"  class="nav-link <?php if($this->uri->segment(1)=="Apotik"){echo 'active';}?>">Apotik</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle <?php if($this->uri->segment(1)=="Dokter"){echo 'active';}?>" href="<?php echo base_url(); ?>index.php/Dokter" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dokter</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="<?php echo base_url(); ?>index.php/JenisDokter">Jenis Dokter</a>
						<a class="dropdown-item" href="<?php echo base_url(); ?>index.php/Dokter">Data Dokter</a>
					</div>
				</li>
			</ul>
		</div>

	</nav>

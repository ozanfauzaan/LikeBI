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
		</div>
	</nav>

	<div class="container">
		<div style="margin: 25px;"></div>
		<div class="row">
			<div class="col-sm-6">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Provinsi</h5>
						<p class="card-text">Data Provinsi di Seluruh Indonesia</p>
						<a href="<?php echo base_url(); ?>index.php/Provinsi" class="btn btn-primary">Lihat	Provinsi</a>
					</div>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Jenis Dokter</h5>
						<p class="card-text">Data Jenis Dokter di Seluruh Indonesia</p>
						<a href="<?php echo base_url(); ?>index.php/JenisDokter" class="btn btn-primary">Lihat Jenis Dokter</a>
					</div>
				</div>
			</div>
		</div>
		<div style="margin: 25px;"></div>
		<div class="row">
			<div class="col-sm-6">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Rumah Sakit</h5>
						<p class="card-text">Data Provider Rumah Sakit Langganan Bank Indonesia</p>
						<a href="<?php echo base_url(); ?>index.php/RumahSakit" class="btn btn-primary">Lihat Rumah Sakit</a>
					</div>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Dokter</h5>
						<p class="card-text">Data Provider Dokter Langganan Bank Indonesia</p>
						<a href="<?php echo base_url(); ?>index.php/Dokter" class="btn btn-primary">Lihat Dokter</a>
					</div>
				</div>
			</div>
		</div>
		<div style="margin: 25px;"></div>
		<div class="row">
			<div class="col-sm-6">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Apotik & Klinik</h5>
						<p class="card-text">Data Provider Apotik & Klinik Langganan Bank Indonesia</p>
						<a href="<?php echo base_url(); ?>index.php/Apotik" class="btn btn-primary">Lihat Apotik & Klinik</a>
					</div>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Laboratorium</h5>
						<p class="card-text">Data Provider Laboratorium Langganan Bank Indonesia</p>
						<a href="<?php echo base_url(); ?>index.php/Laboratorium" class="btn btn-primary">Lihat Laboratorium</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
</body>
</html>
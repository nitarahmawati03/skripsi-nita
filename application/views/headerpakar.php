<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PAKAR</title>
	<link href="<?php echo base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url()?>assets/css/font-awesome.min.css" rel="stylesheet">
	<link href="<?php echo base_url()?>assets/css/datepicker3.css" rel="stylesheet">
	<link href="<?php echo base_url()?>assets/css/styles.css" rel="stylesheet">

	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<ul class="nav navbar-top-links navbar-right">
					<li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
						<em class="fa fa-bell"></em><span class="label label-info"></span>
					</a>
						<ul class="dropdown-menu dropdown-messages">
							<li class="divider"></li>
						</ul>
					</li>
					<li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="<?php echo site_url('Pengelola/logout')?>">
						<em class="fa fa-power-off">&nbsp;</em><span class="label label-info"></span>
					</a>
						<ul class="dropdown-menu dropdown-alerts">

						</ul>
					</li>
				</ul>
			</div>
		</div><!-- /.container-fluid -->
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="<?php echo base_url(); ?>assets/img/vet.png">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name">Pakar</div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<ul class="nav menu">
			<li><a href="<?=site_url()?>/Pakar/index"><em class="fa fa-home">&nbsp;</em> Home</a></li>
			<li><a href="<?=site_url()?>/Pakar/DataPenyakit"><em class="fa fa-list">&nbsp;</em>Daftar Penyakit</a></li>
			<li><a href="<?=site_url()?>/Pakar/DataGejala"><em class="fa fa-list">&nbsp;</em>Daftar Gejala</a></li>
			<li><a href="<?=site_url()?>/Pakar/DataBasis"><em class="fa fa-list">&nbsp;</em>Daftar Basis Pengetahuan</a></li>
			<li><a href="<?=site_url()?>/Pakar/DataPemeriksaan"><em class="fa fa-list">&nbsp;</em>Daftar Pemeriksaan</a></li>
			<li><a href="<?=site_url()?>/Pakar/DataPemeriksaanRevisi"><em class="fa fa-list">&nbsp;</em>Daftar Pemeriksaan Revisi</a></li>
			<!-- <li><a href="<?=site_url()?>/BasisPengetahuan/daftar_basis_pengetahuan"><em class="fa fa-list">&nbsp;</em>Daftar Basis</a></li>
			 -->
		</ul>
	</div><!--/.sidebar-->
</body>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ADMIN</title>
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
			<div class="profile-usertitle">
				<div class="profile-usertitle-name"><em class="fa fa-user">&nbsp;</em> Admin</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<ul class="nav menu">
			<li><a href="<?=site_url()?>/Penyakit/index"><em class="fa fa-home">&nbsp;</em> Home</a></li>
			<li><a href="<?=site_url()?>/Penyakit/daftar_penyakit"><em class="fa fa-list">&nbsp;</em>Daftar Penyakit</a></li>
			<li><a href="<?=site_url()?>/Penyakit/create"><em class="fa fa-edit">&nbsp;</em>Tambah Penyakit</a></li>
			<li><a href="<?=site_url()?>/Gejala/daftar_gejala"><em class="fa fa-list">&nbsp;</em>Daftar Gejala</a></li>
			<li><a href="<?=site_url()?>/Gejala/create"><em class="fa fa-edit">&nbsp;</em>Tambah Gejala</a></li>
		</ul>
	</div><!--/.sidebar-->
</body>


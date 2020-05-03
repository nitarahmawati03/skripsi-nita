
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="FaberNainggolan">
	<title>CodeIgniter dengan Boostrap</title>

	<link href="<?=base_url()?>assets/css/boostrap.min.cs" rel="stylesheet">

	<link href="<?=base_url();?>assets/css/boostrap-dateimepicker.min.cs" rel="stylesheet" media="screen">

	<link href="<?=base_url();?>assets/css/boostrap-datepicker.min.cs" rel="stylesheet" media="screen">

</head>

<body>
	
<div class="alert alert-success">
	<strong>Data berhasil dihapus</strong>
	<?php
		echo anchor('Admin/index', 'Lihat Penyakit');
		?>
</div>

<script src="<?=base_url()?>assets/js/jquery.js"></script> 
<script src="<?=base_url()?>assets/js/boostrap.min.js"></script>


</body>
</html>
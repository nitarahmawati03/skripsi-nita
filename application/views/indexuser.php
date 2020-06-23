<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Rabbit || Home</title>
	<!-- <link rel="icon" href="img/favicon.png"> -->
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?php echo base_url()?>/assets/css/bootstrap.min.css">
	<!-- animate CSS -->
	<link rel="stylesheet" href="<?php echo base_url()?>/assets/css/animate.css">
	<!-- owl carousel CSS -->
	<link rel="stylesheet" href="<?php echo base_url()?>/assets/css/owl.carousel.min.css">
	<!-- themify CSS -->
	<link rel="stylesheet" href="<?php echo base_url()?>/assets/css/themify-icons.css">
	<!-- flaticon CSS -->
	<link rel="stylesheet" href="<?php echo base_url()?>/assets/css/flaticon.css">
	<!-- font awesome CSS -->
	<link rel="stylesheet" href="<?php echo base_url()?>/assets/css/magnific-popup.css">
	<!-- style CSS -->
	<link rel="stylesheet" href="<?php echo base_url()?>/assets/css/style.css">
</head>

<body>
	<!--::header part start::-->
	<header class="header_area">
		<div class="main_menu">
			<div class="container">
				<div class="row">
					<div class="col-lg-12" style="margin-top: 30px">
						<nav class="navbar navbar-expand-lg navbar-light">
							<div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent"
								style="margin-left: 300px">
								<ul class="navbar-nav">
									<li class="nav-item active">
										<a class="nav-link active" href="#home">Home</a>
									</li>
									<li class="nav-item">
										<a href="#about" class="nav-link">About</a>
									</li>
									<li class="nav-item">
										<a href="#info" class="nav-link">Info Penyakit</a>
									</li>
									<li class="nav-item">
										<a href="#cek" class="nav-link">Cek Gejala</a>
									</li>
									<li class="nav-item">
										<a href="#bantuan" class="nav-link">Bantuan</a>
									</li>
									<li class="nav-item">
										<a href="<?php echo site_url('Pengelola/menulogin')?>"
											class="nav-link">Login</a>
									</li>
								</ul>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</div>

		<!-- Header part end-->

		<!-- banner part start-->
		<section class="banner_part" id="home">
			<div class="container">
				<div style="margin-bottom: 700px">
					<div class="col-lg-7 col-xl-6">
						<div class="banner_text">
							<span style="font-family: Brush Script MT;">
								<h1>Bunnie Health Solution</h1>
								<h4>Kesehatan kelinci anda, kebahagian kami</h4>
							</span>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- banner part start-->

		<!-- about part start-->
		<section class="about_part section_padding" id="about">
			<div class="container">
				<div class="row align-items-center justify-content-between">
					<div class="col-md-6">
						<div class="container">
							<img src="<?php echo base_url()?>/assets/img/about.png" height="400" width="400" alt="">
						</div>
					</div>
					<div class="col-md-5">
						<div class="about_text">
							<img src="<?php echo base_url()?>/assets/img/about_icon.png" class="about_icon" height="40"
								width="40">
							<h2>Bunnie Health Solution</h2>
							<p>Website ini digunakan untuk membantu para pemilik kelinci mendapat penanganan pertama
								jika kelinci terkena penyakit.</p>

						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- about part start-->

		<!-- service part start-->
		<section class="price-area section-gap" id="info">
			<div class="container">
				<div class="row d-flex justify-content-center">
					<div class="menu-content pb-60 col-lg-8">
						<div class="tittle text-center">
							<br>
							<br>
							<br>
							<img src="<?php echo base_url()?>/assets/img/seo.png" height="150" width="150" alt="">
							<h1 class="mb-10">Info Penyakit</h1>
							<p>Apa saja penyakit kelinci?</p>
							<br>
							<br>
						</div>
					</div>
				</div>

				<div class="row">

					<?php foreach ($penyakit_object as $key) { ?>

					<div class="col-lg-4">
						<a href="<?=site_url()?>/Pengelola/detailPenyakit/<?=$key->id_penyakit?>">
							<div class="single-price">
								<div class="top-sec d-flex justify-content-between">
									<div class="top-left">

										<h4><?php echo $key->nama_penyakit?></h4>

									</div>
									<div class="top-right">

									</div>
								</div>

								<div class="end-sec">
									<ul>
										<?php echo substr($key->definisi, 0, 20)."..."?>
									</ul>

								</div>
								<br>
							</div>
					</div>
					</a>

					<?php } ?>
				</div>
			</div>
		</section>
		<!-- service part end-->

		<!-- counter adopt number here -->
		<section class="abopt_number_counter section_padding" id="cek">
			<div class="container">
				<div class="menu-content pb-60 col-lg-8">
					<div class="tittle text-center">
						<br>
						<img src="<?php echo base_url()?>/assets/img/checklist.png" height="150" width="150" alt="">
						<h1 class="mb-10">Pilih Gejala</h1>
						<center>
							<h4>Centang gejala tersebut, jika gejala sesuai dengan yang dialami kelinci.</h4>
						</center>
						<br>
						<br>
					</div>
				</div>


				<form action="<?php echo site_url('Perhitungan'); ?>" method="post" enctype="multipart/form-data">
					<table class="table table-striped table-bordered data">
						<?php echo validation_errors(); ?>
						<thead>
							<tr class="bg-group" align="center">
								<th>No</th>
								<th>Gejala</th>
								<th>Jawaban</th>
							</tr>
						</thead>
						<tbody>
							<?php
                    $i=1;
                    foreach ($gejala as $key) {
                    ?>
							<tr>
								<td align="center"><?php echo $i; ?></td>
								<td><?php echo $key->gejala;?></td>
								<td align="center"><input type="checkbox" name="check_list[]" alt="Checkbox"
										value="<?php echo $key->id_gejala ?>"></td>
							</tr>
							<?php
                    $i++;
                    }
                    ?>
						</tbody>
					</table>
					<div class="container">
						<button class="search100-form-btn">
							Pencarian
						</button>
					</div>
				</form>
			</div>
		</section>

		<!-- counter adopt number end -->

		<!-- client review part here -->

		<section class="about_part section_padding" id="bantuan">
			<div class="container">
				<div class="row align-items-center justify-content-between">
					<div class="col-md-6">

						<div class="container">

							<img src="<?php echo base_url()?>/assets/img/steps.png" height="200" width="200" alt="">

						</div>
					</div>
					<div class="col-md-5">
						<div class="about_text">
							<h2>Bingung?</h2>
							<p>Berikut tata cara penggunaan</p>
							<p> 1. Pilih gejala yang sesuai </p>
							<p> 2. Pilih "pencarian" </p>
							<p> 3. Penyakit dan penanganan pertama akan muncul </p>
						</div>
					</div>
				</div>
			</div>
		</section>


		<!-- footer part start-->
		<footer class="footer_area padding_top">
			<div class="container">

				<div class="row">
					<div class="col-lg-12">
						<div class="copyright_text">
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!-- footer part end-->

		<!-- jquery plugins here-->
		<!-- jquery -->
		<script src="<?php echo base_url()?>/assets/js/jquery-1.12.1.min.js"></script>
		<!-- popper js -->
		<script src="<?php echo base_url()?>/assets/js/popper.min.js"></script>
		<!-- bootstrap js -->
		<script src="<?php echo base_url()?>/assets/js/bootstrap.min.js"></script>
		<!-- counterup js -->
		<script src="<?php echo base_url()?>/assets/js/jquery.counterup.min.js"></script>
		<!-- waypoints js -->
		<script src="<?php echo base_url()?>/assets/js/waypoints.min.js"></script>
		<!-- easing js -->
		<script src="<?php echo base_url()?>/assets/js/jquery.magnific-popup.js"></script>
		<!-- particles js -->
		<script src="<?php echo base_url()?>/assets/js/owl.carousel.min.js"></script>
		<!-- custom js -->
		<script src="<?php echo base_url()?>/assets/js/custom.js"></script>
</body>

</html>

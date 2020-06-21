<?php $this->load->view('headerpakar'); ?>
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Dashboard</h1>
				<h3>Selamat Datang</h3>
			</div>
		</div>

		<div class="panel panel-container">
			<div class="row">
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-teal panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-book fa-fw color-blue"></em>
							<span class="value text-success">
								<?php foreach ($totalPenyakit as $tampilPenyakit) { ?> 
									<span><?php echo $tampilPenyakit->total ?></span>
								<?php } ?>
							</span>
							<div class="text-muted">Penyakit</div>
						</div>
					</div>
				</div>
				
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-blue panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-book fa-fw color-orange"></em>
							<div class="large">52</div>
							<div class="text-muted">Gejala</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-orange panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-pencil fa-fw color-teal"></em>
							<div class="large">24</div>
							<div class="text-muted">Revisi</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-red panel-widget ">
						<div class="row no-padding"><em class="fa fa-xl fa-search color-red"></em>
							<div class="large">25.2k</div>
							<div class="text-muted">Data Pemeriksaan</div>
						</div>
					</div>
				</div>
			</div><!--/.row-->
		</div>

		<div class="row">
			<div class="col-xs-6 col-sm-9m">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h2>Bunnie Health Solution</h2>
						<p style="line-height: 20px;">Bunnie Health Solution merupakan website yang digunakan untuk membantu para pemilik kelinci mendapat penanganan pertama jika kelinci terkena penyakit</p>
					</div>
				</div>
			</div>
		</div><!--/.row-->


	</div>	
		


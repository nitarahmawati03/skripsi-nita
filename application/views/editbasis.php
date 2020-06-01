<?php $this->load->view('headeradmin'); ?>


<div class="main-panel">

	<div class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
					<div class="card">
						<div class="header">
						</div>
						<div class="content table-responsive table-full-width">
							<table class="table table-hover table-striped">
								<table class="table table-hover" id="contoh">

									<legend>Edit Penyakit</legend>

									<?php echo validation_errors(); ?>

									<?php echo form_open_multipart('Penyakit/update/'.$this->uri->segment(3)); ?>
									<div class="form_group">
										<label class="control-label col-sm-2" for="nama penyakit">Nama Penyakit
											:</label>

										<div class="col-sm-10">
											<input type="text" name="nama_penyakit" class="form-control"
												id="nama_penyakit" value="<?php echo $penyakit[0]->nama_penyakit?>"
												placeholder="Nama Penyakit"><br>
										</div>
									</div>

									<div class="form_group">
										<label class="control-label col-sm-2" for="definisi">Definisi :</label>
										<div class="col-sm-10">

											<input type="text" name="definisi" class="form-control" id="definisi"
												value="<?php echo $penyakit[0]->definisi?>" placeholder="Definisi"><br>
										</div>
									</div>

									<div class="form_group">
										<label class="control-label col-sm-2" for="solusi">Penyakit :</label>
										<div class="col-sm-10">
											<input type="text" name="id_penyakit" class="form-control" id="id_penyakit"
												value="<?php echo $basis[0]->id_penyakit?>" placeholder="Penyakit"></br>
										</div>
									</div>

									<div class="form_group">
										<div class="col-sm-offset2 col-sm-10">
											<button type="submit" class="btn btn-primary">Submit</button>
											<?php echo form_close(); ?>
										</div>
									</div>
						</div>



						</table>
						</table>

					</div>
				</div>
			</div>




		</div>
	</div>
</div>



</body>

<!--   Core JS Files   -->
<script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

<!--  Charts Plugin -->
<script src="assets/js/chartist.min.js"></script>

<!--  Notifications Plugin    -->
<script src="assets/js/bootstrap-notify.js"></script>

<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

<!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
<script src="assets/js/demo.js"></script>


</html>

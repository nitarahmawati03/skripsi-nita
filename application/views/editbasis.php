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

									<legend>Edit Basis</legend>

									<?php echo validation_errors(); ?>

									<?php echo form_open_multipart('BasisPengetahuan/update/'.$this->uri->segment(3)); ?>

<<<<<<< HEAD
									<label for="">Kode Basis Pengetahuan</label>

										<input type="hidden" name="id_basis_pengetahuan" id="id_basis_pengetahuan"
											class="form-control" value="<?php echo $this->uri->segment(3) ?>">

										<input class="form-control" disabled value="<?php echo $this->uri->segment(3) ?>">
										<br>

										<label for="">Penyakit</label>

										<select name="id_penyakit" id="id_penyakit" class="form-control">
											<?php
												foreach ($penyakit as $key => $value) { ?>
											<option value="<?php echo $value->id_penyakit ?>">
												<?php echo $value->nama_penyakit ?>
											</option>
											<?php
												}
											?>
										</select>
=======
									<div class="form_group">
										<label class="control-label col-sm-2" for="definisi">Kode Basis Pengetahuan:</label>
										<div class="col-sm-10">

											<input type="text" name="id_basis_pengetahuan" class="form-control" id="id_basis_pengetahuan"
												value="<?php echo $basis[0]->id_basis_pengetahuan?>" placeholder="Kode Basis Pengetahuan"><br>
										</div>
									</div>

									<div class="form-group">
							            <label class="control-label col-xs-3" >Penyakit</label>
							            <div class="col-sm-8">
							              <select class='form-control' id='exampleFormControlSelect2' name='fk_penyakit'>
							                <option>-- Pilih Penyakit--</option>
							                <?php 
							                	foreach ($penyakit as $value) {
							                  echo '<option value="'.$value->id_penyakit.'" ';
							                  if ($key->id_penyakit==$value->id_penyakit)
							                    echo "selected";
							                  echo '>'.$value->nama_penyakit.'</option>';
							                }?>
							              </select>
							            </div>
          							</div><br><br>

          							<!-- <select name="id_penyakit" id="id_penyakit" class="form-control">
                                            <?php
                                                foreach ($penyakit as $key => $value) { ?>
                                                    <option value="<?php echo $value->id_penyakit ?>">
                                                        <?php echo $value->nama_penyakit ?>
                                                    </option>
                                            <?php
                                                }
                                            ?>
                                        </select> -->
>>>>>>> d61c34f171ae5c8c02eaeef690a174d42b5776d6

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

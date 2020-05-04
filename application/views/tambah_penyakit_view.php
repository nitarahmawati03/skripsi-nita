<?php $this->load->view('headeradmin');?>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">


<?php echo form_open_multipart('Admin/create');?>
	<legend> Tambah Penyakit </legend>
	<?php echo validation_errors();  ?>
	<div class="from-group">
		<label for="">Nama Penyakit</label>
		<input type="text" name="nama_penyakit" class="form-control" id="nama_penyakit" placeholder="field">

		<label for="">Definisi</label>
		<input type="text" name="definisi" class="form-control" id="definisi" placeholder="field">

		<label for="">Solusi</label>
		<input type="text" name="solusi" class="form-control" id="solusi" placeholder="field">
	</div>
	<button type="submit" class="btn btn-primary">Submit</button>
	<?php echo form_close();?>

</div>


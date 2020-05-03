<?php $this->load->view('headeradmin');?>

<div class="container">
<div class="row">
	
<legend>Edit Data Penyakit</legend>

<?php
//var_dump($pegawai); ?>
<?php echo validation_errors(); ?>

<?php echo form_open_multipart('penyakit/update/'.$this->uri->segment(3)); ?>
<div class="form_group">
	<label class="control-label col-sm-2" for="nama penyakit">Nama Penyakit :</label>
<div class="col-sm-10">
	
	<input type="text" name="nama_penyakit" class="form-control" id="nama_penyakit" value="<?php echo $penyakit[0]->nama_penyakit?>" placeholder="Nama Penyakit"><br>	
	</div>
</div>

<div class="form_group">
	<label class="control-label col-sm-2" for="definisi">Definisi :</label>
<div class="col-sm-10">
	
	<input type="text" name="definisi" class="form-control" id="definisi" value="<?php echo $penyakit[0]->definisi?>" placeholder="Definisi"><br>	
	</div>
</div>

<div class="form_group">
	<label class="control-label col-sm-2" for="solusi">Solusi :</label>
	<div class="col-sm-10">
		<input type="text" name="solusi" class="form-control" id="solusi" value="<?php echo $penyakit[0]->solusi?>" placeholder="Solusi"></br>
	</div>
</div>

<div class="form_group">
<div class="col-sm-offset2 col-sm-10">
		<button type="submit" class="btn btn-primary">Submit</button>
		<?php echo form_close(); ?>
	</div>
</div>
</div>
</div>
</div>

<?php $this->load->view('headeradmin');?>

<div class="row">
	<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
		
	</div>
	<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
		<div class="table-responsive">
			<table class="table table-hover" id="contoh">
				<thead>
					<th>Nama Penyakit</th>
					<th>Definisi</th>
					<th>Solusi</th>
					<th>Edit</th>
					<th>Delete</th>
				</thead>
				
					<?php foreach ($penyakit as $key) { ?>
					
					<tr>
                        <td><?php echo $key->nama_penyakit;?></td>
                        <td><?php echo $key->definisi;?></td>
                        <td><?php echo $key->solusi;?></td>

                        <td><a href="<?=site_url()?>/Penyakit/Update/<?php echo $key->id_penyakit ?>"> <p data-placement="top" data-toogle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit"><span class="glyphicon glyphicon-pencil"></span></button></p></td>

                        <td><a href="<?=site_url()?>/Penyakit/delete/<?php echo $key->id_penyakit ?>"> <p data-placement="top" data-toogle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete"><span class="glyphicon glyphicon-trash"></span></button></p></td>
                    </tr>
					
					
					<?php }?>
					
				
			</table>
		</div>
	</div>
</div>

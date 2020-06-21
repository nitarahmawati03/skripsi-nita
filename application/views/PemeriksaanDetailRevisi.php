<?php $this->load->view('headerpakar'); ?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
      <div class="main-panel">
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                      <div class="jumbotron text-center">
                          <h1>DAFTAR GEJALA PENYAKIT PEMERIKSAAN REVISI</h1>
                          <!-- <p><b>Keterangan !!</b></p>
                          <p>- Jika kasus dirasa cocok untuk dijadikan solusi maka data dibawah ini dapat disesuaikan datanya dan <em>WAJIB</em> mengisi masing-masing bobot, setelah itu klik button <b><em>SIMPAN</em></b></p>
                          <p>- Jika kasus tidak cocok untuk dijadikan solusi maka dapat langsung klik button <b><em>HAPUS</em></b></p> -->
                      </div>

                      <?php if ($this->session->flashdata('success')) {?>
                        <div class="alert alert-success alert-dismissible" role="alert">
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                          <?php echo $this->session->flashdata('success'); ?>
                        </div>

                      <?php } elseif($this->session->flashdata('hapus')) { ?>
                        <!-- validation message to display after form is submitted -->
                        <div class="alert alert-danger alert-dismissible" role="alert">
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <?php echo $this->session->flashdata('hapus'); ?> 
                        </div>

                      <?php } elseif($this->session->flashdata('error')) {?>
                        <!-- validation message to display after form is submitted -->
                        <div class="alert alert-danger alert-dismissible" role="alert">
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <?php echo $this->session->flashdata('error'); ?> 
                        </div>
                      <?php } ?>

                      <?php foreach($penyakit as $key) {?>
                      <?=form_open_multipart('Pakar/ProsesRevisi/'.$key->id_pemeriksaan)?>
       
                      <div class="form-group row">
                        <label class="control-label col-xs-3" >Jenis Penyakit</label>
                          <div class="col-sm-8">
                            <select class='form-control' id='exampleFormControlSelect2' name='id_penyakit'>
                                <option>-- Pilih Jenis Penyakit--</option>
                                <?php foreach ($penyakitKasus as $a) {
                                  echo '<option value="'.$a->id_penyakit.'" ';
                                  if ($key->id_penyakit==$a->id_penyakit)
                                    echo "selected";
                                  echo '>'.$a->nama_penyakit.'</option>';
                              }?>
                            </select>
                          </div>
                      </div><br>
                       <?php } ?>
                      
                    <table class="table table-striped table-bordered data">
                      <thead>
                        <tr class="bg-group">
                          <th width="5px">No</th>
                          <th>Gejala</th>
                          <th>Bobot</th>
                          <!-- <th>Action</th> -->
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                           $no = 1;
                           foreach ($pemeriksaan as $key) 
                           {
                        ?>
                        <tr>
                          <td><?php echo $no; ?></td>
                          <td><input type="hidden" name="id_gejala[]" value="<?php echo $key->id_gejala ?>"><?php echo $key->gejala;?></td>
                          <!-- <td><?php echo $key->bobot;?></td> -->
                          <td>
                            <select class='form-control' id='exampleFormControlSelect2' name='bobot[]'>
                            <option>-- Bobot Gejala pada Penyakit --</option>
                            <option value="1">1 - Biasa</option>
                            <option value="3">3 - Sedang</option>
                            <option value="5">5 - Dominan</option>
                          </select>
                          </td>
                        </tr>
                        <?php
                          $no++;
                          }
                        ?>
                      </tbody>
                    </table>

                    <div class="clearfix"></div>
                      
                      <input type="submit" class="btn btn-success" onclick="return confirm('Apakah Ingin Menyimpan Hasil Revisi?');" value="SIMPAN">

                      <a href="<?php echo site_url('Pakar/DataPemeriksaanRevisi')?>"> <button type="button" class="btn btn-primary">Kembali</button>

                        <br>
                        <br>

                    <?php echo form_close(); ?>

                    <?php foreach($penyakit as $key) {?>
                    <?=form_open_multipart('Pakar/ProsesRevisiDihapus/'.$key->id_pemeriksaan)?>
                      <input type="submit" class="btn btn-warning" onclick="return confirm('Apakah Anda Ingin Menghapus Data dan Tidak Perlu Direvisi ?');" value="HAPUS">
                    <?php } ?>
                    <?php echo form_close(); ?>
        
                      </div>
                  </div>
            </div>
      </div>

<script type="text/javascript" src="<?php echo base_url();?>assetsDatatables/assets_ajax/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assetsDatatables/assets_ajax/js/bootstrap.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assetsDatatables/assets_ajax/js/jquery.dataTables.js"></script>

<script type="text/javascript">
  $(document).ready(function(){
    $('.data').DataTable();
  });
</script>
<?php $this->load->view('headerpakar'); ?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
      <div class="main-panel">
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="jumbotron text-center">
                              <h3>DATA PEMERIKSAAN REVISI</h3>
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
                          <table class="table table-striped table-bordered data">
                            <thead>
                              <tr class="bg-group">
                                <th width="5px">NO</th>
                                <th>Tanggal Pemeriksaan</th>
                                <th>Dugaan Penyakit</th>
                                <th>Persentase (%)</th>
                                <!-- <th>Penangan Kasus</th> -->
                                <th>Action</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php 
                                 $i=1;
                                foreach ($pemeriksaan as $key) 
                                {
                              ?>
                              <tr>
                                <td><?php echo $i; ?></td>
                                <td><?php echo $key->tgl_pemeriksaan;?></td>
                                <td><?php echo $key->nama_penyakit;?></td>
                                <td><?php echo $key->hasil;?></td>
                                <td>
                                  <a href="<?php echo base_url('Pakar/detailPemeriksaanRevisi/'.$key->id_pemeriksaan)?>" class="btn btn-sm btn-danger"><span class="glyphicon glyphicon-list"> Gejala</a>
                                </td>
                              </tr>
                              <?php
                                $i++;
                                }
                              ?>
                            </tbody>
                          </table>

                          <div class="clearfix"></div>
                          </div>
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
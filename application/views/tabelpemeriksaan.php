<?php $this->load->view('headeradmin'); ?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
      <div class="main-panel">
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="jumbotron text-center">
                              <h1>PEMERIKSAAN</h1>
                        </div>

                        <table class="table table-striped table-bordered data">
                          <thead>
                            <tr class="bg-group">
                              <th width="5px">NO</th>
                              <th>Tanggal Pemeriksaan</th>
                              <th>Penyakit</th>
                              <th>Persentase (%)</th>
                              <th>Status</th>
                              <th>Tanggal Direvisi</th>
                              <th>Pemeriksa</th>
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
                                <?php
                                  if ($key->status==1)
                                  echo "Tanpa Revisi";
                                  if ($key->status==2)
                                  echo "Perlu Revisi";
                                  if ($key->status==3)
                                  echo "Diperiksa Tanpa Revisi";
                                  if ($key->status==4)
                                  echo "Diperiksa Dengan Revisi";
                                ?>
                              </td>
                              <td>
                                <?php
                                  if ($key->tgl_revisi==0000-00-00){
                                    echo "-";
                                  }else{
                                    echo $key->tgl_revisi;
                                  }
                                ?>
                              </td>
                              <td>
                                <?php
                                  if ($key->id_pengelola==null){
                                    echo "-";
                                  }else{
                                    echo $key->nama;
                                  }
                                ?>
                              </td>
                              <td>
                                <a href="<?=site_url()?>/Pakar/detailPemeriksaan/<?php echo $key->id_pemeriksaan ?>" class="btn btn-primary"><span class="glyphicon glyphicon-list"> Gejala</a>
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
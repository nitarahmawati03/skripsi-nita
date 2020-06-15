<?php $this->load->view('headeradmin'); ?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
      <div class="main-panel">
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="jumbotron text-center">
                              <h1>DATA GEJALA PENYAKIT PEMERIKSAAN</h1>
                        </div>

                        <table class="table table-striped table-bordered data">
                          <thead>
                            <tr class="bg-group">
                              <th width="5px">No</th>
                              <th>Gejala</th>
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
                              <td><?php echo $key->gejala;?></td>
                            </tr>
                            <?php
                              $no++;
                              }
                            ?>
                          </tbody>
                        </table>
                        <div class="clearfix"></div>
                        <a href="<?php echo site_url('Pakar/DataPemeriksaan')?>"> <button type="kembali" class="btn btn-primary">Kembali</button>

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
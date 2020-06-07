<?php $this->load->view('headeradmin'); ?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	    <div class="main-panel">

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                          <div class="jumbotron text-center">
                                 <h1>DAFTAR DETAIL BASIS PENGETAHUAN</h1>
                          </div>
                        <div class="card">


                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <table class="table table-hover" id="contoh">
                                        <thead>
                                            <th>No</th>
                                            <th>Detail Basis Pengetahuan</th>
                                            <th>Gejala</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </thead>
                                        <tbody>
                                            <?php 
                                             $no=1;
                                             foreach ($detailbasis as $key) { ?>

                                            <tr>
                                                <td><?php echo $no ?>  </td>
                                                <td><?php echo $key->id_detail;?></td>
                                                <td><?php echo $key->id_gejala;?></td>

                                                <td><a href="<?=site_url()?>/DetailBasis/Update/<?php echo $key->id_detail ?>"> <p data-placement="top" data-toogle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit"><span class="glyphicon glyphicon-pencil"></span></button></p></td>

                                                <td><a href="<?=site_url()?>/DetailBasis/delete/<?php echo $key->id_detail ?>"> <p data-placement="top" data-toogle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete"><span class="glyphicon glyphicon-trash"></span></button></p></td>
                                            </tr>
                                                            <!--    <tr>

                                            </tr> -->
                                            <?php 
                                             $no++;
                                             }?>
                                        </tbody>

                                    </table>
                                </table>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

   
<?php $this->load->view('headerpakar'); ?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	    <div class="main-panel">

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                          <div class="jumbotron text-center">
                                 <h1>DAFTAR BASIS PENGETAHUAN</h1>
                          </div>
                        <div class="card">


                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <!-- <a href="<?php echo site_url('BasisPengetahuan/create')?>"><button type="basis" class="btn btn-primary">Tambah Basis Pengetahuan</button>
                                    <a href="<?php echo site_url('DetailBasis/create')?>"><button type="detail" class="btn btn-primary">Tambah Detail Basis Pengetahuan</button> -->
                                    <table class="table table-hover" id="example">
                                        <thead>
                                            <th>No</th>
                                            <th>Basis Pengetahuan</th>
                                            <th>Penyakit</th>
                                            <th>Detail</th>
                                            <!-- <th>Edit</th>
                                            <th>Delete</th> -->
                                        </thead>
                                        <tbody>
                                            <?php 
                                             $no=1;
                                             foreach ($basis as $key) { ?>

                                            <tr>
                                                <td><?php echo $no ?>  </td>
                                                <td><?php echo $key->id_basis_pengetahuan;?></td>
                                                <td><?php echo $key->id_penyakit;?></td>

                                               <td><a href="<?=site_url()?>/Pakar/detailBasis/<?php echo $key->id_basis_pengetahuan ?>"> <p data-placement="top" data-toogle="tooltip" title="Detail"><button class="btn btn-primary btn-xs" data-title="Detail" data-toggle="modal" data-target="#detail"><span class="glyphicon glyphicon-list"></span></button></p></td>


                                                <!-- <td><a href="<?=site_url()?>/BasisPengetahuan/Update/<?php echo $key->id_basis_pengetahuan ?>"> <p data-placement="top" data-toogle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit"><span class="glyphicon glyphicon-pencil"></span></button></p></td>

                                                <td><a href="<?=site_url()?>/BasisPengetahuan/delete/<?php echo $key->id_basis_pengetahuan ?>"> <p data-placement="top" data-toogle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete"><span class="glyphicon glyphicon-trash"></span></button></p></td> -->
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
        <script src="<?=base_url()?>assets/js/jquery.js"></script>
        <script src="<?=base_url()?>DataTables/datatables.min.js" type="text/javascript"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $('#example').DataTable({
                    "processing": true,
                    "lengthMenu": [
                        [3, 6, 10, -1],
                        [3, 6, 10, "All"]
                    ],
                });
            });
        </script>

   
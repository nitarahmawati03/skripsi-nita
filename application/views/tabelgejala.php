<?php $this->load->view('headeradmin'); ?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	    <div class="main-panel">

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="jumbotron text-center">
                        <h1>DAFTAR GEJALA</h1>
                    </div>
                <div class="card">
            <div class="content table-responsive table-full-width">
        <table class="table table-hover table-striped">
            <table class="table table-hover" id="contoh">
                <thead>
                    <th>No</th>
                    <th>Gejala</th>
                    <!-- <th>Bobot</th> -->
                    <th>Edit</th>
                    <th>Delete</th>
                </thead>
        <tbody>
        <?php foreach ($gejala as $key) { ?>

            <tr>
                <td>  </td>
                <td><?php echo $key->gejala;?></td>
        <!-- <td><?php echo $key->bobot;?></td> -->
                                               
                <td><a href="<?=site_url()?>/Gejala/Update/<?php echo $key->id_gejala ?>"> <p data-placement="top" data-toogle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit"><span class="glyphicon glyphicon-pencil"></span></button></p></td>

                <td><a href="<?=site_url()?>/Gejala/delete/<?php echo $key->id_gejala ?>"> <p data-placement="top" data-toogle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete"><span class="glyphicon glyphicon-trash"></span></button></p></td>                          
            </tr>
            <?php }?>

        </tbody>

            </table>
        </table>

                </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>

 <!--   Core JS Files   -->
    <script src="<?php echo base_url()?>assets/js/3.2.1/jquery.js" type="text/javascript"></script>
    <script src="<?php echo base_url()?>assets/js/bootstrap.min.js" type="text/javascript"></script>
  <script src="<?=base_url()?>DataTables/datatables.min.js" type="text/javascript"></script>
    <!--  Charts Plugin -->
    <!-- <script src="<?php echo base_url()?>assets/js/chartist.min.js"></script>

     Notifications Plugin   
    <script src="<?php echo base_url()?>assets/js/bootstrap-notify.js"></script>
 -->
    <!--  Google Maps Plugin    -->
    <script type="<?php echo base_url()?>text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
    <!-- <script src="<?php echo base_url()?>assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script> -->

    <!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
    <!-- <script src="<?php echo base_url()?>assets/js/demo.js"></script> -->
  
  <script type="text/javascript">
    $(document).ready(function(){
      $('#contoh').DataTable();
    });
  </script>
 

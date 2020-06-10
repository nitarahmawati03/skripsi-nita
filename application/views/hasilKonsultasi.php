<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Rabbit || Home</title>
    <!-- <link rel="icon" href="img/favicon.png"> -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url()?>/assets/css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="<?php echo base_url()?>/assets/css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="<?php echo base_url()?>/assets/css/owl.carousel.min.css">
    <!-- themify CSS -->
    <link rel="stylesheet" href="<?php echo base_url()?>/assets/css/themify-icons.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="<?php echo base_url()?>/assets/css/flaticon.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="<?php echo base_url()?>/assets/css/magnific-popup.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="<?php echo base_url()?>/assets/css/style.css">
</head>

<body>
    <!--::header part start::-->
    <header class="header_area">
        <div class="main_menu">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12" style="margin-top: 30px">
                        <nav class="navbar navbar-expand-lg navbar-light">
                             <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent" style="margin-left: 1100px">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a href="<?php echo site_url('Pengelola/index#cek')?>" class="nav-link">Kembali</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

    <!-- service part start-->
    <section class="services py-5" id="furniture">
    <div class="container py-lg-3">
        <h3 class="heading mb-5 text-center">Hasil Diagnosa</h3>

        <h5 class="heading">Gejala Yang Dipilih</h5><br>
        <table class="table table-striped table-bordered data">
            <thead>
                <tr class="bg-group" align="center">
                    <th width="5px">No</th>
                    <th>Gejala</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $i=1;
                foreach ($gejala as $key => $value) {
                ?>
                    <tr>
                        <td align="center"><?php echo $i; ?></td>
                        <td align="center" name="gejala[]"><?php echo $value; ?></td>
                    </tr>
                <?php
                $i++;
                }
                ?>
            </tbody>
        </table>

        <h5 class="heading">Perhitungan</h5><br>
        <table class="table table-striped table-bordered data">
            <thead>
                <tr class="bg-group" align="center">
                    <th width="5px">NO</th>
                    <th>Gejala Kasus</th>
                    <th>Gejala Dipilih</th>
                    <th>Gejala Cocok</th>
                    <th>Penjumlahan Gejalah</th>
                    <th>Pembagi</th>
                    <th>Hasil (Cocok/Kasus)</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $i=1;
                foreach ($table_perhitungan as $key => $value) {
                ?>
                    <tr>
                        <td align="center"><?php echo $i; ?></td>
                        <td align="center"><?php echo $value['gejala_kasus'] ?></td>
                        <td align="center"><?php echo $value['gejala_dipilih'] ?></td>
                        <td align="center"><?php echo $value['gejala_cocok'] ?></td>
                        <td align="center"><?php echo $value['sum_gejala'] ?></td>
                        <td align="center"><?php echo $value['pembagi'] ?></td>
                        <td align="center" name="kasus[]"><?php echo $value['hasil']; ?></td>
                    </tr>
                <?php
                $i++;
                }
                ?>
            </tbody>
        </table>

        <h5 class="heading">Hasil Analisa Penyakit</h5><br>
        <table class="table table-striped table-bordered data">
            <thead>
                <tr class="bg-group" align="center">
                    <th width="5px">NO</th>
                    <th width="50%">Penyakit</th>
                    <th width="50%">Persentase (%)</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $i=1;
                foreach ($hasil_analisa_penyakit as $key => $value) {
                ?>
                    <tr>
                        <td align="center"><?php echo $i; ?></td>
                        <td align="center"><?php echo $value['penyakit'] ?></td>
                        <td align="center" name="persen[]"><?php echo $value['persentase']; ?></td>
                    </tr>
                <?php
                $i++;
                }
                ?>
            </tbody>
        </table>

        <h5 class="heading">Hasil diagnosis penyakit kelinci :</h5><br>
        <table class="table table-striped table-bordered data">
            <thead>
                <tr class="bg-group" align="center">
                    <th width="4%">NO</th>
                    <th width="18%">Penyakit</th>
                    <th width="30%">Definisi</th>
                    <th width="30%">Solusi</th>
                    <th width="18%">Persentase (%)</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $i=1;
                foreach ($kemungkinan_penyakit_yang_diderita as $key => $value) {
                ?>
                    <tr>
                        <td align="center"><?php echo $i; ?></td>
                        <td align="center"><?php echo $value['penyakit']; ?></td>
                        <td align="center"><?php echo $value['definisi']; ?></td>
                        <td align="center"><?php echo $value['solusi']; ?></td>
                        <td align="center" name="persen[]"><?php echo $value['persentase']; ?></td>
                    </tr>
                <?php
                $i++;
                }
                ?>
            </tbody>
        </table>
        
    </div>
</section>
    
    <!-- service part end-->

    
    <!-- footer part start-->
    <footer class="footer_area padding_top">
        <div class="container">
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright_text">
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer part end-->

    <!-- jquery plugins here-->
    <!-- jquery -->
    <script src="<?php echo base_url()?>/assets/js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="<?php echo base_url()?>/assets/js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="<?php echo base_url()?>/assets/js/bootstrap.min.js"></script>
    <!-- counterup js -->
    <script src="<?php echo base_url()?>/assets/js/jquery.counterup.min.js"></script>
    <!-- waypoints js -->
    <script src="<?php echo base_url()?>/assets/js/waypoints.min.js"></script>
    <!-- easing js -->
    <script src="<?php echo base_url()?>/assets/js/jquery.magnific-popup.js"></script>
    <!-- particles js -->
    <script src="<?php echo base_url()?>/assets/js/owl.carousel.min.js"></script>
    <!-- custom js -->
    <script src="<?php echo base_url()?>/assets/js/custom.js"></script>
</body>

</html>

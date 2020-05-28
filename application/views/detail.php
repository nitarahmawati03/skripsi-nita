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
        <!-- <div class="sub_header">
            <div class="container">
                <div class="row align-items-center">
                     <div id="logo">
                        <img src="<?php echo base_url()?>/assets/img/logo.png" height="70" width="70" alt="" title="Bunnie"/>
                         <font size="5dp"> &nbsp; Bunnie Health Solution</font>
                      </div>
                  <!-- <div class="col-8 col-md-8 col-xl-6 ">
                      <div class="sub_header_social_icon float-right">

                      </div>
                    </div>
                </div>
            </div>
        </div> -->
        <div class="main_menu">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12" style="margin-top: 30px">
                        <nav class="navbar navbar-expand-lg navbar-light">
                             <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent" style="margin-left: 300px">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a href="<?php echo site_url('Pengelola/index')?>" class="nav-link">Kembali</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

    <!-- Header part end-->

    <!-- banner part start-->
   <!--  <section class="banner_part" id="home">
        <div class="container">
            <div style="margin-bottom: 700px">
                <div class="col-lg-7 col-xl-6">
                    <div class="banner_text">
                    <span style="font-family: Brush Script MT;">
                        <h1>Bunnie Health Solution</h1>
                        <p class="pt-20 pb-20">Mau mengetahui penyakit kelinci lebih detail?</p>
                    </span>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- banner part start-->

    <!-- about part start-->
    <!-- <section class="about_part section_padding" id="about">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md-6">

                    <div class="container">

                            <img src="<?php echo base_url()?>/assets/img/about.png" height="400" width="400"  alt="">

                    </div>
                </div>
                <div class="col-md-5">
                    <div class="about_text">

                         <img src="<?php echo base_url()?>/assets/img/about_icon.png" class="about_icon" height="40" width="40">
                        <h2>Sistem Pakar Kelinci</h2>
                        <p>Website ini digunakan untuk membantu para pemilik kelinci mendapat penanganan pertama jika kelinci terkena penyakit.</p>

                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- about part start-->

    <!-- service part start-->
    <section class="service_part section_padding services_bg" id="info">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section_tittle text-center">
                        <img src="<?php echo base_url()?>/assets/img/seo.png" height="100" width="100" alt="">
                        <h2>Info Penyakit</h2>
                    </div>
                </div>
            </div>

            <div class="row">
               
                        <div class="col-lg-12">
                            <div class="single-price">
                                <div class="top-sec d-flex justify-content-between">
                                    <div class="top-left">
                                        <h4><?php echo $penyakit[0]->nama_penyakit?></h4>
                                    </div>
                                    <div class="top-right">
                                        
                                    </div>
                                </div>
                                
                                <div class="end-sec">
                                    <ul>
                                        <?php echo $penyakit[0]->definisi?>
                                    </ul>
                                    
                                </div>                              
                            </div> 
                        </div>
                </div>
            </div>
        </section>
    
    <!-- service part end-->

    <!-- counter adopt number here -->
    <section class="abopt_number_counter section_padding" id="cek">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-5 col-md-6">
                    <div class="counter_text">
                        <h2>Pilih Gejala
                    </h2>
                        <p>Gejala 1 </p>
                        <p>Gejala 2 </p>
                        <p>Gejala 3 </p>
                        
                        <a href="#" class="btn_1">Pencarian</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                   
                </div>
            </div>
        </div>
    </section>
    <!-- counter adopt number end -->

     <!-- client review part here -->

    <section class="about_part section_padding" id="bantuan">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md-6">

                    <div class="container">

                            <img src="<?php echo base_url()?>/assets/img/steps.png" height="200" width="200"  alt="">

                    </div>

                   <!--  <div class="about_img">
                        <img src="img/about.png" alt="">
                    </div> -->
                </div>
                <div class="col-md-5">
                    <div class="about_text">

                        <!-- <img src="img/about_icon.png" class="about_icon" alt=""> -->
                        <h2>Bingung?</h2>
                        <p>Berikut tata cara penggunaan</p>
                        <p> 1. Pilih gejala yang sesuai </p>
                        <p> 2. Pilih "pencarian" </p>
                        <p> 3. Penyakit dan penanganan pertama akan muncul </p>
                        <p> 4. Jika hasil tidak sesuai, maka pilih "revisi". maka pakar akan merevisi hasinya</p>

                    </div>
                </div>
            </div>
        </div>
    </section>

    
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

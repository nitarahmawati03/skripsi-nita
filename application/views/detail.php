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
                                        <a href="<?php echo site_url('Pengelola/index#info')?>" class="nav-link">Kembali</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

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

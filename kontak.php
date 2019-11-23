<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Shoe Shop</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="assets/sunshine/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/style1.css">

    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="assets/divisima/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="assets/divisima/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="assets/divisima/css/jquery-ui.min.css"/>
    <link rel="stylesheet" href="assets/divisima/css/style.css"/>

    <script src="assets/divisima/js/jquery-3.2.1.min.js"></script>
    <script src="assets/divisima/js/bootstrap.min.js"></script>
    <script src="assets/divisima/js/main.js"></script>

   
    <script src="assets/sunshine/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="assets/sunshine/js/scrollIt.js"></script>
    <script src="assets/sunshine/js/jquery.scrollUp.min.js"></script>
    <script src="assets/sunshine/js/main.js"></script>
</head>
<body>

<div id="preloder">
        <div class="loader"></div>
    </div>

<?php
include("koneksi.php");
?>
<div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-3">
                            <div class="logo-img">
                                <a href="index.php">
                                    <img src="assets/sunshine/img/logo.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-9">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="index.php">Beranda</a></li>
                                        <li><a class="active" href="kontak.php">Kontak</a></li>
                                        <li><a href="about.php">About Us</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Page info -->
    <div class="page-top-info">
        <div class="container">
            <h4>Kontak</h4>
            <div class="site-pagination">
                <a href="">Beranda</a> /
                <a href="">Kontak</a>
            </div>
        </div>
    </div>

<!-- Contact section -->
    <section class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 contact-info">
                    <h3>Get in touch</h3>
                    <p>Jalan Gunung Putri Selatan RT 03 RW 07</p>
                    <p>+62 895 3913 343 98</p>
                    <p>kikidewadota@gmail.com</p>
                    <div class="contact-social">
                        <a href="https://www.instagram.com/kikiramdhani_/"><i class="fa fa-instagram"></i></a>
                        <a href="https://www.facebook.com/rizky.ramdhani.52"><i class="fa fa-facebook"></i></a>
                        <a href="https://twitter.com/kikiiramdhani"><i class="fa fa-twitter"></i></a>
                        
                    </div>
                    <form class="contact-form">
                        <input type="text" placeholder="Your name">
                        <input type="text" placeholder="Your e-mail">
                        <input type="text" placeholder="Subject">
                        <textarea placeholder="Message"></textarea>
                        <button class="site-btn">SEND NOW</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.4194801743733!2d106.88723961414004!3d-6.468426865043893!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c0220b8b7151%3A0xc27c61e1bbdffe4a!2sPT%20Restu%20Ibu%20Pusaka%20(karoseri)!5e0!3m2!1sid!2sid!4v1573405020772!5m2!1sid!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe></div>
    </section>

    <p style="margin-bottom:100px"></p>

    <!-- Footer section -->
    <section class="footer-section">
        <div class="container">
            <div class="footer-logo text-center">
                <a href="index.html"><img src="assets/sunshine/img/logo.png" alt=""></a>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="footer-widget about-widget">
                        <h2>About</h2>
                        <p>Donec vitae purus nunc. Morbi faucibus erat sit amet congue mattis. Nullam frin-gilla faucibus urna, id dapibus erat iaculis ut. Integer ac sem.</p>
                        <img src="img/cards.png" alt="">
                    </div>
                </div>
                
             <div class="col-sm-6">   
                <div class="social-links-warp">
                    <div class="container">
                        <div class="social-links">
                            <a href="" class="instagram"><i class="fa fa-instagram"></i><span>instagram</span></a>
                            <a href="" class="facebook"><i class="fa fa-facebook"></i><span>facebook</span></a>
                            <a href="" class="twitter"><i class="fa fa-twitter"></i><span>twitter</span></a>
                            <a href="" class="youtube"><i class="fa fa-youtube"></i><span>youtube</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --> 
                        <p class="text-white text-center mt-5">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
    </section>
    <!-- Footer section end -->

</body>
</html>
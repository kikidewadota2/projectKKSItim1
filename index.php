<html>
<head>

	<meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Shoe Shop</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="assets/sunshine/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/style1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="assets/divisima/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="assets/divisima/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="assets/divisima/css/jquery-ui.min.css"/>
    <link rel="stylesheet" href="assets/divisima/css/style.css"/>
    <link rel="stylesheet" href="assets/divisima/css/flaticon.css"/>

    <link href="assets/sierra/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/sierra/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/sierra/css/style.css" rel="stylesheet">
    <link href="assets/sierra/css/responsive.css" rel="stylesheet">

    <script src="assets/divisima/js/jquery-3.2.1.min.js"></script>
    <script src="assets/divisima/js/bootstrap.min.js"></script>
    <script src="assets/divisima/js/main.js"></script>

    <script src="assets/bootstrap/js/jquery-3.4.1.slim.min.js"></script>
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>

    <script src="assets/sunshine/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="assets/sunshine/js/scrollIt.js"></script>
    <script src="assets/sunshine/js/jquery.scrollUp.min.js"></script>
    <script src="assets/sunshine/js/main.js"></script>
</head>
<body style="background-color:#F5FFFA;">

	<div id="preloder">
        <div class="loader"></div>
    </div>

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
                                        <li><a class="active" href="index.php">Beranda</a></li>
                                       	<li><a href="kontak.php">Kontak</a></li>
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
			
	<?php 
		include('koneksi.php');
	    $slider = mysqli_query($conn,"SELECT * FROM produk WHERE kategori='slide' ORDER BY nama ASC");
	 ?>
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
		<?php 
		  	$no = 0;
			for($no;$no<5;$no++){
		?>
			<li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $no ?>" class="<?php if($no == 0){echo 'active';}else{echo 'notactive';}?>"></li>
			<?php 
				}
			?>
		</ol>
		<div class="carousel-inner">
			<?php 
				$no = 0;
				while($row = mysqli_fetch_array($slider)){
			?>

			<div class="carousel-item <?php if($no == 0){echo 'active';}else{echo 'notactive';}?>">
			    <img style="" class="d-block w-100" src="file/<?php echo $row['gambar']?>" width="800" height="460">
			</div>
			<?php 
				$no++;}
			?>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
	<br>
	<?php
    	$slider2 = mysqli_query($conn,"SELECT * FROM produk WHERE kategori = 'nike' ORDER BY nama DESC")
    ?>
	<!-- Product filter section -->
	<section class="product-filter-section">
		<div class="container">
			<div class="section-title">
				<h2>Produk Terlaris Nike</h2>
			</div>
			<div class="row">
				<?php 
					$no = 0;
					while($row = mysqli_fetch_array($slider2)){
				?>
				<div class="col-lg-3 col-sm-6">
					<div class="product-item">
						<div class="pi-pic">
							<a href="detail_produk.php?id=<?php echo $row['kode_produk'];?>">
								<img src="file/<?php echo $row['gambar']?>" width="300" height="400" alt="">
							</a>
							<div class="pi-links">
								<a href="detail_produk.php?id=<?php echo $row['kode_produk'];?>" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
								<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
							</div>
						</div>
						<div class="pi-text">
							<h6>Rp. <?php echo $row['harga']?>,-</h6>
							<p><?php echo $row['nama']?> </p>
						</div>
					</div>
				</div>
				<?php 
					$no++;}
				?>
			</div>
			<div class="text-center pt-5">
				<button class="site-btn sb-line sb-dark">LOAD MORE</button>
			</div>
		</div>
<br>
		<?php
    	$slider3 = mysqli_query($conn,"SELECT * FROM produk WHERE kategori = 'adidas' ORDER BY nama DESC")
    ?>
		<div class="container">
			<div class="section-title">
				<h2>Produk Terlaris Adidas</h2>
			</div>
			<div class="row">
				<?php 
					$no = 0;
					while($row = mysqli_fetch_array($slider3)){
				?>
				<div class="col-lg-3 col-sm-6">
					<div class="product-item">
						<div class="pi-pic">
							<a href="detail_produk.php?id=<?php echo $row['kode_produk'];?>">
								<img src="file/<?php echo $row['gambar']?>" width="300" height="400" alt="">
							</a>
							<div class="pi-links">
								<a href="detail_produk.php?id=<?php echo $row['kode_produk'];?>" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
								<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
							</div>
						</div>
						<div class="pi-text">
							<h6>Rp. <?php echo $row['harga']?>,-</h6>
							<p><?php echo $row['nama']?> </p>
						</div>
					</div>
				</div>
				<?php 
					$no++;}
				?>
			</div>
			<div class="text-center pt-5">
				<button class="site-btn sb-line sb-dark">LOAD MORE</button>
			</div>
		</div>
	</section>
	<!-- Product filter section end -->
<?php
    	$slider4 = mysqli_query($conn,"SELECT * FROM produk ORDER BY nama DESC")
    ?>
	<!--================Portfolio Area =================-->
		<div class="section-title">
				<h2>Our Gallery</h2>
			</div>
        <section class="portfolio_area">
            <div class="container">
                <div class="portfolio_filter">
                    <ul>
                        <li class="active" data-filter="*"><a href="#">All</a></li>
                        <li data-filter=".nike"><a href="#">Nike</a></li>
                        <li data-filter=".adidas"><a href="#">Adidas</a></li>

                    </ul>
                </div>
            </div>
            <div class="ms_portfolio_inner">
            	<?php 
					$no = 0;
					while($row = mysqli_fetch_array($slider4)){
				?>
                <div class="ms_p_item wd_25 <?php echo $row['kategori']?>">
                    <img src="file/<?php echo $row['gambar']; ?>" alt="" width="150" height="150">
                </div>
                <?php 
					$no++;}
				?>
              
            </div>
        </section>
        <!--================End Portfolio Area =================-->

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

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="assets/sierra/js/jquery-3.2.1.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="assets/sierra/js/popper.min.js"></script>
        <script src="assets/sierra/js/bootstrap.min.js"></script>
        <!-- Rev slider js -->

        <script src="assets/sierra/vendors/counterup/jquery.counterup.min.js"></script> 

        <script src="assets/sierra/js/smoothscroll.js"></script>

        <script src="assets/sierra/vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="assets/sierra/vendors/isotope/isotope.pkgd.min.js"></script>
        
        <script src="assets/sierra/js/circle-active.js"></script>
        <script src="assets/sierra/js/theme.js"></script>
</body>
</html>
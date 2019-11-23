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

    <script src="assets/sunshine/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="assets/sunshine/js/scrollIt.js"></script>
    <script src="assets/sunshine/js/jquery.scrollUp.min.js"></script>
    <script src="assets/sunshine/js/main.js"></script>

    <link rel="stylesheet" href="assets/divisima/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="assets/divisima/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="assets/divisima/css/jquery-ui.min.css"/>
    <link rel="stylesheet" href="assets/divisima/css/style.css"/>
    <link rel="stylesheet" href="assets/divisima/style.scss"/>

    <script src="assets/divisima/js/jquery-3.2.1.min.js"></script>
    <script src="assets/divisima/js/bootstrap.min.js"></script>
    <script src="assets/divisima/js/main.js"></script>
</head>
<body>

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
  include('koneksi.php')
?>
<?php
  $no = $_GET['id'];
?>
<!-- product section -->
  <section class="product-section">
    <div class="container">
      <div class="back-link">
        <a href="./index.php"> &lt;&lt; Kembali ke beranda</a>
      </div>
      <div class="row">
        <?php
          $data = mysqli_query($conn, "SELECT * from produk where kode_produk='$no'");
          while($d = mysqli_fetch_array($data)) { 
        ?>
        <div class="col-lg-6">
          <div class="product-pic-zoom">
            <img class="product-big-img" src="file/<?php echo $d['gambar'] ?>" alt="">
          </div>
          <div class="product-thumbs" tabindex="1" style="overflow: hidden; outline: none;">
            <div class="product-thumbs-track">
              <div class="pt active" data-imgbigurl="file/<?php echo $d['gambar'] ?>"><img src="file/<?php echo $d['gambar'] ?>" alt=""></div>
              <div class="pt" data-imgbigurl="file/<?php echo $d['gambar'] ?>"><img src="file/<?php echo $d['gambar'] ?>" alt=""></div>
              <div class="pt" data-imgbigurl="file/<?php echo $d['gambar'] ?>"><img src="file/<?php echo $d['gambar'] ?>" alt=""></div>
              <div class="pt" data-imgbigurl="file/<?php echo $d['gambar'] ?>"><img src="file/<?php echo $d['gambar'] ?>" alt=""></div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 product-details">
          <h2 class="p-title"><?php echo $d['nama'] ?></h2>
          <h3 class="p-price"><?php echo $d['harga'] ?></h3>
          <h4 class="p-stock">Available: <span>In Stock</span></h4>
          <div class="p-rating">
            <i class="fa fa-star-o"></i>
            <i class="fa fa-star-o"></i>
            <i class="fa fa-star-o"></i>
            <i class="fa fa-star-o"></i>
            <i class="fa fa-star-o fa-fade"></i>
          </div>
          <div class="p-review">
            <a href="">3 reviews</a>|<a href="">Add your review</a>
          </div>
          <div class="fw-size-choose">
            <p>Size</p>
            <div class="sc-item">
              <input type="radio" name="sc" id="xs-size">
              <label for="xs-size">32</label>
            </div>
            <div class="sc-item">
              <input type="radio" name="sc" id="s-size">
              <label for="s-size">34</label>
            </div>
            <div class="sc-item">
              <input type="radio" name="sc" id="m-size" checked="">
              <label for="m-size">36</label>
            </div>
            <div class="sc-item">
              <input type="radio" name="sc" id="l-size">
              <label for="l-size">38</label>
            </div>
            <div class="sc-item disable">
              <input type="radio" name="sc" id="xl-size" disabled>
              <label for="xl-size">40</label>
            </div>
            <div class="sc-item">
              <input type="radio" name="sc" id="xxl-size">
              <label for="xxl-size">42</label>
            </div>
          </div>
          <div class="quantity">
            <p>Quantity</p>
                        <div class="pro-qty"><input type="text" value="1"></div>
                    </div>
          <a href="#" class="site-btn" data-toggle="modal" data-target="#exampleModal">SHOP NOW</a>
          <div id="accordion" class="accordion-area">
            <div class="panel">
              <div class="panel-header" id="headingOne">
                <button class="panel-link active" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">information</button>
              </div>
              <div id="collapse1" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="panel-body">
                  <?php echo $d['keterangan'] ?>  
                </div>
              </div>
            </div>
            <div class="panel">
              <div class="panel-header" id="headingTwo">
                <button class="panel-link" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">care details </button>
              </div>
              <div id="collapse2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                <div class="panel-body">
                  <img src="./img/cards.png" alt="">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pharetra tempor so dales. Phasellus sagittis auctor gravida. Integer bibendum sodales arcu id te mpus. Ut consectetur lacus leo, non scelerisque nulla euismod nec.</p>
                </div>
              </div>
            </div>
            <div class="panel">
              <div class="panel-header" id="headingThree">
                <button class="panel-link" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">shipping & Returns</button>
              </div>
              <div id="collapse3" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                <div class="panel-body">
                  <h4>7 Days Returns</h4>
                  <p>Cash on Delivery Available<br>Home Delivery <span>3 - 4 days</span></p>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pharetra tempor so dales. Phasellus sagittis auctor gravida. Integer bibendum sodales arcu id te mpus. Ut consectetur lacus leo, non scelerisque nulla euismod nec.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="social-sharing">
            <a href=""><i class="fa fa-facebook"></i></a>
            <a href=""><i class="fa fa-twitter"></i></a>
            <a href=""><i class="fa fa-youtube"></i></a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php 
    }
  ?>
  <!-- product section end -->
<form method="post" action="transaksi.php">
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Isi Data Pembeli</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      	<div class="modal-body" bg-color="blue">
      		<?php
      			$no = $_GET['id'];
      		 ?>
      		<td width="138"><input name="no" type="hidden" id="num" value="<?php echo $no; ?>" size="20" /></td>	
          	<label>Nama Pembeli</label>
          	<input class="form-control" name="nama" type="text" id="kode" size="20" />
      			<label>Jumlah</label>
      			<input class="form-control" name="jumlah" type="number" id="barang" size="20" />	
      			<label>Keterangan</label>
      			<input class="form-control" name="ket" type="text"  id="harga" size="20" />	
      			<label>No HP</label>
      			<input class="form-control" name="nohp" type="text"  id="harga" size="20" />
          	<label>Alamat</label>
          	<textarea class="form-control" name="alamat" type="text"  id="ket" size="20" rows="4" cols="50" /></textarea>
      	</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary" value="Kirim">
      </div>
    </div>
  </div>
</div>
</form>
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
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

    <script src="assets/sunshine/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="assets/sunshine/js/scrollIt.js"></script>
    <script src="assets/sunshine/js/jquery.scrollUp.min.js"></script>
    <script src="assets/sunshine/js/main.js"></script>
</head>
<body background="image/bg.png">
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
<center><h1>UPLOAD PRODUK</h1></center>
<div class="container">
	<div class="row">
		<div class="col-md-6 offset-md-3">

		<form action="tambah_gambar2.php" method="post" enctype="multipart/form-data">
			<table width="319" border="0" class="table table-dark">
        <tr>
          <td width="152">Kode Produk</td>
          <td width="157"><input name="kode" type="text" id="kode" size="20" /></td>
        </tr>
				<tr>
					<td width="152">Nama Produk</td>
					<td width="157"><input name="nama" type="text" id="barang" size="20" /></td>
				</tr>
				<tr>
					<td width="152">Harga</td>
					<td width="157"><input name="harga" type="text"  id="harga" size="20" /></td>
				</tr>
        <tr>
          <td width="152">Kategori</td>
          <td width="157"><input name="kategori" type="text"  id="kategori" size="20" /></td>
        </tr>
        <tr>
          <td width="152">Keterangan</td>
          <td width="157"><textarea name="ket" type="text"  id="ket" size="20" rows="4" cols="50" /></textarea></td>
        </tr>
        <tr>
          <td width="152">Pilih Gambar</td>
          <td width="157"><input type="file" name="file"></td>
        </tr>     
				<tr>
					<td width="92"><input type="submit" class="btn btn-primary" name="upload" value="Upload"></td>
					<td width="92"><a href="index.php" class="btn btn-warning" type="button">Batal</a></button></td>
				</tr>
			</table>

<br>


		</form>

	</div>
	</div>
</div>


</body>
</html>
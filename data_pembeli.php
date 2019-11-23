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

	<center><h3>DATA PEMBELI</h3></center>
	<?php 
	if (!empty($_GET['update'])){
		if ($_GET['update']==1)
			echo "<p class='message'> <h4>Data barang berhasil diupdate</h4></p>";
		else if ($_GET['update']==2)
			echo "<p class='message'> <h4>Data barang berhasil ditambahkan</h4></p>";
		else if ($_GET['update']==3)
			echo "<p class='message'> <h4>Data barang berhasil dihapus</h4></p>";
	}?>

	<?php
		$no=1;
		$sqlCount = "select count(kodetx) from transaksi";
		$query = mysqli_query($conn,$sqlCount) or die(mysqli_error($conn));
		$rsCount = mysqli_fetch_array($query);
		$banyakData = $rsCount[0];
		$page = isset($_GET['page']) ? $_GET['page'] : 1;
		$limit = 15;
		$mulai_dari = $limit * ($page - 1);
		$sql_limit = "select transaksi.kode_produk, transaksi.nama_pembeli, transaksi.jumlah_beli, transaksi.keterangan, transaksi.nohp, transaksi.alamat, transaksi.tanggal_beli, produk.gambar from transaksi, produk where produk.kode_produk=transaksi.kode_produk order by kodetx limit $mulai_dari, $limit";
		$hasil = mysqli_query($conn, $sql_limit) or die(mysqli_error($conn));
		if(mysqli_num_rows($hasil)==0){
			echo "<p class='message'>Data tidak ditemukan!</p>";
		}
	?>

		<table class="table table-dark">
			<thead>
				<tr class="success">
					<td>No</td>
					<td>Kode Produk</td>
					<td>Nama Pembeli</td>
					<td>Jumlah</td>
					<td>Keterangan</td>
					<td>No HP</td>
					<td>Alamat</td>
					<td>Tanggal Beli</td>
				</tr>
			</thead>
		<tbody>

	<?php 
		$no=$no+(($page-1)*$limit);
		//Buang field ke dalam array
		while ($data=mysqli_fetch_array($hasil)){
	?>
	
		<tr class="success">
			<td><?php echo $no;?></td>
			<td><a href="file/<?php echo $data['gambar'] ?>"><?php echo $data[0]; ?></a></td>
			<td><?php echo $data[1]; ?></td>
			<td><?php echo $data[2]; ?></td>
			<td><?php echo $data[3]; ?></td>
			<td><?php echo $data[4]; ?></td>
			<td><?php echo $data[5]; ?></td>
			<td><?php echo $data[6]; ?></td>
		</tr>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    	
      <div class="modal-header">
     
        <h5 class="modal-title" id="exampleModalLabel">Gambar Untuk <?php echo $data[0] ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      	<div class="modal-body" bg-color="blue">
      		<div class="container">
      		<img src="file/<?php echo $data['gambar'] ?>" width="100%">
      		</div>
      	</div>
    </div>
  </div>
</div>
		
	<?php 
		$no++;
		}
	?>




	</tbody>
	</table>


	<ul class="pagination justify-content-end">

	<?php
		$banyakHalaman = ceil($banyakData / $limit);
		
			for($i = 1; $i <= $banyakHalaman; $i++){
				if($page != $i){
					echo '<li class="page-item"><a class="page-link" href="data_pembeli.php?page='.$i.'">Page '.$i.'</a></li> ';
				}else{
					echo '<li class="page-item"><a class="page-link" href="#">Page '.$i.'</a></li> ';
				}
			}
	?>
	</ul>


	</body>
	</html>
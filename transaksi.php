<?php
include("koneksi.php");
$kode=$_POST['no'];
$nama=$_POST['nama'];
$jumlah=$_POST['jumlah'];
$keterangan=$_POST['ket'];
$nohp=$_POST['nohp'];
$alamat=$_POST['alamat'];
$timezone = time() + (60 * 60 * 7);
$date = gmdate('m-d-Y H:i:s', $timezone);
$input="insert into 
transaksi(kodetx, kode_produk, nama_pembeli, jumlah_beli, keterangan, nohp, alamat, tanggal_beli) 
values (NULL, '$kode','$nama', '$jumlah', '$keterangan','$nohp','$alamat','$date')";

if ($nama=="" or $jumlah=="" or $keterangan=="" or $nohp=="" or $alamat==""){
	echo '<script type="text/javascript"> 
			var answer = alert("Data masih belum lengkap") window.location = "detail_produk.php";
		 </script>';
}else{
	$hasil=mysqli_query($conn,$input);
		if ($hasil){
			header('location:index.php?update=2');
		}else{
			echo '<script type="text/javascript">
					var answer = alert("Sudah ada siswa dengan nama tersebut") window.location = "detail_produk.php";
				</script>';
		}
}
?>
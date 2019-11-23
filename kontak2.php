<?php
include("koneksi.php");
ini_set("SMTP","ssl://smtp.gmail.com");
ini_set("smtp_port","465");
error_reporting( E_ALL );    
$nama=htmlentities($_POST['nama']);
$from = htmlentities($_POST['email']);    
$to = "kikidewadota@gmail.com";    
$subjek = htmlentities($_POST['subjek']);  
$masukan = htmlentities($_POST['masukan']);
$headers = "From:" . $from;    
 
if ($nama=="" or $from=="" or $to=="" or $subjek=="" or $masukan==""){
	echo '<script type="text/javascript"> 
			var answer = alert("Data masih belum lengkap") window.location = "tambah_siswa.php";
		 </script>';
}else{
		if (mail($to,$subjek,$masukan, $headers)){
			header('location:data_siswa.php?update=2');
			echo '<script type="text/javascript">
					var answer = alert("Pesan telah terkirim");
				</script>';
		}else{
			echo '<script type="text/javascript">
					var answer = alert("Sudah ada siswa dengan nama tersebut") window.location = "index.php";
				</script>';
		}
}
?>
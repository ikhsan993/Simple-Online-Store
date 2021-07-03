<?php 
include 'koneksi.php';
session_start();
if (!empty($_SESSION['namauser']) and !empty($_SESSION['passuser'])) {	
$nama=$_POST['nama'];
$sqlnm=mysql_query("update member set nama='$nama' where username='$_SESSION[namauser]'");
if ($sqlnm) {
	echo "Update Nama Sukses!!!";
	echo "<meta http-equiv='refresh' content='1;url=index.php?p=profil'>";
}
else{
	echo "Update Nama Gagal!!!";
		echo "<meta http-equiv='refresh' content='1;url=index.php?p=profil'>";
}
}
?>
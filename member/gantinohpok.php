<?php 
include 'koneksi.php';
session_start();
if (!empty($_SESSION['namauser']) and !empty($_SESSION['passuser'])) {	
$nama=$_POST['nohp'];
$sqlnm=mysql_query("update member set nohp='$nohp' where username='$_SESSION[namauser]'");
if ($sqlnm) {
	echo "Update Kontak Sukses!!!";
	echo "<meta http-equiv='refresh' content='1;url=index.php?p=profil'>";
}
else{
	echo "Update Kontak Gagal!!!";
		echo "<meta http-equiv='refresh' content='1;url=index.php?p=profil'>";
}
}
?>
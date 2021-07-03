<?php 
include 'koneksi.php';
session_start();
if (!empty($_SESSION['namauser']) and !empty($_SESSION['passuser'])) {	
$email=$_POST['email'];
$sqlnm=mysql_query("update member set email='$email' where username='$_SESSION[namauser]'");
if ($sqlnm) {
	echo "Update Email Sukses!!!";
	echo "<meta http-equiv='refresh' content='1;url=index.php?p=profil'>";
}
else{
	echo "Update Email Gagal!!!";
		echo "<meta http-equiv='refresh' content='1;url=index.php?p=profil'>";
}
}
?>
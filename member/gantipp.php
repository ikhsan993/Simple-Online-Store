<?php 
include 'koneksi.php';
session_start();
if (!empty($_SESSION['namauser']) and !empty($_SESSION['passuser'])) {	
$photo = $_FILES['pp']['name'];
$lokphoto = $_FILES['pp']['tmp_name'];

move_uploaded_file($lokphoto, "../pp/$photo");

$sqlpp=mysql_query("update member set pp='$photo' where username='$_SESSION[namauser]'");
if ($sqlpp) {
	echo "Update Photo Sukses!!!";
	echo "<meta http-equiv='refresh' content='1;url=index.php?p=profil'>";
}
else{
	echo "Update Photo Gagal!!!";
		echo "<meta http-equiv='refresh' content='1;url=index.php?p=profil'>";
}
}
?>
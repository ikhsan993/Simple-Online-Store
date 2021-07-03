<?php 
include 'koneksi.php';
session_start();
if (!empty($_SESSION['namauser']) and !empty($_SESSION['passuser'])) {	
$alamat=$_POST['alamat'];
$sqlnm=mysql_query("update member set alamat='$alamat' where username='$_SESSION[namauser]'");
if ($sqlnm) {
	echo "<fieldset>Update Alamat Pengiriman Sukses!!!</fieldset>";
	echo "<meta http-equiv='refresh' content='1;url=index.php?p=profil'>";
}
else{
	echo  "Update Alamat Pengiriman Gagal!!!";
		echo "<meta http-equiv='refresh' content='1;url=index.php?p=profil'>";
}
}
?>
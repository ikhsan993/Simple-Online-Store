<?php 
include 'koneksi.php';
session_start();
if (!empty($_SESSION['namaadm']) and !empty($_SESSION['passadm'])) { 
	
$ft = $_FILES['foto']['name'];
$lokft = $_FILES['foto']['tmp_name'];

move_uploaded_file($lokft, "../fotoproduk/$ft");
$sqlft=mysql_query("update produk set foto='$ft' where idproduk='$_POST[idp]'");
if ($sqlft) {
	echo "Ganti Foto Sukses!!!";
	echo "<meta http-equiv='refresh' content='1;url=index.php?p=produk'>";
}
else{
	echo "Ganti Foto Gagal!!!";
		echo "<meta http-equiv='refresh' content='1;url=index.php?p=produk'>";
}
}
?>
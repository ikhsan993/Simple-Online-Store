<?php
include 'koneksi.php';
session_start();
if (!empty($_SESSION['namaadm']) and !empty($_SESSION['passadm'])) {
$idpromo=$_POST['idpromo'];		
$hargapromo=$_POST['hargapromo'];
$sqledit=mysql_query("update promo set hargapromo='$hargapromo' where idpromo='$idpromo'");
$sqlpr=mysql_query("update produk set hargapromo='$hargapromo' where idproduk='$_POST[idproduk]'");
if ($sqledit && $sqlpr) {
	echo "Edit Promo Sukses!!!";
	echo "<meta http-equiv='refresh' content='0;url=index.php?p=promo'>";
}
else{	echo "Edit Promo Gagal!!!";
	echo "<meta http-equiv='refresh' content='0;url=index.php?p=promo'>";}
}
else{
include 'login.php';
}	
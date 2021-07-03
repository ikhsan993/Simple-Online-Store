<?php 
include 'koneksi.php';
session_start();
if (!empty($_SESSION['namaadm']) and !empty($_SESSION['passadm'])) {	
$sqldlt=mysql_query("delete from promo where idpromo='$_GET[idpromo]'");
$sqlpr=mysql_query("update produk set hargapromo='0' where idproduk='$_GET[idproduk]'");
if ($sqldlt and $sqlpr) {
	echo "<meta http-equiv='refresh' content='0;url=index.php?p=promo'> ";
	echo "Delete Pormo Sukses!!!";
}
else{	echo "Delete Promo Gagal!!!";
	echo "<meta http-equiv='refresh' content='0;url=index.php?p=promo'>";}
}
else{
include 'login.php';	
}
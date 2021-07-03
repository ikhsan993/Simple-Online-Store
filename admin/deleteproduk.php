<?php 
include 'koneksi.php';
session_start();
if (!empty($_SESSION['namaadm']) and !empty($_SESSION['passadm'])) {	
$sqldlt=mysql_query("delete from produk where idproduk='$_GET[idproduk]'");
if ($sqldlt) {
	echo "Delete Data Sukses!!!";
	echo "<meta http-equiv='refresh' content='0;url=index.php?p=produk'>";
}
else{	echo "Delete Data Gagal!!!";
	echo "<meta http-equiv='refresh' content='0;url=index.php?p=produk'>";}
}
else{
echo "<meta http-equiv='refresh' content='0;url=login.php'>";;	
}
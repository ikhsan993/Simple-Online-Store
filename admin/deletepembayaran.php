<?php 
include 'koneksi.php';
session_start();
if (!empty($_SESSION['namaadm']) and !empty($_SESSION['passadm'])) {	
$sqldlt=mysql_query("delete from pesanan where idorder='$_GET[idorder]'");
if ($sqldlt) {
	echo "Delete Data Sukses!!!";
	echo "<meta http-equiv='refresh' content='0;url=index.php?p=pemesanan'>";
}
else{	echo "Delete Data Gagal!!!";
	echo "<meta http-equiv='refresh' content='0;url=index.php?p=pemesanan'>";}
}
else{
echo "<meta http-equiv='refresh' content='0;url=login.php'>";;	
}
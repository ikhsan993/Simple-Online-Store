<?php
include 'koneksi.php';
session_start();
if (!empty($_SESSION['namaadm']) and !empty($_SESSION['passadm'])) {
$idp=$_POST['idp'];	
$judul=$_POST['nama'];
$stok=$_POST['stok'];
$harga=$_POST['harga'];
$ket=$_POST['keterangan'];
$idadmin=$_POST['idadmin'];
$sqledit=mysql_query("update produk set nama='$nama',
stok='$stok',
harga='$harga',
keterangan='$ket',
idadmin='$idadmin' where idproduk='$idp'");
if ($sqledit) {
	echo "Edit Data Sukses!!!";
	echo "<meta http-equiv='refresh' content='0;url=index.php?p=produk'>";
}
else{	echo "Edit Data Gagal!!!";
	echo "<meta http-equiv='refresh' content='0;url=index.php?p=produk'>";}
}
else{
	echo "<meta http-equiv='refresh' content='0;url=login.php'>";
}	
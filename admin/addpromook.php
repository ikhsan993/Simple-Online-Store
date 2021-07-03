<?php
session_start();
include 'koneksi.php';

$idproduk=$_POST['idproduk'];
$nama=$_POST['nama'];
$harga=$_POST['harga'];
$foto=$_POST['foto'];
$hargapromo=$_POST['hargapromo'];

$sqlprm=mysql_query("insert into promo(idproduk,nama,harga,foto,hargapromo,tinput) values
('$idproduk','$nama','$harga','$foto','$hargapromo',NOW()) ");
$pr=mysql_query("update produk set hargapromo='$hargapromo' where idproduk='$idproduk'");
if ($sqlprm and $pr) {
	echo "Input Data Sukses!!!";
	echo "<meta http-equiv='refresh' content='0;url=index.php?p=promo'>";
}
else{
	echo "Input Data Gagal!!!";
	echo "<meta http-equiv='refresh' content='0;url=index.php?p=promo'>";
}
?>
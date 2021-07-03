<?php
session_start();
include 'koneksi.php';
$sqladm=  mysql_query("select *  from admin where username='$_SESSION[namaadm]'");
$radm= mysql_fetch_array($sqladm);

$nama=$_POST['nama'];
$harga=$_POST['harga'];
$stok=$_POST['stok'];
$ket=$_POST['keterangan'];

$ft = $_FILES['foto']['name'];
$lokft = $_FILES['foto']['tmp_name'];

move_uploaded_file($lokft, "../fotoproduk/$ft");


$sqlpr=mysql_query("insert into produk(nama,foto,harga,stok,keterangan,idadmin,tinput) values
('$nama','$ft','$harga','$stok','$ket','$radm[idadmin]',NOW()) ");
if ($sqlpr) {
	echo "Input Data Sukses!!!";
	echo "<meta http-equiv='refresh' content='0;url=index.php?p=produk'>";
}
else{
	echo "Input Data Gagal!!!";
	echo "<meta http-equiv='refresh' content='0;url=index.php?p=produk'>";
}
?>
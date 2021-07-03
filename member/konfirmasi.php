<?php
include "koneksi.php";

// Fungsi untuk mengambil semua isi keranjang belanja
function isi_keranjang(){
	$isikeranjang = array();
	$sqlc = mysql_query("select * from cart where idmember='$_POST[idm]'");
	while($rc = mysql_fetch_array($sqlc)){
		$isikeranjang[] = $rc;
	}
	return $isikeranjang;
}

// Simpan Data Order / Pesanan
mysql_query("insert into pesanan (idmember, alamat,total, torder) values ('$_POST[idm]', '$_POST[alamat]','$_POST[total]', NOW())");

// $Mendapatkan No. Order
$idorder = mysql_insert_id();

// Memanggil funsi dan hitung produk yang dipesan
$isikeranjang = isi_keranjang();
$jml = count($isikeranjang);
$idm =$_POST['idm'];
// Menyimpan Data Order Detail
for($i=0; $i<$jml; $i++){
	mysql_query("insert into detailpesanan (idorder, idproduk,idmember,jumlahbeli) values ('$idorder', {$isikeranjang[$i]['idproduk']},$idm,{$isikeranjang[$i]['jumlah']})");
}

// Menghapus Data dari Keranjang Belanja
for($i=0; $i<$jml; $i++){
	mysql_query("delete from cart where idcart={$isikeranjang[$i]['idcart']}");
}
echo "<meta http-equiv='refresh' content='0;url=index.php?p=pesanan'>";
?>
<?php
include "koneksi.php";
$sqlpr = mysql_query("select * from produk where idproduk='$_GET[idpr]'");
$rpr = mysql_fetch_array($sqlpr);
$sqlmb = mysql_query("select * from member where username='$_SESSION[namauser]'");
$rmb = mysql_fetch_array($sqlmb);
$nama= $rpr['nama'];
$harga= number_format($rpr['harga'],0,",",".");
$hargapromo =number_format($rpr['hargapromo'],0,",",".");
$stok=$rpr['stok'];
echo " <h4> Detail Produk </h4>
<div class='gambar'> <img src='../fotoproduk/$rpr[foto]'></div>
<div class='ket'> 
<p>Nama Barang  : $nama </p>
<p>Harga Barang : Rp. $harga </p>
<p>Stok Barang &nbsp; :  $rpr[stok] </p>
";
if ($hargapromo !=0) { echo "<p>Harga Promo    : Rp. $hargapromo </p>";
}
echo "
<p>Keterangan   : $rpr[keterangan]</p>";
if ($stok!=0) {
echo "<p>Stok :$stok</p>
	  	<a href='index.php?p=keranjang&idpr=$rpr[idproduk]&idm=$rmb[idmember]'><button type='button' class='btn btn-more'>Beli</button></a>";}
else{echo "<p class='habis'>Stok : Kosong </p>
	  	<a href='#'><button type='button' class='btn'>Beli</button></a>";
		}
echo "</div>";			
?>
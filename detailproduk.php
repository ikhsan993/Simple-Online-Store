<?php
include "koneksi.php";
$sqlpr = mysql_query("select * from produk where idproduk='$_GET[idpr]'");
$rpr = mysql_fetch_array($sqlpr);
$sqlmb = mysql_query("select * from member where username='$_SESSION[namauser]'");
$nama= $rpr['nama'];
$harga= number_format($rpr['harga'],0,",",".");
$hargapromo =number_format($rpr['hargapromo'],0,",",".");
echo " <h4> Detail Produk </h4>
<div class='gambar'> <img src='fotoproduk/$rpr[foto]'></div>
<div class='ket'> 
<p>Nama Barang  : $nama </p>
<p>Harga Barang : Rp. $harga </p>
<p>Stok Barang &nbsp; :  $rpr[stok] </p>
";
if ($hargapromo !=0) { echo "<p>Harga Promo    : Rp. $hargapromo </p>";
}
echo "
<p>Keterangan   : $rpr[keterangan]</p>
<a href='index.php'><button type='button' class='btn btn-more'>Home</button></a>
</div>
";
?>
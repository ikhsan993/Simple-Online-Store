<h4> Latest Produk </h4>
<?php
include "koneksi.php";
$sqlpr = mysql_query("select * from produk order by tinput desc limit 9");
while($rpr = mysql_fetch_array($sqlpr)){
$sqmb = mysql_query("select * from member where username='$_SESSION[namauser]'");
$rmb = mysql_fetch_array($sqmb);
$nama = ucwords($rpr["nama"]);
$nm =substr($nama, 0,43);
$harga= number_format($rpr['harga'],0,",",".");
$hargapromo=number_format($rpr['hargapromo'],0,",",".");
$stok=$rpr['stok'];
?>
	<div class='produk'> <div class='judul'><?php echo "$nm"; ?></div>
		 <?php echo " <img src='../fotoproduk/$rpr[foto]'><br>";
 if ($hargapromo ==0) {
 		 echo "Rp. $harga";
 		 }
else{echo "<div class='coret'>Rp. $harga</div>";
	 echo "<div class='harga'>Rp. $hargapromo</div>";
	}
if ($stok!=0) {
	echo "<p>Stok :$stok</p> ";

	   echo " <a href='?p=detailproduk&idpr=$rpr[idproduk]'><button type='button' class='btn btn-more'>Detail</button></a>
	  		  <a href='index.php?p=keranjang&idpr=$rpr[idproduk]&idm=$rmb[idmember]'><button type='button' class='btn btn-more'>Beli</button></a>";}
else{echo "<p class='habis'>Stok : Kosong </p>";
echo " <a href='?p=detailproduk&idpr=$rpr[idproduk]'><button type='button' class='btn btn-more'>Detail</button></a>
	  		  <a href='#'><button type='button' class='btn'>Beli</button></a>";
		}	
echo "</div>";	 
}?>
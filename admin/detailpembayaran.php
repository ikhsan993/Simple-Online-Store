<?php
include 'koneksi.php';
$id=$_GET['idorder'];
$sqlo=mysql_query("select * from detailpesanan where idorder ='$id'");
$sqlby=mysql_query("select * from bayar where idbayar ='$_GET[idbayar]'");
$by=mysql_fetch_array($sqlby);
$jml=mysql_num_rows($sqlo);
$tgl=substr($by['tgl'], 0,10);

echo "<h4>Detail Pembayaran</h4>";
echo "<div id='view'>";
echo "<fieldset>";
echo "
<h3> Detail data pembayaran : </h3> 
<div class='profil'>
<p></p>
<p> Id Bayar : $by[idbayar] </p>
<p> Id Order : $by[idorder] </p>
<p> Id Member : $by[idmember] </p>
<p> Tgl Konfirmasi : $tgl </p>
<p> Nomor Rekening : $by[norek] </p>
<p> Nama Pengirim : $by[nama] </p>
<p> Jumlah Transfer : Rp. $by[jumlah] </p>";
if (!empty ($by['bb'])) {
echo "<h3> Bukti Pembayaran : </h3>
<center><img width='300px' height='400px' src='..//bb/$by[bb]'></center>
";	
}
echo "</div>";

echo "<h3> Detail Pemesanan : </h3>";
	echo "<table border='0'>";
	echo "<tr>";
		echo "<th>No.</th>";
		echo "<th>Foto</th>";
		echo "<th>Nama Produk</th>";
		echo "<th>Jumlah</th>";
		echo "<th>Harga</th>";
		echo "<th>Sub Total</th>";
	echo "</tr>";
	$no=1;	
	while ($ro=mysql_fetch_array($sqlo)) {
	$sqlpr = mysql_query("select * from produk where idproduk=$ro[idproduk]");
	$rpr = mysql_fetch_array($sqlpr);
	if ($rpr['hargapromo']==0) {
		$harga=$rpr['harga'];}
	else{$harga=$rpr['hargapromo'];}
	$subtotal = $harga * $ro['jumlahbeli'];
	$total = $total + $subtotal;
		echo "<tr>";
			echo "<td>$no </td>";
			echo "<td><img src='../fotoproduk/$rpr[foto]' width='100px'></td>";
			echo "<td>$rpr[nama]</td>";
			echo "<td>$ro[jumlahbeli]</td>";
			echo "<td>Rp. $harga</td>";
			echo "<td>Rp. $subtotal</td>";
		echo "</tr>";
	$idp=$rpr['idproduk'];
		$no++;
	}
	echo "<tr>
	<td colspan='4' align='right'>TOTAL</td>
	<td colspan='2'>Rp. <b>$total</b></td>
	</tr>";
	echo "</table>
	<form action='?p=confpembayaran' name='form1' method='post' enctype='multipart/form-data'>
	<input type='hidden' name='idorder' value='$id'>
	<input type='hidden' name='idbayar' value='$by[idbayar]'>
	<input type='hidden' name='total' value='$total'>
	<pre>				<a href='?p=pembayaran'><button type='button' class='btn btn-cart'>Back</button></a> <input  type ='submit' class='btn btn-cart' value='Konfirmasi'>
	</pre>
	</form>
	</fieldset>
</div>";
?>
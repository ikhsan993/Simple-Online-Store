<?php
include 'koneksi.php';
$id=$_GET['idorder'];
$sqlo=mysql_query("select * from detailpesanan where idorder ='$id'");
$jml=mysql_num_rows($sqlo);
echo "<h4>Detail Pesanan</h4>";
echo "<div id='view'>";
echo "<h3>NO. ORDER : <b>$id</b></h3>";
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
		$no++;
	}
	echo "<tr>
	<td colspan='4' align='right'>TOTAL</td>
	<td colspan='2'>Rp. <b>$total</b></td>
	</tr>";
	echo "</table>
	<pre>				<a href='?p=pesanan'><button type='button' class='btn btn-cart'>Back</button></a>  <a href='?p=confirm&idorder=$id'><button type='button' class='btn btn-cart'>Konfirmasi</button></a>

	</pre>
</div>";

?>
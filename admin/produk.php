<h4>Kelola Produk</h4>
<div id="view">
<fieldset>
<?php
	include "koneksi.php";
	$sqlprd= mysql_query("select * from produk order by idproduk desc limit 9");
	echo "<br><a href='?p=inputproduk'><img src='../svg/plus.svg'>Add Produk</a><p>";
	echo "<table border='0'>";
	echo "<tr>";
		echo "<th>Id Produk</th>";
		echo "<th>Nama Produk</th>";
		echo "<th>Foto Produk</th>";
		echo "<th>Harga</th>";
		echo "<th>Stok</th>";
		echo "<th>Aksi</th>";
	echo "</tr>";
	while($rprd = mysql_fetch_array($sqlprd)){
		echo "<tr>";
			echo "<td>$rprd[idproduk]</td>";
			echo "<td>$rprd[nama]</td>";
			echo "<td><img src='../fotoproduk/$rprd[foto]' width='120px'></td>";
			echo "<td>Rp.$rprd[harga]</td>";
			echo "<td>$rprd[stok]</td>";
			echo "<td><a href='?p=editproduk&idproduk=$rprd[idproduk]'><img src='../svg/pencil.svg'></a> / <a href='index.php?p=deleteproduk&idproduk=$rprd[idproduk]'><img src='../svg/trash.svg'></a></td>";
		echo "</tr>";
	}
	echo "</table>";
?>
</fieldset>
</div>
<h4>Kelola Promo</h4>
<div id="view">
<fieldset>
<?php
	include "koneksi.php";
	$sqlprm = mysql_query("select * from promo order by tinput desc");
	echo "<br><a href='?p=addpromo'><img src='../svg/plus.svg'>Add Promo</a><p>";
	echo "<table border='0'>";
	echo "<tr>";
		echo "<th>Id Promo</th>";
		echo "<th>Id Produk</th>";
		echo "<th>Foto</th>";
		echo "<th>Nama Produk</th>";
		echo "<th>Harga</th>";
		echo "<th>Harga Promo</th>";
		echo "<th>Aksi</th>";
	echo "</tr>";
	while($rprm = mysql_fetch_array($sqlprm)){
		echo "<tr>";
			echo "<td>$rprm[idpromo]</td>";
			echo "<td>$rprm[idproduk]</td>";
			echo "<td><img src='../fotoproduk/$rprm[foto]' width='120px'></td>";
			echo "<td>$rprm[nama]</td>";
			echo "<td>Rp.$rprm[harga]</td>";
			echo "<td>Rp.$rprm[hargapromo]</td>";
			echo "<td><a href='?p=editpromo&idpromo=$rprm[idpromo]&idproduk=$rprm[idproduk]'><img src='../svg/pencil.svg'></a> / <a href='index.php?p=deletepromo&idpromo=$rprm[idpromo]&idproduk=$rprm[idproduk]'><img src='../svg/trash.svg'></a></td>";
		echo "</tr>";
	}
	echo "</table>";
?>
</fieldset>
</div>
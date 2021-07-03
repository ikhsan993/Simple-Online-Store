<h4>Daftar Konfirmasi  Pembayaran</h4>
<div id="view">
<fieldset>
<?php
	include "koneksi.php";	
	$sqlb= mysql_query("select * from bayar order by tgl desc limit 15 ");
	echo "<table border='0'>";
	echo "<tr>";
		echo "<th>ID Bayar</th>";
		echo "<th>ID Member</th>";
		echo "<th>ID Order</th>";
		echo "<th>Total Bayar</th>";
		echo "<th>Tgl Konfirmasi</th>";
		echo "<th>Aksi</th>";
	echo "</tr>";
	while($rb = mysql_fetch_array($sqlb)){
		$tgl =substr($rb['tgl'], 0,10);
		echo "<tr  bgcolor='#ffb' >";	
			echo "<td>$rb[idbayar]</td>";
			echo "<td>$rb[idmember]</td>";			
			echo "<td>$rb[idorder]</td>";
			echo "<td>Rp.$rb[jumlah]</td>";
			echo "<td>$tgl</td>";
			echo "<td><a href='?p=detailpembayaran&idbayar=$rb[idbayar]&idorder=$rb[idorder]'><img src='../svg/detail.svg' alt='Detail'></a> / <a href='index.php?p=deletepembayaran&idbayar=$rb[idbayar]'><img src='../svg/silang.svg'></a></td>";
		echo "</tr>";
	}
	echo "</table>";
?>
</fieldset>
</div>
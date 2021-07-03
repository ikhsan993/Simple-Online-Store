<?php
include 'koneksi.php';
$id=$_GET['idorder'];
$sqlo=mysql_query("select * from penjualan");
$jml=mysql_num_rows($sqlo);
echo "<h4>Detail Pesanan</h4>";
echo "<div id='view'>";
	echo "<table border='0'>";
	echo "<tr>";
		echo "<th>ID Jual</th>";
		echo "<th>ID Member</th>";
		echo "<th>Tgl Jual</th>";
		echo "<th>Jumlah</th>";
	echo "</tr>";
	$no=1;	
	while ($ro=mysql_fetch_array($sqlo)) {
	$sqlpr = mysql_query("select * from penjualan order by idjual desc");
	$rpr = mysql_fetch_array($sqlpr);
	$tgl=substr($ro['tgl'], 0,10);
		echo "<tr bgcolor='#def'>";
			echo "<td>$ro[idjual]</td>";
			echo "<td>$ro[idmember]</td>";
			echo "<td>$tgl</td>";
			echo "<td>Rp. $ro[jumlah]</td>";
		echo "</tr>";
		$no++;
	}

	echo "</table>
	<pre>				<a href='?p=home'><button type='button' class='btn btn-cart'>Back</button></a>  

	</pre>
</div>";

?>
<h4>Daftar Pesanan</h4>
<div id="view">
<fieldset>
<?php
	include "koneksi.php";
	$sqlor= mysql_query("select * from pesanan where status!=2 order by idorder desc limit 15 ");
	echo "<table border='0'>";
	echo "<tr>";
		echo "<th>No. Order</th>";
		echo "<th>Id Member</th>";
		echo "<th>Tanggal Order</th>";
		echo "<th>Tujuan Pengiriman</th>";
		echo "<th>Total Harga</th>";
		echo "<th>Aksi</th>";
	echo "</tr>";
	while($ror = mysql_fetch_array($sqlor)){
		$stat =$ror['status'];
		$tgl =substr($ror['torder'], 0,10);
		if ($stat==0){
		echo "<tr  bgcolor='#fcc' >";}
		else if ($stat==1) {
		echo "<tr  bgcolor='#cfc' >";}	
			echo "<td>$ror[idorder]</td>";
			echo "<td>$ror[idmember]</td>";
			echo "<td>$tgl</td>";			
			echo "<td>$ror[alamat]</td>";
			echo "<td>Rp.$ror[total]</td>";
			echo "<td><a href='?p=detailpesanan&idorder=$ror[idorder]'><img src='../svg/detail.svg' alt='Detail'></a> / <a href='index.php?p=deletepesanan&idorder=$ror[idorder]'><img src='../svg/silang.svg'></a></td>";
		echo "</tr>";
	}
	echo "</table>";
?>
</fieldset>
</div>
<h4>History Pembelian</h4>
<div id="view">
<fieldset>
<?php
	include "koneksi.php";
$sqlmb = mysql_query("select * from member where username='$_SESSION[namauser]'");
	$rmb = mysql_fetch_array($sqlmb);	
	$sqlor= mysql_query("select * from pesanan where idmember='$rmb[idmember]' AND status=2 order by idorder desc limit 15 ");
	echo "<table border='0'>";
	echo "<tr>";
		echo "<th>No. Order</th>";
		echo "<th>Tanggal Order</th>";
		echo "<th>Tujuan Pengiriman</th>";
		echo "<th>Total Harga</th>";
		echo "<th>Aksi</th>";
	echo "</tr>";
	while($ror = mysql_fetch_array($sqlor)){
		$stat =$ror['status'];
		$tgl =substr($ror['torder'], 0,10);
	echo "<tr  bgcolor='#def'>";	

			echo "<td>$ror[idorder]</td>";
			echo "<td>$tgl</td>";			
			echo "<td>$ror[alamat]</td>";
			echo "<td>Rp.$ror[total]</td>";
			echo "<td><a href='?p=detailhistory&idorder=$ror[idorder]'><img src='../svg/detail.svg' alt='Detail'></a>";
		echo "</tr>";
	}
	echo "</table>";
	echo "<pre>				<a href='?p=home'><button type='button' class='btn btn-cart'>Home</button></a>  ";
?>
</fieldset>
</div>
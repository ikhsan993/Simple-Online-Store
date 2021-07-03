<h4>Daftar Pesanan</h4>
<div id="view">
<fieldset>
<?php
	include "koneksi.php";
$sqlmb = mysql_query("select * from member where username='$_SESSION[namauser]'");
	$rmb = mysql_fetch_array($sqlmb);	
	$sqlor= mysql_query("select * from pesanan where idmember='$rmb[idmember]' AND status!=2 order by idorder desc limit 15 ");
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
		if ($stat==0){
		echo "<tr  bgcolor='#fcc' >";}
		else if ($stat==1) {
		echo "<tr  bgcolor='#cfc' >";}	
			echo "<td>$ror[idorder]</td>";
			echo "<td>$tgl</td>";			
			echo "<td>$ror[alamat]</td>";
			echo "<td>Rp.$ror[total]</td>";
			echo "<td><a href='?p=detailpesanan&idorder=$ror[idorder]'><img src='../svg/detail.svg' alt='Detail'></a> / <a href='index.php?p=confirm&idorder=$ror[idorder]'><img src='../svg/ceklis.svg'></a></td>";
		echo "</tr>";
	}
	echo "</table>";
	echo " <p><b>Status Pemesanan :</b></p>
	<p><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <img src='../svg/merah.svg'> : Bukti pembayaran belum diterima silahkan konfirmasi terlebih dahulu  </b></p>
	<p><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <img src='../svg/hijau.svg'> : Data Pembayaran sudah diterima, Menunggu konfirmasi dari admin </b></p>
	<p><b>Note :</b></p>
	<p><b><img src='../svg/note.svg'> Pembayaran dapat dilakukan melalui rekening kami BRI 151901003745433 an: Ariel Fashion </b></p>
	<p><b><img src='../svg/note.svg'> Barang yang sudah dikonfrmasi tidak dapat dibatalkan </b></p>
	<p><b><img src='../svg/note.svg'> Pemesanan yang tidak dikonfrmasi dalam waktu 5 hari akan dihapus oleh sistem (batal) </b></p>
	<p><b><img src='../svg/note.svg'> Hubungi kami jika terjadi kesalahan sistem </b></p>

";	
?>
</fieldset>
</div>
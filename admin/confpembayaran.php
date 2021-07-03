<?php
include 'koneksi.php';
$orderan=mysql_query("select * from detailpesanan where idorder=$_POST[idorder]");
$pes=mysql_fetch_array($orderan);
$jual=mysql_query("insert into penjualan(idmember,tgl,jumlah) values
('$pes[idmember]',NOW(),'$_POST[total]' )");
$del=mysql_query("delete from bayar where idbayar=$_POST[idbayar]");
$updt=mysql_query("update pesanan set status=2 where idorder=$_POST[idorder]");
if ($jual AND $del AND $updt ) {
	echo "Konfirmasi Sukses!!!";
	echo "<meta http-equiv='refresh' content='1;url=index.php?p=pembayaran'>";
}
else{	echo "Konfirmasi Gagal!!!";
	echo "<meta http-equiv='refresh' content='1;url=index.php?p=pembayaran'>";}
?>
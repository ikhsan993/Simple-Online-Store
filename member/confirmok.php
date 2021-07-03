<?php
include 'koneksi.php';
$member=mysql_query("select * from member where username='$_SESSION[namauser]'");
$mem=mysql_fetch_array($member);
$idmem=$mem['idmember'];
$pes=mysql_query("select * from pesanan where idorder='$_POST[idorder]' ");
$p=mysql_fetch_array($pes);
$ft = $_FILES['foto']['name'];
$lokft = $_FILES['foto']['tmp_name'];
move_uploaded_file($lokft, "../bb/$ft");

if ($p['status']==0) {
$bayar=mysql_query("insert into bayar(idorder,idmember,norek,nama,jumlah,bb,tgl) values
('$_POST[idorder]','$idmem','$_POST[norek]','$_POST[nama]','$_POST[jml]','$ft',NOW()) ");
$status=mysql_query("update pesanan set status=1 where idorder='$_POST[idorder]'");
if ($bayar AND $status) {
	echo "Konfirmasi Pembayaran Sukses, Menunggu Persetujuan Admin!!!";
	echo "<meta http-equiv='refresh' content='1;url=index.php?p=pesanan'>";
}
else{
	echo "Konfirmasi Pembayaran Gagal, Silahkan Ulangi Proses!!!";
	echo "<meta http-equiv='refresh' content='1;url=index.php?p=pesanan'>";
}
}
elseif ($p['status']==1) {	
$kon=mysql_query("update bayar set
	norek='$_POST[norek]',
	nama='$_POST[nama]',
	jumlah='$_POST[jml]',
	bb='$ft',
	tgl=NOW() where idorder='$_POST[idorder]' ");
if ($kon) {
	echo "Update Data Pembayaran Sukses, Menunggu Persetujuan Admin!!!";
	echo "<meta http-equiv='refresh' content='1;url=index.php?p=pesanan'>";}
else{
	echo "Update Data Pembayaran Gagal, Silahkan Ulangi Proses!!!";
	echo "<meta http-equiv='refresh' content='1;url=index.php?p=pesanan'>";}
}
?>
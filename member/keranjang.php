<?php
include 'koneksi.php';
session_start();
if(empty($_SESSION["namauser"]) and empty($_SESSION["passuser"])){
	echo "<META HTTP-EQUIV='Refresh' Content='0; URL=?p=login'>";
}else{
	$sqlpr = mysql_query("select idproduk from cart where idproduk='$_GET[idpr]' and idmember='$_GET[idm]'");
	$rowpr = mysql_num_rows($sqlpr);
	$sqlpd = mysql_query("select * from produk where idproduk='$_GET[idpr]'");
	$rpd = mysql_fetch_array($sqlpd);
	if($rowpr == 0){
		mysql_query("insert into cart (idproduk, idmember,jumlah, tglcart) values ('$_GET[idpr]', '$_GET[idm]', 1, NOW())");
	}else{
		mysql_query("update cart set jumlah=jumlah+1 where idproduk='$_GET[idpr]' and idmember='$_GET[idm]'");
	}
	echo "<META HTTP-EQUIV='Refresh' Content='0; URL=?p=cart&idm=$_GET[idm]'>";
}
?>
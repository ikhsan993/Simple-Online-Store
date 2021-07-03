<!DOCTYPE html>
<html>
<head>
	<title> Online Store </title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div id="wrap">
<div id="head"><?php include 'navbar.php';?></div>
	<div id="content">
<?php
	session_start();
	if(!empty($_SESSION["namaadm"]) && !empty($_SESSION["passadm"])){
if ($p=='home' or $p=='') {	include 'home.php';}else
if ($p=='addpromo') {include 'addpromo.php';}else
if ($p=='addpromook') {include 'addpromook.php';}else
if ($p=='confpembayaran') {include 'confpembayaran.php';}else
if ($p=='deletepromo') {include 'deletepromo.php';}else
if ($p=='deletepromo') {include 'deletepromo.php';}else
if ($p=='deletepesanan') {include 'deletepesanan.php';}else
if ($p=='deleteproduk') {include 'deleteproduk.php';}else
if ($p=='detailpembayaran') {include 'detailpembayaran.php';}else
if ($p=='detailpesanan') {include 'detailpesanan.php';}else
if ($p=='editpromo') {include 'editpromo.php';}else
if ($p=='editpromook') {include 'editpromook.php';}else
if ($p=='editproduk') {include 'editproduk.php';}else
if ($p=='editprodukok') {include 'editprodukok.php';}else
if ($p=='gantifoto') {include 'gantifoto.php';}else
if ($p=='inputproduk') {include 'inputproduk.php';}else
if ($p=='inputprodukok') {include 'inputprodukok.php';}else
if ($p=='member') {include 'member.php';}else
if ($p=='pemesanan') {include 'pemesanan.php';}else
if ($p=='pembayaran') {include 'pembayaran.php';}else
if ($p=='penjualan') {include 'penjualan.php';}else
if ($p=='produk') {include 'produk.php';}else
if ($p=='promo') {include 'promo.php';}else
if ($p=='logout') {include 'logout.php';}else
	{echo "Page Not Found";}	
}
else{include 'login.php';}	
?>
</div>
	<div id="side"><?php if (empty($_SESSION['namaadm']) and empty($_SESSION['passadm'])) { include 'menu2.php';}else{include 'menu.php';} ?> </div>
<div id='foot'> <p> <br> PKL </p></div>
	</div>
</body>
</html>

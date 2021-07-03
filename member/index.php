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
	if(!empty($_SESSION["namauser"]) && !empty($_SESSION["passuser"])){
if ($p=='home' or $p=='') {	include 'produk.php';}else
if ($p=='cart') {include 'cart.php';}else
if ($p=='cartdel') {include 'cartdel.php';}else
if ($p=='cartedit') {include 'cartedit.php';}else
if ($p=='confirm') {include 'confirm.php';}else
if ($p=='confirmok') {include 'confirmok.php';}else
if ($p=='detailhistory') {include 'detailhistory.php';}else
if ($p=='detailproduk') {include 'detailproduk.php';}else
if ($p=='detailpesanan') {include 'detailpesanan.php';}else
if ($p=='keranjang') {include 'keranjang.php';}else
if ($p=='gantinama') {include 'gantinama.php';}else
if ($p=='gantinamaok') {include 'gantinamaok.php';}else
if ($p=='gantialamat') {include 'gantialamat.php';}else
if ($p=='gantiemail') {include 'gantiemail.php';}else
if ($p=='gantiemailok') {include 'gantiemailok.php';}else
if ($p=='gantinohp') {include 'gantinohp.php';}else
if ($p=='gantinohpok') {include 'gantinohpok.php';}else
if ($p=='gantipp') {include 'gantipp.php';}else
if ($p=='histori') {include 'history.php';}else
if ($p=='pesanan') {include 'pesanan.php';}else
if ($p=='profil') {include 'profile.php';}else
if ($p=='checkout') {include 'checkout.php';}else
if ($p=='konfirmasi') {include 'konfirmasi.php';}else
if ($p=='logout') {include 'logout.php';}else
	{echo "Page Not Found";}	
}
else{include 'login.php';}	
?>
</div>
	<div id="side"><?php if (empty($_SESSION['namauser']) and empty($_SESSION['passuser'])) { include 'menu2.php';}else{include 'menu.php';} ?> </div>
<div id='foot'> <p> <br> PKL </p></div>
	</div>
</body>
</html>

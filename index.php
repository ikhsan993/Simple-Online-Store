<!DOCTYPE html>
<html>
<head>
	<title> Onlinestore </title>
	<link rel='stylesheet' type='text/css' href='style.css'>
</head>
<body>
<div id='wrap'>
<div id='head'> <?php include 'navbar.php';?> </div>
	<div id='content'>
<?php	
if ($p=='home' or $p=='') {	include 'produk.php';}else
if ($p=='daftar') {include 'daftar.php';}else
if ($p=='daftarok') {include 'daftarok.php';}else
if ($p=='detailproduk') {include 'detailproduk.php';}else
	{echo "Page Not Found";}
?>
</div>
	<div id='side'>
	<?php
		include 'menu.php';?>
		</div>
	
	<div id='foot'> <p> <br> PKL </p></div>
	</div>
</body>
</html>
<?php 
include 'koneksi.php';
session_start();
if (!empty($_SESSION['namauser']) and !empty($_SESSION['passuser'])) {	
$sqlmbr=mysql_query("select pp from member where username='$_SESSION[namauser]'");
$rmbr = mysql_fetch_array($sqlmbr);
?>	
<div class='menubar'>
<h4>Menu</h4>
<?php
if ($rmbr['pp']=='') {
	echo "<img class='pp' src='../pp/nophoto.jpg'>";
}
else{echo "<img class='pp' src='../pp/$rmbr[pp]'>";} 
?>
<p align="center"><a href='index.php?p=logout'>Logout</a></p> 
	<div class="menu-kiri">	<ul>
	<li><a href='index.php?p=home'>Home</a></li>
	<li><a href='index.php?p=profil'>Profile</a></li>
	<li><a href='index.php?p=histori'>History</a></li>
	</ul></div>
	 <div class="menu-kanan"><ul>
	<li><a href='index.php?p=cart'>Cart</a></li>
	<li><a href='index.php?p=pesanan'>Order</a></li>
	</ul>
	</div>
</div>
<?php
}
?>
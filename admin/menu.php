<?php 
include 'koneksi.php';
session_start();
if (!empty($_SESSION['namaadm']) and !empty($_SESSION['passadm'])) {	
?>	
<div class='menubar'>
<h4>Menu</h4>
<img class='pp' src='../pp/pr.jpg'>
<p align="center"><a href='index.php?p=logout'>Logout</a></p>
	<div class="menu-kiri">	<ul>
	<li><a href='index.php?p=home'>Home</a></li>
	<li><a href='index.php?p=produk'>Produk</a></li>
	<li><a href='index.php?p=member'>Member</a></li>
	<li><a href='index.php?p=pembayaran'>Pembayaran</a></li>
	</ul></div>
	 <div class="menu-kanan">	<ul>
	<li><a href='index.php?p=promo'>Promo</a></li>
	<li><a href='index.php?p=pemesanan'>Pemesanan</a></li>
	<li><a href='index.php?p=penjualan'>Penjualan</a></li>
	</ul>
	</div>
</div>
<?php
}
?>
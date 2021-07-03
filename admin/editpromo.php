<?php 
include 'koneksi.php';
session_start();
if (!empty($_SESSION['namaadm']) and !empty($_SESSION['passadm'])) {	
$sqledt=mysql_query("select * from promo where idpromo='$_GET[idpromo]'");
$redt = mysql_fetch_array($sqledt);
$idpromo= $redt['idpromo'];
$idproduk= $redt['idproduk'];
$nama= $redt['nama'];
$harga= $redt['harga'];
$hargapromo=$redt['hargapromo'];
?>
<h4> Edit Promo </h4>
<div id="kat">
<a href="index.php?p=promo"> <h4>Back</h4> </a>
<fieldset>
<form name="form1" id="form1" method="post" action="index.php?p=editpromook" enctype="multipart/form-data"> 
<p>ID Promo &nbsp; &nbsp; &nbsp; &nbsp; : <input name="idpromo" type="text" id="idpromo" readonly value="<?php echo "$idpromo";?>"/></p>
<p>ID Produk &nbsp; &nbsp; &nbsp; &nbsp; : <input name="idproduk" type="text" id="idproduk" readonly value="<?php echo "$idproduk";?>"/></p>
<p>Nama Produk  &nbsp;&nbsp;: <input name="nama" disabled type="text" id="nama" value="<?php echo "$nama"; ?>"/></p>		       
<p>Harga   &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input name="harga" type="text" id="harga" disabled value="<?php echo "$harga"; ?>"/></p>
<p>Harga Promo &nbsp;&nbsp;&nbsp;: <input name="hargapromo" type="text" id="hargapromo" required x-moz-errormessage='Format Harga Salah' value="<?php echo "$hargapromo"; ?>"/></p>
  <pre>	       	    <input type="submit" name="Submit" value="Simpan Perubahan"></pre>
</form>
</fieldset>
</div><br>
<?php
}
else{
include 'login.php';	
}
?>
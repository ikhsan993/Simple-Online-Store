<?php 
include 'koneksi.php';
session_start();
if (!empty($_SESSION['namaadm']) and !empty($_SESSION['passadm'])) {	
$sqledt=mysql_query("select * from produk where idproduk='$_GET[idproduk]'");
$redt = mysql_fetch_array($sqledt);
$sqladm =mysql_query("select idadmin from admin where username='$_SESSION[namaadm]'");
$radm =mysql_fetch_array($sqladm);
$idp= $redt['idproduk'];
$nama= $redt['nama'];
$stok= $redt['stok'];
$harga= $redt['harga'];
$ket = $redt['keterangan'];
?>
<h4> Edit Manga</h4>
<div id="kat">
<a href="index.php?p=produk"> <h4>Back</h4> </a>
<fieldset>
 <form id="form2" method="post" enctype="multipart/form-data" name="form2" action="index.php?p=gantifoto"> <p>Foto Produk &nbsp;&nbsp;  : 	 <input type="file" name="foto" required x-moz-errormessage='File Belum Dipilih' accept="image/*" ></p><pre>       <input name="idp" type="hidden" value="<?php echo "$_GET[idproduk]";?>">			<input type="submit" form="form2" value="Ganti Foto"></pre></form>
<form name="form1" id="form1" method="post" action="index.php?p=editprodukok" enctype="multipart/form-data"> 
<p>ID Produk &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <input name="idp" type="text" id="idp" readonly value="<?php echo "$idp";?>"/></p>
<p>Nama Produk &nbsp;: <input required x-moz-errormessage='Judul Tidak Boleh Kosong' name="nama" type="text" id="nama" value="<?php echo "$nama"; ?>"/></p>		       
  <p>Harga &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <input required x-moz-errormessage='Field Harga Wajib Diisi' name="harga" type="text" id="harga" value="<?php echo "$harga"; ?>"/></p>
  <p>Stok &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <input required x-moz-errormessage='Field Wajib Diisi' name="stok" type="text" id="stok" value="<?php echo "$stok"; ?>"/></p>
<p>Keterangan &nbsp; &nbsp; &nbsp; :  <textarea required x-moz-errormessage='Field Keterangan Wajib Diisi ' name="keterangan" placeholder="Keterangan Produk..." ><?php echo "$ket";?></textarea></p>  
  <input name="idadmin" type="hidden" id="idadmin" value="<?php echo "$radm[idadmin]"; ?>"/>
  <pre>	       		<input type="submit" name="Submit" value="Simpan Perubahan"></pre>
</form>
</fieldset>
</div>
<?php
}
else{
include 'login.php';	
}
?>
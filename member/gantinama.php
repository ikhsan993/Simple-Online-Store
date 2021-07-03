<?php 
include 'koneksi.php';
session_start();
if (!empty($_SESSION['namauser']) and !empty($_SESSION['passuser'])) {	
$sqlnm=mysql_query("select nama from member where username='$_SESSION[namauser]'");
$rnm = mysql_fetch_array($sqlnm);
$nama= ucwords($rnm['nama']);
?>
<h4> Ganti Nama</h4>
<div id="login">
<a href="index.php?p=profil"> <h4>Back</h4> </a>
<fieldset>
<form name="form1" method="post" action="index.php?p=gantinamaok" enctype="multipart/form-data">
  <h3>Ganti Nama</h3>
  <input name="nama" x-moz-errormessage="Nama Tidak Boleh Kosong" type="text" required id="nama" value="<?php echo "$nama"; ?>">
<input type="submit" name="Submit" value="Ganti Nama">
</form>
</fieldset>
</div>
<?php
}
else{
include 'login.php';	
}
?>
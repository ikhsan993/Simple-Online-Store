<?php 
include 'koneksi.php';
session_start();
if (!empty($_SESSION['namauser']) and !empty($_SESSION['passuser'])) {	
$sqlnm=mysql_query("select email from member where username='$_SESSION[namauser]'");
$rnm = mysql_fetch_array($sqlnm);
$email= $rnm['email'];
?>
<h4> Ganti Alamat Email</h4>
<div id="login">
<a href="index.php?p=profil"> <h4>Back</h4> </a>
<fieldset>
<form name="form1" method="post" action="index.php?p=gantiemailok" enctype="multipart/form-data">
  <h3>Ganti Email</h3>
  <input required x-moz-errormessage="Format Email Salah" name="email" type="email" id="email" value="<?php echo "$email"; ?>"/>
  <input type="submit" name="Submit" value="Ganti Alamat Email">
</form>
</fieldset>
</div>
<?php
}
else{
include 'login.php';	
}
?>
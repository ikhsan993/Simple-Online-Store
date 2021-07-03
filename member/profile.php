<?php 
include 'koneksi.php';
session_start();
if (!empty($_SESSION['namauser']) and !empty($_SESSION['passuser'])) {	
$sqlmbr=mysql_query("select * from member where username='$_SESSION[namauser]'");
$rmbr = mysql_fetch_array($sqlmbr);
$nama=ucwords($rmbr['nama']);
$alamat=ucfirst($rmbr['alamat']);
$nohp=$rmbr['nohp']
?>	
<h4> Profile </h4>
<div id="kat" class="profil">
<h4>Account Information </h4>
<p></p>
<p>Nama &nbsp;&nbsp;:&nbsp; <?php echo "$nama";?><a href="index.php?p=gantinama">Edit</a> </p>	
<p>Email &nbsp; :&nbsp; <?php echo "$rmbr[email]";?> <a href="index.php?p=gantiemail">Edit</a>
<p>Kontak&nbsp;: <?php echo "$nohp";?><a href="index.php?p=gantinohp">Edit</a> </p>	
<form method="post" enctype="multipart/form-data" name="form1" action="index.php?p=gantialamat">
<p>Alamat Pengiriman</p>&nbsp; &nbsp;&nbsp; &nbsp;<textarea required name="alamat"><?php echo "$alamat";?> </textarea>
<br>&nbsp; &nbsp;&nbsp; &nbsp;<input type="submit" value="Ganti Alamat Pengiriman"></form> 
<p>Photo Profil	 
<form method="post" enctype="multipart/form-data" name="form2" action="index.php?p=gantipp"> <input type="file" name="pp" required x-moz-errormessage='File Belum Dipilih'><input type="submit" value="Change Profile Picture"></form></p>
</div>
<?php
}
?>
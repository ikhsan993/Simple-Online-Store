<?php
include 'koneksi.php';
$username=$_POST['username'];
$password=$_POST['password'];
$nama=$_POST['nama'];
$email=$_POST['email'];
$alamat=$_POST['alamat'];
$nohp=$_POST['nohp'];
$sqlmbr=mysql_query("insert into member(username,password,nama,email,alamat,nohp) values
('$username','$password','$nama','$email','$alamat','$nohp') ");
if ($sqlmbr) {
	echo "Pendaftaran Sukses!!!";
echo "<meta http-equiv='refresh' content='1;url=member/index.php?p=login'>";
}
else{
	echo "Pendaftaran Gagal!!!";
}
?>
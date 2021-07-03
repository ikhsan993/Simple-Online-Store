<?php
include "koneksi.php";
mysql_query("delete from cart where idcart='$_GET[idc]'");
echo "<META HTTP-EQUIV='Refresh' Content='0; URL=?p=cart&idm=$_GET[idm]'>";
?>
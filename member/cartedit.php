<?php
 include "koneksi.php";
 $id = $_POST["id"];
 $jml_data = count ($id);
 $jumlah = $_POST["jml"];
 for($i=1; $i<=$jml_data; $i++){
  mysql_query("update cart set jumlah='$jumlah[$i]' where idcart='$id[$i]'");
  }
  echo "<META HTTP-EQUIV='Refresh' Content='0; URL=?p=cart&idm=$_POST[idm]'>";
  ?>
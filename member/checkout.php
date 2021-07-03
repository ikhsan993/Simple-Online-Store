<h4>Konfirmasi Pembelian</h4>
<div id="kat">
<fieldset>
<p><b>Detail Pembelian Anda :</b></p>
<?php
include "koneksi.php";
$sqlmb = mysql_query("select * from member where username='$_SESSION[namauser]'");
	$rmb = mysql_fetch_array($sqlmb);
	$sqlc = mysql_query("select * from cart where idmember='$rmb[idmember]'");
	echo "<table border='0' width='100%'>";
	echo "<tr>";
		echo "<th>No. <input type='hidden' name='idm' value='$rmb[idmember]'></th>";
		echo "<th>Nama Produk</th>";
		echo "<th>Jumlah</th>";
		echo "<th>Harga</th>";
		echo "<th>Total Harga</th>";
	echo "</tr>";
	$no = 1;
	while($rc = mysql_fetch_array($sqlc)){
	  $sqlpr = mysql_query("select * from produk where idproduk='$rc[idproduk]'");	  
	  $rpr = mysql_fetch_array($sqlpr);
if ($rpr['hargapromo']==0) {
$harga=$rpr['harga'];
}
else{$harga=$rpr['hargapromo'];}
	  $subtotal = $harga * $rc["jumlah"];
	  $tot = $tot + $subtotal;
		echo "<tr>";
			echo "<td>$no
			<input type='hidden' name='id[$no]' value='$rc[idcart]'>
			</td>";
		    echo "<td>$rpr[nama]</td>";
			echo "<td>$rc[jumlah]</td>";
			echo "<td>Rp. $harga</td>";
			echo "<td>Rp. $subtotal</td>";
			echo "</tr>";
		$no++;
	}
	echo "<tr>
		<td colspan='4' align='right'>TOTAL</td>
		<td colspan='2'>IDR <b>$tot</b></td>
	</tr>";
	echo "</table>";

?>
<p><b>Silahkan masukan data tujuan pengiriman :</b></p>
<?php 
$sqlp = mysql_query("select * from profinsi order by idprof asc");
	echo "<form name='form2' id='form2' action='$_SERVER[PHP_SELF]' method='get'>";
	echo "<input name='p' type='hidden' value='checkout'>";
	echo "<p>Profinsi &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: <select name='idprof' onchange='this.form.submit()'>";
	echo "<option value='0'>Profinsi Tujuan</option>";
	while($rp=mysql_fetch_array($sqlp)){
		if($rp['idprof']==$_GET['idprof']){
			$sel = "selected";
		}else{
			$sel = "";
		}
		echo "<option value='$rp[idprof]' $sel>$rp[nama]</option>";
	}
	echo "</select>";
	echo "</form></p>";
$sqlh = mysql_query("select * from profinsi where idprof='$_GET[idprof]'");
$sh=mysql_fetch_array($sqlh);
$bayar=$tot+$sh['biaya'];
	?>
<form method="post" action="<?php echo "?p=konfirmasi"; ?>" enctype="multipart/form-data">
  <input type="hidden" name="idm" value="<?php echo "$rmb[idmember]"; ?>">
  <p>Nama Penerima : <input name="nama" type="text" id="nama" placeholder="Nama Penerima" value="<?php echo "$rmb[nama]";?>"> </p> 
  <p>Alamat Tujuan :&nbsp; <textarea name="alamat" placeholder="Alamat Lengkap"><?php echo "$rmb[alamat]";?> </textarea> </p>
  <p>Nomor Hp &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input name="nohp" type="text" id="nohp" placeholder="Nomor Handphone" value=" <?php echo "$rmb[nohp]";?>"></p>
  <p>Total beli &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; : <input name="beli" type="text" value="<?php echo "$tot";?>"> </p> 
  <p>Ongkos Kirim &nbsp; :  <input name="ongkos" type="text" value="<?php echo  "$sh[biaya]";?>	"> </p> 
  <p>Total Bayar &nbsp; &nbsp; &nbsp; : <input name="total" type="text" value="<?php echo "$bayar";?>"> </p> 
    <pre>		  <input type="submit" name="Submit" value="CONFIRM"></pre>
</form>
</fieldset>
</div>
<h4> Add Promo </h4>
<div id="kat">
<a href="index.php?p=promo"> <h4>Back</h4> </a>
<fieldset>
  <?php
  	include "koneksi.php";
	$sqlp = mysql_query("select * from produk order by idproduk asc");
	echo "<form action='$_SERVER[PHP_SELF]' method='get'>";
	echo "<input name='p' type='hidden' value='addpromo'>";
	echo "<p>ID Produk &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <select name='idproduk' onchange='this.form.submit()'>";
	echo "<option value='0'>ID Produk</option>";
	while($rp=mysql_fetch_array($sqlp)){
		if($rp["idproduk"]==$_GET["idproduk"]){
			$sel = "selected";
		}else{
			$sel = "";
		}
		echo "<option value='$rp[idproduk]' $sel>$rp[idproduk]</option>";
	}
	echo "</select>";
	echo "</form></p>";
	
	$sqlp = mysql_query("select * from produk where idproduk='$_GET[idproduk]' order by idproduk desc");
	echo "<form action='index.php?p=addpromook' method='post'>";
	echo "<input name='idproduk' type='hidden' value='$_GET[idproduk]'>";
	while($rp=mysql_fetch_array($sqlp)){
	$nama=$rp['nama'];	
	$harga=$rp['harga'];	
	echo "<input name='foto' type='hidden' value='$rp[foto]'>";
	echo "<p>Nama Produk &nbsp; : <input type='text' name='nama' value='$nama' readonly ></p>";
	echo "<p>Harga Produk &nbsp; : <input type='text' name='harga' value='$harga' readonly ></p>";
	echo "<p>Harga Promo &nbsp;&nbsp; : <input type='text' name='hargapromo' placeholder='Harga Promo' required x-moz-errormessage='Format Harga Salah'></p>";
	echo "<pre>		  	<input type='submit' value='Add Promo'></pre>";
	}
	echo "</form>";
  ?>
</fieldset>
</div><br>

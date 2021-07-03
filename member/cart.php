<h4>Keranjang Belanja</h4>
<div id="view">
<fieldset>
<?php
	include "koneksi.php";
	$sqlmb = mysql_query("select * from member where username='$_SESSION[namauser]'");
	$rmb = mysql_fetch_array($sqlmb);

	$sqlc = mysql_query("select * from cart where idmember='$rmb[idmember]'");
	echo "<form action='?p=checkout' id='form2' name='form2' method='post' enctype='multipart/form-data'>";
	echo "</form>";
	echo "<form action='?p=cartedit' id='form1' name='form1' method='post' enctype='multipart/form-data'>";
	echo "<table border='0' width='100%'>";
	echo "<tr>";
		echo "<th>No. <input type='hidden' name='idm' value='$rmb[idmember]'></th>";
		echo "<th>Foto</th>";
		echo "<th>Nama Produk</th>";
		echo "<th>Jumlah</th>";
		echo "<th>Harga</th>";
		echo "<th>Total Harga</th>";
		echo "<th>Aksi</th>";
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
	  $total = $total + $subtotal;
		echo "<tr>";
			echo "<td>$no
			<input type='hidden' name='id[$no]' value='$rc[idcart]'>
			</td>";
			echo "<td><img src='../fotoproduk/$rpr[foto]' width='120px'></td>";
		    echo "<td>$rpr[nama]</td>";
			echo "<td><input type='number' min='1' max='$rpr[stok]' name='jml[$no]' value='$rc[jumlah]'></td>";
			echo "<td>Rp. $harga</td>";
			echo "<td>Rp. $subtotal</td>";
			echo "<td><a href='?p=cartdel&idc=$rc[idcart]&idm=$rmb[idmember]'><img src='../svg/trash.svg'></a></td>";
		echo "</tr>";
		$no++;
	}
	echo "<tr>
		<td colspan='5' align='right'>TOTAL</td>
		<td colspan='2'>IDR <b>$total</b></td>
	</tr>";
	echo "</table>";
	echo "<a href='?p=home'><button type='button' class='btn btn-cart'>Belanja Lagi</button></a> &nbsp;&nbsp;";
	echo "<input type='submit'  value='Edit Keranjang' class='btn btn-cart'>&nbsp;&nbsp;";
	echo "<input type='submit' form='form2' value='Selesai Belanja' class='btn btn-cart'>&nbsp;&nbsp;";
	echo "<input type='hidden' name='total' form='form2' value='$total'>";
	echo "</form>";
?>
</fieldset>
</div>
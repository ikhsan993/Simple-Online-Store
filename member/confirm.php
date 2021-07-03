<?php
include 'koneksi.php';
$id=$_GET['idorder']; 
$pesan=mysql_query("select * from pesanan where idorder='$id' ");
$ord=mysql_fetch_array($pesan);
$tgl = date("d-m-Y");
?>
<h4>Konfirmasi Pembayaran Order </h4>
<div id="kat">
	<fieldset>
		<form action="?p=confirmok" method="post" enctype="multipart/form-data">
		<p>ID Order &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: <input type="text" name="idorder" value="<?php echo "$id";?>" readonly ></p>
		<p>Tgl Konfirmasi &nbsp;&nbsp;: <input type="text" name="tgl" value="<?php echo "$tgl";?>" readonly ></p>
		<p>No. Rekening &nbsp;&nbsp;&nbsp; : <input type="text" name="norek" placeholder="Nomor Rekeing" required x-moz-errormessage="Nomor Rekening Pengirim Wajib Diisi!!"></p>			
		<p>Nama Account &nbsp; : <input type="text" name="nama" placeholder="Nama Account Bank Anda (a/n)" required x-moz-errormessage="Field Wajib Diisi"></p>
		<p>Jumlah Transfer : <input type="text" value="<?php echo "$ord[total]"; ?>" name="jml" placeholder="Jumlah Transfer" required x-moz-errormessage="Field Wajib Diisi" ></p>
		<p>Bukti Transfer (Optional): <br><input accept="image/*" type="file" name="foto" ></p>
<pre>		<input class='btn btn-cart' type="submit" name="submit" value="Daftar"></pre>
		</form>
	</fieldset>
	</div>
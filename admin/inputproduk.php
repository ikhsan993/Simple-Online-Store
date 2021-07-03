<h4> Input Produk </h4>
<div id="kat">
<a href="index.php?p=produk"> <h4> Back</h4> </a>
	<fieldset>
		<form name="form1" action="<?php echo '?p=inputprodukok'; ?>" method="post" enctype="multipart/form-data">
			<p>Nama Produk &nbsp; &nbsp; : <input type="text" name="nama" placeholder="Nama Produk" required x-moz-errormessage='Nama produk belum diisi'> </p>
			<p>Harga Produk &nbsp; &nbsp; :  <input type="text" name="harga" placeholder="Harga Rp. " required x-moz-errormessage='Field Harga Wajib Diisi '></p>
			<p>Stok Produk &nbsp; &nbsp; &nbsp; :  <input type="text" name="stok" placeholder="Jumlah Stok" required x-moz-errormessage='Field Wajib Diisi'></p>
			<p>Keterangan &nbsp; &nbsp; &nbsp; &nbsp; :  <textarea required x-moz-errormessage='Field Keterangan Wajib Diisi ' name="keterangan" placeholder='Inputkan Keterangan Produk' ></textarea></p>
			<p>Foto Produk &nbsp; &nbsp; &nbsp;  : <input type="file" name="foto" accept="image/*" id="foto" placeholder="Foto Produk" required x-moz-errormessage='File Belum Dipilih'></p>
			<pre>			 <input type="submit" name="submit" value="Input Produk"></pre>
		</form>
	</fieldset>
</div>
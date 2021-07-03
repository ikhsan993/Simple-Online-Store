<h4>Lihat Member</h4>
<div id="view">
<fieldset>
<?php
	include "koneksi.php";
	$sqlmmb = mysql_query("select * from member order by idmember desc");
	echo "<table border='0'>";
	echo "<tr>";
		echo "<th>Id Member</th>";
		echo "<th>Nama</th>";
		echo "<th>Email</th>";
		echo "<th>Alamat</th>";
		echo "<th>No hp</th>";
	echo "</tr>";
	while($rmmb = mysql_fetch_array($sqlmmb)){
		echo "<tr>";
			echo "<td>$rmmb[idmember]</td>";
			echo "<td>$rmmb[nama]</td>";
			echo "<td>$rmmb[email]</td>";
			echo "<td>$rmmb[alamat]</td>";
			echo "<td>$rmmb[nohp]</td>";
		echo "</tr>";
	}
	echo "</table>";
?>
</fieldset>
</div>
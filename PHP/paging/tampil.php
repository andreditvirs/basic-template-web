<?php
mysql_connect("localhost", "root", "");
mysql_select_db("trikphp");

include "fungsi_paging.php";
echo "<h2>Daftar kelas</h2>
	<table border='1'>
	<tr><th>No</th><th>Nama></th><th>JK</th><th>Alamat</th></tr>
"

?>
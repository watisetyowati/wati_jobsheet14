<?php
mysql_connect("localhost","root",""); //{user dan password disesuaikan}
mysql_select_db("user");

$email = $_GET['n'];

$query = mysql_query("select nama from tabeluser where nama='$nama'");

if(mysql_num_rows($query)==0){
	$nama = $_POST['nama'];
	if(empty($nama)) {
		echo "Nama Harus diisi";
	}
	else {
		//proses
	}
}
?> 
<?php
mysql_connect("localhost","root",""); //{user dan password disesuaikan}
mysql_select_db("user");

$email = $_GET['e'];

$query = mysql_query("select email from tabeluser where email='$email'");

if(mysql_num_rows($query)==0){
    echo "$email belum ada yang pakai";
}else{
    echo "$email sudah ada yang pakai";
}
?> 
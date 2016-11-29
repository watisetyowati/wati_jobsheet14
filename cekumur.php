<?php

$umur=$_GET['u'];
if(is_numeric($umur)){
	echo "Angka";
}
else
{
	echo "Anda harus menginputkan angka";
}
?>
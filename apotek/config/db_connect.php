<?php

$con = mysql_connect('localhost','root','','impal');
$db = mysql_select_db('apotek',$con);

if ($db) {
	echo "Terhubung";
}else{
	echo "database tidak ditemukan ";
}

?>
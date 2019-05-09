<?php

include "layout/header.php";
if($_SESSION['login']){
header ('location:login,php')
}

if(isset($_POST['tambah_harga'])&& $_POST['tambah_harga'] == "TAMBAH"){
	$harga=$_POST ['harga'];
	
	$query = mysql_query ("insert into harga(tambah_harga) value('$harga')",$con );
	
	if($query){
		header('location:list_harga.php');
	}
}
<from action = "" method="post" ">
harga : <input name="harga" type="number" min="1" max="100" step="1" /><br>
<input type ="submit" name="tambah_obat" value="TAMBAH">

?>
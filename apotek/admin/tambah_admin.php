<?php

include "layout/header.php";

if($_SESSION['login']){
header ('location:login,php')
}
if(isset($_POST['tambah_admin'])&& $_POST['tambah_admin'] == "TAMBAH"){
	
	$id= $_POST ['nama'];
	$nama=$_POST ['user'];
	$harga=MD5($_POST ['pass']);
	
	$query = mysql_query ("INSERT INTO admin (nama_admin,user_admin,pass_admin) VALUE ('$nama', '$user','$pass')",$con );
	
	if($query){
		header('location:list_admin.php');
	}
}
<form action = "" method="post">
	<input type="text" name="name" /><br>
	<input name="text" name="user" /><br>
	<input name="password" name="pass" /><br>
<input type ="submit" name="tambah_admin" value="TAMBAH">
</form>
?>
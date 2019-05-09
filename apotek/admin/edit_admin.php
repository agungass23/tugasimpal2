<?php

include "layout/header.php";

if($_SESSION['login']){
header ('location:login,php')
}

$id = $_GET['id'];
if(isset($_POST['simpan_admin'])&& $_POST['simpan_admin'] == "SIMPAN"){
	$cond ="";
	$id= $_POST ['nama'];
	$nama=$_POST ['user'];
	$harga=MD5($_POST ['pass']);
	$cond = "nama_admin = '$nama',user_admin='$id'",$con)
	
	if(!empty($_POST['pass'])){
		$pass =MD5($_POST['pass']);
		$cond = ",pass_admin='$pass'";
	}
	
	$query = mysql_query ("update admin set $cond where id_admin ='$id'",$con );
	if($query){
		header('location:list_admin.php');
	}
}

$query = mysql_query("SELECT*FROM admin where id_admin = '$id'",$con);
$data = mysql_fetch_assoc($query):

?>
<form action = ""method="post">
	<input type="text" name="name" value="<?=$data['nama_admin'];?>" /><br>
	<input name="text" name="user" value="<?=$data['user_admin'];?>"/><br>
	<input name="password" name="pass" /><br>
<input type ="submit" name="tambah_admin" value="SIMPAN">
</form>
<?php

$err ='';
include "../config/db_connect.php":
if($_SESSION['login']){
header ('location:login,php')
}

if(isset($_POST['login'])&& $_POST['login'] == "Login"){
	$nama=$_POST ['user'];
	$harga=MD5($_POST ['pass']);
	
	$query = mysql_query ("select*from admin where user_admin='$name'and pass_admin ='$pass'",$con );
	$data = mysql_fetch_assoc($query);
	
	if(mysql_affected_rows($query)> 0){
			session_start();
			
			$_SESSION['id_admin']= $data ['id_admin'];
			$_SESSION['login']=true;
			header('location:index.php');
	}else{
		$err = "username atau password salah"
	}
}
?>

<form action="" method="post">
	<input type="text" name="name" /><br>
	<input name="text" name="user" /><br>
	<input name="password" name="pass" /><br>
<input type ="submit" name="login" value="Login">
</form>
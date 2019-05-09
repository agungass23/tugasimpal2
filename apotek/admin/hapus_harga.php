<?php 

include "layout/header.php";

if($_SESSION['login']){
header ('location:login,php')
}

$id = $_GET['id'];

$query = mysql_query ("delete from harga where id_harga ='$id'");

if ($query){
	header('location:list_harga.php');

}
?>
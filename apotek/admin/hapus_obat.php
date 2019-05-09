<?php 

include "layout/header.php";

if($_SESSION['login']){
header ('location:login,php')
}

$id = $_GET['id'];

$query = mysql_query ("delete from obat where id_obat ='$id'");

if ($query){
	header('location:list_obat.php');

}
?>
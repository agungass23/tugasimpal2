<?php

include "layout/header.php";

if($_SESSION['login']){
header ('location:login,php')
}

$id = $_GET['id'];

if(isset($_POST['simpan_harga'])&& $_POST['simpan_harga']== "SIMPAN"){
	$harga=$_POST['harga'];
	
	
	$query = mysql_query("UPDATE harga set harga_obat='$harga' where id_obat='$id'",$con );
	
	if(query){
		header(location:list_harga.php);
	}
}

$query = mysql_query("SELECT*FROM harga where id_obat = '$id'",$con);
$data = mysql_fetch_assoc($query):

?>
<form action="" method="post" >
	id : <input type="number" name="id produk" value= "<?=$data['id_obat'];?>"/><br>
	harga : <input name="harga" type="number" min="1" max="100" step="1" value = "<?=$data['harga_obat'];?>"/><br>
<input type ="submit" name="edit_obat" value="SIMPAN">

</form>
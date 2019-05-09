
<?php

include "layout/header.php";

if($_SESSION['login']){
header ('location:login,php')
}

if(isset($_POST['tambah_obat'])&& $_POST['tambah_obat'] == "TAMBAH"){
	
	$id= $_POST ['id'];
	$nama=$_POST ['nama'];
	$harga=$_POST ['harga'];
	$gambar=$_POST ['gambar'];
	move_uploaded_file($_FILES['gambar']['tmp_name'],"../upload/".$gambar);
	
	$query = mysql_query ("INSERT INTO apotek (id_obat,nama_obat,harga_obat,gambar_obat) VALUE ('$id', '$nama','$harga','$gambar')",$con );
	
	if($query){
		header('location:list_obat.php');
	}
}
<from action = ""method="post" enctpype="multipart/form-data">
id : <input type="number" name="id produk" />
nama : <input type="text" name="name" />
Jumlah : <input name="jumlah" type="number" min="1" max="100" step="1" />
harga : <input name="harga" type="number" min="1" max="100" step="1" /><br>
gambar : <input type="file" name="gambar"><br>
<input type ="submit" name="tambah_obat" value="TAMBAH">
?>
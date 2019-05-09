<?php

include "layout/header.php";

if($_SESSION['login']){
header ('location:login,php')
}

$id = $_GET['id'];

if(isset($_POST['edit_obat'])&& $_POST['edit_obat']== "SIMPAN"){
	
	$id=$_POST['id'];
	$nama=$_POST['nama'];
	$jumlah=$_POST['jumlah'];
	$harga=$_POST['harga'];
	$gambar=$_FILES['gambar']['nama'];
	
	if(!empty($gambar)){
		move_uploaded_file($_FILES['gambar']['tmp_name'],"../upload/".$gambar);
		$query= mysql_query("UPDATE obat set gambar_obat='$gambar' where id_obat='$id'",$con);
	}
	$query = mysql_query("UPDATE obat set nama_obat= '$nama', jumlah_obat='$jumlah', harga_obat='$harga' where id_obat='$id'",$con );
	
	if(query){
		header(location:list_obat.php);
	}
}

$query = mysql_query("SELECT*FROM obat where id_obat = '$id'",$con);
$data = mysql_fetch_assoc($query):

?>
<form action="" method="post" enctype="multipart/form-data">

	id : <input type="number" name="id produk" value= "<?=$data['id_obat'];?>"/><br>
	nama : <input type="text" name="name" value="<?=$data['nama_obat'];?>"/><br>
	jumlah : <input name="jumlah" type="number" min="1" max="100" step="1" value="<?=$data['jumlah_obat'];?>"/><br>
	harga : <input name="harga" type="number" min="1" max="100" step="1" value = "<?=$data['harga_obat'];?>"/><br>
	gambar : <input type="file" name="gambar"><br>
<input type ="submit" name="edit_obat" value="SIMPAN">

</form>
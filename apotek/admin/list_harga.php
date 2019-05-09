<?php
include "layout/header.php":

if($_SESSION['login']){
header ('location:login,php')
}

$query = mysql_query("SELECT*FROM berita order by tambah_harga DESC", $con);
$data = mysql_fetch_assoc($query);

?>

<a href="tambah_harga.php">Tambah harga</a>
<tabel border = "1">

<thead>
	<tr>
	<th>No</th>
	<th>harga</th>
	<th>aksi</th>
	</tr>
</thead>
<tbody>
<?php $num = 0; do {$num++; ?>
<tr>
	<td><?=$num;?></td>
	<td><?=$data['harga_obat'];?></td>
	<td>
		<a href="edit_harga.php?id=<?=$data['id_harga'];?>">Edit</a>
		<a href="hapus_harga.php?id=<?=$data['id_harga'];?>">Delete</a>
	</td>
</tr>

<?php }while($data=mysql_fetch_assoc($query))?>
</tbody>
<?php

include "layout/header.php":
if($_SESSION['login']){
header ('location:login,php')
}

$query = mysql_query("SELECT*FROM obat order by id_obat DESC", $con);
$data = mysql_fetch_assoc($query);

?>

<a href="tambah_obat.php">Tambah obat</a>
<tabel border = "1">

<thead>
	<tr>
	<th>No</th>
	<th>id</th>
	<th>nama</th>
	<th>harga</th>
	<th>gambar</th>
	<th>aksi</th>
	</tr>
</thead>
<tbody>
<?php $num = 0; do {$num++; ?>
<tr>
	<td><?=$num;?></td>
	<td><?=$data['id_obat'];?></td>
	<td><?=$data['nama_obat'];?></td>
	<td><?=$data['jumlah_obat'];?></td>
	<td><?=$data['harga_obat'];?></td>
	<td><img src="..../upload/<?=$data['gambar_obat'];?>"style="width:100px"</td>
	<td>
		<a href="edit_obat.php?id=<?=$data['id_obat'];?>">Edit</a>
		<a href="hapus_obat.php?id=<?=$data['id_obat'];?>">Delete</a>
	</td>
</tr>

<?php }while($data=mysql_fetch_assoc($query))?>
</tbody>
	
	
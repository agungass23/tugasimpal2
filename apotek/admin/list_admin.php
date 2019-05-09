<?php

include "layout/header.php":
$query = mysql_query("SELECT*FROM admin order by id_obat DESC", $con);
$data = mysql_fetch_assoc($query);

?>

<a href="tambah_admin.php">Tambah admin</a>
<tabel border = "1">

<thead>
	<tr>
	<th>No</th>
	<th>nama admin</th>
	<th>user name</th>
	<th>password</th>
	<th>aksi</th>
	</tr>
</thead>
<tbody>
<?php $num = 0; do {$num++; ?>
<tr>
	<td><?=$num;?></td>
	<td><?=$data['nama_admin'];?></td>
	<td><?=$data['user_name'];?></td>
	<td><?=$data['pass_admin'];?></td>
	<td>
		<a href="edit_admin.php?id=<?=$data['id_obat'];?>">Edit</a>
		<a href="hapus_obat.php?id=<?=$data['id_obat'];?>">Delete</a>
	</td>
</tr>

<?php }while($data=mysql_fetch_assoc($query))?>
</tbody>
	
<?php
require 'functions.php';
$siswa = query("select * from peserta");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Administrator</title>
</head>
<body>

<h1>Daftar Peserta</h1>

<table border="1" cellspacing="0" cellpadding="5">
	<tr>
		<th>No.</th>
		<th>ID</th>
		<th>Nama</th>
		<th>Sekolah</th>
		<th>Jurusan</th>
		<th>No.HP</th>
		<th>Alamat</th>
        <th>Aksi</th>
	</tr>
	<?php $i = 1; ?>
	<?php foreach( $siswa as $row ) { ?>
	<tr>
		<td><?= $i; ?></td>
		<td><?= $row["id_peserta"]; ?></td>
		<td><?= $row["nama"]; ?></td>
		<td><?= $row["sekolah"]; ?></td>
		<td><?= $row["jurusan"]; ?></td>
        <td><?= $row["no_hp"]; ?></td>
        <td><?= $row["alamat"]; ?></td>
        <td><a href="">ubah</a> | <a href="">hapus</a></td>
	</tr>
	<?php $i++; ?>
	<?php } ?>
</table>
</body>
</html>
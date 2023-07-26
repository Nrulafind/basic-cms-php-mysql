<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin</title>
</head>

<body>
	<ul><a href="<?php echo base_url('UserController'); ?>">Dashboard</a></ul>
	<table padding="15px">

		<a href="<?php echo base_url('UserController/add_buku'); ?>">Tambah Buku</a>
		<tr>
			<th>#</th>
			<th>Judul Buku</th>
			<th>Kategori Buku</th>
			<th>Deskripsi</th>
			<th>Jumlah</th>
			<th>File Buku</th>
			<th>Cover Buku</th>
			<th>Action</th>
		</tr>
		<?php
		$no = 1;
		foreach ($buku as $item) { ?>
			<tr>
				<td><?= $no++ ?></td>
				<td><?= $item->judul_buku; ?></td>
				<td><?= $item->kategori_nama; ?></td>
				<td><?= $item->deskripsi; ?></td>
				<td><?= $item->jumlah; ?></td>
				<td><?= $item->file_buku; ?></td>
				<td><?= $item->buku_cover; ?></td>
				<td><a href="<?php echo base_url('UserController/edit_buku/' . $item->buku_id); ?>">Edit Buku</a> || <a href="<?php echo base_url('UserController/delete_buku/' . $item->buku_id); ?>">Delete Buku</a></td>
			</tr>
		<?php } ?>
	</table>
	<style>
		table,
		td,
		th {
			border: 1px solid black;
		}

		th {
			padding: 13px;
		}

		td {
			padding: 15px;
		}
	</style>
</body>

</html>
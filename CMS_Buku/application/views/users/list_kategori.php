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

		<a href="<?php echo base_url('UserController/add_kategori'); ?>">Tambah Buku</a>
		<tr>
			<th>#</th>
			<th>Kategori</th>
			<th>Action</th>
		</tr>
		<?php
		$no = 1;
		foreach ($kategori as $item) { ?>
			<tr>
				<td><?= $no++ ?></td>
				<td><?= $item->kategori_nama; ?></td>
				<td><a href="<?php echo base_url('UserController/edit_kategori/' . $item->kategori_buku_id); ?>">Edit Kategori</a> || <a href="<?php echo base_url('UserController/delete_kategori/' . $item->kategori_buku_id); ?>">Delete Kategori</a></td>
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
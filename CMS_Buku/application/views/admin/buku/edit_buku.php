<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CMS Edit buku</title>
</head>

<body>
	<form method="post" action="<?= base_url('AdminController/edit_proses_buku') ?>">
		<?php foreach ($buku as $b) { ?>
			<p><br>
				<input type="hidden" name="buku_id" value="<?= $b->buku_id; ?>">
			</p>
			<p> Judul Buku : <br>
				<input type="text" name="judul_buku" value="<?= $b->judul_buku; ?>">
			</p>
			<p> Kategori : <br>
				<select name="kategori_buku_id">
					<option value="<?= $b->kategori_buku_id; ?>">-</option>
					<option value="1">Admin</option>
					<option value="2">User</option>
				</select>
			</p>
			<p> Deskripsi: <br>
				<input type="text" name="deskripsi" value="<?= $b->deskripsi; ?>">
			</p>
			<p> Jumlah : <br>
				<input type="text" name="jumlah" value="<?= $b->jumlah; ?>">
			</p>
			<p> File Buku : <br>
				<input type="text" name="file_buku" value="<?= $b->file_buku; ?>">
			</p>
			<p> Cover Buku : <br>
				<input type="text" name="buku_cover" value="<?= $b->buku_cover; ?>">
			</p>
		<?php } ?>
		<p><button type="submit">Submit</button></p>
	</form>
</body>

</html>
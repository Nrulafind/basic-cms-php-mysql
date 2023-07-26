<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CMS add buku</title>
</head>

<body>
	<form method="post" action="<?= base_url('AdminController/save_buku') ?>">

		<p> Judul Buku : <br>
			<input type="text" name="judul_buku">
		</p>
		<p> Kategori : <br>
			<select name="kategori_buku_id">
				<?php foreach ($buku as $b) { ?>
					<option value="<?= $b->kategori_buku_id; ?>"><?= $b->kategori_nama; ?></option>
				<?php } ?>
			</select>
		</p>
		<p> Deskripsi: <br>
			<input type="text" name="deskripsi">
		</p>
		<p> Jumlah : <br>
			<input type="text" name="jumlah">
		</p>
		<p> File Buku : <br>
			<input type="text" name="file_buku">
		</p>
		<p> Cover Buku : <br>
			<input type="text" name="buku_cover">
		</p>
		<p><button type="submit">Submit</button></p>
	</form>
</body>
<?php var_dump(session_module_name()); ?>

</html>
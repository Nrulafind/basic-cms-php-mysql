<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CMS Edit kategori</title>
</head>

<body>
	<form method="post" action="<?= base_url('AdminController/edit_proses_kategori') ?>">
		<?php foreach ($kategori as $k) { ?>
			<p><br>
				<input type="hidden" name="kategori_buku_id" value="<?= $k->kategori_buku_id; ?>">
			</p>
			<p> Kategori Nama : <br>
				<input type="text" name="kategori_nama" value="<?= $k->kategori_nama; ?>">
			</p>
		<?php } ?>
		<p><button type="submit">Submit</button></p>
	</form>
</body>

</html>
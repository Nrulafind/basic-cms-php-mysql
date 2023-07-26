<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CMS add kategori</title>
</head>

<body>
	<form method="post" action="<?= base_url('AdminController/save_kategori') ?>">

		<p> Kategori Nama : <br>
			<input type="text" name="kategori_nama">
		</p>
		<p><button type="submit">Submit</button></p>
	</form>
</body>

</html>
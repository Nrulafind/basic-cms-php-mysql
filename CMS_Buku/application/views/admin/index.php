<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin</title>
</head>

<body>

	<h1>Haii selamat datang, anda login sebagai <?php echo $user_name; ?></h1>
	<ul>
		<li><a href="<?php echo base_url('AdminController/list_buku'); ?>">List Buku</a></li>
		<li><a href="<?php echo base_url('AdminController/list_kategori'); ?>">List Kategori</a></li>
	</ul>

	<a href="<?php echo base_url('AdminController/logout'); ?>">Logout</a>


</body>

</html>
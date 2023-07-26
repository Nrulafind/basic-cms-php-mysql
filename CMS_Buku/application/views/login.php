<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CMS </title>
</head>

<body>
	<form method="post" action="<?= base_url('AuthController/cek_login') ?>">

		<p>Username : <br>
			<input type="text" name="user_name">
		</p>
		<p>Password : <br>
			<input type="password" name="user_password">
		</p>
		<p><button type="submit">Submit</button></p>
	</form>
	<a href="<?= base_url('AuthController/register') ?>">Belum punya akun?, Register</a>
</body>

</html>
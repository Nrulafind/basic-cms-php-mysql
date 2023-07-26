<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CMS register</title>
</head>

<body>
	<form method="post" action="<?= base_url('AuthController/register_add') ?>">

		<p>Username : <br>
			<input type="text" name="user_name">
		</p>
		<p>Password : <br>
			<input type="password" name="user_password">
		</p>
		<p><button type="submit">Submit</button></p>
	</form>
</body>

</html>
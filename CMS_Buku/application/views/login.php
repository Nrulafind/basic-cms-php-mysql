<div class="container" style="height:100vh;">
	<div class="d-flex align-items-center" style="height:100%;">
		<div class="d-flex justify-content-center" style="width:100%;">
			<div class="d-flex flex-column gap-5">
				<div class="d-flex justify-content-center">
					<h1>Halaman Login</h1>
				</div>
				<div class="d-flex justify-content-center">
					<div class="d-flex flex-column">
						<div class="card p-5" style="border-radius:20px;width:40em;">
							<form method="post" action="<?= base_url('AuthController/cek_login') ?>">
								<div class="d-flex flex-column gap-3">
									<label for="usern_name">Username</label>
									<input type="text" name="user_name">
								</div>
								<div class="d-flex flex-column gap-3 mt-2">
									<label for="password">Password</label>
									<input type="password" name="user_password">
								</div>
								<button class="btn btn-primary text-light mt-4" type="submit" style="width:100%;border-radius:15px;">Submit</button>
							</form>
							<div class="d-flex justify-content-center">
								<div class="d-flex flex-row gap-3 mt-4">
									<p>Belum punya akun?</p>
									<a class="nav-link fw-bold" href="<?= base_url('AuthController/register') ?>">Register</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<style>
	.card {
		background-color: #ECF8F9 !important;
	}

	body {
		background-color: #8696FE !important;
	}

	input {
		padding: 5px 5px;
		border: 1px solid black;
		background: none;
		border-radius: 15px;
	}
</style>

<div class="login-page bk-img" style="background-image: url(img/login-bg.jpg);">
	<div class="form-content">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<h1 class="text-center text-bold mt-4x" style="color:#fff">Change Password</h1>
					<div class="well row pt-2x pb-3x bk-light">
						<div class="col-md-8 col-md-offset-2">
							<form method="post" action="index.php?action=dangnhap&act=change_password_action" class="login-form">

								<label for="" class="text-uppercase text-sm">Your Username </label>
								<input type="text" placeholder="Username" name="txtusername" class="form-control mb">

								<label for="" class="text-uppercase text-sm">Password</label>
								<input type="password" placeholder="Password" name="txtpassword" class="form-control mb">

								<label for="" class="text-uppercase text-sm">new Password</label>
								<input type="password" placeholder="Password" name="txtnewpassword" class="form-control mb">


								<button class="btn btn-primary btn-block" name="login" type="submit">Change Password</button>

							</form>

							<p style="margin-top: 4%" align="center"><a href="index.php?action=hanghoa">Back to Home</a> </p>
						</div>

					</div>

				</div>
			</div>
		</div>
	</div>
</div>
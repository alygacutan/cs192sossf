<?php include('server.php'); 
		include_once ('header.php');
  		include_once ('extras.php');
  		include('errors.php');?>

<!DOCTYPE html>
<html>

<head>
	<title>School and Office Supplies and Services Finder</title>
</head>

<body><center>
	<div class="signup">
	<form class="container" method="post" action="login.php">

		<div class="input-group">
			<h2>Log In / Sign-up</h2>
		</div>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" >
		</div>

		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>

		<div class="input-group">
			<button type="submit" class="btn" name="login_user" id="login">Login</button>
			<script type="text/javascript">
				var btn = document.getElementById('login');
				btn.addEventListener('click', function() {
					document.location.href = '<?php echo "user/homepage.php"; ?>';
				});
			</script>
		</div>

	</form>
	</div>
	<p><br><br><br>Create an account! <a href="register.php" style="color: #f99a2c">Sign up</a>
	</p>

</body>
</html>
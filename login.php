<!--
MIT License

Copyright (c) 2019 Aly Gacutan, Kenneth Santos

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.

This is a course requirement for CS 192 Software Engineering II under the 
supervision of Asst. Prof. Ma. Rowena C. Solamo of the Department of Computer 
Science, College of Engineering, University of the Philippines, Diliman for 
the AY 2018-2019
 -->

 <!-- 
Code History
v1.0 - Feb 06, 2019 - Initial file - PHP [Kenneth Santos]
v2.0 - Feb 18, 2019 - Minor HTML/CSS revisions [Aly Gacutan]
v3.0 - Feb 20, 2019 - Fixed Log In/Out Issues, Code Cleanup - PHP [Kenneth Santos]
v4.0 - Feb 25, 2019 - Organized file and folder structure for next sprint update [Kenneth Santos]
v4.1 - Feb 25, 2019 - Fixed some log in/out issues [Kenneth Santos]

File Creation Date: Feb 06,2019
Development Group: SOSSF Group 
Client Group: N/A
Purpose: The HTML/PHP File for Login Page.
 -->

<?php
	include("server.php");
	include("extras.php");
	include("footer.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login | School and Office Supplies and Services Finder</title>
</head>
<body>
	<div class="content">
		<div class="homepage-container">
			<div class="homepage">
				<center>
					<div class="signup">
						<form class="container" method="post" action="login.php">
							<div class="input-group">
								<h2 style="font-size: 3vw">Log In</h2>
							</div>

							<?php
								if(isset($_GET["error"])) {
									if($_GET["error"]==401)
										array_push($errors, "<p class='error'> UNAUTHORIZED ACCESS<br><br><br><br>You must log in to continue! </p>");
									elseif($_GET["error"]==403)
										array_push($errors, "<p class='error'> FORBIDDEN<br><br><br><br>You must log in to continue! </p>");
								}
								include("errors.php");
							?>

							<div class="input-group">
								<label>Username</label>
								<input type="text" name="username">
							</div>
							<div class="input-group">
								<label>Password</label>
								<input type="password" name="password">
							</div>
							<div class="input-group">
								<button class="btn" type="submit" name="login_user" id="login">Login</button>
								<script type="text/javascript">
									var btn = document.getElementById("login");
									btn.addEventListener("click", function() {
										document.location.href = "<?php echo "user/homepage.php"; ?>";
									});
								</script>
							</div>
						</form>
					</div>
					<!--<p> Create an account! <a href="register.php" style="color: #f99a2c">Sign up</a></p>-->
				</center>
			</div>
		</div>
	</div>
</body>
</html>

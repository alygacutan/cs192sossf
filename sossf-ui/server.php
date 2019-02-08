<!-- 
Code History
v1.0 - Feb 06, 2019 - Initial file - HTML [Aly Gacutan]
v2.0 - Feb 07, 2019 - Revised PHP code [Kenneth Santos]

File Creation Date: Feb 06,2019
Development Group: SOSSF Group 
Client Group: N/A
Purpose: The PHP Server File for connecting php files.
 -->
<?php
	session_start();

	// variable declaration
	$username = "";
	$email = "";
	$errors = array();
	$_SESSION['success'] = "";

	// connect to database
	$connection = mysqli_connect('localhost', 'root', '', 'sossf');

	// user login
	if (isset($_POST['login_user'])) {
		$username = mysqli_real_escape_string($connection, $_POST['username']);
		$password = mysqli_real_escape_string($connection, $_POST['password']);

		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {
			/*
			$password = md5($password);
			$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
			$results = mysqli_query($connection, $query);
			*/

			//if (mysqli_num_rows($results) == 1) {
			if ($username == 'admin' and $password == 'root') {
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "You are now logged in";
				header('location: homepage.php');
			} else {
				array_push($errors, "Wrong username/password combination");
			}
		}
	}


	/*
	// REGISTER USER
	if (isset($_POST['reg_user'])) {
		// receive all input values from the form
		$username = mysqli_real_escape_string($connection, $_POST['username']);
		$email = mysqli_real_escape_string($connection, $_POST['email']);
		$password_1 = mysqli_real_escape_string($connection, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($connection, $_POST['password_2']);

		// form validation: ensure that the form is correctly filled
		if (empty($username)) { array_push($errors, "Username is required"); }
		if (empty($email)) { array_push($errors, "Email is required"); }
		if (empty($password_1)) { array_push($errors, "Password is required"); }

		if ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not match");
		}

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = md5($password_1);//encrypt the password before saving in the database
			$query = "INSERT INTO users (username, email, password)
					  VALUES('$username', '$email', '$password')";
			mysqli_query($connection, $query);

			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You are now logged in";
			header('location: index.php');
		}

	}

	// ...

	// LOGIN USER
	if (isset($_POST['login_user'])) {
		$username = mysqli_real_escape_string($connection, $_POST['username']);
		$password = mysqli_real_escape_string($connection, $_POST['password']);

		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {
			$password = md5($password);
			$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
			$results = mysqli_query($connection, $query);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "You are now logged in";
				header('location: user/HomeV2.php');
			}else {
				array_push($errors, "Wrong username/password combination");
			}
		}
	}*/

?>

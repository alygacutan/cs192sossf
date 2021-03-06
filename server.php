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
v1.0 - Feb 06, 2019 - Initial file - HTML [Aly Gacutan]
v2.0 - Feb 07, 2019 - Revised PHP code [Kenneth Santos]
v3.0 - Feb 20, 2019 - Fixed Log In/Out Issues, Code Cleanup - PHP [Kenneth Santos]
v3.1 - Feb 20, 2019 - Connected Users Log In/Out to Database - PHP [Kenneth Santos]
v4.0 - Feb 25, 2019 - Organized file and folder structure for next sprint update [Kenneth Santos]
v4.1 - Feb 25, 2019 - Fixed some log in/out issues [Kenneth Santos]


File Creation Date: Feb 06,2019
Development Group: SOSSF Group 
Client Group: N/A
Purpose: The PHP Server File for connecting php files.
 -->
 
<?php

	session_start();

	$connection = mysqli_connect("localhost", "root", "", "sossf");

	$username = "";
	$errors = array();

	//in need to go to login page?
	$foldername = basename(dirname(strtok($_SERVER["REQUEST_URI"],"?")));
	$filename = basename(strtok($_SERVER["REQUEST_URI"],"?"));
	if(!isset($_SESSION["username"]) && $filename!="login.php") { //if username not set, then page must always be login
		header("location: ../login.php?error=401"); //error: Unauthorized
	} elseif(isset($_SESSION["userType"]) && $_SESSION["userType"]!=$foldername && $foldername!="cs192sossf") { //directory folder must be same to usertype, else main folder cs192sossf
		header("location: /cs192sossf/login.php?error=403"); //error: Forbidden
	} elseif(isset($_SESSION["username"]) && $filename=="login.php") { //login no longer available if logged in, redirect to homepage
		header("location: {$_SESSION["userType"]}/homepage.php");
	}

	//the user logged out
	if(isset($_GET["logout"])) {
		unset($_SESSION["username"]);
		unset($_SESSION["userType"]);
		session_destroy();
		header("location: login.php");
	}

	//user login
	if (isset($_POST["login_user"])) {
		$username = mysqli_real_escape_string($connection, $_POST["username"]);
		$password = mysqli_real_escape_string($connection, $_POST["password"]);

		if (empty($username)) { array_push($errors, "<p class='error'> Username is required! </p>"); }
		if (empty($password)) { array_push($errors, "<p class='error'> Password is required! </p>"); }

		if (count($errors) == 0) {
			//password encryption
			//$password = md5($password);
			$query = "SELECT * FROM User WHERE username='$username' AND password='$password'";
			$result = mysqli_query($connection, $query);

			if (mysqli_num_rows($result)==1) {
				$_SESSION["username"] = $username;
				$account = mysqli_fetch_assoc($result);
				$_SESSION["userType"] = $account["userType"];
				header("location: {$_SESSION["userType"]}/homepage.php");
			} else {
				array_push($errors, "<p class='error'> Wrong username/password combination! </p>");
			}
		}
	}

	/*
	// REGISTER USER
	if (isset($_POST["reg_user"])) {
		// receive all input values from the form
		$username = mysqli_real_escape_string($connection, $_SESSION["username"]);
		$email = mysqli_real_escape_string($connection, $_POST["email"]);
		$password_1 = mysqli_real_escape_string($connection, $_POST["password_1"]);
		$password_2 = mysqli_real_escape_string($connection, $_POST["password_2"]);

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
					  VALUES("$username", "$email", "$password")";
			mysqli_query($connection, $query);

			$_SESSION["username"] = $username;
			$_SESSION["success"] = "You are now logged in";
			header("location: index.php");
		}

	}
	*/

?>

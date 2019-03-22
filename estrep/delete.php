<!--
MIT License

Copyright (c) 2019 Kenneth Santos

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
v1.0 - Feb 21, 2019 - Initial file - PHP [Kenneth Santos]
v2.0 - Feb 25, 2019 - Organized file and folder structure for next sprint update [Kenneth Santos]

File Creation Date: Feb 21, 2019
Development Group: SOSSF Group 
Client Group: N/A
Purpose: The PHP File for Delete Establishment Function.
 -->

<?php
	include('../server.php');

	$username = $_SESSION["username"];
	$userType = $_SESSION["userType"];

	if(isset($_GET['id'])){
		$id = (int)$_GET['id'];
		$sql_temp = "SELECT * FROM Establishment WHERE establishmentID={$id}";
		$result_temp = $connection->query($sql_temp);
		if ($result_temp->num_rows > 0) {
			while($row = $result_temp->fetch_assoc()) {
				$query = "INSERT INTO Requests(username, userType, type, establishmentID, name, location,tags,time_submitted) VALUES(\"{$username}\",\"{$userType}\",3,{$id},\"{$row['name']}\",\"{$row['location']}\",\"{$row['tags']}\",NOW())";
			}
		}
	} else {
		echo 'No id set';
	}

	$result = mysqli_query($connection,$query);

	if($result){
		$_SESSION['success_message'] = 'User data deleted successfully';
		header('Location: requests.php');
	}else{
		$_SESSION['error_message'] = 'User data couldn\'t be deleted';
		header('Location: viewall.php');
	} 
?>

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
v1.1 - Feb 06, 2019 - Minor revisions [Aly Gacutan]
v2.0 - Feb 07, 2019 - Added PHP code [Kenneth Santos]
v3.0 - Feb 21, 2019 - Mininal changes - PHP [Kenneth Santos]
v4.0 - Feb 25, 2019 - Organized file and folder structure for next sprint update [Kenneth Santos]
v5.0 - Mar ,2019 - Added Edit feature [Aly Gacutan]

File Creation Date: Feb 06,2019
Development Group: SOSSF Group 
Client Group: N/A
Purpose: The HTML/PHP File for Establishment Page.
 -->
 
<?php
	include_once ("../server.php");
	include_once ("../extras.php");
	include_once ("../header.php");
	include_once ("../footer.php");
	include_once ("edit.php");
	include("prompt.php");
?>

<!DOCTYPE html>
<html>
	
	<head><title>School and Office Supplies and Services Finder</title>
	</head>

	<body>
		<div class="content" style="padding:50px">
			<?php

				if(isset($_GET["id"])){$_SESSION["id"] = $_GET["id"];}	
				$sql="SELECT * FROM Establishment
				WHERE establishmentID = {$_SESSION["id"]}";

				$result=mysqli_query($connection,$sql)->fetch_assoc();

			?>

			<div class="info" style="float: left; left: 0rem">

				<?php
				echo "<h1 style='font-size: 35px;'>".$result["name"]."</h1>";
				echo "<p><i style='font-size:15px; color: rgb(188, 227, 244)' class='fas'>&#xf3c5;</i> ".$result["location"]."</p>";
				echo "<p><i style='font-size:15px; color: rgb(188, 227, 244)' class='fas'>&#xf095;</i> ".$result["contactNo"]."</p>";
				echo "<p><i style='font-size:15px; color: rgb(188, 227, 244)' class='fas'>&#xf02c;</i> ".$result["tags"]."</p>";
				echo "<p><i style='font-size:15px; color: rgb(188, 227, 244)' class='fas'>&#xf017;</i> ".$result["businessHours"]."</p>"
				?>
					<span style="display: inline-flex;">
						<button id="editBtn" class="myBtn btn3" >Edit</button>
						<button onclick="window.location.href = 'delete.php?id='+<?php echo $id ?>;" class="myBtn btn3" >Delete</button>
					</span>
			</div>
			<div class="services-container"><h2 style="text-shadow: none; font-weight: normal;"><br>Services:</h2>
				<div class="services">
					<?php
						echo "<p>".$result["services"]."</p>"
					?>
				</div>
			</div>
		
		</div>
	</body>

	<script
	type="text/javascript" src="edit.js">
	</script>
	
	</html>

	<?php $connection->close(); ?>

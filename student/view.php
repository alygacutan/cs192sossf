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

File Creation Date: Feb 06,2019
Development Group: SOSSF Group 
Client Group: N/A
Purpose: The HTML/PHP File for Establishment Page.
 -->
 
<?php
	include_once ("../server.php");
	include_once ("../extras.php");
	include_once ("header.php");
	include_once ("edit.php");
?>

<!DOCTYPE html>
<html>
	
	<head><title>School and Office Supplies and Services Finder</title>
	</head>

	<body>
		<div class="content" style="height: 100%">
			<?php

				if(isset($_GET["id"])){$id = $_GET["id"];}	
				$sql="SELECT * FROM Establishment
				WHERE establishmentID = {$id}";

				$result=mysqli_query($connection,$sql)->fetch_assoc();

			?>

			<div class="info">

				<?php
				echo "<h1 style='font-size: 35px;'>".$result["name"]."</h1>";
				echo "<p><i style='font-size:15px; color: rgb(188, 227, 244)' class='fas'>&#xf3c5;</i> ".$result["location"]."</p>";
				echo "<p><i style='font-size:15px; color: rgb(188, 227, 244)' class='fas'>&#xf095;</i> ".$result["contactNo"]."</p>";
				echo "<p><i style='font-size:15px; color: rgb(188, 227, 244)' class='fas'>&#xf02c;</i> ".$result["tags"]."</p>";
				echo "<p><i style='font-size:15px; color: rgb(188, 227, 244)' class='fas'>&#xf017;</i> ".$result["businessHours"]."</p>"
				?>
				<div style="display: inline;">
						<button id="editBtn" class="myBtn" style="margin-right:30px; float: left">Suggest an Edit</button>
						<!--<button class="myBtn" style="margin-left:30px;float: left">Write a review</button>-->
					</div>
			</div>
			<div class="services-container"><h2 style="text-shadow: none; font-weight: normal;"><br>Services:</h2>
				<div class="services">
						<?php
						echo "<p>".$result["services"]."</p>"
						?>
				</div>
			</div>
			<!--
			<div class="reviewrate"><center>
					<div class="rate">
					    <input type="radio" id="star5" name="rate" value="5" />
					    <label for="star5" title="text">5 stars</label>
					    <input type="radio" id="star4" name="rate" value="4" />
					    <label for="star4" title="text">4 stars</label>
					    <input type="radio" id="star3" name="rate" value="3" />
					    <label for="star3" title="text">3 stars</label>
					    <input type="radio" id="star2" name="rate" value="2" />
					    <label for="star2" title="text">2 stars</label>
					    <input type="radio" id="star1" name="rate" value="1" />
					    <label for="star1" title="text">1 star</label>
					</div>
					
				<br><br>
				<div class="map" style="display: flex; justify-content: center;">coming soon...</div><br>
				<label style="font-family: 'Montserrat', sans-serif; font-weight:normal; text-transform: uppercase; color: #f99a2c; font-size:15px">
					Reviews and Comments</label><br>
				<div class="reviews">coming soon...</div>
			</center></div>-->
		
		</div>
	</body>

	<script
	type="text/javascript" src="edit.js">
	</script>

	</html>

	<?php $connection->close(); ?>

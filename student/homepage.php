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
v2.0 - Feb 07, 2019 - Added PHP code [Kenneth Santos]
v2.1 - Feb 07, 2019 - Revised HTML code, minor changes [Aly Gacutan]
v3.0 - Feb 10, 2019 - Added tag icons [Aly Gacutan]
v4.0 - Feb 20, 2019 - Added seach functionality using tags [Kenneth Santos]
v5.0 - Feb 21, 2019 - Added seach functionality using name and location [Kenneth Santos]
v6.0 - Feb 25, 2019 - Organized file and folder structure for next sprint update [Kenneth Santos]
v6.1 - Feb 25, 2019 - Minor changes [Kenneth Santos]

File Creation Date: Feb 06,2019
Development Group: SOSSF Group 
Client Group: N/A
Purpose: The HTML/PHP File for Home Page.
 -->
 
<?php
	include_once ("../server.php");
	include_once ("../extras.php");
	include_once ("../header.php");
	include_once ("../footer.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home | School and Office Supplies and Services Finder</title>
</head>
<body>
	<div class="content">
		<div class="homepage-container">
			<div class="homepage">
				<center>
					<h2 style="font-size: 5vw">Welcome!</h2>
				<div class="searchbarhomepage">
					<form action="search.php" method="get">
						<input type="text" placeholder="Name" name="name" value="">
						<input type="text" placeholder="Location" name="loc" value="">
				</div>
				<button class="btn2" style="color: black; background-color:#fff;"> Search </button><br><br>
				<div class="tags-icons">
					<h2 style="color: #000; font-weight: normal;">Search by Type: </h2>
					<div class="icon-container">
						<div class="icon-bg" style="background-color: #3BC8AC"><a href="search.php?tag=internet"><i style="font-size: 32px; color:#FFF" class="fas">&#xf108;
						</div></i>
							<a href="search.php?tag=internet" class="link" style="color: #000"><center>INTERNET</center></p></a>
					</div>
					<div class="icon-container">
						<div class="icon-bg" style="background-color: #3BC8AC"><a href="search.php?tag=school supplies"><i style="font-size:32px; color:#FFF" class="fas">&#xf51c;
						</div></i>
							<a href="search.php?tag=school supplies" class="link" style="color: #000"><center>SCHOOL SUPPLIES</center></p></a>
					</div>
					<div class="icon-container">
						<div class="icon-bg" style="background-color: #3BC8AC"><a href="search.php?tag=drugstore"><i style="font-size:32px; color:#FFF" class="fas">&#xf5b1;
						</div></i>
							<a href="search.php?tag=drugstore" class="link" style="color: #000"><center>DRUGSTORE</center></p></a>
					</div>
					<div class="icon-container">
						<div class="icon-bg" style="background-color: #3BC8AC"><a href="search.php?tag=restaurant"><i style="font-size:32px; color:#FFF" class="fas">&#xf805;
						</div></i>
							<a href="search.php?tag=restaurant" class="link" style="color: #000"><center>RESTAURANT</center></p></a>
					</div>
					<div class="icon-container">
						<div class="icon-bg" style="background-color: #3BC8AC"><a href="search.php?tag=printing"><i style="font-size:32px; color:#FFF" class="fas"> &#xf02f;
						</div></i>
							<a href="search.php?tag=printing" class="link" style="color: #000"><center>PRINTING</center></p></a>
					</div>
					<div class="icon-container">
						<div class="icon-bg" style="background-color: #3BC8AC"><a href="search.php?tag=grocery"><i style="font-size:32px; color:#FFF" class="fas">&#xf07a;
						</div></i>
							<a href="search.php?tag=grocery" class="link" style="color: #000"><center>GROCERY</center></p></a>
					</div>
					<div class="icon-container">
						<div class="icon-bg" style="background-color: #3BC8AC"><a href="search.php?tag=repair"><i style="font-size:32px; color:#FFF" class="fas">&#xf7d9;
						</div></i>
							<a href="search.php?tag=repair" class="link" style="color: #000"><center>REPAIR</center></p></a>
						</div>
					</div>
				</center>
			</div>
		</a></div>
	</div>
</body>

<script type="text/javascript" src="add-establishment.js">

</script>
</html>

<?php
	
$connection->close();
?>


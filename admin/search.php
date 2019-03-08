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
v2.0 - Feb 07, 2019 - Added initial PHP code [Kenneth Santos]
v3.0 - Feb 21, 2019 - Added search results by tags - PHP [Kenneth Santos]
v3.1 - Feb 21, 2019 - Added search results by substring - PHP [Kenneth Santos]
v3.2 - Feb 21, 2019 - Added catch when no results found - PHP [Kenneth Santos]
V4.0 - Feb 22, 2019 - Added search results by name and location - PHP [Kenneth Santos]
v4.1 - Feb 22, 2019 - Minor fixes - PHP [Kenneth Santos]
v5.0 - Feb 25, 2019 - Organized file and folder structure for next sprint update [Kenneth Santos]

File Creation Date: Feb 06,2019
Development Group: SOSSF Group 
Client Group: N/A
Purpose: The HTML/PHP File for Search Page.
 -->

<?php
	include('../server.php');
	include('../extras.php');
	include('header.php');
	include('print.php');
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Search | School and Office Supplies and Services Finder</title>
	</head>
	<body>
		<div class="content-header">
			<h1 style="position:absolute;top:5rem;font-size: 4vw">Search Results</h1>
		</div>
		<div class="viewall-content" style="height: 100%">
			<table>
				<tr>
					<th>Name</th>
					<th>Type/Tag</th>
					<th>Added by</th>
					<th>Actions</th>
				</tr>

				<?php
					if(isset($_GET['str'])) {
						$str = $_GET['str'];
						$query = "SELECT * FROM Establishment WHERE status=1 AND (name LIKE \"%{$str}%\" OR location LIKE \"%{$str}%\" OR services LIKE \"%{$str}%\" OR tags LIKE \"%{$str}%\")";
						$result = mysqli_query($connection, $query);
						if(mysqli_num_rows($result)>0) {
							while($record = mysqli_fetch_assoc($result)) {
								view($record);
							}
						} else {
							echo "<p color='red'>NO RESULTS FOUND.</p>";
						}
					} elseif(isset($_GET['tag'])) {
						$tag = $_GET['tag'];
						$query = "SELECT * FROM Establishment WHERE status=1 AND tags LIKE '%{$tag}%'";
						$result = mysqli_query($connection, $query);
						if(mysqli_num_rows($result)>0) {
							while($record = mysqli_fetch_assoc($result)) {
								view($record);
							}
						} else {
							echo "<p color='red'>NO RESULTS FOUND.</p>";
						}
					} elseif(isset($_GET['name']) && isset($_GET['loc'])) {
						$name = $_GET['name'];
						$loc = $_GET['loc'];
						$query = "SELECT * FROM Establishment WHERE status=1 AND (name LIKE '%{$name}%' AND location LIKE '%{$loc}%')";
						$result = mysqli_query($connection, $query);
						if(mysqli_num_rows($result)>0) {
							while($record = mysqli_fetch_assoc($result)) {
								view($record);
							}
						} else {
							echo "<p color='red'>NO RESULTS FOUND.</p>";
						}
					} else {
						echo "<p color='red'>NO RESULTS FOUND.</p>";
					}
					mysqli_close($connection);
				?>

			</table>
		</div>
	</body>
</html>

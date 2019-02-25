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
v1.0 - Feb 05, 2019 - Initial file - HTML [Aly Gacutan]
v2.0 - Feb 06, 2019 - Revised HTML code, minor changes [Aly Gacutan]
v3.0 - Feb 07, 2019 - Revised HTML code, minor changes [Kenneth Santos]
v4.0 - Feb 08, 2019 - Revised HTML code [Aly Gacutan]
v5.0 - Feb 20, 2019 - Fixed Log In/Out Issues, Code Cleanup - PHP [Kenneth Santos]
v6.0 - Feb 21, 2019 - Added search functionality using substring - PHP [Kenneth Santos]
v7.0 - Feb 25, 2019 - Organized file and folder structure for next sprint update [Kenneth Santos]

File Creation Date: Feb 05,2019
Development Group: SOSSF Group 
Client Group: N/A
Purpose: The HTML/PHP File for Header.
 -->

<header>
	<div class="logo">
		<a href="homepage.php" id="logo">
			<i>School and Office </i>
			<br>
			<b>Supplies and Services Finder</b>
		</a>
	</div>
	<div class="nav">
		<div class="searchbar">
			<form action="search.php" method="get">
			<button type="submit">
				<i class="fa fa-search">
					
				</i>
			</button>
			<input type="text" placeholder="Search..." name="str" value="">
			</form>
		</div>
		<div class="dropdown">
			<button class="dropbtn">
				<a style="color:#000; display: inline;" href="profile-page.php">
					<i class="material-icons">person</i>
				</a>
			</button>
			<div class="dropdown-content">
				<a href="profile.php">Profile</a>
				<a href="requests.php">Update Requests</a>
				<a href="../server.php?logout=1">Sign Out</a>
			</div>
		</div>
		<a href="viewall.php" class="viewall">View All</a>
	</div>
</header>

<script type="text/javascript">
	$(window).on("scroll", function() {
		if($(window).scrollTop() > 50) {
			$("header").addClass("active");
		} else {
			//remove the background property so it comes transparent again (defined in your css)
			$("header").removeClass("active");
		}
	});
</script>
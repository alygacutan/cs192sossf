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

File Creation Date: Feb 05,2019
Development Group: SOSSF Group 
Client Group: N/A
Purpose: The HTML/PHP File for Header.
 -->
 
<!-------------------------------- HEADER -------------------------------->
    <header>
      <a href="homepage.php" id="logo"><i>School and Office </i><br><b> Supplies and Services Finder<b></a>
      
      <div class="searchbar"><form action="search-results.php" method="post">
       <button type="submit"><i class="fa fa-search"></i></button>
       <input type="text" placeholder="Search..." name="input" value="">
     </form>
       <div class="dropdown">
        <button class="dropbtn"><a style="color:#000; display: inline;" href="profile-page.php"><i class="material-icons">person</i></a></button>
          <div class="dropdown-content">
            <a href="profile-page.php">Profile</a>
            <a href="requests.php">Update Requests</a>
            <a href="index.php?logout='1'">Sign Out</a>
          </div>
        </div>
    </div>
      <a href="viewall-admin.php" class="viewall">View All</a>
    </header>

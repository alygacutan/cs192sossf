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
v1.0 - Feb 08, 2019 - Initial file - HTML [Aly Gacutan]
v1.1 - Feb 08, 2019 - Added PHP code [Kenneth Santos]
v2.0 - Feb 25, 2019 - Organized file and folder structure for next sprint update [Kenneth Santos]
v3.0 - Apr 02, 2019 - Minor HTML revisions [Aly Gacutan]
File Creation Date: Feb 08,2019
Development Group: SOSSF Group 
Client Group: N/A
Purpose: The HTML/PHP File for Profile Page.
 -->

<?php
  include_once ('../server.php');
  include_once ('../extras.php');
  include_once ('header.php');
  include_once ('add.php');
?>

<!DOCTYPE html>
<html>
  
  <head><title>School and Office Supplies and Services Finder</title>
  </head>

  <body>
    <img id="profilebg" src="../others/profilepage.jpg">
    <div class="content" style="height: 100%">
        <div class="profile-container">
          <?php
          if (isset($_SESSION['username'])){
            //echo "<a>Welcome <i class='username'>".$_SESSION['username']."!</i></a>";

            $query = "SELECT * FROM EstablishmentRepresentative WHERE username='".$_SESSION['username']."'";
            $result = mysqli_query($connection, $query);
            if(mysqli_num_rows($result)>0) {
              while($row = mysqli_fetch_assoc($result)) {
                echo "<h3><center>$row[name]</center></h3><br>";
                echo "<h4 style='display: inline'>Username: </h4> ".$_SESSION['username']." <br>";
                echo "<h4 style='display: inline'>E-mail: </h4>$row[email]<br>";              }
            } else {
                echo "<p color='red'>No results found.</p>";
            }
          }      
          mysqli_close($connection);
          ?>
          
          
          <h4><a>change password<a></h4>
          <span style="position: absolute; bottom: 1.5rem; right:1.5rem">
            <button class="myBtn" style="display: inline;">delete account</button>
            <button class="myBtn" style="display: inline;">edit profile</button>
          </span>
        </div>    
    </div>

  <script
  type="text/javascript" src="add-establishment.js">
  </script>

  </html>

  <?php $connection->close(); ?>

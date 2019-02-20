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
v1.0 - Feb 07, 2019 - Initial file - HTML [Aly Gacutan]
v2.0 - Feb 08, 2019 - Added PHP code [Kenneth Santos]

File Creation Date: Feb 07,2019
Development Group: SOSSF Group 
Client Group: N/A
Purpose: The HTML/PHP File for Requests Page.
 -->

<?php
  include_once ('server.php');
  include_once ('header.php');
  include_once ('extras.php');
  include_once ('add-establishment.php');
?>

<!DOCTYPE html>
<html>
  
  <head><title>School and Office Supplies and Services Finder</title>
  </head>

  <body>
    <div class="content" style="height: 100%">


      <?php

        if(isset($_GET['action']) and isset($_GET['est']))
          {$_SESSION['est'] = $_GET['est'];$_SESSION['action'] = $_GET['action'];
        if($_SESSION['action']==1) {
        $sql="UPDATE Establishment SET status=1
        WHERE establishmentID = {$_SESSION['est']}";
        }
        else if($_SESSION['action']==0) {
        $sql="UPDATE Establishment SET status=-1
        WHERE establishmentID = {$_SESSION['est']}";
        }
        mysqli_query($connection,$sql) or die(mysqli_error($connection));      }

      ?>

      <h1>Update Requests</h1>

      <table>
        <tr><th>ID</th><th>Name</th><th>Location</th><th>Contact No.</th><th>Business Hours</th><th>Type/Tag(s)</th><th>Actions</th></tr>
        <!-- less user,status -->

        <?php
        $sql_view_all = "SELECT * FROM Establishment WHERE status=0";
        $result_view_all = $connection->query($sql_view_all);
        if ($result_view_all->num_rows > 0) {
            while($row = $result_view_all->fetch_assoc()) {
                echo "<tr><td>".$row["establishmentID"]."</td><td><a href='establishment-page.php?est=".$row["establishmentID"]."'>".$row["name"]."</a></td><td>".$row["location"]."</td><td>".$row["contactNo"]."</td><td>".$row["businessHours"]."</td><td>".$row["tags"]."</td><td><a href='requests.php?action=1&est=".$row["establishmentID"]."'>Approve</a>,<a href='requests.php?action=0&est=".$row["establishmentID"]."' style='color:red'>Deny</a></td></tr>";
            }
        } else {
            echo "<p color='red'>No results found.</p>";
        }
        ?>

        <!-- <tr>
          <td><p>01</p></td>
          <td><a href="establishment-page.php">Blessings</a></td>
          <td>Somewhere</td>  
          <td>09XX-XXX-XXXX</td>
          <td>7am-7pm</td>
          <td></td>
          <td>Print, Internet, Bind, Photocopy</td>
          <td>user1</td>
          <td><a href="">Approve</a> | <a href="" style="color:red">Deny</a></td>
        </tr> -->
        
      </table>
    </div>
  </body>

  <script
  type="text/javascript" src="add-establishment.js">
  </script>

  </html>

  <?php $connection->close(); ?>

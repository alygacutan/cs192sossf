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
v1.1 - Feb 06, 2019 - Added PHP code [Kenneth Santos]
v2.0 - Feb 07, 2019 - Revised HTML code, minor changes [Aly Gacutan]
v2.1 - Feb 07, 2019 - Revised PHP code [Kenneth Santos]
v3.0 - Feb 08, 2019 - Revised HTML code, minor changes [Aly Gacutan]
v3.1 - Feb 08, 2019 - Revised PHP code [Kenneth Santos]
v4.0 - Feb 17, 2019 - Revised HTML code [Aly Gacutan]

File Creation Date: Feb 06,2019
Development Group: SOSSF Group 
Client Group: N/A
Purpose: The HTML/PHP File for View All Page.
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
    <div class="content-header">
      <h1 style="position:absolute;top:5rem;font-size: 4vw">All Establishments</h1>
      <!-- ADD ESTABLISHMENT POPUP WINDOW -->
      <button id="myBtn"> ADD ESTABLISHMENT </button>

      <!-- <?php //include_once 'add-establishment.php' ?> -->
    </div>
    <div class="viewall-content" style="height: 100%">
      
      <table>
        <tr><th>Name</th><th>Type/Tag(s)</th><th>Actions</th></tr>

        <?php
        $sql_view_all = "SELECT * FROM Establishment wHERE status=1";
        $result_view_all = $connection->query($sql_view_all);
        if ($result_view_all->num_rows > 0) {
            while($row = $result_view_all->fetch_assoc()) {
              echo "<tr><td><a href='establishment-page.php?est=".$row["establishmentID"]."'>".$row["name"]."</a></td><td>".$row["tags"]."</td><td><a href=''>Edit</a>, <a href=''>Delete</a></td></tr>";

            }
        } else {
            echo "<p color='red'>No results found.</p>";
        }
        ?>
      </table>
    </div>
  </body>

  <script type="text/javascript" src="add-establishment.js">
  </script>

  </html>

  <?php $connection->close(); ?>

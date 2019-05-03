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
v3.0 - Feb 25, 2019 - Organized file and folder structure for next sprint update [Kenneth Santos]
v4.0 - Apr 05, 2019 - Added follow-up request prompt. [Aly Gacutan]

File Creation Date: Feb 07,2019
Development Group: SOSSF Group 
Client Group: N/A
Purpose: The HTML/PHP File for Requests Page.
 -->

<?php
  include_once ('../server.php');
  include_once ('../extras.php');
  include_once ('header.php');
  include_once ('../establishment.php');
?>

<!DOCTYPE html>
<html>
  
  <head><title>School and Office Supplies and Services Finder</title>
  </head>

  <body>
    <div class="content" style="height: 100%">

      <h1>Update Requests</h1>

      <table>
        <tr><th>Name</th><th>Location</th><th>Type/Tag(s)</th><th>Type of Request</th><th>Status</th></tr>
        <!-- less user,status -->
        <?php
        $sql_view_all = "SELECT * FROM Requests WHERE username=\"{$_SESSION['username']}\"";
        $result_view_all = $connection->query($sql_view_all);
        if ($result_view_all->num_rows > 0) {
            while($row = $result_view_all->fetch_assoc()) {
              switch ($row["type"]) {
                case 1:
                   $requestType = "Add Establishment";
                   break;
                case 2:
                   $requestType = "Edit Establishment";
                   break;
                case 3:
                   $requestType = "Delete Establishment";
                   break;
              }
              switch ($row["status"]) {
                case -1:
                   $requestStatus = "Denied";
                   break;
                case 0:
                   $requestStatus = "Queued";
                   break;
                case 1:
                   $requestStatus = "Approved";
                   break;
              }
              echo "<tr><td><a href=#>".$row["name"]."</a></td><td>".$row["location"]."</td><td>".$row["tags"]."</td><td>".$requestType."</td><td>".$requestStatus." ";
              if ($requestStatus == "Queued"){
                echo "<button class='myBtn' formtarget='_self' id='from1' onclick='popup()'> Follow-up</button></td>";
              }
            }
        } else {
            echo "<p color='red'>No results found.</p>";
        }
        ?>
        
      </table>
    </div>
  </body>

  <script type="text/javascript">

  // When the user clicks the button, open the modal 
  function popup() {
    //modal.style.display = "block";
    swal({
      title: "Request followed-up!",
      text: "Please wait until the admin has verified your request",
      icon: "success",
    })
  }

  </script>

  </html>

  <?php $connection->close(); ?>

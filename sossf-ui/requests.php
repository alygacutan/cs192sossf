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
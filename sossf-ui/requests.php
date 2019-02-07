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
      <h1>Update Requests</h1>

      <table>
        <tr><th>ID</th><th>Name</th><th>Location</th><th>Contact No.</th><th>Business Hours</th><th>Status</th><th>Type/Tag(s)</th><th>User</th><th>Actions</th></tr>

        <?php
        $sql_view_all = "SELECT name, tags FROM Establishment";
        $result_view_all = $connection->query($sql_view_all);
        if ($result_view_all->num_rows > 0) {
            while($row = $result_view_all->fetch_assoc()) {
                echo "<tr><td>".$row["name"]."</td><td>".$row["tags"]."</td><td><a href=''>Edit</a>, <a href=''>Delete</a></td></tr>";
            }
        } else {
            echo "<p color='red'>No results found.</p>";
        }
        ?>

        <tr>
          <td><p>01</p></td>
          <td><a href="establishment-page.php">Blessings</a></td>
          <td>Somewhere</td>  
          <td>09XX-XXX-XXXX</td>
          <td>7am-7pm</td>
          <td></td>
          <td>Print, Internet, Bind, Photocopy</td>
          <td>user1</td>
          <td><a href="">Approve</a> | <a href="" style="color:red">Deny</a></td>
        </tr>
        
      </table>
    </div>
  </body>

  <script
  type="text/javascript" src="add-establishment.js">
  </script>

  </html>

  <?php $connection->close(); ?>
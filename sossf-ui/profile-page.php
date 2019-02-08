<!-- 
Code History
v1.0 - Feb 08, 2019 - Initial file - HTML [Aly Gacutan]
v1.1 - Feb 06, 2019 - Added PHP code [Kenneth Santos]

File Creation Date: Feb 08,2019
Development Group: SOSSF Group 
Client Group: N/A
Purpose: The HTML/PHP File for Profile Page.
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
      
      <h1><u>Under Construction!</u></h1><br>
      <div style="padding:30px">
        <img class="profile-pic" src="https://images.vexels.com/media/users/3/137047/isolated/preview/5831a17a290077c646a48c4db78a81bb-user-profile-blue-icon-by-vexels.png">
        <h2 style="padding:15px;position: absolute; display: inline-block;">Juan Dela Cruz</h2>
        <a class="link"><span style="padding: 0px 5px 5px 23px; display: block;">[ ADMIN ]</span></a>
      </div>
    </div>
  </body>

  <script
  type="text/javascript" src="add-establishment.js">
  </script>

  </html>

  <?php $connection->close(); ?>

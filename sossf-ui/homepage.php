<?php
  include_once ('server.php');
  include_once ('header.php');
  include_once ('extras.php');
  include_once ('add-establishment.php') 
?>

<!DOCTYPE html>
<html>
  <head>
  </head>
  <body>
    
    <div class="content"><center><br><br>
      <h2>What are you looking for?</h2>
      <div class="searchbarhomepage">
        <form action="search-results.php" method="post">
          <input type="text" placeholder="Name" name="name" value="">
          <input type="text" placeholder="Location" name="location" value="">
          <select name="tags">
            <option value="">-Select Type-</option>
            <option value="print">Print</option>
            <option value="photocopy">Photocopy</option>
            <option value="binding">Binding</option>
            <option value="internet">Internet</option>
            <option value="supplies">Supplies</option>
            <option value="drugstore">Drugstore</option>
            <option value="grocery">Grocery</option>
            <option value="cleaning">Cleaning</option>
          </select>
          <button type="submit"><i class="fa fa-search"></i></button>
      </div>
    </center>
    </div>
  </body>

<script type="text/javascript" src="add-establishment.js">

</script>
</html>

<?php

$connection->close();
?>


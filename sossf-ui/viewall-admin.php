<?php
  include_once ('server.php')
?>

<!DOCTYPE html>
<html>
  <head>
    <base target="_top">
    <link rel="stylesheet" type="text/css" href="sossf-stylesheet.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100|Montserrat|Maven+Pro|Nunito+Sans|Changa+One|Questrial" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <!-------------------------------- HEADER -------------------------------->
    <header>
      <h1>Hello World</h1>
      
      <div class="searchbar"><form action="search-results.php" method="post">
		   <button type="submit"><i class="fa fa-search"></i></button>
		   <input type="text" placeholder="Search..." name="input" value="">
       <div class="dropdown">
        <button class="dropbtn"><i class="material-icons">person</i></button>
          <div class="dropdown-content">
            <a href="#">Profile</a>
            <a href="#">Link 2</a>
            <a href="#">Sign Out</a>
          </div>
      	</div>
		</div>
    <a href="viewall-admin.php" class="viewall">View All</a>
    </header>
    <!------------------------------------------------------------------------->
  </head>
  <body>
    
    <div class="content">
    <h1>All Establishments</h1>

    <!-- ADD ESTABLISHMENT POPUP WINDOW -->
    <button id="myBtn"> ADD ESTABLISHMENT </button>
    <?php include_once 'add-establishment.php' ?>

    <table>
    <tr><th>Name</th><th>Type</th><th>Actions</th></tr>
    <!-- 
      INSERT PHP STATEMENTS HERE
    -->
    <tr><td><a href="">Blessings</a></td><td>Print, Internet, Bind, Photocopy</td><td><a href="">Edit</a>,<a href="">Delete</a></td></tr>
    <tr><td><a href="">Blessings</a></td><td>Print, Internet, Bind, Photocopy</td><td><a href="">Edit</a>,<a href="">Delete</a></td></tr>

    </table>
    </div>
  </body>

<script type="text/javascript" src="add-establishment.js">

</script>
</html>

<?php

$connection->close();
?>


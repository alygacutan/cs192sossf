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
v4.0 - Feb 21, 2019 - Minimal changes - PHP [Kenneth Santos]
v5.0 - Feb 25, 2019 - Organized file and folder structure for next sprint update [Kenneth Santos]

File Creation Date: Feb 06,2019
Development Group: SOSSF Group 
Client Group: N/A
Purpose: The HTML/PHP File for Add Establishment Function.
 -->

<?php
  include("../server.php");
  include("../extras.php");
?>

<!DOCTYPE html>
<html>

<?php
  /* - - - - - - VARIABLE DECLARTIONS - - - - - - */
  $new_establishmentID = $new_establishmentID_error = "";
  $new_name = $new_name_error= "";
  $new_location = $new_location_error = "";
  $new_tags = $new_tags_error = "";
  $new_contactNo = $new_contactNo_error = "";
  $new_businessHours = $new_businessHours_error = "";
  $new_status = $new_status_error = "";
  $new_services = $new_services_error = "";

  if(isset($_POST["button"])){
    if(empty($_POST["new_establishmentID"])){
      $new_establishmentID_error = "This field must not be empty";
    } else{
      $new_establishmentID = $_POST["new_establishmentID"];
    }

    if(empty($_POST["new_name"])){
      $new_name_error = "This field must not be empty";
    } else{
      $new_name = $_POST["new_name"];
    }
   
    if(empty($_POST["new_location"])){
      $new_location_error = "This field must not be empty";
    } else{
      $new_location = $_POST["new_location"];
    }

    if(empty($_POST["new_contactNo"])){
      $new_contactNo_error = "This field must not be empty";
    } else{
      $new_contactNo = $_POST["new_contactNo"];
    }

    if(empty($_POST["new_businessHours"])){
      $new_businessHours_error = "This field must not be empty";
    } else{
      $new_businessHours = $_POST["new_businessHours"];
    }

    if(empty($_POST["new_status"])){
      $new_status_error = "This field must not be empty";
    } else{
      $new_status = $_POST["new_status"];
    }

    if(empty($_POST["new_tags"])){
      $new_tags_error = "This field must not be empty";
    } else{
      $new_tags = $_POST["new_tags"];
    }

    if(empty($_POST["new_services"])){
      $new_services_error = "This field must not be empty";
    } else{
      $new_services = $_POST["new_services"];
    }

    if( $new_name AND $new_location AND $new_contactNo AND $new_businessHours AND $new_status){
      $sql1 = "INSERT INTO Establishment(name, location, businessHours, services, tags, contactNo, status)
      VALUES(\"$new_name\",\"$new_location\",\"$new_businessHours\",\"$new_services\",\"$new_tags\",\"$new_contactNo\", $new_status)";
      mysqli_query($connection,$sql1);
      //header("Location: viewall.php");

    }
  }
?>

<div id="editModal" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <form class="container" method="POST">

      <?php include("../errors.php"); ?>

      <div class="input-group">
        <h3>Edit Information</h3>
      </div>

      <div class="input-group">
        <label>Name:</label>
        <input type="text" name="new_name" placeholder="insert php" value="<?php echo $new_name ?>">
        <small class="error"><?php echo $new_name_error ?></small>
      </div>

      <div class="input-group">
        <label>Location: </label>
        <input type="text" name="new_location" placeholder="insert php" value="<?php echo $new_location ?>">
        <small class="error"><?php echo $new_location_error ?></small>
      </div>

      <div class="input-group">
        <label>Contact Info:</label>
        <input type="text" name="new_contactNo"  placeholder="insert php" value="<?php echo $new_contactNo ?>">
        <small class="error"><?php echo $new_contactNo_error ?></small>
      </div>

      <div class="input-group">
        <label>Business Hours:</label>
        <input type="text" name="new_businessHours" placeholder="insert php" value="<?php echo $new_businessHours ?>">
        <small class="error"><?php echo $new_businessHours_error ?></small>
      </div>

      <div class="input-group">
        <label>Status:</label>
        <input type="text" name="new_status" placeholder="insert php" value="<?php echo $new_status ?>">
        <small class="error"><?php echo $new_status_error ?></small>
      </div>
           
     <div class="input-group">
        <label>Tags:</label>
        <input type="text" name="new_tags" placeholder="insert php" value="<?php echo $new_tags ?>">
        <small class="error"><?php echo $new_tags_error ?></small>
      </div>

      <div class="input-group">
        <label>Services:</label>
        <!--<input type="text" name="new_services" value="<?php echo $new_services ?>"> -->
        <small class="error"><?php echo $new_services_error ?></small>
        <!-- under co. still testing how to fix this--->
        
      </div><textarea id="subject" name="new_services" value="<?php echo $new_services ?>"></textarea><br>

        <input type="submit" name="button" value="Make Changes" class="btn">

       <div class="input-group">
        <a href="view.php" style="color: white;">Make Changes</a>
      </div>

    </form>
  </div>
</div>

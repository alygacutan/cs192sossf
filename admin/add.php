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
v6.0 - Mar 20, 2019 - Revised PHP code [Kenneth Santos]
v7.0 - Apr 02, 2019 - Added confirmation box [Aly Gacutan]

File Creation Date: Feb 06,2019
Development Group: SOSSF Group 
Client Group: N/A
Purpose: The HTML/PHP File for Add Establishment Function.
 -->

<?php
  //include("../server.php"); **ERROR**
  include("../extras.php");
?>

<!DOCTYPE html>
<html>

<?php
  /* - - - - - - VARIABLE DECLARTIONS - - - - - - */
  $username = $_SESSION["username"];
  $userType = $_SESSION["userType"];
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

    if( $new_name AND $new_location AND $new_contactNo AND $new_businessHours){
      $sql1 = "INSERT INTO Requests(username, userType, type, name, location, businessHours, services, tags, contactNo, notes,time_submitted) VALUES(\"$username\",\"$userType\",1,\"$new_name\",\"$new_location\",\"$new_businessHours\",\"$new_services\",\"$new_tags\",\"$new_contactNo\", \"\",NOW())";
      mysqli_query($connection,$sql1) or die(mysqli_error($connection));
    }
  }
?>

<div id="myModal" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <form class="container" method="POST" id="from1">

      <?php include("../errors.php"); ?>

      <div class="input-group">
        <h2>ADD ESTABLISHMENT</h2>
      </div>

      <div class="input-group">
        <label>Name:</label>
        <input type="text" name="new_name" value="<?php echo $new_name ?>">
        <small class="error"><?php echo $new_name_error ?></small>
      </div>

      <div class="input-group">
        <label>Location: </label>
        <input type="text" name="new_location" value="<?php echo $new_location ?>">
        <small class="error"><?php echo $new_location_error ?></small>
      </div>

      <div class="input-group">
        <label>Contact Info:</label>
        <input type="text" name="new_contactNo" value="<?php echo $new_contactNo ?>">
        <small class="error"><?php echo $new_contactNo_error ?></small>
      </div>

      <div class="input-group">
        <label>Business Hours:</label>
        <input type="text" name="new_businessHours" value="<?php echo $new_businessHours ?>">
        <small class="error"><?php echo $new_businessHours_error ?></small>
      </div>
           
     <div class="input-group">
        <label>Tags:</label>
        <input type="text" name="new_tags" value="<?php echo $new_tags ?>">
        <small class="error"><?php echo $new_tags_error ?></small>
      </div>


      <div class="input-group">
        <label>Services:</label>
        <textarea type="text" name="new_services"><?php echo $new_services ?></textarea>
        <small class="error"><?php echo $new_services_error ?></small>
      </div>
      <!-- <div class="checkboxes">
        <br>
        <label> Tag(s)/ Type(s):</label>

        <?php /*
          $sql="SELECT tags FROM Establishment";
          $result=mysqli_query($connection,$sql);
          if ($result->num_rows > 0) {
          // output data of each row
              while($row = $result->fetch_assoc()) {
                  echo "<input type="checkbox" name="new_tags[]" value="".$row["tags"].""><a>".$row["tags"]."</a><br>";
              }
          } */
        ?>
         <input type="checkbox" name="Printing" value="Printing"><a>Printing</a><br>
         <input type="checkbox" name="Internet" value="Internet"><a>Internet</a><br>
         <input type="checkbox" name="CleaningRepair" value="CleaningRepair"><a>Cleaning & Repair</a><br>
         <input type="checkbox" name="Bookstore" value="Bookstore"><a>Bookstore</a><br>
         <input type="checkbox" name="Drugstore" value="Drugstore"><a>Drugstore</a><br>
         <input type="checkbox" name="Grocery" value="Grocery"><a>Grocery</a><br>
         <input type="checkbox" name="Binding" value="Binding"><a>Binding</a><br>
         <input type="checkbox" name="Salon" value="Salon"><a>Salon</a><br>
         <input type="checkbox" name="Photocopy" value="Photocopy"><a>Photocopy</a><br> 
          <textarea id="subject" name="new_tags" value="<?php  $new_tags ?>"></textarea>
      </div> -->

        <input type="submit" name="button" value="Create" class="btn">

       <div class="input-group">
        <a href="viewall.php" style="color: white;">Cancel</a>
      </div>

    </form>
  </div>
</div>
<script type="text/javascript">
document.querySelector('#from1').addEventListener('submit', function(e) {
  var form = this;

  e.preventDefault(); // <--- prevent form from submitting

  swal({
      title: "Add new establishment?",
      text: "Are you sure all info inputted are correct?",
      icon: "warning",
      buttons: [
        'No, go back',
        'Yes, I am sure!'
      ],
      dangerMode: true,
    }).then(function(isConfirm) {
      if (isConfirm) {
        swal({
          title: 'Success!',
          text: 'The establishment is now shortlisted!',
          icon: 'success'
        }).then(function() {
          form.submit(); // <--- submit form programmatically
        });
      } /*else {
        swal("Cancelled", "Your imaginary file is safe :)", "error");
      }*/
    })
});


</script>
</html>

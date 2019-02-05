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
    </head>

<?php 
  /* - - - - - - VARIABLE DECLARTIONS - - - - - - */
  $new_name = $new_name_error= "";
  $new_location = $new_location_error = "";
  $new_contactNo = $new_contactNo_error = "";
  $new_businessHours = $new_businessHours_error = "";
  $new_status = $new_status_error = "";
  $new_services = $new_services_error = "";
?>

<div id="myModal" class="modal">
      <!-- Modal content -->
      <div class="modal-content">
        <span class="close">&times;</span>
        <form class="container" method="POST">

          <?php include('errors.php'); ?>
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
              <label>Status:</label>
              <input type="text" name="new_status" value="<?php echo $new_status ?>">
              <small class="error"><?php echo $new_status_error ?></small>
          </div>

          <div class="input-group">
              <label>Services:</label>
              <!--<input type="text" name="new_services" value="<?php echo $new_services ?>"> -->
              <small class="error"><?php echo $new_services_error ?></small>
              <!-- under co. still testing how to fix this--->
              <textarea id="subject" name="new_services" value="<?php echo $new_services ?>"></textarea>
          <!-- -->
          </div>
          
          <div class="checkboxes">
              <label> Tag(s)/ Type(s):</label>

              <?php
                  $sql="SELECT tags FROM Establishment";
                  $result=mysqli_query($connection,$sql);
                  if ($result->num_rows > 0) {
                  // output data of each row
                      while($row = $result->fetch_assoc()) {
                          echo "<input type='checkbox' name='new_tags[]' value='".$row['tags']."'><a>".$row['tags']."</a><br>";
                      }
                  }
              ?>
              
          </div>

           <div class="input-group">
              <input type="submit" name="button" value="Create" class="btn">
          </div>

           <div class="input-group">
              <a href="HomeV2.php" style="color: white;">Cancel</a>
          </div>

        </form>
      </div>
</div>
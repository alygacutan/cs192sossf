<?php  include_once ('server.php');  include_once ('extras.php');?><!DOCTYPE html><html><?php  /* - - - - - - VARIABLE DECLARTIONS - - - - - - */  $new_establishmentID = $new_establishmentID_error = "";  $new_name = $new_name_error= "";  $new_location = $new_location_error = "";  $new_tags = $new_tags_error = "";  $new_contactNo = $new_contactNo_error = "";  $new_businessHours = $new_businessHours_error = "";  $new_status = $new_status_error = "";  $new_services = $new_services_error = "";  if(isset($_POST["button"])){    if(empty($_POST["new_establishmentID"])){      $new_establishmentID_error = "This field must not be empty";    } else{      $new_establishmentID = $_POST["new_establishmentID"];    }    if(empty($_POST["new_name"])){      $new_name_error = "This field must not be empty";    } else{      $new_name = $_POST["new_name"];    }       if(empty($_POST["new_location"])){      $new_location_error = "This field must not be empty";    } else{      $new_location = $_POST["new_location"];    }    if(empty($_POST["new_contactNo"])){      $new_contactNo_error = "This field must not be empty";    } else{      $new_contactNo = $_POST["new_contactNo"];    }    if(empty($_POST["new_businessHours"])){      $new_businessHours_error = "This field must not be empty";    } else{      $new_businessHours = $_POST["new_businessHours"];    }    if(empty($_POST["new_status"])){      $new_status_error = "This field must not be empty";    } else{      $new_status = $_POST["new_status"];    }    if( $new_name AND $new_location AND $new_contactNo AND $new_businessHours AND $new_status){      $sql1 = "INSERT INTO Establishment(establishmentID, name, location, tags, businessHours, contactNo, lastUpdate, status, username)      VALUES('$new_name', '$new_location', '$new_contactNo', '$new_businessHours', '$new_status')";      header("Location: viewall-admin.php");    }  }?><div id="myModal" class="modal">  <!-- Modal content -->  <div class="modal-content">    <span class="close">&times;</span>    <form class="container" method="POST">      <?php include('errors.php'); ?>      <div class="input-group">        <h2>ADD ESTABLISHMENT</h2>      </div>      <div class="input-group">        <label>Name:</label>        <input type="text" name="new_name" value="<?php echo $new_name ?>">        <small class="error"><?php echo $new_name_error ?></small>      </div>      <div class="input-group">        <label>Location: </label>        <input type="text" name="new_location" value="<?php echo $new_location ?>">        <small class="error"><?php echo $new_location_error ?></small>      </div>      <div class="input-group">        <label>Contact Info:</label>        <input type="text" name="new_contactNo" value="<?php echo $new_contactNo ?>">        <small class="error"><?php echo $new_contactNo_error ?></small>      </div>      <div class="input-group">        <label>Business Hours:</label>        <input type="text" name="new_businessHours" value="<?php echo $new_businessHours ?>">        <small class="error"><?php echo $new_businessHours_error ?></small>      </div>      <div class="input-group">        <label>Status:</label>        <input type="text" name="new_status" value="<?php echo $new_status ?>">        <small class="error"><?php echo $new_status_error ?></small>      </div>      <div class="input-group">        <label>Services:</label>        <!--<input type="text" name="new_services" value="<?php echo $new_services ?>"> -->        <small class="error"><?php echo $new_services_error ?></small>        <!-- under co. still testing how to fix this--->              </div><textarea id="subject" name="new_services" value="<?php echo $new_services ?>"></textarea><br>           <div class="checkboxes">        <br>        <label> Tag(s)/ Type(s):</label>        <?php /*          $sql="SELECT tags FROM Establishment";          $result=mysqli_query($connection,$sql);          if ($result->num_rows > 0) {          // output data of each row              while($row = $result->fetch_assoc()) {                  echo "<input type='checkbox' name='new_tags[]' value='".$row['tags']."'><a>".$row['tags']."</a><br>";              }          } */        ?>         <input type='checkbox' name='Printing' value="Printing"><a>Printing</a><br>         <input type='checkbox' name='Internet' value="Internet"><a>Internet</a><br>         <input type='checkbox' name='CleaningRepair' value="CleaningRepair"><a>Cleaning & Repair</a><br>         <input type='checkbox' name='Bookstore' value="Bookstore"><a>Bookstore</a><br>         <input type='checkbox' name='Drugstore' value="Drugstore"><a>Drugstore</a><br>         <input type='checkbox' name='Grocery' value="Grocery"><a>Grocery</a><br>         <input type='checkbox' name='Binding' value="Binding"><a>Binding</a><br>         <input type='checkbox' name='Salon' value="Salon"><a>Salon</a><br>         <input type='checkbox' name='Photocopy' value="Photocopy"><a>Photocopy</a><br>      </div>        <input type="submit" name="button" value="Create" class="btn">       <div class="input-group">        <a href="viewall-admin.php" style="color: white;">Cancel</a>      </div>    </form>  </div></div>
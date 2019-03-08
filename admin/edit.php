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
v1.0 - Mar 04, 2019 - Initial file - HTML [Aly Gacutan]
v2.0 - Mar 05, 2019 - Added edit functions - PHP [Kenneth Santos]

File Creation Date: Mar 04,2019
Development Group: SOSSF Group 
Client Group: N/A
Purpose: The HTML/PHP File for Edit Establishment Function.
 -->

<?php
	//include("../server.php");
	include("../extras.php");
?>

<!DOCTYPE html>
<html>
<?php
	/* - - - - - - VARIABLE DECLARTIONS - - - - - - */

	$id = $_GET['id'];
	$query = "SELECT * FROM Establishment WHERE status=1 AND establishmentID=$id";
	$result = mysqli_query($connection, $query);
	$record = mysqli_fetch_assoc($result);

	$establishmentID = $record["establishmentID"];
	$name = $record["name"];
	$name_error = "";
	$location = $record["location"];
	$location_error = "";
	$tags = $record["tags"];
	$tags_error = "";
	$contactNo = $record["contactNo"];
	$contactNo_error = "";
	$businessHours = $record["businessHours"];
	$businessHours_error = "";
	$services = $record["services"];
	$services_error = "";

	if(isset($_POST["button"])){
		if(empty($_POST["new_establishmentID"])){
			$establishmentID_error = "This field must not be empty";
		} else{
			$establishmentID = $_POST["new_establishmentID"];
		}

		if(empty($_POST["new_name"])){
			$name_error = "This field must not be empty";
		} else{
			$name = $_POST["new_name"];
		}
	 
		if(empty($_POST["new_location"])){
			$location_error = "This field must not be empty";
		} else{
			$location = $_POST["new_location"];
		}

		if(empty($_POST["new_contactNo"])){
			$contactNo_error = "This field must not be empty";
		} else{
			$contactNo = $_POST["new_contactNo"];
		}

		if(empty($_POST["new_businessHours"])){
			$businessHours_error = "This field must not be empty";
		} else{
			$businessHours = $_POST["new_businessHours"];
		}

		if(empty($_POST["new_status"])){
			$status_error = "This field must not be empty";
		} else{
			$status = $_POST["new_status"];
		}

		if(empty($_POST["new_tags"])){
			$tags_error = "This field must not be empty";
		} else{
			$tags = $_POST["new_tags"];
		}

		if(empty($_POST["new_services"])){
			$services_error = "This field must not be empty";
		} else{
			$services = $_POST["new_services"];
		}

		if( $name AND $location AND $contactNo AND $businessHours){

			$query = "UPDATE Establishment SET name=\"$name\", location=\"$location\", tags=\"$tags\", contactNo=$contactNo, businessHours=\"$businessHours\", services=\"$services\" WHERE establishmentID=$establishmentID";
			mysqli_query($connection,$query) or die(mysqli_error($connection));
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
				<h2>ADD ESTABLISHMENT</h2>
			</div>

			<div class="input-group">
				<label>Name:</label>
				<input type="text" name="new_name" value="<?php echo $name ?>">
				<small class="error"><?php echo $name_error ?></small>
			</div>

			<div class="input-group">
				<label>Location: </label>
				<input type="text" name="new_location" value="<?php echo $location ?>">
				<small class="error"><?php echo $location_error ?></small>
			</div>

			<div class="input-group">
				<label>Contact Info:</label>
				<input type="text" name="new_contactNo" value="<?php echo $contactNo ?>">
				<small class="error"><?php echo $contactNo_error ?></small>
			</div>

			<div class="input-group">
				<label>Business Hours:</label>
				<input type="text" name="new_businessHours" value="<?php echo $businessHours ?>">
				<small class="error"><?php echo $businessHours_error ?></small>
			</div>
					 
		 <div class="input-group">
				<label>Tags:</label>
				<input type="text" name="new_tags" value="<?php echo $tags ?>">
				<small class="error"><?php echo $tags_error ?></small>
			</div>

			<div class="input-group">
				<label>Services:</label>
				<textarea type="text" name="new_services"><?php echo $services ?></textarea>
				<small class="error"><?php echo $services_error ?></small>
			</div>


				<input type="submit" name="button" value="Make Changes" class="btn">

			 <div class="input-group">
				<a href="view.php" style="color: white;">Make Changes</a>
			</div>

		</form>
	</div>
</div>

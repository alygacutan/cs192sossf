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

				if(isset($_GET['est'])){$_SESSION['est'] = $_GET['est'];}	
				$sql="SELECT * FROM Establishment
				WHERE establishmentID = {$_SESSION['est']}";

				$result=mysqli_query($connection,$sql)->fetch_assoc();

			?>

			<div class="info">

				<?php
				echo "<h1>".$result['name']."</h1>";
				echo "<p>".$result['location']."</p>";
				echo "<p>".$result['contactNo']."</p>";
				echo "<p>".$result['tags']."</p>";
				echo "<p>".$result['businessHours']."</p>"
				?>

				<h2>Services:</h2>
				<div class="services">
						<p>...</p>
				</div>
			</div>
			
			<div class="reviewrate"><center><div>
				<span class="fa fa-star checked"></span>
				<span class="fa fa-star checked"></span>
				<span class="fa fa-star checked"></span>
				<span class="fa fa-star"></span>
				<span class="fa fa-star"></span></div><br>
					<button class="myBtn" style="margin-left:40px;float: left">Write a review</button>
					<button class="myBtn" style="margin-right:40px;float: right;">Suggest an Edit</button>
				<br><br>
				<div class="map">coming soon...</div><br>
				<label style="font-family: 'Montserrat', sans-serif; font-weight:normal; text-transform: uppercase; color: #f99a2c; font-size:15px">
					Reviews and Comments</label><br>
				<div class="reviews">coming soon...</div>
			</center></div>
		
		</div>
	</body>

	<script
	type="text/javascript" src="add-establishment.js">
	</script>

	</html>

	<?php $connection->close(); ?>
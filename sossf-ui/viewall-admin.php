<?php
	include_once ('server.php');
	include_once ('header.php');
	include_once ('extras.php');
	include_once ('add-establishment.php');
?>

<!DOCTYPE html>
<html>
	
	<head>
	</head>

	<body>
		<div class="content" style="height: 100%">
			<h1>All Establishments</h1>

			<!-- ADD ESTABLISHMENT POPUP WINDOW -->
			<button id="myBtn"> ADD ESTABLISHMENT </button>

			<!-- <?php //include_once 'add-establishment.php' ?> -->

			<table>
				<tr><th>Name</th><th>Type/Tag(s)</th><th>Actions</th></tr>

				<?php

				$sql_view_all = "SELECT name, tags FROM Establishment";
				$result_view_all = $connection->query($sql_view_all);

				if ($result_view_all->num_rows > 0) {
					while($row = $result_view_all->fetch_assoc()) {
							echo "<tr><td><a href=#>".$row["name"]."</a></td><td>".$row["tags"]."</td><td><a href=#>Edit</a>, <a href=#>Delete</a></td></tr>";
					}
				} else {
					echo "0 results";
				}

				?>

				<tr><td><a href="">Blessings</a></td><td>Print, Internet, Bind, Photocopy</td><td><a href="">Edit</a>,<a href="">Delete</a></td></tr>
				<tr><td><a href="">Blessings</a></td><td>Print, Internet, Bind, Photocopy</td><td><a href="">Edit</a>,<a href="">Delete</a></td></tr>
			</table>
		</div>
	</body>

	<script
	type="text/javascript" src="add-establishment.js">
	</script>

	</html>

	<?php $connection->close(); ?>

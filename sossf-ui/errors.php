<!-- 
Code History
v1.0 - Feb 05, 2019 - Initial file - PHP [Aly Gacutan]
v2.0 - Feb 06, 2019 - Revised PHP code [Kenneth Santos]

File Creation Date: Feb 05,2019
Development Group: SOSSF Group 
Client Group: N/A
Purpose: The HTML/PHP File for error handling.
 -->
<?php if(count($errors)>0): ?>

	<div class="error">
		<?php foreach ($errors as $error): ?>
			<p> <?php echo $error ?> </p>
		<?php endforeach ?>
	</div>
	
<?php endif ?>

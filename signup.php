<?php
include 'header.php';
session_start();

?>
	<div class="contain">

		<div class="container2">
			<form action="insertOk.php" method="post">
			    
			    <input type="text"name="email" placeholder=" type your email">
			    <input type="text"name="username" placeholder="type your username">

			    
			    <input type="password" name="password" placeholder=" type your password">
			    <input type="password" name="cpassword" placeholder="confirm password">

			  
			    <input type="submit" value="Submit">
		  </form>
	
		</div>
	</div>

<?php

include 'footer.php';
?>
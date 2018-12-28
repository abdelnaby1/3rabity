<?php
$pageTitle = '3rabity';
include 'header.php';
session_start();

?>
	<div class="signup">

		<div class="container2 text-center">
			<h1  class="text-dark">Sign Up</h1>
			<form name="myform"action="insertOk.php" onsubmit="return myFunction2() " method="post">
			    
			    <input type="text"name="email" placeholder=" type your email">
			    <input type="text"name="username" placeholder="type your username">

			    
			    <input type="password" name="password" placeholder=" type your password">
			    <input type="password" name="cpassword" placeholder="confirm password">

			  
			    <input class="bg-dark" type="submit" value="Sign Up">
		  </form>
			
		<h3 class="text-secondary p-3" style="width: 50%; margin: auto">if you have an account you can sign in directly <a href="signin.php" class="text-success">Sign In</a></h3>
		</div>
	</div>

<?php

include 'footer.php';
?>
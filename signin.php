<?php
$pageTitle = '3raBity';


include 'header.php';


?>
<?php
 session_start();

 	define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', '3rabity');
 	$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $username = mysqli_real_escape_string($db,$_POST['username']);
      $pass = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT userid FROM users WHERE username = '$username' and password = '$pass'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      //$active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         //session_register("user");
         $_SESSION['login_user'] = $username;
         
         header("location: home.php");
      }
   }
?>

	<div class="signin">

		<div class="container2 text-center">
			<h1 class="text-white">Sign In</h1>
			<form name="myform" action="" onsubmit="return myFunction()" method="post" >
			    
			    <input cl type="text" name="username" placeholder="Your Username">

			    
			    <input type="password" name="password" placeholder="Your password">
			  
			    <input class="bg-dark" type="submit" value="Sign In">
		  </form>
			
			<h4 class="signuph text-info p-3 text-center" style="width: 50%; margin: auto;">Or you can sign up from different email <a href="signup.php" class="text-text-primary">Sign Up</a></h4>
		</div>
	</div>


<?php

include 'footer.php';
?>
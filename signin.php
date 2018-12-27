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

	<div class="contain">

		<div class="container2">
			<form action=""method="post">
			    
			    <input type="text"name="username" placeholder="Your Username..">

			    
			    <input type="password" name="password" placeholder="Your password">
			  
			    <input type="submit" value="Submit">
		  </form>
	
		</div>
	</div>


<?php

include 'footer.php';
?>
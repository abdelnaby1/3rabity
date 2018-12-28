<?php
include 'header.php';
?>

<?php

if(isset($_POST)){
	$email = $_POST["email"];
	$pass = $_POST["password"];

	$con=new mysqli("localhost","root","1234","3rabity");

if($con->connect_error){
	die("Connection failed".$con->connect_error);
}
$sql = "SELECT email , password FROM users WHERE email = $email  And password = $pass";

	header("location: home.php");
	exit();
if ($result = mysqli_query($con,$sql))
{

	$rows = mysqli_num_rows($result);

	//if ($num_of_rows==1){
		//header("location : home.php");
	//	exit();
	//}

}


}
?>


<?php
include 'footer.php';
?>

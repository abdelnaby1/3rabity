<?php
   session_start();
   include('connection.php');
   
   
   $user_check = $_SESSION['login_user'];
   $sql = "select username from users where username = '$user_check' ";
   $sesion_query = mysqli_query($db,$sql);
   
   $row = mysqli_fetch_array($sesion_query,MYSQLI_ASSOC);
   
   $login_session = $row['username'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:signin.php");
      exit();
   }
?>
 <?php
 require_once 'class/connect.php'; 
 require_once 'class/user.php'; 

 session_start(); 

 $user = new User();
 $user->logout();
 header("location: login.php");
 
 ?>
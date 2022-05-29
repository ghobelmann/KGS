<?php
include_once("../databaseconnect.php");
       
  
      

error_reporting(E_ALL);
ini_set('display_errors', 1);



if ($_POST['password1'] == $_POST['password2']) {


  $sql="UPDATE `users` SET `password` = MD5('".$_POST['password1']."') WHERE `users`.`email` = '".$_POST['email']."'";

if (!mysqli_query($conn,$sql))
  {
  die('Error: Updating' . mysqli_error());
  }
  
  
} else {
   echo "Passwords Do not Match, Click Back Button and type again.";
} 



 header( "Location: index.php" ); die;

?>
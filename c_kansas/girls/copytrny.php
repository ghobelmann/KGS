      <?php

session_start(); 

include_once("databaseconnect.php");


//print_r($_SESSION);



 //authentication for coaches to get to their pages, not for public pages.

if(!isset($_SESSION['email']))
   // if there is no valid session
{
    header("Location:login-system/index.php");
}


if($perm != '9')
   // if there is no valid session
{
    header("Location:login-system/index.php");
}


 
?> 

       <?php         
    $sql = "SELECT id FROM users WHERE users.email = '$_SESSION[email]'"; 
			$result = mysqli_query($conn,$sql) or die(mysqli_error());
				while($row = mysqli_fetch_array( $result )) {
			$userid = $row['id']; }
      //echo $userid;
        
    $sql = "SELECT tmid, email FROM users WHERE 
     users.email = '$_SESSION[email]'"; 
			$result = mysqli_query($conn,$sql) or die(mysqli_error());
				while($row = mysqli_fetch_array( $result )) {
			$tmid = $row['tmid']; }
      // echo $tmid;
      
          $sql = "SELECT paid FROM team WHERE 
     tmid = '$_SESSION[tmid]'"; 
			$result = mysqli_query($conn,$sql) or die(mysqli_error());
				while($row = mysqli_fetch_array( $result )) {
		$paid = $row['paid'];
       }
  // echo $paid;
      
 ?> 




 <?php
   //create and copy par
  $temp="";
 
 
 
 
 
 
 
 
 ?>
<head>
	<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
	
	<title>Editable Invoice</title>
	
	<link rel='stylesheet' type='text/css' href='css/style.css' />
	<link rel='stylesheet' type='text/css' href='css/print.css' media="print" />
	<script type='text/javascript' src='js/jquery-1.3.2.min.js'></script>
	<script type='text/javascript' src='js/example.js'></script>

</head>





<?php

    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

require '../databaseconnect.php';
/* Registration process, inserts user info into the database 
   and sends account confirmation email message
 */

// Set session variables to be used on profile.php page
$_SESSION['email'] = $_POST['email'];
$_SESSION['first_name'] = $_POST['firstname'];
$_SESSION['last_name'] = $_POST['lastname'];
    
// Escape all $_POST variables to protect against SQL injections
//$age = mysqli_real_escape_string($con, $_POST['age']);
$first_name = mysqli_real_escape_string($conn, $_POST['firstname']);
$last_name = mysqli_real_escape_string($conn, $_POST['lastname']);
$email = $_POST['email'];
$password = mysqli_real_escape_string($conn, md5($_POST['password']));
$phone = mysqli_real_escape_string($conn, $_POST['phone']);
$permssions = mysqli_real_escape_string($conn,  'admin');
$tmid = mysqli_real_escape_string($conn,  $_POST['tmid']);
//$phone = mysqli_real_escape_string($conn, $_POST['phone']);

//echo $first_name;
//echo $last_name;
//echo $email;
//echo $password;
//echo $tmid;


//$hash = $mysqli->escape_string( md5( rand(0,1000) ) );
      
// Check if user with that email already exists
$sql = "SELECT * FROM users WHERE email= '$_POST[email]'";
if($result = mysqli_query($conn,$sql)){
$check = mysqli_num_rows($result);
//echo $check;
	if(mysqli_num_rows($result)){
		echo "<h1>ERROR: Player 1 has Already been Entered in the Database.</h1>";
	}else{ // Email doesn't already exist in a database, proceed...


     $sql = "INSERT INTO `users` (first_name, last_name, email, password, phone, tmid) 
     VALUES 
     ('$first_name','$last_name','$email','$password','$phone','$tmid')";
if (!mysqli_query($conn,$sql))
  {
  die('Error: Coach Insert Error' . mysqli_error());
  } {

        $_SESSION['active'] = 0; //0 until user activates their account with verify.php
        $_SESSION['logged_in'] = true; // So we know the user has logged in
        $_SESSION['message'] =
                
                 "Confirmation link has been sent to $email, please verify
                 your account by clicking on the link in the message!";

        // Send registration confirmation link (verify.php)
        $to      = $email;
        $subject = 'Account Verification (KansasGolfScores.com)';
        $message_body = '
        Hello

        Thank you for signing up!

        Please click this link to activate your account:

        http://admin.kansasgolfscores.com/c_kansas/girls/login-system/verify.php?email='.$email;  

        mail( $to, $subject, $message_body );

        header("location: profile.php"); 

    }


}  }


?>
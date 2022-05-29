  <!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
  <title>KansasGolfScores.com</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords" content="High School, Golf, Scores, Tournaments">
  <link rel="stylesheet" type="text/css" href="style/style_nopict.css">
  <script src="../../global_style/js/jquery-2.1.4.min.js"></script>
</head><body>	

<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL & ~E_NOTICE);
//error_reporting(E_ALL & ~E_NOTICE);

$servername = "localhost";
$username = "root";
$password = "R45edm!@";
$dbname = "ks_g_2017";
$conn = new mysqli($servername, $username, $password, $dbname);


// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
  

      
?> 



       <?php
             
    $sql = "SELECT id, email FROM users WHERE users.email = '$_SESSION[email]'"; 
			$result = mysqli_query($conn,$sql) or die(mysqli_error());
				while($row = mysqli_fetch_array( $result )) {
			$userid = $row['email']; }
      //echo $userid;
      
 ?> 
 
        <?php         
    $sql = "SELECT permissions FROM users WHERE users.email = '$userid'"; 
			$result = mysqli_query($conn,$sql) or die(mysqli_error());
				while($row = mysqli_fetch_array( $result )) {
			$perm = $row['permissions']; }
      
      echo $perm;
      
 ?> 
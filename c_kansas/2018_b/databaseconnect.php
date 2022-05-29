  <!DOCTYPE html>
<head>
  <title>KansasGolfScores.com</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords" content="High School, Golf, Scores, Tournaments">
  <script src='../../global_style/js/jquery-2.1.4.min.js'></script>
</head><body>	

<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 


    $connect = mysqli_connect("localhost", "root", "4Chr!5t3|6", "ks_b_2018");
  
  
  

$servername = "localhost";
$username = "root";
$password = "4Chr!5t3|6";
$dbname = "ks_b_2018";
$conn = new mysqli($servername, $username, $password, $dbname);


// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
  
define("HOSTNAME","localhost");
define("USERNAME","root");
define("PASSWORD","4Chr!5t3|6");
define("DATABASE","ks_b_2018");

$dbhandle=new mysqli(HOSTNAME,USERNAME,PASSWORD,DATABASE) or die("Unable to Connect DB");
  
  

      
?> 



       <?php
             
    $sql = "SELECT id, email, tmid FROM users WHERE users.email = '$_SESSION[email]'"; 
			$result = mysqli_query($conn,$sql) or die(mysqli_error());
				while($row = mysqli_fetch_array( $result )) {
			$userid = $row['email'];
      $tmid = $row['tmid'];  }
    //  echo $userid;
      
 ?> 
 
        <?php         
    $sql = "SELECT permissions FROM users WHERE users.email = '$userid'"; 
			$result = mysqli_query($conn,$sql) or die(mysqli_error());
				while($row = mysqli_fetch_array( $result )) {
			$perm = $row['permissions']; }
      
     //  echo $perm;
     
 
 ?> 
 
 

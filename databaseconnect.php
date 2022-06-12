  <html> <head>
            <link href="/includes/bootstrap.min.css" rel="stylesheet">      
   <!-- Custom styles for this template -->  
    </head>  	

<?php



    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 


 $connect = mysqli_connect("localhost", "root", "4Chr!5t3|6", "b_2020Main");
  
  
  

$servername = "localhost";
$username = "root";
$password = "4Chr!5t3|6";
$dbname = "b_2020Main";
$conn = new mysqli($servername, $username, $password, $dbname);


// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
  
define("HOSTNAME","localhost");
define("USERNAME","root");
define("PASSWORD","4Chr!5t3|6");
define("DATABASE","b_2020Main");

$dbhandle=new mysqli(HOSTNAME,USERNAME,PASSWORD,DATABASE) or die("Unable to Connect DB");
   
   
   
   $connect = new PDO("mysql:host=localhost;dbname=b_2020Main", "root", "4Chr!5t3|6");
             // echo $userid;
  
  
?> 



       <?php
             
    $sql = "SELECT id, email, tmid, id FROM users WHERE users.email = '$_SESSION[email]'"; 
			$result = mysqli_query($conn,$sql) or die(mysqli_error());
				while($row = mysqli_fetch_array( $result )) {
			$userid = $row['email'];
      $id = $row['id'];
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
 
 

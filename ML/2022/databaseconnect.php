

<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

    /* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '4Chr!5t3|6');
define('DB_NAME', 'ML_2022');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


 $connect = mysqli_connect("localhost", "root", "4Chr!5t3|6", "ML_2022");
  
  
  

$servername = "localhost";
$username = "root";
$password = "4Chr!5t3|6";
$dbname = "ML_2022";
$conn = new mysqli($servername, $username, $password, $dbname);


// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
  
define("HOSTNAME","localhost");
define("USERNAME","root");
define("PASSWORD","4Chr!5t3|6");
define("DATABASE","ML_2022");

$dbhandle=new mysqli(HOSTNAME,USERNAME,PASSWORD,DATABASE) or die("Unable to Connect DB");
   
   
   
   $connect = new PDO("mysql:host=localhost;dbname=ML_2022", "root", "4Chr!5t3|6");
             // echo $userid;
  
  
?> 


 

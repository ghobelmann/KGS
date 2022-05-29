
<?php
error_reporting(E_ALL & ~E_NOTICE);
//$email = mysql_real_escape_string($_POST['email']);
session_start();
//function session_start(array $options = []): bool { };

/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'usd_237');
define('DB_NAME', 'sub2021');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}



$servername = "localhost";
$username = "root";
$password = "usd_237";
$dbname = "sub2021";



$connect = new PDO("mysql:host=localhost; dbname=sub2021", "root", "usd_237");



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

try {
$dbo = new PDO('mysql:host='.$servername.';dbname='.$dbname, $username, $password);
} catch (PDOException $e) {
print "Error!: " . $e->getMessage() . "<br/>";
die();
}
$today = date("Y-n-j"); 
$sql = "SELECT * FROM data_logins WHERE data_logins.email = '$_SESSION[email]'"; 
$result = mysqli_query($conn,$sql) or die(mysqli_error());
  while($row = mysqli_fetch_array( $result )) {
//$userid = mysql_real_escape_string($_POST['email']);
//$id = mysql_real_escape_string($_POST['id']);
//$name = mysql_real_escape_string($_POST['name']);
  }
//echo $userid;

?>
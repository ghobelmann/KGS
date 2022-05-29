

<?php

$server = kgsServer_1_1;
$state = Kansas;

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
  
  
  
  
        $sql = "SELECT id FROM users WHERE users.email = '$_SESSION[email]'"; 
			$result = mysqli_query($conn,$sql) or die(mysqli_error());
				while($row = mysqli_fetch_array( $result )) {
			$userid = $row['id']; }

                 // echo $userid;
?> 
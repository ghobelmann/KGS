<meta http-equiv="Refresh" content="10; url='enterMusic.php'" />

<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "4Chr!5t3|6";
$dbname = "vocalMusic";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql="INSERT INTO `songs` (title, composer, publisher, level, style, notes)
VALUES
('$_POST[title]','$_POST[composer]','$_POST[publisher]', 
'$_POST[level]','$_POST[style]','$_POST[notes]')";    


if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
 
 

    
    
 
 
 
 
 
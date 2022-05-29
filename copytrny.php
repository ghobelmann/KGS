                      <?php     
                    error_reporting(E_ALL);
session_start(); 

session_regenerate_id();
if(!isset($_SESSION['email']))
   // if there is no valid session
{
    header("Location:login-system/index.php");
}

include_once("databaseconnect.php");
if(!empty($_GET['id'])) { $tid = $_GET['id']; } echo $tid;
 ?>  
  <!DOCTYPE html>
<html lang="en">
<head>
<title>Kansas Golf</title>
<meta charset="utf-8">



</head>

<TITLE>Finalize Tournament</TITLE>
<meta http-equiv="Refresh" content="2; url=CopyTourney.php">






<?php 


$copy = 3;

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

    

$sql = "SELECT * from tournament where id ='$tid' ";
if($result = mysqli_query($conn,$sql)){
$check = mysqli_num_rows($result);
echo $check;


$sql = "INSERT INTO tournament (tournament, par, yardage, uid, slope, rating,
image, h1, h2, h3, h4, h5, h6, h7, h8, h9, h10, h11, h12, h13, h14, h15, h16, h17, h18, y1, y2, y3, y4, y5, y6, y7, y8, y9, y10, y11, y12, 
y13, y14, y15, y16, y17, y18) 
SELECT tournament, par, yardage, uid, slope, rating,
image, h1, h2, h3, h4, h5, h6, h7, h8, h9, h10, h11, h12, h13, h14, h15, h16, h17, h18, y1, y2, y3, y4, y5, y6, y7, y8, y9, y10, y11, y12, 
y13, y14, y15, y16, y17, y18
FROM tournament
WHERE id = '$tid'";  

if ($conn->query($sql) === TRUE) {
    echo "<h1>Tournament Copied Successfully</h1>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}         
            
            

      } 

?>
      </BODY>
</HTML>


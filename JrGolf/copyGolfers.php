<?php     
                    error_reporting(E_ALL);
session_start(); 
 //authentication for coaches to get to their pages, not for public pages.
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
<meta http-equiv="Refresh" content="10; url=index.php">






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


$sql = "INSERT INTO scores (`pid`, `teetime`, `tmid`, `card`, `division`, `tid`) 
SELECT `pid`, `teetime`, `tmid`, `card`, `division`, (`tid` + '2') 
FROM `scores` WHERE `tid` = '$tid'";  

if ($conn->query($sql) === TRUE) {
    echo "<h1>Tournament Copied Successfully</h1>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}         
            
            

      } 

?>
      </BODY>
</HTML>


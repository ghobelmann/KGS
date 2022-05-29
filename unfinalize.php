 <?php     
         if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 


if(!isset($_SESSION['email']))
   // if there is no valid session
{
    header("Location:login-system/index.php");
}
//var_dump($_SESSION);

include_once("databaseconnect.php");
 ?>  
  <!DOCTYPE html>
<html lang="en">
<head>
<title>Kansas Golf</title>
<meta charset="utf-8">



</head>

<TITLE>UnFinalize Tournament</TITLE>
<meta http-equiv="Refresh" content="2; url=index.php">


  <BODY>
<HTML>



<?php 

if(!empty($_GET['tid']))
{
$tid = $_GET['tid'];
}
echo $tid;



$sql = "UPDATE tournament SET `complete` = '1' WHERE `id` = '$tid' ";

if ($conn->query($sql) === TRUE) {
    echo "Scores Updated successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}


 // sql to delete a record
$sql = "UPDATE scores SET `complete` = '0' WHERE `tid` = '$tid' ";

if ($conn->query($sql) === TRUE) {
    echo "Scores Updated successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}


// Check connection
 // sql to delete a record
$sql = "DELETE FROM scores2 WHERE `tid` = '$tid' ";

if ($conn->query($sql) === TRUE) {
    echo "Scores2 deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}



 
 

           echo "<h1>Tournament UnFinalized successfully</h1>";
           echo $tid;
?>


  </BODY>
</HTML>

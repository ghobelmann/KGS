        <?php               
         ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

          ?>

  
  
 <?php
 //authentication for coaches to get to their pages, not for public pages.

//include_once("headerb.php");
include_once("databaseconnect.php");
 // Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}



$sql="UPDATE tournament SET state='$_POST[state]', tournament='$_POST[tournament]',
 status='$_POST[status]', date='$_POST[date]',
rounds='$_POST[rounds]',  comments='$_POST[comments]', 
btyb='$_POST[btyb]', notes='$_POST[notes]',
course='$_POST[course]', leaderboard='$_POST[leaderboard]' WHERE id = '$_POST[id]' ";
   
     if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}


?>

<HTML>
<HEAD>
  <META HTTP-EQUIV="Refresh" CONTENT="5;URL=index.php">


</HEAD>

<center>
  <H1>! Tournament Added - Great Job!!!</H1>
  <h2>You can now enter the golfers names and what scorecards they are on</h2><br>
  
  <h2>Click on Assign to Card to enter by Team or by Card.</h2> <br>
  
  
    <h2>This page will automatically redirect, please do not click refresh.</h2> <br>
</center>



</BODY>
</HTML>






     
                           
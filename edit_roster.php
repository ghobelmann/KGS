<!DOCTYPE html>  
<head>
  <title>KansasGolfScores.com</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords" content="High School, Golf, Scores, Tournaments">
 <link rel="stylesheet" href="../../global_style/style/bootstrap.min.css">    
  <script src="../../global_style/js/jquery-2.1.4.min.js"></script>
  <script src="../../global_style/js/bootstrap.min.js"></script>

</head><body>	
              <div class="row">
        <!-- Sidebar Column -->
        <div class="col-lg-6 mb-4">

   <?php
 //authentication for coaches to get to their pages, not for public pages.
session_start();
session_regenerate_id();
if(!isset($_SESSION['email']))
   // if there is no valid session
{
    header("Location:login-system/index.php");
}

include_once("databaseconnect.php");
//include_once("analyticstracking.php"); 
 ?> 
 
 
        <?php         
    $sql = "SELECT id, tmid FROM `users` WHERE users.email = '$_SESSION[email]'"; 
			$result = mysqli_query($conn,$sql) or die(mysqli_error());
				while($row = mysqli_fetch_array( $result )) {
			$userid = $row['id'];
      $tmid = $row['tmid']; }
      echo $userid;
      echo $_SESSION['email'];
      
 ?> 
 
 

<center>

<div align="center" ><h1>All Players </h1>
    <?php
	//This script is for the ranking
$sql = "SELECT *, users.id from roster 
INNER JOIN users ON roster.tmid = users.tmid
WHERE users.id = $userid ORDER by pid ASC ";
                                                        


$result = mysqli_query($conn,$sql)
or die ('Error in Query Try Again:--' . mysqli_error());

//Print table to the web page
echo "<table class='table'";
echo "<tr> <th><center>Edit</th><th><center>Name </th><th><center>Grade</th><th><center>Delete</th> </tr>";
// keeps getting the next row until there are no more to get

while($row = mysqli_fetch_array( $result )) {
	// Print out the contents of each row into a table
	
	echo "<tr><td><center>"; 
	echo '<a href="update_roster.php?pid='.$row['pid'].'">'.$row['pid'].'</a>';
  echo "</td><td><CENTER>"; 
	echo '<a href="messagename.php?name='.$row['pid'].'">'.$row['player_1'].'</font></a>';
  		echo "</td><td><b><CENTER>"; 
	echo $row['grade'];
	echo "</td></b><td><CENTER>"; 
	echo '<a href="deletewarnroster.php?pid='.$row['pid'].'">'.$row['pid'].'</font></a>';
	echo "</td></b><CENTER>"; 

} 

?>

</p>


</div>

</center>


</div>
</div>

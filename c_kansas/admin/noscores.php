<!DOCTYPE html>  
<head>
  <title>KansasGolfScores.com</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords" content="High School, Golf, Scores, Tournaments">
 <link rel="stylesheet" href="../../global_style/style/bootstrap.min.css">      
    <link rel="stylesheet" href="../../global_style/style/style_nopict.css"> 
  <script src="../../global_style/js/jquery-2.1.4.min.js"></script>
  <script src="../../global_style/js/bootstrap.min.js"></script>

</head><body>	 
 
 
 




<?php
      
 
 //authentication for coaches to get to their pages, not for public pages.
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
if(!isset($_SESSION['email']))
   // if there is no valid session
{
    header("Location:login-system/index.php");
}

include_once("headera.php");
include_once("databaseconnect.php");




 ?> 

<div id="wrapper">

  <div id="content">    
  
  <p>
  
 <?php         
    $sql = "SELECT id FROM users WHERE users.email = '$_SESSION[email]'"; 
			$result = mysqli_query($conn,$sql) or die(mysqli_error());
				while($row = mysqli_fetch_array( $result )) {
			$userid = $row['id']; }
      echo $userid;
      
 ?>   

<?php
// Make a MySQL Connection


// Get all the data from the "example" table
$sql = "SELECT * FROM `season` 
INNER JOIN roster on season.pid = roster.pid
LEFT JOIN team on season.tmid = team.tmid 
WHERE total = 0"; 
	$result = mysqli_query($conn,$sql) or die(mysqli_error()); 
  echo "<div class='CSSTableGenerator' >";   
echo "<table width = '800' border='1'>";  
echo "<tr> <th>Player Name </th><th>Team</th><th>Total</th><th>Delete</th> </tr>";
// keeps getting the next row until there are no more to get
while($row = mysqli_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['pid'].'">'.$row['player_1'].'</font></a>';
	echo "</td><td><CENTER>"; 
	echo '<a href="messageteam.php?team='.$row['tmid'].'">'.$row['school'].'</font></a>';
  	echo "</td><td><CENTER>";
    	echo '<a href="messageteam.php?team='.$row['total'].'">'.$row['total'].'</font></a>';
  	echo "</td><td><CENTER>";  
	echo '<a href="deletevirtualscores.php?id='.$row['id'].'">'.$row['id'].'</font></a>';
	echo "</td></tr><CENTER>";
}  
    
echo "</table>";
?>


</p>

</div> 
</div>
</body>
</html>



<p><?php include("footer.php"); ?>&nbsp;</p>


</body>
</html>

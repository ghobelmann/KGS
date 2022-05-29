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
<p>
<table>
<tr><td valign="top">


<?php
$query = "SELECT count(id) as count from users "; 
	 
$result = mysqli_query($conn,$query) or die(mysqli_error());
echo "<div class='CSSTableGenerator' >";
echo "<table border='1'>";
echo "<tr> <th>Total</th> </tr>";
// keeps getting the next row until there are no more to get
$i = 1;

while($row = mysqli_fetch_array( $result )) {
	// Print out the contents of each row into a table
	
	echo "<tr><td>"; 
	echo $row['count'];
	echo "</td></tr>"; 	
	$i++;
	
	
} 

echo "</table>";
?>



<?php
$query = "SELECT * from users 
INNER JOIN team ON users.tmid = team.tmid
order by id desc"; 
	 
$result = mysqli_query($conn,$query) or die(mysqli_error());
echo "<div class='CSSTableGenerator' >";
echo "<table border='1'>";
echo "<tr> <th>Edit</th> <th>First Name</th><th>Last Name</th><th>Phone</th><th>School</th><th>Email-Username</th><th>Phone</th><th>Password</th><th>Confirmed</th><th>Delete</th></tr>";
// keeps getting the next row until there are no more to get
$i = 1;

while($row = mysqli_fetch_array( $result )) {
	// Print out the contents of each row into a table
	
	echo "<tr><td>"; 
	echo '<a href="editcoach.php?id='.$row['id'].'">'.$row['id'].'</font></a>';
	echo "</td><td><CENTER>"; 
	echo $row['first_name'];
	echo "</td><td><CENTER>"; 
  	echo $row['last_name'];
    	echo "</td><td><CENTER>"; 
  	echo $row['phone'];
    	echo "</td><td><CENTER>"; 
  	echo $row['school'];
    	echo "</td><td><CENTER>"; 
	echo '<a href = "mailto:'.$row['email'].'">'.$row['email'].'</font></a>';
  	echo "</td><td><CENTER>"; 
  	echo $row['phone'];
	echo "</td><td><CENTER>"; 
	echo $row['password'];
  	echo "</td><td><CENTER>"; 
	echo $row['active'];
	echo "</td><td><CENTER>"; 
	echo '<a href="deleteteam.php?id='.$row['id'].'">'.$row['id'].'</font></a>';
	echo "</td></tr><CENTER>"; 	
	$i++;
	
	
} 

echo "</table>";
?>


</td></tr>
</p>

</div> 
</div>
</body>
</html>

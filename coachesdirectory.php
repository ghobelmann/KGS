<!DOCTYPE html>  
<head>
  <title>KansasGolfScores.com</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords" content="High School, Golf, Scores, Tournaments">
 <link rel="stylesheet" href="../includes/bootstrap.min.css"> 

</head><body>	
















 <?php
 //authentication for coaches to get to their pages, not for public pages.
session_start();
session_regenerate_id();
if(!isset($_SESSION['email']))
   // if there is no valid session
{
    header("Location:glogin-system/index.php");
}

//include_once("headera.php");
include_once("databaseconnect.php");
//include_once("analyticstracking.php") 
 ?> 
 
       <?php         
    $sql = "SELECT id FROM users WHERE users.email = '$_SESSION[email]'"; 
			$result = mysqli_query($conn,$sql) or die(mysqli_error());
				while($row = mysqli_fetch_array( $result )) {
			$userid = $row['id']; }
      //echo $trny;
      
 ?> 



   <script>

window.onload = function() {
    document.getElementById("school").focus();
};
</script>


   
  <div id="container">
     
<tr><td valign="top">


<?php
$query = "SELECT count(id) as count from users"; 
	 
$result = mysqli_query($conn,$query) or die(mysqli_error());

echo "<table";
echo "<tr> <th>Total</th> </tr>";
// keeps getting the next row until there are no more to get
$i = 1;

while($row = mysqli_fetch_array( $result )) {
	// Print out the contents of each row into a table
	
	echo "<tr><td>"; 
	echo $row['count'];
	echo " Coaches in Database</td></tr>"; 	
	$i++;
	
	
} 

echo "</table>";
?>



<?php
$query = "SELECT * from users 
INNER JOIN team on users.tmid = team.tmid
order by school asc"; 
	 
$result = mysqli_query($conn,$query) or die(mysqli_error());
echo "<table class='table table-striped'>";
echo "<tr> <th>First Name</th><th>Last Name</th><th>School</th><th>Email</th><th>Phone</th><th>Coach UID</th></tr>";
// keeps getting the next row until there are no more to get
$i = 1;

while($row = mysqli_fetch_array( $result )) {
	// Print out the contents of each row into a table
	
	echo "<tr><td>"; 
	echo $row['first_name'];
	echo "</td><td>"; 
  	echo $row['last_name'];
    	echo "</td><td>"; 
  	echo $row['school'];
    	echo "</td><td>"; 
	echo '<a href = "mailto:'.$row['email'].'">'.$row['email'].'</a>';
      	echo "</td><td>"; 
  		echo $row['phone'];
       	echo "</td><td>"; 
  	echo $row['id'];
	echo "</td></tr>"; 	
	$i++;
	
	
} 

echo "</table>";
?>


</td></tr>
</div> 
</body>
</html>

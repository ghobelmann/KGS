<!DOCTYPE html>  
    <meta content="Kansas Girls and Boys Golf including scores, stats" name="description"/>
    <meta property="og:title" content="Boys Golf Kansas" itemprop="name"/>
    <meta property="og:url" content="http://www.kansasgolfscores.com" itemprop="url"/>

    <meta property="og:description" content="Girls and Boys Golf including scores, stats Kansas" itemprop="description"/>
    <meta property="og:site_name" content="kansasgolfscores.com"/>
    <meta name="twitter:card" content="summary" />


  <title>KansasGolfScores.com</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords" content="High School, Golf, Scores, Tournaments">
 <link rel="stylesheet" href="../../includes/bootstrap.min.css">     
  <script src="../../includes/jquery-2.1.4.min.js"></script>
  <script src="../../includes/bootstrap.min.js"></script>


 
 
 
 
 
 
 
 
 
 





 <?php
 //authentication for coaches to get to their pages, not for public pages.
session_start();
session_regenerate_id();
if(!isset($_SESSION['email']))
   // if there is no valid session
{
    header("Location:login-system/index.php");
}

include_once("headera.php");
include_once("databaseconnect.php");
include_once("analyticstracking.php") 
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

<!DOCTYPE html>
<html lang="en">
<head>
<title>Redmen Golf</title>
<meta charset="utf-8">
<link href="style/style_nopict.css" rel="stylesheet">
</head>
<body>
   
  <div id="content">
     
<tr><td valign="top">


<?php
$query = "SELECT count(id) as count from users"; 
	 
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
echo "<div class='CSSTableGenerator' >";
echo "<table border='1'>";
echo "<tr> <th>First Name</th><th>Last Name</th><th>School</th><th>Email</th><th>Phone</th><th>Coach UID</th></tr>";
// keeps getting the next row until there are no more to get
$i = 1;

while($row = mysqli_fetch_array( $result )) {
	// Print out the contents of each row into a table
	
	echo "<tr><td>"; 
	echo $row['first_name'];
	echo "</td><td><CENTER>"; 
  	echo $row['last_name'];
    	echo "</td><td><CENTER>"; 
  	echo $row['school'];
    	echo "</td><td><CENTER>"; 
	echo '<a href = "mailto:'.$row['email'].'">'.$row['email'].'</font></a>';
      	echo "</td><td><CENTER>"; 
  	echo $row['phone'];
       	echo "</td><td><CENTER>"; 
  	echo $row['id'];
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

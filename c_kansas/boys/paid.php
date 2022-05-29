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
session_start();
session_regenerate_id();
if(!isset($_SESSION['email']))
   // if there is no valid session
{
    header("Location:login-system/index.php");
}

include_once("headera.php");
include_once("databaseconnect.php");
//include_once("analyticstracking.php"); 
 ?> 
 
 
        <?php         
    $sql = "SELECT id FROM users WHERE users.email = '$_SESSION[email]'"; 
			$result = mysqli_query($conn,$sql) or die(mysqli_error());
				while($row = mysqli_fetch_array( $result )) {
			$userid = $row['id']; }

 ?> 
 
         <?php         
    $sql = "SELECT sum(amount) as sum FROM team "; 
			$result = mysqli_query($conn,$sql) or die(mysqli_error());
				while($row = mysqli_fetch_array( $result )) {
			$total = $row['sum']; }
 
      
 ?> 
 
 
 
<div id="wrapper">

  <div id="content">


<center>

<div align="center" ><h1>Total Income This Year - $<?php echo  $total; ?>  </h1>

    <?php
	//This script is for the ranking
$sql = "SELECT count(tmid) as count from team WHERE paid = 1 ";
                                                        


$result = mysqli_query($conn,$sql)
or die ('Error in Query Try Again:--' . mysqli_error());

//Print table to the web page
echo "<table border='1'>";
echo "<tr> <th>Count</th></tr>";
// keeps getting the next row until there are no more to get

while($row = mysqli_fetch_array( $result )) {
	// Print out the contents of each row into a table
	
	echo "<tr><td>"; 
	echo $row['count'];
	echo "</td></tr><CENTER>"; 

} 

?>

    <?php
	//This script is for the ranking
$sql = "SELECT sum(amount) as total from team WHERE paid = 1 ";
                                                        


$result = mysqli_query($conn,$sql)
or die ('Error in Query Try Again:--' . mysqli_error());

//Print table to the web page
echo "<table border='1'>";
echo "<tr> <th>KGCA</th></tr>";
// keeps getting the next row until there are no more to get

while($row = mysqli_fetch_array( $result )) {
	// Print out the contents of each row into a table
	
	echo "<tr><td>"; 
	echo (($row['total'] /20) *5);
	echo "</td></tr><CENTER>"; 

} 

?>
    <?php
	//This script is for the ranking
$sql = "SELECT * from team WHERE paid = 1 ORDER by school ASC ";
                                                        


$result = mysqli_query($conn,$sql)
or die ('Error in Query Try Again:--' . mysqli_error());

//Print table to the web page
echo "<table border='1'>";
echo "<tr> <th>Edit</th><th>School </th><th>Class</th><th>KCA</th><th>Amount</th><th>Delete</th> </tr>";
// keeps getting the next row until there are no more to get

while($row = mysqli_fetch_array( $result )) {
	// Print out the contents of each row into a table
	
	echo "<tr><td>"; 
	echo '<a href="update_paid.php?tmid='.$row['tmid'].'">'.$row['tmid'].'</a>';
  echo "</td><td><CENTER>"; 
	echo $row['school'];
  echo "</td><td><b><CENTER>"; 
	echo $row['classification'];
    echo "</td><td><CENTER>"; 
	echo $row['paid'];
  echo "</td><td><b><CENTER>"; 
	echo $row['amount'];
	echo "</td></b><td><CENTER>"; 
	echo '<a href="delete_paid.php?tmid='.$row['tmid'].'">'.$row['tmid'].'</font></a>';
	echo "</td></b><CENTER>"; 

} 

?>

</p>


</div>

</center>


</div>
</div>



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



<body>
<div id="wrapper">

  <div id="content">


<center>

 <table style="width:50%">
  <tr>
    <th colspan ="4">Count of Golfers by Grade</th>
    
  
  </tr>
  <tr>
    <td>Freshman</td>
    <td>Sophomores</td>
    <td>Juniors</td>
      <td>Seniors</td>
      <td>Total</td>
  </tr>
  <tr>
    <td> <?php
    
//Submit Query to MySql Database
$query = "SELECT count(roster.player_1) as golfers 
FROM roster WHERE grade = 9";
$result = mysqli_query($conn,$query)
or die ('Error in Query Try Again:--' . mysqli_error());

// keeps getting the next row until there are no more to get
$i = 1;
while($row = mysqli_fetch_array( $result )) {
	// Print out the contents of each row into a table
  echo "<h2>";
	echo $row['golfers'];
  echo "</h2>";

}  

?></td>
    <td><?php
    
//Submit Query to MySql Database
$query = "SELECT count(roster.player_1) as golfers 
FROM roster WHERE grade = 10";
$result = mysqli_query($conn,$query)
or die ('Error in Query Try Again:--' . mysqli_error());

//Print table to the web page
// keeps getting the next row until there are no more to get
$i = 1;
while($row = mysqli_fetch_array( $result )) {
	// Print out the contents of each row into a table
  echo "<h2>";
	echo $row['golfers'];
  echo "</h2>";

}  

?></td>
   
    <td><?php
    
//Submit Query to MySql Database
$query = "SELECT count(roster.player_1) as golfers 
FROM roster WHERE grade = 11";
$result = mysqli_query($conn,$query)
or die ('Error in Query Try Again:--' . mysqli_error());

//Print table to the web page
// keeps getting the next row until there are no more to get
$i = 1;
while($row = mysqli_fetch_array( $result )) {
	// Print out the contents of each row into a table
  echo "<h2>";
	echo $row['golfers'];
  echo "</h2>";

}  

?></td>
   <td><?php
    
//Submit Query to MySql Database
$query = "SELECT count(roster.player_1) as golfers 
FROM roster WHERE grade = 12";
$result = mysqli_query($conn,$query)
or die ('Error in Query Try Again:--' . mysqli_error());

//Print table to the web page
// keeps getting the next row until there are no more to get
$i = 1;
while($row = mysqli_fetch_array( $result )) {
	// Print out the contents of each row into a table
  echo "<h2>";
	echo $row['golfers'];
  echo "</h2>";

}  

?></td>
 <td><?php
    
//Submit Query to MySql Database
$query = "SELECT count(roster.player_1) as golfers 
FROM roster";
$result = mysqli_query($conn,$query)
or die ('Error in Query Try Again:--' . mysqli_error());

//Print table to the web page
// keeps getting the next row until there are no more to get
$i = 1;
while($row = mysqli_fetch_array( $result )) {
	// Print out the contents of each row into a table
  echo "<h2>";
	echo $row['golfers'];
  echo "</h2>";

}  

?></td>
  </tr>
</table> 

<div align="center" ><h1>All Players in Database </h1>
    <?php
	//This script is for the ranking
$query = "SELECT * from roster ORDER by tmid ASC, grade DESC";
$result = mysqli_query($conn,$query)
or die ('Error in Query Try Again:--' . mysqli_error());

//Print table to the web page
echo "<table border='1'>";
echo "<tr><th>Name </th><th>Grade</th> <th>School</th><b></b> </tr>";
// keeps getting the next row until there are no more to get

while($row = mysqli_fetch_array( $result )) {
	// Print out the contents of each row into a table
	
	echo "<tr><td>"; 
  echo '<a href="messagename.php?pid='.$row['pid'].'">'.$row['playerName'].'</font></a>';
  echo "</td><td><b><CENTER>"; 
	echo $row['grade'];
	echo "</td><td><CENTER>"; 
	echo '<a href="messageteam.php?tmid='.$row['tmid'].'">'.$row['tmid'].'</font></a>';
	echo "</td></b><CENTER>"; 

} 

?>

</p>


</div>

</center>


</div>
</div>




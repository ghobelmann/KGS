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
<link href="style/style.css" rel="stylesheet">
</head>
<body>
   
  <div id="content">
     
  <div align="left"><strong><h2>Enter New School<h2></strong></div>
  <form action="connectteam.php" method="post">
    <p>School:
        <input type="varchar" id="school" name="school"  size="32"/>
      Class:
		<input type="varchar" name="classification" size="2" value="6A"/>
</p>


      <input name="" type="submit" value="Enter Team" />
</p>
  </form>

      

<p>
<table>
<tr><td valign="top">


<?php
$query = "SELECT count(tmid) as count from team WHERE classification = '6A' order by school asc"; 
	 
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
$query = "SELECT * from team WHERE classification = '6A' order by school asc"; 
	 
$result = mysqli_query($conn,$query) or die(mysqli_error());
echo "<div class='CSSTableGenerator' >";
echo "<table border='1'>";
echo "<tr> <th>Edit</th> <th>Team</th><th>class</th><th>Delete</th></tr>";
// keeps getting the next row until there are no more to get
$i = 1;

while($row = mysqli_fetch_array( $result )) {
	// Print out the contents of each row into a table
	
	echo "<tr><td>"; 
	echo '<a href="editteam.php?tmid='.$row['tmid'].'">'.$row['tmid'].'</font></a>';
	echo "</td><td><CENTER>"; 
	echo '<a href="playerroster.php?school='.$row['school'].'">'.$row['school'].'</font></a>';
	echo "</td><td><CENTER>"; 
	echo $row['classification'];
	echo "</td><td><CENTER>"; 
	echo '<a href="deleteteam.php?tmid='.$row['tmid'].'">'.$row['tmid'].'</font></a>';
	echo "</td></tr><CENTER>"; 	
	$i++;
	
	
} 

echo "</table>";
?>

</td><td valign="top">
<?php
$query = "SELECT count(tmid) as count from team WHERE classification = '5A' order by school asc"; 
	 
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
$query = "SELECT * from team WHERE classification = '5A' order by school asc"; 
	 
$result = mysqli_query($conn,$query) or die(mysqli_error());
echo "<div class='CSSTableGenerator' >";
echo "<table border='1'>";
echo "<tr> <th>Edit</th> <th>Team</th><th>class</th><th>Delete</th></tr>";
// keeps getting the next row until there are no more to get
$i = 1;

while($row = mysqli_fetch_array( $result )) {
	// Print out the contents of each row into a table
	
	echo "<tr><td>"; 
	echo '<a href="editteam.php?id='.$row['tmid'].'">'.$row['tmid'].'</font></a>';
	echo "</td><td><CENTER>"; 
	echo '<a href="playerroster.php?school='.$row['school'].'">'.$row['school'].'</font></a>';
	echo "</td><td><CENTER>"; 
	echo $row['classification'];
	echo "</td><td><CENTER>"; 
	echo '<a href="deleteteam.php?id='.$row['tmid'].'">'.$row['tmid'].'</font></a>';
	echo "</td></tr><CENTER>"; 	
	$i++;
	
	
} 

echo "</table>";
?>
</td><td valign="top">
<?php
$query = "SELECT count(tmid) as count from team WHERE classification = '4A' order by school asc"; 
	 
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
$query = "SELECT * from team WHERE classification = '4A' order by school asc"; 
	 
$result = mysqli_query($conn,$query) or die(mysqli_error());
echo "<div class='CSSTableGenerator' >";
echo "<table border='1'>";
echo "<tr> <th>Edit</th> <th>Team</th><th>class</th><th>Delete</th></tr>";
// keeps getting the next row until there are no more to get
$i = 1;

while($row = mysqli_fetch_array( $result )) {
	// Print out the contents of each row into a table
	
	echo "<tr><td>"; 
	echo '<a href="editteam.php?id='.$row['tmid'].'">'.$row['tmid'].'</font></a>';
	echo "</td><td><CENTER>"; 
	echo '<a href="playerroster.php?school='.$row['school'].'">'.$row['school'].'</font></a>';
	echo "</td><td><CENTER>"; 
	echo $row['classification'];
	echo "</td><td><CENTER>"; 
	echo '<a href="deleteteam.php?id='.$row['tmid'].'">'.$row['tmid'].'</font></a>';
	echo "</td></tr><CENTER>"; 	
	$i++;
	
	
} 

echo "</table>";
?>

</td><td valign="top">
<?php
$query = "SELECT count(tmid) as count from team WHERE classification = '3A' order by school asc"; 
	 
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
$query = "SELECT * from team WHERE classification = '3A' order by school asc"; 
	 
$result = mysqli_query($conn,$query) or die(mysqli_error());
echo "<div class='CSSTableGenerator' >";
echo "<table border='1'>";
echo "<tr> <th>Edit</th> <th>Team</th><th>class</th><th>Delete</th></tr>";
// keeps getting the next row until there are no more to get
$i = 1;

while($row = mysqli_fetch_array( $result )) {
	// Print out the contents of each row into a table
	
	echo "<tr><td>"; 
	echo '<a href="editteam.php?id='.$row['tmid'].'">'.$row['tmid'].'</font></a>';
	echo "</td><td><CENTER>"; 
	echo '<a href="playerroster.php?team='.$row['school'].'">'.$row['school'].'</font></a>';
	echo "</td><td><CENTER>"; 
	echo $row['classification'];
	echo "</td><td><CENTER>"; 
	echo '<a href="deleteteam.php?id='.$row['tmid'].'">'.$row['tmid'].'</font></a>';
	echo "</td></tr><CENTER>"; 	
	$i++;
	
	
} 

echo "</table>";
?>

</td><td valign="top">
<?php
$query = "SELECT count(tmid) as count from team WHERE classification = '2A' order by school asc"; 
	 
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
$query = "SELECT * from team WHERE classification = '2A' order by school asc"; 
	 
$result = mysqli_query($conn,$query) or die(mysqli_error());
echo "<div class='CSSTableGenerator' >";
echo "<table border='1'>";
echo "<tr> <th>Edit</th> <th>Team</th><th>class</th><th>Delete</th></tr>";
// keeps getting the next row until there are no more to get
$i = 1;

while($row = mysqli_fetch_array( $result )) {
	// Print out the contents of each row into a table
	
	echo "<tr><td>"; 
	echo '<a href="editteam.php?id='.$row['tmid'].'">'.$row['tmid'].'</font></a>';
	echo "</td><td><CENTER>"; 
	echo '<a href="playerroster.php?team='.$row['school'].'">'.$row['school'].'</font></a>';
	echo "</td><td><CENTER>"; 
	echo $row['classification'];
	echo "</td><td><CENTER>"; 
	echo '<a href="deleteteam.php?id='.$row['tmid'].'">'.$row['tmid'].'</font></a>';
	echo "</td></tr><CENTER>"; 	
	$i++;
	
	
} 

echo "</table>";
?>

</td><td valign="top">
<?php
$query = "SELECT count(tmid) as count from team WHERE classification = '1A' order by school asc"; 
	 
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
$query = "SELECT * from team WHERE classification = '1A' order by school asc"; 
	 
$result = mysqli_query($conn,$query) or die(mysqli_error());
echo "<div class='CSSTableGenerator' >";
echo "<table border='1'>";
echo "<tr> <th>Edit</th> <th>Team</th><th>class</th><th>Delete</th></tr>";
// keeps getting the next row until there are no more to get
$i = 1;

while($row = mysqli_fetch_array( $result )) {
	// Print out the contents of each row into a table
	
	echo "<tr><td>"; 
	echo '<a href="editteam.php?id='.$row['tmid'].'">'.$row['tmid'].'</font></a>';
	echo "</td><td><CENTER>"; 
	echo '<a href="playerroster.php?team='.$row['school'].'">'.$row['school'].'</font></a>';
	echo "</td><td><CENTER>"; 
	echo $row['classification'];
	echo "</td><td><CENTER>"; 
	echo '<a href="deleteteam.php?id='.$row['tmid'].'">'.$row['tmid'].'</font></a>';
	echo "</td></tr><CENTER>"; 	
	$i++;
	
	
} 

echo "</table>";
?>


</td><td valign="top">
<?php
$query = "SELECT count(tmid) as count from team WHERE classification = 'sand' order by school asc"; 
	 
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
$query = "SELECT * from team WHERE classification = 'sand' order by school asc"; 
	 
$result = mysqli_query($conn,$query) or die(mysqli_error());
echo "<div class='CSSTableGenerator' >";
echo "<table border='1'>";
echo "<tr> <th>Edit</th> <th>Team</th><th>class</th><th>Delete</th></tr>";
// keeps getting the next row until there are no more to get
$i = 1;

while($row = mysqli_fetch_array( $result )) {
	// Print out the contents of each row into a table
	
	echo "<tr><td>"; 
	echo '<a href="editteam.php?id='.$row['tmid'].'">'.$row['tmid'].'</font></a>';
	echo "</td><td><CENTER>"; 
	echo '<a href="playerroster.php?team='.$row['school'].'">'.$row['school'].'</font></a>';
	echo "</td><td><CENTER>"; 
	echo $row['classification'];
	echo "</td><td><CENTER>"; 
	echo '<a href="deleteteam.php?id='.$row['tmid'].'">'.$row['tmid'].'</font></a>';
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


</body>
</html>



</body>
</html>
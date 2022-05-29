    <html><head>
  
  <meta name="Smith Center Mens League" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style/bootstrap/css/bootstrap.css">
  <script src="style/jquery-2.1.4.min.js"></script>
  <script src="style/bootstrap.min.js"></script>
   </head> </html> <?php error_reporting (E_ALL ^ E_NOTICE); ?>
<?php
//include("header.php");
//include("menubar.php");

if(!empty($_GET['date']))
{
$date = $_GET['date'];
}
?>


	    <ul>
			  <li><a href="index.php">Home</a></li>
			  <li><a href="schedule1.php">Schedule</a></li>
			  <li><a href="divisions.php">ABCD Players</a></li>
			  <li><a href="datesearch.php">Results</a></li>
			  <li><a href="teamscores.php">Totals</a></li>
			  <li><a href="avghole.php" style="background-image: none;">POTY</a></li>
			</ul>
      		    <ul>
			  <li>  <?php if($logged_in) { echo'<a href="logout.php">Log Out</a>'; } else { echo'<a href="login.php">Login</a>'; } ?>
    
			  <li><a href="membersdirectory.php">Members</a></li>
			  <li><a href="subdirectory.php">Subs</a></li>
			  <li><a href="handicap.php">Handicaps</a></li>
			  <li><a href="avgtotal.php">Stats</a></li>
			  <li><a href="admin_page.php" style="background-image: none;">admin</a></li>
			</ul>
      
    
     <?php

 // PHP Search Script

//Select Players name from form 
if(!empty($_GET['name']))
{
$name = $_GET['name'];
}
echo "<h1>$name</h1>";
$query = "SELECT *, (hole1 + hole2 + hole3 + hole4 + hole5 + hole6 + hole7 + hole8 + hole9) as total_1 FROM scores WHERE player_1 = '$name' ORDER by date, points, mtch desc";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());

//Display table on the web page
echo "<table border='1'>";
echo "<tr> <th>Player Name </th> <th>Team</th><th>Match</th><th>Hole 1</th> <th>Hole 2</th> <th>Hole 3</th> <th>Hole 4</th> <th>Hole 5</th> 
<th>Hole 6</th> <th>Hole 7</th> <th>Hole 8</th> <th>Hole 9</th> <th>Total</th> <th>Points</th><th>White</th><th>Blue</th> <th>Date</th></tr>";
// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo $row['player_1'];
	echo "</td><td><CENTER>"; 
	echo '<a href="messageteam.php?team='.$row['team'].'">'.$row['team'].'</font></a>';
	echo "</td><td><CENTER>"; 
	echo '<a href="messagemtch.php?mtch='.$row['mtch'].'">'.$row['mtch'].'</font></a>';	
	echo "</td><td><CENTER>"; 
	echo $row['hole1'];
	echo "</td><td><CENTER>";
	echo $row['hole2'];
	echo "</td><td><CENTER>";
	echo $row['hole3'];
	echo "</td><td><CENTER>";
	echo $row['hole4'];
	echo "</td><td><CENTER>"; 
	echo $row['hole5'];
	echo "</td><td><CENTER>"; 
	echo $row['hole6'];
	echo "</td><td><CENTER>";
	echo $row['hole7'];
	echo "</td><td><CENTER>"; 
	echo $row['hole8'];
	echo "</td><td><CENTER>";
	echo $row['hole9'];
	echo "</td><td><CENTER>"; 
	echo $row['total_1'];
	echo "</td><td><CENTER>"; 
	echo $row['points'];
	echo "</td><td><CENTER>"; 
	echo $row['white'];
	echo "</td><td><CENTER>"; 
	echo $row['blue'];
	echo "</td><td><CENTER>";  
	echo '<a href="messagedate.php?date='.$row['date'].'">'.$row['date'].'</font></a>';
	echo "</td><CENTER>"; 
} 

	
?>
	<tr><td colspan="3">Averages</td><td align="center">
	<?php $query = "SELECT AVG(hole1) FROM scores WHERE player_1 = '$name' ";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 1);?></td>
	<td align="center"><?php $query = "SELECT AVG(hole2) FROM scores WHERE player_1 = '$name' ";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 1); ?></td>
	<td align="center"><?php $query = "SELECT AVG(hole3) FROM scores WHERE player_1 = '$name' ";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 1); ?></td>
	<td align="center"><?php $query = "SELECT AVG(hole4) FROM scores WHERE player_1 = '$name' ";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 1);?></td>
	<td align="center"><?php $query = "SELECT AVG(hole5) FROM scores WHERE player_1 = '$name' ";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 1);?></td>
	<td align="center"><?php $query = "SELECT AVG(hole6) FROM scores WHERE player_1 = '$name' ";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 1);?></td>
	<td align="center"><?php $query = "SELECT AVG(hole7) FROM scores WHERE player_1 = '$name' ";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 1);?></td>
	<td align="center"><?php $query = "SELECT AVG(hole8) FROM scores WHERE player_1 = '$name' ";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 1);?></td>
	<td align="center"><?php $query = "SELECT AVG(hole9) FROM scores WHERE player_1 = '$name' ";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 1);?></td>
	<td align="center"><?php $query = "SELECT AVG(hole1 + hole2 + hole3 + hole4 + hole5 + hole6 + hole7 + hole8 + hole9) FROM scores WHERE player_1 = '$name' ";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 1);?></td></tr> 



<tr><td colspan="3">Shots Above or Below Par</td><td align="center">
	<?php $query = "SELECT AVG(hole1) FROM scores WHERE player_1 = '$name' ";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo 'NA';?></td>
	<td align="center"><?php $query = "SELECT AVG(hole2) FROM scores WHERE player_1 = '$name' ";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 1)-4; ?></td>
	<td align="center"><?php $query = "SELECT AVG(hole3) FROM scores WHERE player_1 = '$name' ";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 1)-4; ?></td>
	<td align="center"><?php $query = "SELECT AVG(hole4) FROM scores WHERE player_1 = '$name' ";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 1)-3;?></td>
	<td align="center"><?php $query = "SELECT AVG(hole5) FROM scores WHERE player_1 = '$name' ";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 1)-5;?></td>
	<td align="center"><?php $query = "SELECT AVG(hole6) FROM scores WHERE player_1 = '$name' ";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 1)-4;?></td>
	<td align="center"><?php $query = "SELECT AVG(hole7) FROM scores WHERE player_1 = '$name' ";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 1)-4;?></td>
	<td align="center"><?php $query = "SELECT AVG(hole8) FROM scores WHERE player_1 = '$name' ";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 1)-4;?></td>
	<td align="center"><?php $query = "SELECT AVG(hole9) FROM scores WHERE player_1 = '$name' ";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 1)-4;?></td>
	<td align="center"><?php $query = "SELECT AVG(hole1 + hole2 + hole3 + hole4 + hole5 + hole6 + hole7 + hole8 + hole9) FROM scores WHERE player_1 = '$name' ";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 1)-35.5;?></td></tr> 
</table>



<?php include("footer.php"); ?>

</body>
</html>


</body>






</html>
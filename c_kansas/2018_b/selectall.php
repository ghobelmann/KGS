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
//INITIAL PAGE SETTINGS-----------
$page_title = "Enter Scores";
define("IN_GOLF_STATS", TRUE);
include_once("common.php");

//INITIAL PAGE SETTINGS-----------
?>

<div id="wrapper">
<h1>Redmen Golf </h1>
<div id="nav">
	<?php include("menubar.php");?>
   <?php if($logged_in) { echo'<a href="logout.php">Log Out</a>'; } else { echo'<a href="login.php">Login</a>'; } ?><br>
  <a href="admin_page.php">Admin Page</a><br>
  
  </p>
</div>
  <div id="content">


<h2>Welcome to Smith Center Redmen Golf WebSite </h2>

<p>

<?php
// Make a MySQL Connection


// Get all the data from the "example" table
$result = mysql_query("SELECT * FROM `scores` ORDER BY `tournament`, `total`, `back` ASC") 
or die(mysql_error());  
  echo "<div class='CSSTableGenerator' >";
echo "<table width = '800' border='1'>";
echo "<tr> <th>Player Name </th><th>Team</th><th>Front</th><th>Back</th> <th>Total</th><th>Tournament</th>
<th>Date</th><th>ID</th><th>Delete</th> </tr>";
// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['player_1'].'">'.$row['player_1'].'</font></a>';
	echo "</td><td><CENTER>"; 
	echo '<a href="messageteam.php?team='.$row['team'].'">'.$row['team'].'</font></a>';
	echo "</td><td><CENTER>"; 
	echo $row['hole1']+$row['hole2']+$row['hole3']+$row['hole4']+$row['hole5']+$row['hole6']+$row['hole7']+$row['hole8']+$row['hole9'];
	echo "</td><td><CENTER>"; 
	echo $row['hole10']+$row['hole11']+$row['hole12']+$row['hole13']+$row['hole14']+$row['hole15']+$row['hole16']+$row['hole17']+$row['hole18'];
	echo "</td><td><CENTER>";
	echo $row['hole1']+$row['hole2']+$row['hole3']+$row['hole4']+$row['hole5']+$row['hole6']+$row['hole7']+$row['hole8']+$row['hole9']+$row['hole10']+$row['hole11']+$row['hole12']+$row['hole13']+$row['hole14']+$row['hole15']+$row['hole16']+$row['hole17']+$row['hole18'];
	echo "</td><td><CENTER>"; 
	echo '<a href="messagetrny.php?trny='.$row['tournament'].'">'.$row['tournament'].'</font></a>';
	echo "</td><td><CENTER>";
	echo $row['date'];
	echo "</td><td><CENTER>";
	echo $row['id'];
	echo "</td></tr><CENTER>";
} 

echo "</table>";
?>


</p>

     <div id="footer">
<p> Copyright &copy 2017 Music Telethon
 <br>
</p>
</div>
</div> 
</div>
</body>
</html>



<p><?php include("footer.php"); ?>&nbsp;</p>


</body>
</html>



</body>
</html>
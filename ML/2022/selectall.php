<?php error_reporting (E_ALL ^ E_NOTICE); ?>
<?php

$page_title="Home";
define("IN_GOLF_STATS", TRUE);
define('IN_PHP_AUTH', TRUE);
include("databaseconnect.php");
include("PHP_AUTH/check_auth.php");
if(authorize("public") != "success")
{
header("Location: login.php?error=1");
die();
}
//include("header.php");
//include("menubar.php");
include("style/style.php");
?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">




  <head>
	<title>Smith Center Mens League Golf 2012</title>
	<link rel="stylesheet" media="screen" type="text/css" href="style.css" />
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
  </head>

  <body>
    <div id="page">
	  <div id="header">
	    <div id="logo">
		<!-- type your logo and small slogan here -->
		<p>Smith Center<span class="green"> Golf</span></p>
		<div id="slogan"><p>Mens League 2012...</p></div>
		<!-- end logo -->
		</div>
		<div id="nav">
		  <div id="nav-menu-left"></div>
		  <div id="nav-menu">
		  <!-- start of navigation -->
		    <ul>
			  <li><a href="index.php">Home</a></li>
			  <li><a href="schedule1.php">Schedule</a></li>
			  <li><a href="divisions.php">ABCD Players</a></li>
			  <li><a href="datesearch.php">Results</a></li>
			  <li><a href="teamscores.php">Totals</a></li>
			  <li><a href="avghole.php" style="background-image: none;">POTY</a></li>
			</ul>
      		    <ul>
			    <li> <?php if($logged_in) { echo'<a href="logout.php">Log Out</a>'; } else { echo'<a href="login.php">Login</a>'; } ?>  </li>
    
			  <li><a href="membersdirectory.php">Members</a></li>
			  <li><a href="subdirectory.php">Subs</a></li>
			  <li><a href="handicap.php">Handicaps</a></li>
			  <li><a href="avgtotal.php">Stats</a></li>
			  <li><a href="admin_page.php" style="background-image: none;">admin</a></li>
			</ul>
			<!-- end navigation -->
          </div>
		  <div id="nav-menu-right"></div>
		</div>
	  </div>
	  <div class="clearfloats"></div>
	  <div id="header2">
	    <!-- the large header slogan which is over top of the grass image can either be changed, or removed below -->
	    <div id="header2-slogan1"><p>Individual Results</p></div>
	   <!-- <div id="header2-slogan2"><p>can go in this area</p></div>-->
	    <!-- end header slogan -->
	  </div>
	  
	  <div id="content">
	    <div class="content-padding">
		  <!-- page content below -->





 <?php

 // PHP Search Script

//Select Players name from form 
if(!empty($_GET['team']))
{
$name = $_GET['team'];
}

echo "<h1>$name</h1>";
echo "<h1>$blue</h1>";
$query = "SELECT *, (hole1 + hole2 + hole3 + hole4 + hole5 + hole6 + hole7 + hole8 + hole9) as total_1 FROM scores
ORDER by mtch asc";
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
if ($row['blue']<>"")
  {

  
  echo "</td><CENTER>";
switch($row['hole1']) { 
     case "1": 
          $class = 'eagle'; 
          break; 
     case '2': 
          $class = 'birdie'; 
          break; 
     case '3': 
          $class = 'par'; 
          break; 
      case '4': 
          $class = 'bogie'; 
          break; 
     case '5': 
          $class = 'doublebogie'; 
          break; 
     case '6': 
          $class = 'triplebogie'; 
          break; 
     case '7': 
          $class = 'other'; 
          break;
         case '8': 
          $class = 'other'; 
          break;
             case '9': 
          $class = 'other'; 
          break;     
               case '10': 
          $class = 'other'; 
          break;
               case '11': 
          $class = 'other'; 
          break;
               case '12': 
          $class = 'other'; 
          break;
               case '13': 
          $class = 'other'; 
          break;
               case '14': 
          $class = 'other'; 
          break;

} 
echo "<td class='".$class."'><center>".$row['hole1']."</td></n>"; 

}
else
{

  echo "</td><CENTER>";
switch($row['hole1']) { 
     case "2": 
          $class = 'eagle'; 
          break; 
     case '3': 
          $class = 'birdie'; 
          break; 
     case '4': 
          $class = 'par'; 
          break; 
      case '5': 
          $class = 'bogie'; 
          break; 
     case '6': 
          $class = 'doublebogie'; 
          break; 
     case '7': 
          $class = 'triplebogie'; 
          break; 
     case '8': 
          $class = 'other'; 
          break;
         case '9': 
          $class = 'other'; 
          break;
             case '10': 
          $class = 'other'; 
          break;     
               case '11': 
          $class = 'other'; 
          break;
               case '12': 
          $class = 'other'; 
          break;
               case '13': 
          $class = 'other'; 
          break;
               case '14': 
          $class = 'other'; 
          break;
               case '15': 
          $class = 'other'; 
          break;

} 
echo "<td class='".$class."'><center>".$row['hole1']."</td></n>"; 
}
	echo "</td><CENTER>";
switch($row['hole2']) { 
     case "2": 
          $class = 'eagle'; 
          break; 
     case '3': 
          $class = 'birdie'; 
          break; 
     case '4': 
          $class = 'par'; 
          break; 
      case '5': 
          $class = 'bogie'; 
          break; 
     case '6': 
          $class = 'doublebogie'; 
          break; 
     case '7': 
          $class = 'triplebogie'; 
          break; 
     case '8': 
          $class = 'other'; 
          break;
         case '9': 
          $class = 'other'; 
          break;
             case '10': 
          $class = 'other'; 
          break;     
               case '11': 
          $class = 'other'; 
          break;
               case '12': 
          $class = 'other'; 
          break;
               case '13': 
          $class = 'other'; 
          break;
               case '14': 
          $class = 'other'; 
          break;
               case '15': 
          $class = 'other'; 
          break;

} 
echo "<td class='".$class."'><center>".$row['hole2']."</td></n>"; 
                  
	echo "</td><CENTER>";
switch($row['hole3']) { 
     case "2": 
          $class = 'eagle'; 
          break; 
     case '3': 
          $class = 'birdie'; 
          break; 
     case '4': 
          $class = 'par'; 
          break; 
      case '5': 
          $class = 'bogie'; 
          break; 
     case '6': 
          $class = 'doublebogie'; 
          break; 
     case '7': 
          $class = 'triplebogie'; 
          break; 
     case '8': 
          $class = 'other'; 
          break;
         case '9': 
          $class = 'other'; 
          break;
             case '10': 
          $class = 'other'; 
          break;     
               case '11': 
          $class = 'other'; 
          break;
               case '12': 
          $class = 'other'; 
          break;
               case '13': 
          $class = 'other'; 
          break;
               case '14': 
          $class = 'other'; 
          break;
               case '15': 
          $class = 'other'; 
          break;

} 
echo "<td class='".$class."'><center>".$row['hole3']."</td></n>"; 

	echo "</td><CENTER>";
switch($row['hole4']) { 
     case "1": 
          $class = 'eagle'; 
          break; 
     case '2': 
          $class = 'birdie'; 
          break; 
     case '3': 
          $class = 'par'; 
          break; 
      case '4': 
          $class = 'bogie'; 
          break; 
     case '5': 
          $class = 'doublebogie'; 
          break; 
     case '6': 
          $class = 'triplebogie'; 
          break; 
     case '7': 
          $class = 'other'; 
          break;
         case '8': 
          $class = 'other'; 
          break;
             case '9': 
          $class = 'other'; 
          break;     
               case '10': 
          $class = 'other'; 
          break;
               case '11': 
          $class = 'other'; 
          break;
               case '12': 
          $class = 'other'; 
          break;
               case '13': 
          $class = 'other'; 
          break;
               case '14': 
          $class = 'other'; 
          break;

} 
echo "<td class='".$class."'><center>".$row['hole4']."</td></n>"; 

	echo "</td><CENTER>";
switch($row['hole5']) { 
     case "3": 
          $class = 'eagle'; 
          break; 
     case '4': 
          $class = 'birdie'; 
          break; 
     case '5': 
          $class = 'par'; 
          break; 
      case '6': 
          $class = 'bogie'; 
          break; 
     case '7': 
          $class = 'doublebogie'; 
          break; 
     case '8': 
          $class = 'triplebogie'; 
          break; 
     case '9': 
          $class = 'other'; 
          break;
         case '10': 
          $class = 'other'; 
          break;
             case '11': 
          $class = 'other'; 
          break;     
               case '12': 
          $class = 'other'; 
          break;
               case '13': 
          $class = 'other'; 
          break;
               case '14': 
          $class = 'other'; 
          break;
               case '15': 
          $class = 'other'; 
          break;
               case '16': 
          $class = 'other'; 
          break;

} 
echo "<td class='".$class."'><center>".$row['hole5']."</td></n>"; 

	echo "</td><CENTER>";
switch($row['hole6']) { 
     case "2": 
          $class = 'eagle'; 
          break; 
     case '3': 
          $class = 'birdie'; 
          break; 
     case '4': 
          $class = 'par'; 
          break; 
      case '5': 
          $class = 'bogie'; 
          break; 
     case '6': 
          $class = 'doublebogie'; 
          break; 
     case '7': 
          $class = 'triplebogie'; 
          break; 
     case '8': 
          $class = 'other'; 
          break;
         case '9': 
          $class = 'other'; 
          break;
             case '10': 
          $class = 'other'; 
          break;     
               case '11': 
          $class = 'other'; 
          break;
               case '12': 
          $class = 'other'; 
          break;
               case '13': 
          $class = 'other'; 
          break;
               case '14': 
          $class = 'other'; 
          break;
               case '15': 
          $class = 'other'; 
          break;

} 
echo "<td class='".$class."'><center>".$row['hole6']."</td></n>"; 

	echo "</td><CENTER>";
switch($row['hole7']) { 
     case "2": 
          $class = 'eagle'; 
          break; 
     case '3': 
          $class = 'birdie'; 
          break; 
     case '4': 
          $class = 'par'; 
          break; 
      case '5': 
          $class = 'bogie'; 
          break; 
     case '6': 
          $class = 'doublebogie'; 
          break; 
     case '7': 
          $class = 'triplebogie'; 
          break; 
     case '8': 
          $class = 'other'; 
          break;
         case '9': 
          $class = 'other'; 
          break;
             case '10': 
          $class = 'other'; 
          break;     
               case '11': 
          $class = 'other'; 
          break;
               case '12': 
          $class = 'other'; 
          break;
               case '13': 
          $class = 'other'; 
          break;
               case '14': 
          $class = 'other'; 
          break;
               case '15': 
          $class = 'other'; 
          break;

} 
echo "<td class='".$class."'><center>".$row['hole7']."</td></n>"; 

	echo "</td><CENTER>";
switch($row['hole8']) { 
     case "2": 
          $class = 'eagle'; 
          break; 
     case '3': 
          $class = 'birdie'; 
          break; 
     case '4': 
          $class = 'par'; 
          break; 
      case '5': 
          $class = 'bogie'; 
          break; 
     case '6': 
          $class = 'doublebogie'; 
          break; 
     case '7': 
          $class = 'triplebogie'; 
          break; 
     case '8': 
          $class = 'other'; 
          break;
         case '9': 
          $class = 'other'; 
          break;
             case '10': 
          $class = 'other'; 
          break;     
               case '11': 
          $class = 'other'; 
          break;
               case '12': 
          $class = 'other'; 
          break;
               case '13': 
          $class = 'other'; 
          break;
               case '14': 
          $class = 'other'; 
          break;
               case '15': 
          $class = 'other'; 
          break;

} 
echo "<td class='".$class."'><center>".$row['hole8']."</td></n>"; 

	echo "</td><CENTER>";
switch($row['hole9']) { 
     case "2": 
          $class = 'eagle'; 
          break;
           
     case '3': 
          $class = 'birdie'; 
          break;
           
     case '4': 
          $class = 'par'; 
          break; 
          
      case '5': 
          $class = 'bogie'; 
          break; 
          
     case '6': 
          $class = 'doublebogie'; 
          break; 
          
     case '7': 
          $class = 'triplebogie'; 
          break;
           
     case '8': 
          $class = 'other'; 
          break;
          
    case '9': 
          $class = 'other'; 
          break;
          
    case '10': 
          $class = 'other'; 
          break;
               
    case '11': 
          $class = 'other'; 
          break;
          
    case '12': 
          $class = 'other'; 
          break;
              
    case '13': 
          $class = 'other'; 
          break;
    case '14': 
          $class = 'other'; 
          break;
   case '15': 
          $class = 'other'; 
          break;

} 
echo "<td class='".$class."'><center>".$row['hole9']."</td></n>"; 

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
	<?php $query = "SELECT AVG(hole1) FROM scores";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 1);?></td>
	<td align="center"><?php $query = "SELECT AVG(hole2) FROM scores";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 1); ?></td>
	<td align="center"><?php $query = "SELECT AVG(hole3) FROM scores";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 1); ?></td>
	<td align="center"><?php $query = "SELECT AVG(hole4) FROM scores";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 1);?></td>
	<td align="center"><?php $query = "SELECT AVG(hole5) FROM scores";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 1);?></td>
	<td align="center"><?php $query = "SELECT AVG(hole6) FROM scores";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 1);?></td>
	<td align="center"><?php $query = "SELECT AVG(hole7) FROM scores";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 1);?></td>
	<td align="center"><?php $query = "SELECT AVG(hole8) FROM scores";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 1);?></td>
	<td align="center"><?php $query = "SELECT AVG(hole9) FROM scores";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 1);?></td>
	<td align="center"><?php $query = "SELECT AVG(hole1 + hole2 + hole3 + hole4 + hole5 + hole6 + hole7 + hole8 + hole9) FROM scores";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 1);?></td></tr> 



<tr><td colspan="3">Shots Above or Below Par</td><td align="center">
	<?php $query = "SELECT AVG(hole1) FROM scores";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo 'NA';?></td>
	<td align="center"><?php $query = "SELECT AVG(hole2) FROM scores";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 1)-4; ?></td>
	<td align="center"><?php $query = "SELECT AVG(hole3) FROM scores";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 1)-4; ?></td>
	<td align="center"><?php $query = "SELECT AVG(hole4) FROM scores";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 1)-3;?></td>
	<td align="center"><?php $query = "SELECT AVG(hole5) FROM scores";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 1)-5;?></td>
	<td align="center"><?php $query = "SELECT AVG(hole6) FROM scores";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 1)-4;?></td>
	<td align="center"><?php $query = "SELECT AVG(hole7) FROM scores";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 1)-4;?></td>
	<td align="center"><?php $query = "SELECT AVG(hole8) FROM scores";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 1)-4;?></td>
	<td align="center"><?php $query = "SELECT AVG(hole9) FROM scores";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 1)-4;?></td>
	<td align="center"><?php $query = "SELECT AVG(hole1 + hole2 + hole3 + hole4 + hole5 + hole6 + hole7 + hole8 + hole9) FROM scores";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 1)-35.5;?></td></tr> 
</table>










                
















</div>
</body>













	  <div id="footer-div"></div>
	  <div id="footer">
	    <p>Website &copy; Copyright Smith Center Mens League 2012, All rights reserved. </p>
	  </div>
	</div>

</html>
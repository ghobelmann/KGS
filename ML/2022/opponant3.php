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
include("header.php");
include("menubar.php");
?>
<table width="0" border="1" cellpadding="1">
<table width="0" border="1" cellpadding="1">
  <tr>
    <td valign="top"><h3>Match 1 vs.
          <?php

//Select Players name from form 
if(!empty($_GET['team']))
{
$team = $_GET['team'];
}
echo $team;
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, schedule WHERE schedule.team = '$team' 
AND scores.player_1 = schedule.a group by scores.player_1";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());

$query1 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc2 FROM scores, schedule WHERE schedule.team = '$team' 
AND scores.player_1 = schedule.b group by scores.player_1";
$result1 = mysql_query($query1)
or die ('Error in Query Try Again:--' . mysql_error());

$query2 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc3 FROM scores, schedule WHERE schedule.team = '$team' 
AND scores.player_1 = schedule.c group by scores.player_1";
$result2 = mysql_query($query2)
or die ('Error in Query Try Again:--' . mysql_error());

$query3 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc4 FROM scores, schedule WHERE schedule.team = '$team' 
AND scores.player_1 = schedule.d group by scores.player_1";
$result3 = mysql_query($query3)
or die ('Error in Query Try Again:--' . mysql_error());

echo "<table border='1'>";
echo "<tr><th>A Player</th><th>HC</th><th>Team</th><th>B Player</th><th>HC</th><th>Team</th><th>C Player</th><th>HC</th><th>Team</th><th>D Player</th><th>HC</th><th>Team</th></tr>";
// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )){
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['a'].'"><font color=black>'.$row['a'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc1'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team']; }
while($row = mysql_fetch_array( $result1 )){
	echo "</td><td><CENTER>";
	echo '<a href="messagename.php?name='.$row['b'].'"><font color=black>'.$row['b'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc2'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];
	}
while($row = mysql_fetch_array( $result2 )){
	echo "</td><td><CENTER>";
	echo '<a href="messagename.php?name='.$row['c'].'"><font color=black>'.$row['c'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc3'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];}
while($row = mysql_fetch_array( $result3 )){
	echo "</td><td><CENTER>";
	echo '<a href="messagename.php?name='.$row['d'].'"><font color=black>'.$row['d'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc4'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];
	echo "</td></tr><CENTER>";
	
	
} 

?>
    </h3>
    <?php
//Select Players name from form 
if(!empty($_GET['team1']))
{
$team1 = $_GET['team1'];
}
echo $team1 ;
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, schedule WHERE schedule.team = '$team1' 
AND scores.player_1 = schedule.a group by scores.player_1";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());

$query1 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc2 FROM scores, schedule WHERE schedule.team = '$team1' 
AND scores.player_1 = schedule.b group by scores.player_1";
$result1 = mysql_query($query1)
or die ('Error in Query Try Again:--' . mysql_error());

$query2 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc3 FROM scores, schedule WHERE schedule.team = '$team1' 
AND scores.player_1 = schedule.c group by scores.player_1";
$result2 = mysql_query($query2)
or die ('Error in Query Try Again:--' . mysql_error());

$query3 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc4 FROM scores, schedule WHERE schedule.team = '$team1' 
AND scores.player_1 = schedule.d group by scores.player_1";
$result3 = mysql_query($query3)
or die ('Error in Query Try Again:--' . mysql_error());


// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )){
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['a'].'"><font color=black>'.$row['a'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc1'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];}
while($row = mysql_fetch_array( $result1 )){
	echo "</td><td><CENTER>";
	echo '<a href="messagename.php?name='.$row['b'].'"><font color=black>'.$row['b'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc2'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];}
while($row = mysql_fetch_array( $result2 )){
	echo "</td><td><CENTER>";
	echo '<a href="messagename.php?name='.$row['c'].'"><font color=black>'.$row['c'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc3'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];}
while($row = mysql_fetch_array( $result3 )){
	echo "</td><td><CENTER>";
	echo '<a href="messagename.php?name='.$row['d'].'"><font color=black>'.$row['d'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc4'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];}
	echo "</td></tr><CENTER>";
	unset($team);
	unset($team1);

echo "</table>";
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
?></td>
    <td valign="top"><h3>Match 2
          <?php

//Select Players name from form 
if(!empty($_GET['team2']))
{
$team2 = $_GET['team2'];
}
echo $team2;
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, schedule WHERE schedule.team = '$team2' 
AND scores.player_1 = schedule.a group by scores.player_1";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());

$query1 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc2 FROM scores, schedule WHERE schedule.team = '$team2' 
AND scores.player_1 = schedule.b group by scores.player_1";
$result1 = mysql_query($query1)
or die ('Error in Query Try Again:--' . mysql_error());

$query2 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc3 FROM scores, schedule WHERE schedule.team = '$team2' 
AND scores.player_1 = schedule.c group by scores.player_1";
$result2 = mysql_query($query2)
or die ('Error in Query Try Again:--' . mysql_error());

$query3 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc4 FROM scores, schedule WHERE schedule.team = '$team2' 
AND scores.player_1 = schedule.d group by scores.player_1";
$result3 = mysql_query($query3)
or die ('Error in Query Try Again:--' . mysql_error());

echo "<table border='1'>";
echo "<tr><th>A Player</th><th>HC</th><th>Team</th><th>B Player</th><th>HC</th><th>Team</th><th>C Player</th><th>HC</th><th>Team</th><th>D Player</th><th>HC</th><th>Team</th></tr>";
// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )){
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['a'].'"><font color=black>'.$row['a'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc1'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];}
while($row = mysql_fetch_array( $result1 )){
	echo "</td><td><CENTER>";
	echo '<a href="messagename.php?name='.$row['b'].'"><font color=black>'.$row['b'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc2'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];}
while($row = mysql_fetch_array( $result2 )){
	echo "</td><td><CENTER>";
	echo '<a href="messagename.php?name='.$row['c'].'"><font color=black>'.$row['c'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc3'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];}
while($row = mysql_fetch_array( $result3 )){
	echo "</td><td><CENTER>";
	echo '<a href="messagename.php?name='.$row['d'].'"><font color=black>'.$row['d'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc4'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];
	echo "</td></tr><CENTER>";
	
} 

?>
    </h3>
      <?php
//Select Players name from form 
if(!empty($_GET['team21']))
{
$team21 = $_GET['team21'];
}
echo $team21;
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, schedule WHERE schedule.team = '$team21' 
AND scores.player_1 = schedule.a group by scores.player_1";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());

$query1 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc2 FROM scores, schedule WHERE schedule.team = '$team21' 
AND scores.player_1 = schedule.b group by scores.player_1";
$result1 = mysql_query($query1)
or die ('Error in Query Try Again:--' . mysql_error());

$query2 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc3 FROM scores, schedule WHERE schedule.team = '$team21' 
AND scores.player_1 = schedule.c group by scores.player_1";
$result2 = mysql_query($query2)
or die ('Error in Query Try Again:--' . mysql_error());

$query3 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc4 FROM scores, schedule WHERE schedule.team = '$team21' 
AND scores.player_1 = schedule.d group by scores.player_1";
$result3 = mysql_query($query3)
or die ('Error in Query Try Again:--' . mysql_error());


// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )){
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['a'].'"><font color=black>'.$row['a'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc1'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];}
while($row = mysql_fetch_array( $result1 )){
	echo "</td><td><CENTER>";
	echo '<a href="messagename.php?name='.$row['b'].'"><font color=black>'.$row['b'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc2'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];}
while($row = mysql_fetch_array( $result2 )){
	echo "</td><td><CENTER>";
	echo '<a href="messagename.php?name='.$row['c'].'"><font color=black>'.$row['c'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc3'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];}
while($row = mysql_fetch_array( $result3 )){
	echo "</td><td><CENTER>";
	echo '<a href="messagename.php?name='.$row['d'].'"><font color=black>'.$row['d'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc4'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];
	echo "</td></tr><CENTER>";
	unset($team2);
	unset($team21);
} 
echo "</table>";
 ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
?></td>
  </tr>
  <tr>
    <td valign="top"><h3>Match 3 <?php

//Select Players name from form 
if(!empty($_GET['team3']))
{
$team3 = $_GET['team3'];
}
echo $team3;
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, schedule WHERE schedule.team = '$team3' 
AND scores.player_1 = schedule.a group by scores.player_1";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());

$query1 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc2 FROM scores, schedule WHERE schedule.team = '$team3' 
AND scores.player_1 = schedule.b group by scores.player_1";
$result1 = mysql_query($query1)
or die ('Error in Query Try Again:--' . mysql_error());

$query2 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc3 FROM scores, schedule WHERE schedule.team = '$team3' 
AND scores.player_1 = schedule.c group by scores.player_1";
$result2 = mysql_query($query2)
or die ('Error in Query Try Again:--' . mysql_error());

$query3 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc4 FROM scores, schedule WHERE schedule.team = '$team3' 
AND scores.player_1 = schedule.d group by scores.player_1";
$result3 = mysql_query($query3)
or die ('Error in Query Try Again:--' . mysql_error());

echo "<table border='1'>";
echo "<tr><th>A Player</th><th>HC</th><th>Team</th><th>B Player</th><th>HC</th><th>Team</th><th>C Player</th><th>HC</th><th>Team</th><th>D Player</th><th>HC</th><th>Team</th></tr>";
// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )){
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['a'].'"><font color=black>'.$row['a'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc1'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];}
while($row = mysql_fetch_array( $result1 )){
	echo "</td><td><CENTER>";
	echo '<a href="messagename.php?name='.$row['b'].'"><font color=black>'.$row['b'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc2'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];}
while($row = mysql_fetch_array( $result2 )){
	echo "</td><td><CENTER>";
	echo '<a href="messagename.php?name='.$row['c'].'"><font color=black>'.$row['c'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc3'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];}
while($row = mysql_fetch_array( $result3 )){
	echo "</td><td><CENTER>";
	echo '<a href="messagename.php?name='.$row['d'].'"><font color=black>'.$row['d'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc4'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];
	echo "</td></tr><CENTER>";
	
} 

?>
    </h3>
    <?php
//Select Players name from form 
if(!empty($_GET['team31']))
{
$team31 = $_GET['team31'];
}
echo $team31;
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, schedule WHERE schedule.team = '$team31' 
AND scores.player_1 = schedule.a group by scores.player_1";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());

$query1 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc2 FROM scores, schedule WHERE schedule.team = '$team31' 
AND scores.player_1 = schedule.b group by scores.player_1";
$result1 = mysql_query($query1)
or die ('Error in Query Try Again:--' . mysql_error());

$query2 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc3 FROM scores, schedule WHERE schedule.team = '$team31' 
AND scores.player_1 = schedule.c group by scores.player_1";
$result2 = mysql_query($query2)
or die ('Error in Query Try Again:--' . mysql_error());

$query3 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc4 FROM scores, schedule WHERE schedule.team = '$team31' 
AND scores.player_1 = schedule.d group by scores.player_1";

$result3 = mysql_query($query3)
or die ('Error in Query Try Again:--' . mysql_error());


// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )){
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['a'].'"><font color=black>'.$row['a'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc1'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];}
while($row = mysql_fetch_array( $result1 )){
	echo "</td><td><CENTER>";
	echo '<a href="messagename.php?name='.$row['b'].'"><font color=black>'.$row['b'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc2'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];}
while($row = mysql_fetch_array( $result2 )){
	echo "</td><td><CENTER>";
	echo '<a href="messagename.php?name='.$row['c'].'"><font color=black>'.$row['c'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc3'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];}
while($row = mysql_fetch_array( $result3 )){
	echo "</td><td><CENTER>";
	echo '<a href="messagename.php?name='.$row['d'].'"><font color=black>'.$row['d'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc4'], 0);
	echo "</td><td><CENTER>";
	echo $row['team'];	
	echo "</td></tr><CENTER>";
	unset($team2);
	unset($team21);
} 
echo "</table>";
?></td>
    <td valign="top"><h3>Match 4 <?php

//Select Players name from form 
if(!empty($_GET['team4']))
{
$team4 = $_GET['team4'];
}
echo $team4;
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, schedule WHERE schedule.team = '$team4' 
AND scores.player_1 = schedule.a group by scores.player_1";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());

$query1 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc2 FROM scores, schedule WHERE schedule.team = '$team4' 
AND scores.player_1 = schedule.b group by scores.player_1";
$result1 = mysql_query($query1)
or die ('Error in Query Try Again:--' . mysql_error());

$query2 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc3 FROM scores, schedule WHERE schedule.team = '$team4' 
AND scores.player_1 = schedule.c group by scores.player_1";
$result2 = mysql_query($query2)
or die ('Error in Query Try Again:--' . mysql_error());

$query3 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc4 FROM scores, schedule WHERE schedule.team = '$team4' 
AND scores.player_1 = schedule.d group by scores.player_1";
$result3 = mysql_query($query3)
or die ('Error in Query Try Again:--' . mysql_error());

echo "<table border='1'>";
echo "<tr><th>A Player</th><th>HC</th><th>Team</th><th>B Player</th><th>HC</th><th>Team</th><th>C Player</th><th>HC</th><th>Team</th><th>D Player</th><th>HC</th><th>Team</th></tr>";
// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )){
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['a'].'"><font color=black>'.$row['a'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc1'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];}
while($row = mysql_fetch_array( $result1 )){
	echo "</td><td><CENTER>";
	echo '<a href="messagename.php?name='.$row['b'].'"><font color=black>'.$row['b'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc2'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];}
while($row = mysql_fetch_array( $result2 )){
	echo "</td><td><CENTER>";
	echo '<a href="messagename.php?name='.$row['c'].'"><font color=black>'.$row['c'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc3'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];}
while($row = mysql_fetch_array( $result3 )){
	echo "</td><td><CENTER>";
	echo '<a href="messagename.php?name='.$row['d'].'"><font color=black>'.$row['d'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc4'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];
	echo "</td></tr><CENTER>";
	
} 

?>
    </h3>
    <?php
//Select Players name from form 
if(!empty($_GET['team41']))
{
$team41 = $_GET['team41'];
}
echo $team41;
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, schedule WHERE schedule.team = '$team41' 
AND scores.player_1 = schedule.a group by scores.player_1";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());

$query1 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc2 FROM scores, schedule WHERE schedule.team = '$team41' 
AND scores.player_1 = schedule.b group by scores.player_1";
$result1 = mysql_query($query1)
or die ('Error in Query Try Again:--' . mysql_error());

$query2 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc3 FROM scores, schedule WHERE schedule.team = '$team41' 
AND scores.player_1 = schedule.c group by scores.player_1";
$result2 = mysql_query($query2)
or die ('Error in Query Try Again:--' . mysql_error());

$query3 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc4 FROM scores, schedule WHERE schedule.team = '$team41' 
AND scores.player_1 = schedule.d group by scores.player_1";
$result3 = mysql_query($query3)
or die ('Error in Query Try Again:--' . mysql_error());


// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )){
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['a'].'"><font color=black>'.$row['a'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc1'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];}
while($row = mysql_fetch_array( $result1 )){
	echo "</td><td><CENTER>";
	echo '<a href="messagename.php?name='.$row['b'].'"><font color=black>'.$row['b'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc2'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];}
while($row = mysql_fetch_array( $result2 )){
	echo "</td><td><CENTER>";
	echo '<a href="messagename.php?name='.$row['c'].'"><font color=black>'.$row['c'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc3'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];}
while($row = mysql_fetch_array( $result3 )){
	echo "</td><td><CENTER>";
	echo '<a href="messagename.php?name='.$row['d'].'"><font color=black>'.$row['d'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc4'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];
	echo "</td></tr><CENTER>";
	unset($team2);
	unset($team21);
} 
echo "</table>";
?></td>
  </tr>
  <tr>
    <td valign="top"><h3>Match 5 <?php

//Select Players name from form 
if(!empty($_GET['team5']))
{
$team5 = $_GET['team5'];
}
echo $team5;
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, schedule WHERE schedule.team = '$team5' 
AND scores.player_1 = schedule.a group by scores.player_1";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());

$query1 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc2 FROM scores, schedule WHERE schedule.team = '$team5' 
AND scores.player_1 = schedule.b group by scores.player_1";
$result1 = mysql_query($query1)
or die ('Error in Query Try Again:--' . mysql_error());

$query2 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc3 FROM scores, schedule WHERE schedule.team = '$team5' 
AND scores.player_1 = schedule.c group by scores.player_1";
$result2 = mysql_query($query2)
or die ('Error in Query Try Again:--' . mysql_error());

$query3 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc4 FROM scores, schedule WHERE schedule.team = '$team5' 
AND scores.player_1 = schedule.d group by scores.player_1";
$result3 = mysql_query($query3)
or die ('Error in Query Try Again:--' . mysql_error());

echo "<table border='1'>";
echo "<tr><th>A Player</th><th>HC</th><th>Team</th><th>B Player</th><th>HC</th><th>Team</th><th>C Player</th><th>HC</th><th>Team</th><th>D Player</th><th>HC</th><th>Team</th></tr>";
// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )){
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['a'].'"><font color=black>'.$row['a'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc1'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];}
while($row = mysql_fetch_array( $result1 )){
	echo "</td><td><CENTER>";
	echo '<a href="messagename.php?name='.$row['b'].'"><font color=black>'.$row['b'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc2'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];}
while($row = mysql_fetch_array( $result2 )){
	echo "</td><td><CENTER>";
	echo '<a href="messagename.php?name='.$row['c'].'"><font color=black>'.$row['c'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc3'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];}
while($row = mysql_fetch_array( $result3 )){
	echo "</td><td><CENTER>";
	echo '<a href="messagename.php?name='.$row['d'].'"><font color=black>'.$row['d'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc4'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];
	echo "</td></tr><CENTER>";
	
} 

?>
    </h3>
    <?php
//Select Players name from form 
if(!empty($_GET['team51']))
{
$team51 = $_GET['team51'];
}
echo $team51;
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, schedule WHERE schedule.team = '$team51' 
AND scores.player_1 = schedule.a group by scores.player_1";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());

$query1 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc2 FROM scores, schedule WHERE schedule.team = '$team51' 
AND scores.player_1 = schedule.b group by scores.player_1";
$result1 = mysql_query($query1)
or die ('Error in Query Try Again:--' . mysql_error());

$query2 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc3 FROM scores, schedule WHERE schedule.team = '$team51' 
AND scores.player_1 = schedule.c group by scores.player_1";
$result2 = mysql_query($query2)
or die ('Error in Query Try Again:--' . mysql_error());

$query3 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc4 FROM scores, schedule WHERE schedule.team = '$team51' 
AND scores.player_1 = schedule.d group by scores.player_1";

$result3 = mysql_query($query3)
or die ('Error in Query Try Again:--' . mysql_error());


// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )){
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['a'].'"><font color=black>'.$row['a'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc1'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];}
while($row = mysql_fetch_array( $result1 )){
	echo "</td><td><CENTER>";
	echo '<a href="messagename.php?name='.$row['b'].'"><font color=black>'.$row['b'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc2'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];}
while($row = mysql_fetch_array( $result2 )){
	echo "</td><td><CENTER>";
	echo '<a href="messagename.php?name='.$row['c'].'"><font color=black>'.$row['c'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc3'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];}
while($row = mysql_fetch_array( $result3 )){
	echo "</td><td><CENTER>";
	echo '<a href="messagename.php?name='.$row['d'].'"><font color=black>'.$row['d'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc4'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];
	echo "</td></tr><CENTER>";
	unset($team2);
	unset($team21);
} 
echo "</table>";
?></td>
    <td valign="top"><h3>Match 6 <?php

//Select Players name from form 
if(!empty($_GET['team6']))
{
$team6 = $_GET['team6'];
}
echo $team6;
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, schedule WHERE schedule.team = '$team6' 
AND scores.player_1 = schedule.a group by scores.player_1";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());

$query1 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc2 FROM scores, schedule WHERE schedule.team = '$team6' 
AND scores.player_1 = schedule.b group by scores.player_1";
$result1 = mysql_query($query1)
or die ('Error in Query Try Again:--' . mysql_error());

$query2 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc3 FROM scores, schedule WHERE schedule.team = '$team6' 
AND scores.player_1 = schedule.c group by scores.player_1";
$result2 = mysql_query($query2)
or die ('Error in Query Try Again:--' . mysql_error());

$query3 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc4 FROM scores, schedule WHERE schedule.team = '$team6' 
AND scores.player_1 = schedule.d group by scores.player_1";
$result3 = mysql_query($query3)
or die ('Error in Query Try Again:--' . mysql_error());

echo "<table border='1'>";
echo "<tr><th>A Player</th><th>HC</th><th>Team</th><th>B Player</th><th>HC</th><th>Team</th><th>C Player</th><th>HC</th><th>Team</th><th>D Player</th><th>HC</th><th>Team</th></tr>";
// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )){
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['a'].'"><font color=black>'.$row['a'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc1'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];}
while($row = mysql_fetch_array( $result1 )){
	echo "</td><td><CENTER>";
	echo '<a href="messagename.php?name='.$row['b'].'"><font color=black>'.$row['b'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc2'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];}
while($row = mysql_fetch_array( $result2 )){
	echo "</td><td><CENTER>";
	echo '<a href="messagename.php?name='.$row['c'].'"><font color=black>'.$row['c'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc3'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];}
while($row = mysql_fetch_array( $result3 )){
	echo "</td><td><CENTER>";
	echo '<a href="messagename.php?name='.$row['d'].'"><font color=black>'.$row['d'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc4'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];
	echo "</td></tr><CENTER>";
	
} 

?>
    </h3>
    <?php
//Select Players name from form 
if(!empty($_GET['team61']))
{
$team61 = $_GET['team61'];
}
echo $team61;
$query = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc1 FROM scores, schedule WHERE schedule.team = '$team61' 
AND scores.player_1 = schedule.a group by scores.player_1";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());

$query1 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc2 FROM scores, schedule WHERE schedule.team = '$team61' 
AND scores.player_1 = schedule.b group by scores.player_1";
$result1 = mysql_query($query1)
or die ('Error in Query Try Again:--' . mysql_error());

$query2 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc3 FROM scores, schedule WHERE schedule.team = '$team61' 
AND scores.player_1 = schedule.c group by scores.player_1";
$result2 = mysql_query($query2)
or die ('Error in Query Try Again:--' . mysql_error());

$query3 = "SELECT schedule.*, schedule.team, scores.player_1, scores.team, avg(((((total) - 35.4) * 113) / 122.5)* .8) as hc4 FROM scores, schedule WHERE schedule.team = '$team61' 
AND scores.player_1 = schedule.d group by scores.player_1";

$result3 = mysql_query($query3)
or die ('Error in Query Try Again:--' . mysql_error());


// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )){
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['a'].'"><font color=black>'.$row['a'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc1'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];}
while($row = mysql_fetch_array( $result1 )){
	echo "</td><td><CENTER>";
	echo '<a href="messagename.php?name='.$row['b'].'"><font color=black>'.$row['b'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc2'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];}
while($row = mysql_fetch_array( $result2 )){
	echo "</td><td><CENTER>";
	echo '<a href="messagename.php?name='.$row['c'].'"><font color=black>'.$row['c'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc3'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];}
while($row = mysql_fetch_array( $result3 )){
	echo "</td><td><CENTER>";
	echo '<a href="messagename.php?name='.$row['d'].'"><font color=black>'.$row['d'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc4'], 0);	
	echo "</td><td><CENTER>";
	echo $row['team'];
	echo "</td></tr><CENTER>";
	unset($team2);
	unset($team21);
} 
echo "</table>";
?>
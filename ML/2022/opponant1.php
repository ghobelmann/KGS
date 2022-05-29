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
  <tr>
    <td><h3>Match 1 
        <?php

//Select Players name from form 
if(!empty($_GET['team']))
{
$team = $_GET['team'];
}
echo $team;
$query = "SELECT DISTINCT `team` FROM `schedule`";
$tournaments=mysql_query($query);
while($tournament = mysql_fetch_assoc($tournaments))
{
$query = "SELECT DISTINCT `team` FROM `scores` WHERE `team` = '".$team['team']."'";
$result=mysql_query($query);
$j=0;
while($team = mysql_fetch_assoc($result))
{
//print_r($team);
$teams[$j] = $team['team'];
$query2 = "SELECT * FROM `schedule` WHERE `team` = '".$team['team']."' AND scores.`player_1` = schedule.`a`";
$result2=mysql_query($query2);


echo "<table border='1'>";
echo "<tr><th>A Player</th><th>HC</th><th>B Player</th><th>HC</th><th>C Player</th><th>HC</th><th>D Player</th><th>HC</th></tr>";
// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['a'].'"><font color=black>'.$row['a'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc1'], 0);	
	echo "</td><td><CENTER>";
	echo '<a href="messagename.php?name='.$row['b'].'"><font color=black>'.$row['b'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc2'], 0);	
	echo "</td><td><CENTER>";
	echo '<a href="messagename.php?name='.$row['c'].'"><font color=black>'.$row['c'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc3'], 0);	
	echo "</td><td><CENTER>";
	echo '<a href="messagename.php?name='.$row['d'].'"><font color=black>'.$row['d'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc4'], 0);	
	echo "</td></tr><CENTER>";
	
} } ;

?>
    </h3>
    <?php
//Select Players name from form 
if(!empty($_GET['team1']))
{
$team1 = $_GET['team1'];
}
echo $team1;
$query = "SELECT * FROM schedule WHERE team = '$team1'";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());

// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['a'].'"><font color=black>'.$row['a'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc'], 0);	
	echo "</td><td><CENTER>";
	echo '<a href="messagename.php?name='.$row['b'].'"><font color=black>'.$row['b'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc'], 0);	
	echo "</td><td><CENTER>";
	echo '<a href="messagename.php?name='.$row['c'].'"><font color=black>'.$row['c'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc'], 0);	
	echo "</td><td><CENTER>";
	echo '<a href="messagename.php?name='.$row['d'].'"><font color=black>'.$row['d'].'</font></a>';
	echo "</td><td><CENTER>";
	echo round ($row['hc'], 0);	
	echo "</td></tr><CENTER>";} 
unset($team);
unset($team1);

echo "</table>";
?></td>
    <td><h3>Match 2       
        <?php

//Select Players name from form 
if(!empty($_GET['team2']))
{
$team2 = $_GET['team2'];
}
echo $team2;
$query = "SELECT * FROM schedule WHERE team = '$team2'";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());

echo "<table border='1'>";
echo "<tr><th>A Player</th><th>B Player</th><th>C Player</th><th>D Player</th></tr>";
// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['a'].'"><font color=black>'.$row['a'].'</font></a>';
	echo "</td><td><CENTER>";
	echo '<a href="messagename.php?name='.$row['b'].'"><font color=black>'.$row['b'].'</font></a>';
	echo "</td><td><CENTER>";
	echo '<a href="messagename.php?name='.$row['c'].'"><font color=black>'.$row['c'].'</font></a>';
	echo "</td><td><CENTER>";
	echo '<a href="messagename.php?name='.$row['d'].'"><font color=black>'.$row['d'].'</font></a>';
	echo "</td></tr><CENTER>";
} 
unset($team2);
unset($team21);
?>
    </h3>
    <?php
//Select Players name from form 
if(!empty($_GET['team21']))
{
$team21 = $_GET['team21'];
}
echo $team21;
$query = "SELECT * FROM schedule WHERE team = '$team21'";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());

// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['a'].'"><font color=black>'.$row['a'].'</font></a>';
	echo "</td><td><CENTER>";
	echo '<a href="messagename.php?name='.$row['b'].'"><font color=black>'.$row['b'].'</font></a>';
	echo "</td><td><CENTER>";
	echo '<a href="messagename.php?name='.$row['c'].'"><font color=black>'.$row['c'].'</font></a>';
	echo "</td><td><CENTER>";
	echo '<a href="messagename.php?name='.$row['d'].'"><font color=black>'.$row['d'].'</font></a>';
	echo "</td></tr><CENTER>";
} 


echo "</table>";
?></td>
  </tr>
  <tr>
    <td>      <h3>Match 3       
        <?php

//Select Players name from form 
if(!empty($_GET['team3']))
{
$team3 = $_GET['team3'];
}
echo $team3;
$query = "SELECT * FROM schedule WHERE team = '$team3'";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());

echo "<table border='1'>";
echo "<tr><th>A Player</th><th>B Player</th><th>C Player</th><th>D Player</th></tr>";
// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['a'].'"><font color=black>'.$row['a'].'</font></a>';
	echo "</td><td><CENTER>";
	echo '<a href="messagename.php?name='.$row['b'].'"><font color=black>'.$row['b'].'</font></a>';
	echo "</td><td><CENTER>";
	echo '<a href="messagename.php?name='.$row['c'].'"><font color=black>'.$row['c'].'</font></a>';
	echo "</td><td><CENTER>";
	echo '<a href="messagename.php?name='.$row['d'].'"><font color=black>'.$row['d'].'</font></a>';
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
$query = "SELECT * FROM schedule WHERE team = '$team31'";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());

// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['a'].'"><font color=black>'.$row['a'].'</font></a>';
	echo "</td><td><CENTER>";
	echo '<a href="messagename.php?name='.$row['b'].'"><font color=black>'.$row['b'].'</font></a>';
	echo "</td><td><CENTER>";
	echo '<a href="messagename.php?name='.$row['c'].'"><font color=black>'.$row['c'].'</font></a>';
	echo "</td><td><CENTER>";
	echo '<a href="messagename.php?name='.$row['d'].'"><font color=black>'.$row['d'].'</font></a>';
	echo "</td></tr><CENTER>";
} 

unset($team3);
unset($team31);
echo "</table>";
?></td>
    <td><h3>Match 4       
        <?php

//Select Players name from form 
if(!empty($_GET['team4']))
{
$team4 = $_GET['team4'];
}
echo $team4;
$query = "SELECT * FROM schedule WHERE team = '$team4'";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());

echo "<table border='1'>";
echo "<tr><th>A Player</th><th>B Player</th><th>C Player</th><th>D Player</th></tr>";
// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['a'].'"><font color=black>'.$row['a'].'</font></a>';
	echo "</td><td><CENTER>";
	echo '<a href="messagename.php?name='.$row['b'].'"><font color=black>'.$row['b'].'</font></a>';
	echo "</td><td><CENTER>";
	echo '<a href="messagename.php?name='.$row['c'].'"><font color=black>'.$row['c'].'</font></a>';
	echo "</td><td><CENTER>";
	echo '<a href="messagename.php?name='.$row['d'].'"><font color=black>'.$row['d'].'</font></a>';
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
$query = "SELECT * FROM schedule WHERE team = '$team41'";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());

// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['a'].'"><font color=black>'.$row['a'].'</font></a>';
	echo "</td><td><CENTER>";
	echo '<a href="messagename.php?name='.$row['b'].'"><font color=black>'.$row['b'].'</font></a>';
	echo "</td><td><CENTER>";
	echo '<a href="messagename.php?name='.$row['c'].'"><font color=black>'.$row['c'].'</font></a>';
	echo "</td><td><CENTER>";
	echo '<a href="messagename.php?name='.$row['d'].'"><font color=black>'.$row['d'].'</font></a>';
	echo "</td></tr><CENTER>";
} 

unset($team4);
unset($team41);
echo "</table>";
?></td>
  </tr>
  <tr>
    <td><h3>Match 5       
        <?php

//Select Players name from form 
if(!empty($_GET['team5']))
{
$team5 = $_GET['team5'];
}
echo $team5;
$query = "SELECT * FROM schedule WHERE team = '$team5'";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());

echo "<table border='1'>";
echo "<tr><th>A Player</th><th>B Player</th><th>C Player</th><th>D Player</th></tr>";
// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['a'].'"><font color=black>'.$row['a'].'</font></a>';
	echo "</td><td><CENTER>";
	echo '<a href="messagename.php?name='.$row['b'].'"><font color=black>'.$row['b'].'</font></a>';
	echo "</td><td><CENTER>";
	echo '<a href="messagename.php?name='.$row['c'].'"><font color=black>'.$row['c'].'</font></a>';
	echo "</td><td><CENTER>";
	echo '<a href="messagename.php?name='.$row['d'].'"><font color=black>'.$row['d'].'</font></a>';
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
$query = "SELECT * FROM schedule WHERE team = '$team51'";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());

// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['a'].'"><font color=black>'.$row['a'].'</font></a>';
	echo "</td><td><CENTER>";
	echo '<a href="messagename.php?name='.$row['b'].'"><font color=black>'.$row['b'].'</font></a>';
	echo "</td><td><CENTER>";
	echo '<a href="messagename.php?name='.$row['c'].'"><font color=black>'.$row['c'].'</font></a>';
	echo "</td><td><CENTER>";
	echo '<a href="messagename.php?name='.$row['d'].'"><font color=black>'.$row['d'].'</font></a>';
	echo "</td></tr><CENTER>";
} 

unset($team5);
unset($team51);
echo "</table>";
?></td>
    <td><h3>Match 6       
        <?php

//Select Players name from form 
if(!empty($_GET['team6']))
{
$team6 = $_GET['team6'];
}
echo $team6;
$query = "SELECT * FROM schedule WHERE team = '$team6'";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());

echo "<table border='1'>";
echo "<tr><th>A Player</th><th>B Player</th><th>C Player</th><th>D Player</th></tr>";
// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['a'].'"><font color=black>'.$row['a'].'</font></a>';
	echo "</td><td><CENTER>";
	echo '<a href="messagename.php?name='.$row['b'].'"><font color=black>'.$row['b'].'</font></a>';
	echo "</td><td><CENTER>";
	echo '<a href="messagename.php?name='.$row['c'].'"><font color=black>'.$row['c'].'</font></a>';
	echo "</td><td><CENTER>";
	echo '<a href="messagename.php?name='.$row['d'].'"><font color=black>'.$row['d'].'</font></a>';
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
echo ($team61);
$query = "SELECT * FROM schedule WHERE team = '$team61'";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());

// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="messagename.php?name='.$row['a'].'"><font color=black>'.$row['a'].'</font></a>';
	echo "</td><td><CENTER>";
	echo '<a href="messagename.php?name='.$row['b'].'"><font color=black>'.$row['b'].'</font></a>';
	echo "</td><td><CENTER>";
	echo '<a href="messagename.php?name='.$row['c'].'"><font color=black>'.$row['c'].'</font></a>';
	echo "</td><td><CENTER>";
	echo '<a href="messagename.php?name='.$row['d'].'"><font color=black>'.$row['d'].'</font></a>';
	echo "</td></tr><CENTER>";
} 

unset($team6);
unset($team61);
echo "</table>";
?></td>
  </tr>
</table>
<?php include("footer.php"); ?>
<p>&nbsp;</p>

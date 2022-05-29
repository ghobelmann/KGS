<html>
<script language="JavaScript" type="text/JavaScript">
<!--
function MM_reloadPage(init) {  //reloads the window if Nav4 resized
  if (init==true) with (navigator) {if ((appName=="Netscape")&&(parseInt(appVersion)==4)) {
    document.MM_pgW=innerWidth; document.MM_pgH=innerHeight; onresize=MM_reloadPage; }}
  else if (innerWidth!=document.MM_pgW || innerHeight!=document.MM_pgH) location.reload();
}
MM_reloadPage(true);
//-->
</script>
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
include("header.php");
include("menubar.php");
include("style/style.php");
?>

<p align="center">
  <a href="tournaments.html"><font size="+7">Tournament Results</font></a></p>
<p><br>
  <br>
	    
</p>
<div align="center"></div>
		<table width="83%" height="807"  border="0" align="right" cellpadding="0" cellspacing="0" bordercolor="#CCCCCC">
          <tr>
            <td width="46%" align="center" valign="top"><p>
            
            
            <h2>
            
            Mens League will start with an organizational meeting on Wed. 
            May 16th at 5:30 in the clubhouse.
            
            </h2>
            
            </p>
                <p class="style5">PLAYERS OF THE WEEK</p>
                <p> (Highest Points Lowest Score)</p>
                <p class="style5"> A Player.
                    <?php	
	
	
	
	//Get number of Team to Search For.
if(!empty($_GET['date']))
{
$date = $_GET['date'];
}


$query = "SELECT player_1, (hole1 + hole2 + hole3 + hole4 + hole5 + hole6 + hole7 + hole8 + hole9) as score,
 team, points FROM scores WHERE DATE_SUB(CURDATE(),INTERVAL 6.4 day) <= date  AND  DATE_SUB(CURDATE(),INTERVAL -1 day) > date
AND a = 'yes' ORDER by points desc, score asc LIMIT 1 "; 	 
	 
$result = mysql_query($query) or die(mysql_error());

echo "<table border='1'>";
echo "<tr> <th>Name</th><th>Team Number</th> <th>Score</th><th>Points</th></tr>";
// keeps getting the next row until there are no more to get

while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td><center>"; 
	echo '<a href="messagename.php?name='.$row['player_1'].'">'.$row['player_1'].'</font></a>';
	echo "</td><td><CENTER>"; 
	echo $row['team'];
	echo "</td><td><CENTER>"; 
	echo $row['score'];
	echo "</td><td><CENTER>"; 
	echo $row['points'];
	
} 
echo "</table>";

?>
                </p>
                <p class="style5">B Player.
                    <?php	
	
	
	
	//Get number of Team to Search For.
if(!empty($_GET['date']))
{
$date = $_GET['date'];
}


$query = "SELECT player_1, (hole1 + hole2 + hole3 + hole4 + hole5 + hole6 + hole7 + hole8 + hole9) as score,
team, points FROM scores WHERE DATE_SUB(CURDATE(),INTERVAL 6.4 day) <= date  AND  DATE_SUB(CURDATE(),INTERVAL -1 day) > date
AND b = 'yes' ORDER by points desc, score asc LIMIT 1 "; 	 
	 
$result = mysql_query($query) or die(mysql_error());

echo "<table border='1'>";
echo "<tr> <th>Name</th><th>Team Number</th> <th>Score</th><th>Points</th></tr>";
// keeps getting the next row until there are no more to get

while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td><center>"; 
	echo '<a href="messagename.php?name='.$row['player_1'].'">'.$row['player_1'].'</font></a>';
	echo "</td><td><CENTER>"; 
	echo $row['team'];
	echo "</td><td><CENTER>"; 
	echo $row['score'];
	echo "</td><td><CENTER>"; 
	echo $row['points'];
	
} 
echo "</table>";

?>
                </p>
                <p class="style5">C Player.
                    <?php	
	
	
	
	//Get number of Team to Search For.
if(!empty($_GET['date']))
{
$date = $_GET['date'];
}


$query = "SELECT player_1, (hole1 + hole2 + hole3 + hole4 + hole5 + hole6 + hole7 + hole8 + hole9) as score, 
team, points FROM scores WHERE DATE_SUB(CURDATE(),INTERVAL 6.4 day) <= date  AND  DATE_SUB(CURDATE(),INTERVAL -1 day) > date
AND c = 'yes' ORDER by points desc, score asc LIMIT 1 "; 	 
	 
$result = mysql_query($query) or die(mysql_error());

echo "<table border='1'>";
echo "<tr> <th>Name</th><th>Team Number</th> <th>Score</th><th>Points</th></tr>";
// keeps getting the next row until there are no more to get

while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td><center>"; 
	echo '<a href="messagename.php?name='.$row['player_1'].'">'.$row['player_1'].'</font></a>';
	echo "</td><td><CENTER>"; 
	echo $row['team'];
	echo "</td><td><CENTER>"; 
	echo $row['score'];
	echo "</td><td><CENTER>"; 
	echo $row['points'];
	
} 
echo "</table>";

?>
                </p>
                <p class="style5">D Player.
                    <?php	
	
	
	
	//Get number of Team to Search For.
if(!empty($_GET['date']))
{
$date = $_GET['date'];
}


$query = "SELECT player_1, (hole1 + hole2 + hole3 + hole4 + hole5 + hole6 + hole7 + hole8 + hole9) as score, 
team, points FROM scores WHERE DATE_SUB(CURDATE(),INTERVAL 6.4 day) <= date AND  DATE_SUB(CURDATE(),INTERVAL -1 day) > date
AND d = 'yes' ORDER by points desc, score asc LIMIT 1 "; 	 
	 
$result = mysql_query($query) or die(mysql_error());

echo "<table border='1'>";
echo "<tr> <th>Name</th><th>Team Number</th> <th>Score</th><th>Points</th></tr>";
// keeps getting the next row until there are no more to get

while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td><center>"; 
	echo '<a href="messagename.php?name='.$row['player_1'].'">'.$row['player_1'].'</font></a>';
	echo "</td><td><CENTER>"; 
	echo $row['team'];
	echo "</td><td><CENTER>"; 
	echo $row['score'];
	echo "</td><td><CENTER>"; 
	echo $row['points'];
	
} 
echo "</table>";

?>
              </p></td>
            <td width="30%" align="left" valign="top">
					<p align="center" class="style5">WEEKLY&nbsp;TEAM MATCHUPS</p>
					<table width="324" border="4" cellpadding="0" cellspacing="2" bordercolor="#000000">
                  <tr>
                    <td align="center">Team</td>
                    <td align="center">Score</td>
							<td align="center">Rnd</td>
							<td align="center"></td>
							<td align="center">Team</td>
							<td align="center">Score</td>
							<td align="center">Rnd</td>
					  </tr>
                  <tr>
                    <td align="center"><?php $query = "SELECT a FROM matches";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['a']; ?>
                    </td>
                    <td align="center"><?php 
							$query = "SELECT scores.team, scores.date, matches.date, matches.a,
									sum(scores.points) as points
									FROM matches, scores WHERE scores.team = matches.a AND scores.date = matches.date";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['points']; ?></td>
                    <?php
									?>
							<td align="center"><?php 
							$query = "SELECT scores.team, scores.date, count(scores.player_1) as count, matches.date, matches.a,
									sum(scores.points) as points
									FROM matches, scores WHERE scores.team = matches.a AND scores.date = matches.date";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['count']; ?></td>
							<td align="center">vs</td>
							<td align="center"><?php $query = "SELECT b FROM matches";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['b']; ?></td>
							<td align="center"><?php 
							$query = "SELECT scores.team, scores.date, matches.date, matches.b,
									sum(scores.points) as points
									FROM matches, scores WHERE scores.team = matches.b AND scores.date = matches.date";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['points']; ?></td>
							<td align="center"><?php 
							$query = "SELECT scores.team, scores.date, count(scores.player_1) as count, matches.date, matches.b,
									sum(scores.points) as points
									FROM matches, scores WHERE scores.team = matches.b AND scores.date = matches.date";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['count']; ?></td>
					  </tr>
                  <tr>
                    <td align="center"><?php $query = "SELECT c FROM matches";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['c']; ?></td>
                    <td align="center"><?php 
							$query = "SELECT scores.team, scores.date, matches.date, matches.c,
									sum(scores.points) as points
									FROM matches, scores WHERE scores.team = matches.c AND scores.date = matches.date";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['points']; ?></td>
							<td align="center"><?php 
							$query = "SELECT scores.team, scores.date, count(scores.player_1) as count, matches.date, matches.c,
									sum(scores.points) as points
									FROM matches, scores WHERE scores.team = matches.c AND scores.date = matches.date";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['count']; ?></td>
							<td align="center">vs</td>
							<td align="center"><?php $query = "SELECT d FROM matches";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['d']; ?></td>
							<td align="center"><?php 
							$query = "SELECT scores.team, scores.date, matches.date, matches.d,
									sum(scores.points) as points
									FROM matches, scores WHERE scores.team = matches.d AND scores.date = matches.date";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['points']; ?></td>
							<td align="center"><?php 
							$query = "SELECT scores.team, scores.date, count(scores.player_1) as count, matches.date, matches.d,
									sum(scores.points) as points
									FROM matches, scores WHERE scores.team = matches.d AND scores.date = matches.date";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['count']; ?></td>
					  </tr>
                  <tr>
                    <td align="center"><?php $query = "SELECT e FROM matches";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['e']; ?></td>
                    <td align="center"><?php 
							$query = "SELECT scores.team, scores.date, matches.date, matches.e,
									sum(scores.points) as points
									FROM matches, scores WHERE scores.team = matches.e AND scores.date = matches.date";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['points']; ?></td>
							<td align="center"><?php 
							$query = "SELECT scores.team, scores.date, count(scores.player_1) as count, matches.date, matches.e,
									sum(scores.points) as points
									FROM matches, scores WHERE scores.team = matches.e AND scores.date = matches.date";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['count']; ?></td>
							<td align="center">vs</td>
							<td align="center"><?php $query = "SELECT f FROM matches";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['f']; ?></td>
							<td align="center"><?php 
							$query = "SELECT scores.team, scores.date, matches.date, matches.f,
									sum(scores.points) as points
									FROM matches, scores WHERE scores.team = matches.f AND scores.date = matches.date";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['points']; ?></td>
							<td align="center"><?php 
							$query = "SELECT scores.team, scores.date, count(scores.player_1) as count, matches.date, matches.f,
									sum(scores.points) as points
									FROM matches, scores WHERE scores.team = matches.f AND scores.date = matches.date";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['count']; ?></td>
					  </tr>
                  <tr>
                    <td align="center"><?php $query = "SELECT g FROM matches";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['g']; ?></td>
                    <td align="center"><?php 
							$query = "SELECT scores.team, scores.date, matches.date, matches.g,
									sum(scores.points) as points
									FROM matches, scores WHERE scores.team = matches.g AND scores.date = matches.date";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['points']; ?></td>
							<td align="center"><?php 
							$query = "SELECT scores.team, scores.date, count(scores.player_1) as count, matches.date, matches.g,
									sum(scores.points) as points
									FROM matches, scores WHERE scores.team = matches.g AND scores.date = matches.date";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['count']; ?></td>
							<td align="center">vs</td>
							<td align="center"><?php $query = "SELECT h FROM matches";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['h']; ?></td>
							<td align="center"><?php 
							$query = "SELECT scores.team, scores.date, matches.date, matches.h,
									sum(scores.points) as points
									FROM matches, scores WHERE scores.team = matches.h AND scores.date = matches.date";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['points']; ?></td>
							<td align="center"><?php 
							$query = "SELECT scores.team, scores.date, count(scores.player_1) as count, matches.date, matches.h,
									sum(scores.points) as points
									FROM matches, scores WHERE scores.team = matches.h AND scores.date = matches.date";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['count']; ?></td>
					  </tr>
                  <tr>
                    <td align="center"><?php $query = "SELECT i FROM matches";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['i']; ?></td>
                    <td align="center"><?php 
							$query = "SELECT scores.team, scores.date, matches.date, matches.i,
									sum(scores.points) as points
									FROM matches, scores WHERE scores.team = matches.i AND scores.date = matches.date";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['points']; ?></td>
							<td align="center"><?php 
							$query = "SELECT scores.team, scores.date, count(scores.player_1) as count, matches.date, matches.i,
									sum(scores.points) as points
									FROM matches, scores WHERE scores.team = matches.i AND scores.date = matches.date";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['count']; ?></td>
							<td align="center">vs</td>
							<td align="center"><?php $query = "SELECT j FROM matches";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['j']; ?></td>
							<td align="center"><?php 
							$query = "SELECT scores.team, scores.date, matches.date, matches.j,
									sum(scores.points) as points
									FROM matches, scores WHERE scores.team = matches.j AND scores.date = matches.date";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['points']; ?></td>
							<td align="center"><?php 
							$query = "SELECT scores.team, scores.date, count(scores.player_1) as count, matches.date, matches.j,
									sum(scores.points) as points
									FROM matches, scores WHERE scores.team = matches.j AND scores.date = matches.date";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['count']; ?></td>
					  </tr>
                  <tr>
                    <td align="center"><?php $query = "SELECT k FROM matches";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['k']; ?></td>
                    <td align="center"><?php 
							$query = "SELECT scores.team, scores.date, matches.date, matches.k,
									sum(scores.points) as points
									FROM matches, scores WHERE scores.team = matches.k AND scores.date = matches.date";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['points']; ?></td>
							<td align="center"><?php 
							$query = "SELECT scores.team, scores.date, count(scores.player_1) as count, matches.date, matches.k,
									sum(scores.points) as points
									FROM matches, scores WHERE scores.team = matches.k AND scores.date = matches.date";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['count']; ?></td>
							<td align="center">vs</td>
							<td align="center"><?php $query = "SELECT l FROM matches";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['l']; ?></td>
							<td align="center"><?php 
							$query = "SELECT scores.team, scores.date, matches.date, matches.l,
									sum(scores.points) as points
									FROM matches, scores WHERE scores.team = matches.l AND scores.date = matches.date";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['points']; ?></td>
							<td align="center"><?php 
							$query = "SELECT scores.team, scores.date, count(scores.player_1) as count, matches.date, matches.l,
									sum(scores.points) as points
									FROM matches, scores WHERE scores.team = matches.l AND scores.date = matches.date";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['count']; ?></td>
					  </tr>
                  <tr>
                    <td align="center">Total </td>528 Possible
                    <td align="center"><?php 
							$query = "SELECT scores.team, scores.date, matches.date, matches.k,
									sum(scores.points) as points
									FROM matches, scores WHERE  scores.date = matches.date";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['points']; ?></td>
                    <td align="center"></td>
                    <td align="center"></td>
							<td align="center"></td>
							<td align="center"></td>
							<td align="center"></td>
					  </tr>
                </table>
					<p><?php	
	
	
	
	//Get number of Team to Search For.



	$query = "SELECT *, count(player_1) as round, sum(points) as points FROM scores WHERE DATE_SUB(CURDATE(),INTERVAL 6.4 day) <= date AND  DATE_SUB(CURDATE(),INTERVAL -1 day) > date group by team order by points desc"; 
	 
$result = mysql_query($query) or die(mysql_error());

echo "<table border='1'>";
echo "<tr> <th>Place</th><th>Team Number</th> <th>Total Points Scored this Week</th><th>Rounds this Week</th></tr>";
// keeps getting the next row until there are no more to get
$i = 1;
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td><center>"; 
	echo $i.'</td><td><center>';
	echo '<a href="messageteam.php?team='.$row['team'].'"><font size=4>'.$row['team'].'</font></a>';
	echo "</td><td><CENTER>"; 
	echo round ($row['points'], 1);
	echo "</td><td><CENTER>"; 
	echo $row['round'];
	echo "</td><CENTER>";
	$i++;
} 
echo "</table>";

?></p>
					<p align="right" class="style5"><font color="white">              </font></p></td>
            <td width="29%" align="left" valign="top"><p align="center" class="style5">TOTAL TEAM SCORES</p>
                <div align="left">
                  <?php

$query = "SELECT *, sum(points) as points, count(player_1) as rounds FROM scores group by team order by points desc"; 
	 
$result = mysql_query($query) or die(mysql_error());

echo "<table border='1'>";
echo "<tr> <th>Place</th><th>Team Number</th> <th>Total Points</th><th>Rounds Played</th></tr>";
// keeps getting the next row until there are no more to get
$i = 1;
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td><center>"; 
	echo $i.'</td><td><center>';
	echo '<a href="messageteam.php?team='.$row['team'].'"><font size=4>'.$row['team'].'</font></a>';
	echo "</td><td><CENTER>"; 
	echo round ($row['points'], 1);
	echo "</td><td><CENTER>"; 
	echo $row['rounds'];
	echo "</td><CENTER>";
	$i++;
} 

echo "</table>";


?>
<div align="center">
			<i><em>Projected Place Because of Byes</em></i><em><?php

$query = "SELECT team, avg(points)as points, count(date) as rounds FROM scores GROUP by team order by points desc"; 
	 
$result = mysql_query($query) or die(mysql_error());

echo "<table border='1'>";
echo "<tr> <th>Projected Place</th><th>Team Number</th> <th>Projected Points to Date</th><th>Projected Season Points</th><th>Avg Points</th></tr>";
// keeps getting the next row until there are no more to get
$i = 1;
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td><i><center>"; 
	echo $i.'</i></td><td><center>';
	echo '<a href="messageteam.php?team='.$row['team'].'"><font size=4><i>'.$row['team'].'</i></font></a>';
	echo "</td><td><i><CENTER>"; 
	echo round ($row['points']* $row['rounds'], 0);
	echo "</td></i><i><td><CENTER>"; 
	echo round ($row['points']* 62, 0);
	echo "</td></i><i><td><CENTER>"; 
	echo round ($row['points']* 4, 0);
	echo "</i></td><CENTER>";
	$i++;
} 

echo "</table>";


?>     

         </div></td>
          </tr>
          <tr>
            <td colspan="2" align="center" valign="top"><table width="100%"  border="0" cellspacing="0" cellpadding="5">
                <tr>
                  <td align="center"><h2>Message Board</h2></td>
                </tr>
                <tr>
                  <td align="center"><?php
			 if(authorize("admin, superadmin, messageboard") == 'success')
			 {
			  if(isset($_POST['msg']) == 'submitted')
{
if(!$_POST['from'] || !$_POST['message'])
{
echo '<h2><font color="red">You must fill in both fields.</font></h2>';
} else {
$_POST['from'] = htmlspecialchars($_POST['from'], ENT_QUOTES);
$_POST['message'] = htmlspecialchars($_POST['message'], ENT_QUOTES);
$sql = "INSERT INTO `message_board` (`timestamp`, `from`, `message`) VALUES ('".time()."', '".$_POST['from']."', '".$_POST['message']."')";
mysql_query($sql) or die("Error on line ".__LINE__." : ".mysql_error());
}
}
?>
                      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="messageboard" class="style5">
                        <p>
                          <input name="msg" type="hidden" value="submitted">
                        </p>
                        <table width="327"  border="0" cellpadding="0" cellspacing="1" bgcolor="#E4E6AE">
                          <tr>
                            <td align="center" colspan="2">Post a new message </td>
                          </tr>
                          <tr>
                            <td width="90" align="right">Your Name:</td>
                            <td width="251" align="left"><input name="from" type="text" size="35" maxlength="40"></td>
                          </tr>
                          <tr bgcolor="#E4E6AE">
                            <td colspan="2"><textarea name="message" cols="50" size="35" rows="6"></textarea></td>
                          </tr>
                          <tr align="right">
                            <td colspan="2"><input name="submit" type="submit" value="Post"></td>
                          </tr>
                        </table>
                      </form>
                      <?php
}
?></td>
                </tr>
                <tr>
                  <td align="center"><?php
			  $sql = "SELECT * FROM `message_board` ORDER BY `id` DESC LIMIT 0,4";
			  $result = mysql_query($sql) or die("Error on line ".__LINE__." : ".mysql_error());
			  while($data = mysql_fetch_assoc($result))
			  {
			  $date = date("d-M-y",$data['timestamp']);
			  //$time = date("g:i A",$data['timestamp']);
			  echo '
			  <table width="100%"  border="1" cellspacing="0" cellpadding="5">
                <tr>
                  <td width="250" align="left" valign="top">Posted by:-----
                    '.$data['from'].'
                  <br><br>
                  	Date Posted:------'.$date.'
				
</td>
                  <td align="left" valign="top">'.$data['message'].'</td>
                </tr>
              </table>';
			  }
			  ?>
                      <p></p></td>
                </tr>
            </table></td>
            <td align="left" valign="top" width="29%"><p align="center" class="style5"><span class="style5"><font color="white">
            </font></span></p>
            </td>
          </tr>
          <tr>
            <td colspan="2" align="center" valign="top"><div align="center"> <a href="http://www.weatherforyou.com/weather/kansas/smith+center.html"><img src="http://www.weatherforyou.net/fcgi-bin/hw3/hw3.cgi?config=png&forecast=zone&alt=hwizone7day5&place=smith+center&state=ks&country=us&hwvbg=&hwvtc=&hwvdisplay=&daysonly=2&maxdays=7" width="500" height="169" border="0" alt="Smith Center, Kansas, weather forecast"></a>
                    <script src="http://www.google-analytics.com/urchin.js" type="text/javascript">
            </script>
                    <script type="text/javascript">
_uacct = "UA-4452093-1";
urchinTracker();
            </script>
            </div></td>
            <td align="left" valign="top" width="29%"><p align="center" class="style5"></p></td>
          </tr>
          <tr>
            <td colspan="2" align="center" valign="top">&nbsp;</td>
            <td width="29%"><div align="center"> </div></td>
          </tr>
          <tr>
            <td colspan="2" align="center" valign="top"><p><a href="http://www.kansasgolf.org/"><img src="kgaimg.JPG" width="500" height="105" border="0"></a></p>
            <p>
              <?php
//Increment counter
mysql_query("UPDATE countertable SET count_index=count_index+1");

//extract count from database table
$query = "SELECT count_index FROM countertable";

$result = mysql_query($query) or die(mysql_error());
echo "<table border='1'>";
echo "<tr> <th>This page has been visited.</th></tr>";
// keeps getting the next row until there are no more to get

while($row = mysql_fetch_array( $result )) 
{
	// Print out the contents of each row into a table
	echo "<tr><td><center>";
	echo $row['count_index']; 
	echo "</td></tr>";

} 




?>
            </p></td>
            <td width="29%"><div align="center">
                <p class="style5"><a href="http://www.usga.org/default.aspx"><img src="Scrap.gif" alt="" width="228" height="80" border="0"></a></p>
            </div></td>
          </tr>
        </table>
				



</body>



</html>

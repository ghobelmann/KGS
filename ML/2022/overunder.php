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


if(!empty($_GET['date']))
{
$date = $_GET['date'];
}
?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
	<title>Smith Center Mens League Golf 2013</title>
	<link rel="stylesheet" media="screen" type="text/css" href="style.css" />
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
	
	    <script type="text/javascript">
<!--
if (screen.width <= 699) {
document.location = "m.overunder.php";
}
//-->
</script>
  </head>

  <body>
    <div id="page">
	  <div id="header">
	    <div id="logo">
		<!-- type your logo and small slogan here -->
		<p>Smith Center<span class="green"> Golf</span></p>
		<div id="slogan">
		  <p>Mens League 2013...</p>
		</div>
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
			  <li>  <?php if($logged_in) { echo'<a href="logout.php">Log Out</a>'; } else { echo'<a href="login.php">Login</a>'; } ?>
    
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
$query = "SELECT * FROM tournament WHERE `tournament` =  '$tournament' LIMIT 1";

$result = mysql_query($query);

$data = mysql_fetch_assoc($result);

for($i=1; $i<=18; $i++)

{

   //this stores the numbers in $h1-$h18 not an array

 //  $h = "h{$i}";

 //  ${$h} = $data['hole'.$i];

 

   //or with an array which stores the numbers like this $h[1] - $h[18]

   $h[$i] = $data['hole'.$i];

}
?>


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
</head>
<body>
<center>
<?php
//Get number of Team to Search For.
if(!empty($_GET['tournament']))
{
$tournament = $_GET['tournament'];    
echo '<h2>'.$tournament.' Golf Live Scoring</h2>';
}
//new stuff

//get data
//get tournament name and ID
$query = "SELECT * FROM `setup` WHERE `tournament` LIKE '$tournament'  LIMIT 1";
if(@!$result = mysql_query($query))
	echo 'PHP LINE: '.__LINE__.'. Epic fail 1.'. mysql_error();
else {
$setup = mysql_fetch_assoc($result);
//Displays Array information
 //print_r  ($setup);
 
 
 //Tournament ID
$tid = $setup['id'];
 //Course ID
$cid = $setup['course'];
$tname = $setup['tournament'];
unset($setup);

if(empty($cid))
	echo 'ERROR: No course defined in setup table for this tournament!';
	else {
$query = "SELECT * FROM `par` WHERE `course` = '".$cid."' LIMIT 1";
if(@!$result = mysql_query($query))
	echo 'PHP LINE: '.__LINE__.'. Epic fail 2.'. mysql_error();
else {
$sql_par = mysql_fetch_assoc($result);

$pid = $sql_par['id'];


$query = "SELECT * FROM `scores` WHERE `tid` = '".$tid."' AND date = '".$tournament."'";
if(@!$result = mysql_query($query))
	echo 'PHP LINE: '.__LINE__.'. Epic fail 3.'. mysql_error();
else {

$running_score = array();
$player_i = 0;

//calculate for each player
while($scores = mysql_fetch_assoc($result))
{
$total = 0;
$holes_played = 0;
$score = 0;
//calculate for each hole
	for($i=1; $i<=18; $i++)
	{
	//$par[$i] = $sql_par['h'.$i];
	$hole_par = $sql_par['h'.$i];
	if(empty($scores['hole'.$i]) || $scores['hole'.$i] < 1)
	{
	$hole_par = 0;
	$scores['hole'.$i] = 0;
	} else {
	$holes_played++;
	}
  $score = $score + $scores['hole'.$i];
	$total = $total + $scores['hole'.$i] - $hole_par;
	}


$running_score[$player_i] = array("name" => $scores['player_1'], "team" => $scores['team'],
 "total" => $total, "score" => $score, "holes_played" => $holes_played);
// print_r ($running_score);
$player_i++;
}
function array_orderby()
{
    $args = func_get_args();
    $data = array_shift($args);
    foreach ($args as $n => $field) {
        if (is_string($field)) {
            $tmp = array();
            foreach ($data as $key => $row)
                $tmp[$key] = $row[$field];
            $args[$n] = $tmp;
            }
    }
    $args[] = &$data;
    call_user_func_array('array_multisort', $args);
    return array_pop($args);
}
$running_score_sorted = array_orderby($running_score, 'total', SORT_ASC);

$i = 0;
$count = count($running_score_sorted);
$place = 1;
$table_size = 14;

//echo $count;

echo '<table border="0">
<tr>';
while($i < $count)
{
echo '<td valign="top" align="center">';
echo '<table border="1">
<tr>
<th>Place</th>
<th>Name</th>
<th>To Par</th>
<th>Score</th>
</tr>';



while($i < $count && $table_i < $table_size)
{
$player = $running_score_sorted[$i];

if($player['total'] < 0)
	$highlight = ' bgcolor="#FF0000"';  
  
if($player['total'] == 0)
	$highlight = ' bgcolor="#000000"';  
  
if($player['total'] > 0)
	$highlight = ' bgcolor="#990000"';
  
if($player['total'] > 9)
	$highlight = ' bgcolor="#996600"';  
  
if($player['total'] > 18)
	$highlight = ' bgcolor="#999900"';    
  
  

if($player['total'] == 0)
	$player['total'] = "E"; 
else if($player['total'] > 0)
	$player['total'] = (string) '+'.$player['total'];
else if($player['total'] < 0)
	$player['total'] = (string) $player['total'];



echo '<tr'.$highlight.'>
<td>'.$place.'</td>
<td>'.$player['name'].'</td>
<td>'.$player['total'].'</td>
<td>'.$player['score'].'</td>
</tr>';
$place++;
$i++;
$table_i++;
unset($highlight);
}

echo '</table>';
echo '</td>';
$table_i = 0;
}
echo '</tr>
</table>';
}
}
}
}





?>





</div>
</body>













	  <div id="footer-div"></div>
	  <div id="footer">
	    <p>Website &copy; Copyright Smith Center Mens League 2012, All rights reserved. </p>
	  </div>
	</div>

</html>



<?php
$page_title = "Enter Scores";
define("IN_GOLF_STATS", TRUE);
define('IN_PHP_AUTH', TRUE);
include_once("databaseconnect.php");
include_once("PHP_AUTH/check_auth.php");
if(authorize("superadmin,admin") != "success") die('unauthorized');

if(!$_SESSION['username'] | !isset($_SESSION['password']) | !$_SESSION['permissions'])
{
$logged_in = FALSE;
} else {
$logged_in = TRUE;
}

$user = $_SESSION['username'];
echo $user;


?>

<HTML>
<HEAD>
<META HTTP-EQUIV="Refresh" CONTENT="1;URL=EnterScores.php">

</HEAD>
<BODY onLoad="redirect()">

<center><H1>! Scores Added !</H1></center>



</BODY>
</HTML>


<?php 
$front = "$_POST[front]";
$back = "$_POST[back]";
$tournament = "$_POST[tournament]";
$noteam = "$_POST[noteam]";

$total = $front + $back;
	echo "<tr><td><CENTER><b><h1>"; 
	echo "Front--";
	echo $front;
	echo "</td><td><CENTER>";
	echo "Back--";
	echo $back;
	echo "</td><td><CENTER>";
	echo "Total--";
	echo $total;
	echo "</td></tr><CENTER>";

$query = "SELECT `id` FROM `setup` WHERE `tournament` = '".$_POST[tournament]."' LIMIT 1";
if(@!$result = mysql_query($query))
	echo 'PHP LINE: '.__LINE__.'. Epic fail.'. mysql_error();
$tid = mysql_fetch_assoc($result);


$sql="INSERT INTO scores (player_1, team,  man_2, man_4, man_6, teetime, 
position, tid, front, back, total, date, noteam, jv, user, tournament)
VALUES
('$_POST[player_1]','$_POST[team]','$_POST[teetime]', '$_POST[man_2]','$_POST[man_4]','$_POST[man_6]',
'$_POST[position]', '$_POST[tid]', '$front', 
'$back', '$total', '$_POST[date]', '$_POST[noteam]', '$_POST[jv]', '$_SESSION[username]'
, '$_POST[tournament]')";


if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
 
  }

 
   
 
 
 
if ($noteam <> 'yes') {

         $sql1="INSERT INTO virtual (player_1, team, total, date)
VALUES
('$_POST[player_1]','$_POST[team]','$total','$_POST[date]')";



if (!mysql_query($sql1,$con))
  {
  die('Error: ' . mysql_error());

}
 




}


        
?>




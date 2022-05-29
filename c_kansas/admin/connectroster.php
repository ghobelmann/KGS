    <?php
$page_title = "Enter Scores";
define("IN_GOLF_STATS", TRUE);
define('IN_PHP_AUTH', TRUE);
include_once("databaseconnect.php");
include_once("PHP_AUTH/check_auth.php");
if(authorize("superadmin,admin") != "success") die('unauthorized');

?>

<HTML>
<HEAD>

<TITLE>Enter Roster</TITLE>
<meta http-equiv="Refresh" content="1; url=<?php echo $_SERVER['HTTP_REFERER'];?>">




</BODY>
</HTML>





<?php 

$query = "SELECT * FROM roster WHERE player_1 = '$_POST[player_1]'";
if($result = mysql_query($query)){
	if(mysql_num_rows($result)){
		echo "row already exists";
	}else{
$sql="INSERT INTO roster (player_1, school)
VALUES
('$_POST[player_1]','$_POST[school]')";
  }
  }
 

if (mysql_query($result))
  {
  echo "Successfully inserted '$_POST[player_1]' from '$_POST[school]' High School";
  }    

  if (!mysql_query($sql,$con))
  {
  echo "Was not able to insert!!";
  }  
 
?>
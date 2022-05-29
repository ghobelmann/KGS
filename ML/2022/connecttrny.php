<?php
$page_title = "Enter Scores";
define("IN_GOLF_STATS", TRUE);
define('IN_PHP_AUTH', TRUE);
include("databaseconnect.php");
include("PHP_AUTH/check_auth.php");
//if(authorize("superadmin,admin") != "success") die('unauthorized');
?>

<HTML>
<HEAD>
  <META HTTP-EQUIV="Refresh" CONTENT="1;URL=http://www.usd237.com/golf/tournaments.php"

</HEAD>
<BODY onLoad="redirect()">

<center>
  <H1>! Player Added !</H1>
</center>



</BODY>
</HTML>


<?php 

$sql="INSERT INTO trny_entries(name, trny, comments, phone, email)
VALUES
('$_POST[name]','$_POST[trny]','$_POST[comments]','$_POST[phone]','$_POST[email]')";


if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }



?>


   <?php
      $email = "hobelmann@usd237.com";



// The subject

$subject = "Tournament Entry Added for '$_POST[name]'";



// The message

$message = "'$_POST[name]' has registered for the 

'$_POST[trny]' Tournament.

Phone Number - '$_POST[phone]' Email Address- '$_POST[email]'

Comments - '$_POST[comments]'";



mail($email, $subject, $message, "From: $email");
      
 
?>



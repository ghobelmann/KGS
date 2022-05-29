 <?php
 //authentication for coaches to get to their pages, not for public pages.


include_once("headera.php");
include_once("databaseconnect.php");
 ?> 

<HTML>


 <HEAD>
<META HTTP-EQUIV="Refresh" CONTENT="6;URL=welcome.php">

</HEAD>


</BODY>
</HTML>


<?php 



$query = "SELECT `".email."` FROM `users` WHERE `".email."` = '".$_POST[email]."' LIMIT 1";
if(@!$result = mysqli_query($conn,$query)) 
	echo 'PHP LINE: '.__LINE__.'. Name already in Use.'. mysqli_error();
$tid = mysqli_fetch_assoc($result);






$first_name = "$_POST[first_name]";
$last_name = "$_POST[last_name]";
$email = "$_POST[email]";
$school = "$_POST[school]";
$classification = "$_POST[classification]";
$phone = "$_POST[phone]";






$sql="INSERT INTO users (first_name, last_name, password, permissions, email, tmid, phone)
VALUES
('$_POST[first_name]','$_POST[last_name]',MD5('Golf2017'), 'admin', '$_POST[email]','$_POST[tmid]','$_POST[phone]')";


if (!mysqli_query($conn,$sql))
  {
  die('Error: ' . mysqli_error());
 
  }


   	echo "<tr><td><CENTER><b><h1>"; 
	echo "Welcome--";
	echo "$first_name";
	echo "</td><td><CENTER>";
	echo "We are glad $school High School is on board";
  	echo "</td><td><br><CENTER>";
	echo "</td><td><br><CENTER>";
	echo "You entered $phone as your phone number.";
  	echo "</td><td><br><CENTER><br>";
	echo "You will be receiving an email with instructions on how to login." ;
  	echo "</td><td><br><CENTER>";
     	echo "</td><td><br><CENTER>";
       	echo "</td><td><br><CENTER>";
         	echo "</td><td><br><CENTER>";
           	echo "</td><td><br><CENTER>";
  echo "This page will auto direct you to setup a tournament in 15 seconds, you will receive an email in the next few hours.";
	echo "</td></tr><CENTER>";

?>

<?php

$username = "$_POST[username]";
$password = "Golf2017";
$email = "$_POST[email]";

// Send the registration e-mail 
	$to = $email; // Send email to our user
	$subject = 'Registration Information'; // Give the email a subject
	$message = '

	Your Registration Information:

	--------------------------
	Username: '.$username.'
	Password: '.$password.'
	--------------------------

	Congratulations, You have signed up for your KansasGolfScores account  
  
   -- Click Link Below to confirm your registration  
  
 http://www.kansasgolfscores.com/c_kansas/girls/confirm.php?username='.$username.' '; 
 
 // Our message above including the link

	$headers = 'From: noreply@KansasGolfScores.com' . "\r\n"; // Set from headers
	mail($to, $subject, $message, $headers); // Send our email
?>

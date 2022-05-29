


<?php
$page_title = "Enter Scores";
define("IN_GOLF_STATS", TRUE);
include_once("databaseconnect.php");

?>

<HTML>
<HEAD>

</HEAD>




</BODY>
</HTML>


<?php 
$first_name = "$_POST[first_name]";
$last_name = "$_POST[last_name]";
$username = "$_POST[username]";
$password = "$_POST[password]";
$email = "$_POST[email]";
$school = "$_POST[school]";
$classification = "$_POST[classification]";
$phone = "$_POST[phone]";


//test to see if username is alphanumeric

$testname=$_POST[username];
  if(!eregi("[A-Az-z0-9])",$testname)){
  
    //test for duplicate name
    $query="SELECT * from data_logins WHERE username ='$_POST[username]'";
    $result = mysql_query($query);
    $result=mysql_query($result);
    $num=mysql_num_rows($result);
      
        if ($num ==0){
               header("Location:connectsignup.php")
        } else {
            header("Location:invalidname.html")
        }
  }  else {
    header("Location:invalidname.html")
  } ;

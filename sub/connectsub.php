<HTML>
<HEAD>
<meta http-equiv="refresh" content="3;URL='gs.php'" /> 
</HEAD>
</HTML>


<?php
include 'db.php';
$usderid = "$_POST[name]";

echo $userid;

?>






<?php

$date = mysqli_real_escape_string($conn, $_REQUEST['date']);
$name_id = mysqli_real_escape_string($conn, $_REQUEST['name_id']);
$school = mysqli_real_escape_string($conn, $_REQUEST['school']);
$type = mysqli_real_escape_string($conn, $_REQUEST['type']);
$pay = mysqli_real_escape_string($conn, $_REQUEST['pay_id']);
$length = mysqli_real_escape_string($conn, $_REQUEST['length']);
$sub_needed = mysqli_real_escape_string($conn, $_REQUEST['sub_needed']);
$sub_id = mysqli_real_escape_string($conn, $_REQUEST['sub_id']);
$notes = mysqli_real_escape_string($conn, $_REQUEST['notes']);
$duration = mysqli_real_escape_string($conn, $_REQUEST['duration']);





  $sql="INSERT INTO sickdays (date, name_id, school, type, pay_id, length, sub_id, notes, duration)
  VALUES
  ('$date', '$name_id', '1', '$type', '$pay', '$length', '$sub_id', '$notes', '$duration')";
echo "<H1>Sub Successfully Entered<H1>";


if (!mysqli_query($conn,$sql))
  {
  die('Error: Sub not Entered' . mysqli_error($conn));
  }
  
  
  
 ?> 
  
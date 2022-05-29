<HTML>
<HEAD>
<meta http-equiv="refresh" content="3;URL='tc.php'" /> 
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
$pay_id = mysqli_real_escape_string($conn, $_REQUEST['pay_id']);
$length = mysqli_real_escape_string($conn, $_REQUEST['length']);
$sub_needed = mysqli_real_escape_string($conn, $_REQUEST['sub_needed']);
$tc_id = mysqli_real_escape_string($conn, $_REQUEST['tc_id']);
$pay1 = mysqli_real_escape_string($conn, $_REQUEST['pay1']);
$pay2 = mysqli_real_escape_string($conn, $_REQUEST['pay2']);
$pay3 = mysqli_real_escape_string($conn, $_REQUEST['pay3']);
$pay4 = mysqli_real_escape_string($conn, $_REQUEST['pay4']);
$pay5 = mysqli_real_escape_string($conn, $_REQUEST['pay5']);
$pay6 = mysqli_real_escape_string($conn, $_REQUEST['pay6']);
$pay7 = mysqli_real_escape_string($conn, $_REQUEST['pay7']);
$pay8 = mysqli_real_escape_string($conn, $_REQUEST['pay8']);
$one = mysqli_real_escape_string($conn, $_REQUEST['1']);
$two = mysqli_real_escape_string($conn, $_REQUEST['2']);
$three = mysqli_real_escape_string($conn, $_REQUEST['3']);
$four = mysqli_real_escape_string($conn, $_REQUEST['4']);
$five = mysqli_real_escape_string($conn, $_REQUEST['5']);
$six = mysqli_real_escape_string($conn, $_REQUEST['6']);
$seven = mysqli_real_escape_string($conn, $_REQUEST['7']);
$eight = mysqli_real_escape_string($conn, $_REQUEST['8']);
$notes = mysqli_real_escape_string($conn, $_REQUEST['notes']);
$duration = mysqli_real_escape_string($conn, $_REQUEST['duration']);




/*
  $sql="INSERT INTO sickdays (date, name_id, school, type, pay_id, length, sub_id, notes, duration)
  VALUES
  ('$date', '$name_id', '$school', '$type', '$pay_id', '$length', '$sub_id', '$notes', '$duration')";
echo "<H1>Sub Successfully Entered<H1>";


if (!mysqli_query($conn,$sql))
  {
  die('Error: Sub not Entered' . mysqli_error($conn));
  }
  
  */
  
 ?> 
<?php  $sql = "DELETE  FROM `sickdays` WHERE tc_id = '258'"; ?>

<?php 
    $hour = isset($_POST['1']) ? $_POST['1'] : '1';
if( !empty($hour) ) {
      $sqlInsert="INSERT INTO sickdays (date, name_id, school, type, pay_id, length, tc_id, tc_pay, notes, duration)
      VALUES
      ('$date', '$name_id', '2', '$type', '11', '$length', '$one', '$pay1', '$notes', '$duration')";
      $insertExec=mysqli_query($conn,$sqlInsert);  
}  
if (!mysqli_query($conn,$sql))
  {
  die('Error: Sub not Entered' . mysqli_error($conn));
  }
?>


<?php 
    $hour = isset($_POST['2']) ? $_POST['2'] : '2';
if( !empty($hour) ) {
  $sqlInsert="INSERT INTO sickdays (date, name_id, school, type, pay_id, length, tc_id, tc_pay, notes, duration)
      VALUES
      ('$date', '$name_id', '2', '$type', '11', '$length', '$two', '$pay2', '$notes', '$duration')";
      $insertExec=mysqli_query($conn,$sqlInsert);  
}  
if (!mysqli_query($conn,$sql))
  {
  die('Error: Sub not Entered' . mysqli_error($conn));
  }
?>


<?php 
    $hour = isset($_POST['3']) ? $_POST['3'] : '3';
if( !empty($hour) ) {
  $sqlInsert="INSERT INTO sickdays (date, name_id, school, type, pay_id, length, tc_id, tc_pay, notes, duration)
      VALUES
      ('$date', '$name_id', '2', '$type', '11', '$length', '$three', '$pay3', '$notes', '$duration')";
      $insertExec=mysqli_query($conn,$sqlInsert);  
}  
if (!mysqli_query($conn,$sql))
  {
  die('Error: Sub not Entered' . mysqli_error($conn));
  }
?>


<?php 
    $hour = isset($_POST['4']) ? $_POST['4'] : '4';
if( !empty($hour) ) {
  $sqlInsert="INSERT INTO sickdays (date, name_id, school, type, pay_id, length, tc_id, tc_pay, notes, duration)
      VALUES
      ('$date', '$name_id', '2', '$type', '11', '$length', '$four', '$pay4', '$notes', '$duration')";
      $insertExec=mysqli_query($conn,$sqlInsert);  
}  
if (!mysqli_query($conn,$sql))
  {
  die('Error: Sub not Entered' . mysqli_error($conn));
  }
?>


<?php 
    $hour = isset($_POST['5']) ? $_POST['5'] : '5';
if( !empty($hour) ) {
  $sqlInsert="INSERT INTO sickdays (date, name_id, school, type, pay_id, length, tc_id, tc_pay, notes, duration)
      VALUES
      ('$date', '$name_id', '2', '$type', '11', '$length', '$five', '$pay5', '$notes', '$duration')";
      $insertExec=mysqli_query($conn,$sqlInsert);  
}  
if (!mysqli_query($conn,$sql))
  {
  die('Error: Sub not Entered' . mysqli_error($conn));
  }
?>


<?php 
    $hour = isset($_POST['6']) ? $_POST['6'] : '6';
if( !empty($hour) ) {
  $sqlInsert="INSERT INTO sickdays (date, name_id, school, type, pay_id, length, tc_id, tc_pay, notes, duration)
      VALUES
      ('$date', '$name_id', '2', '$type', '11', '$length', '$six', '$pay6', '$notes', '$duration')";
      $insertExec=mysqli_query($conn,$sqlInsert);  
}  
if (!mysqli_query($conn,$sql))
  {
  die('Error: Sub not Entered' . mysqli_error($conn));
  }
?>


<?php 
    $hour = isset($_POST['7']) ? $_POST['7'] : '7';
if( !empty($hour) ) {
  $sqlInsert="INSERT INTO sickdays (date, name_id, school, type, pay_id, length, tc_id, tc_pay, notes, duration)
      VALUES
      ('$date', '$name_id', '2', '$type', '11', '$length', '$seven', '$pay7', '$notes', '$duration')";
      $insertExec=mysqli_query($conn,$sqlInsert);  
}  
if (!mysqli_query($conn,$sql))
  {
  die('Error: Sub not Entered' . mysqli_error($conn));
  }
?>


<?php 
    $hour = isset($_POST['8']) ? $_POST['8'] : '8';
if( !empty($hour) ) {
  $sqlInsert="INSERT INTO sickdays (date, name_id, school, type, pay_id, length, tc_id, tc_pay, notes, duration)
      VALUES
      ('$date', '$name_id', '2', '$type', '11', '$length', '$eight', '$pay8', '$notes', '$duration')";
      $insertExec=mysqli_query($conn,$sqlInsert);  
}  
if (!mysqli_query($conn,$sql))
  {
  die('Error: Sub not Entered' . mysqli_error($conn));
  }



?>






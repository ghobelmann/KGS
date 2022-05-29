<?php
$connect = new PDO("mysql:host=localhost; dbname=sub2021", "root", "4Chr!5t3|6");



$sql = "SELECT name_id FROM  scores WHERE date = '2021-07-02'";
  if(@!$result = mysqli_query($conn,$sql))
	echo 'PHP LINE: '.__LINE__.'. Epic fail trny info.'. mysqli_error();
else {
$cards = mysqli_fetch_assoc($result);

$card = $cards['card'];
      }


   for ($x = 1; $x <= $card; $x++) {
       $variable = $x; 




  $sql = "SELECT teetime FROM `scores` WHERE tid = '".$tid."' 
AND card = $variable  LIMIT 1";
if(@!$result = mysqli_query($conn,$sql))
	echo 'PHP LINE: '.__LINE__.'. Epic fail teetime.'. mysqli_error();
else {
$setup = mysqli_fetch_assoc($result);

$teetime = $setup['teetime'];
         }}
?>  
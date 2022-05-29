<!DOCTYPE html>
<html lang="en">



<?php
$trny = 0;
include_once("databaseconnect.php");
            
       // include_once("mobile_menu.php");   


$connect = mysqli_connect("localhost", "root", "R45edm!@", "ks_test");
  

   // echo "Percent Done";
    


        $query = "SELECT scores.hole1, scores.id, roster.*, team.abv FROM scores 
INNER JOIN roster on scores.pid = roster.pid 
 LEFT JOIN team on scores.tmid = team.tmid 
 WHERE tid = $trny AND card = $card";
$result = mysqli_query($connect, $query);  

   


?>



    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
    <meta name="description" content="">
    <meta name="author" content="">
     <head>
     
    <title>MobileScoreEntry</title>
                
    <!-- Custom styles for this template  --> 
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">                     
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
   <link rel="stylesheet" href="../../global_style/style/bootstrap.min.css">     

  <script src="../../global_style/js/bootstrap.min.js"></script>

   <script src="../../global_style/vendor/jquery.tabledit.min.js"></script>  
  
      <script src="../../global_style/vendor/jquery.tabledit.min.js"></script>  
    
  </head>
   
  <body>
  
  <?php
//INITIAL PAGE SETTINGS-----------
   $card = 0;
   $tid = 0;


    if(!empty($_GET['tid']))
{
$tid = $_GET['tid'];
}

  $output = "http://admin.kansasgolfscores.com/c_kansas/boys/playerQRcodes.php?tid=$tid";
echo "<h3><center>Players, scan the QR code, then click on your card to keep hole by hole scores.</h3>";

//echo $tid;
    if(!empty($_GET['card']))
{
$card = $_GET['card'];
}

        


$sql = "SELECT id, tournament from tournament WHERE id = $tid "; 
$result = mysqli_query($conn,$sql) or die(mysqli_error());
// keeps getting the next row until there are no more to get
while($row = mysqli_fetch_array( $result )) {
$trny = $row['id']; 
$name = $row['tournament'];
}

 //echo $trny;
?>



  <?php
//Submit Query to MySql Database
   
  echo "<center><img src='../../global_style/vendor/QR/php/qr_img.php?d=$output'>";
   echo "<br><h1>";
  echo $name;
   echo "<hr>";


$sql = "SELECT scores.card, scores.tid, scores.uid
FROM scores
INNER JOIN tournament ON scores.tid = tournament.id
WHERE '$tid' = tournament.id 
AND 
scores.tid = '$tid' 
GROUP by scores.card 
ORDER by scores.card ASC";


$result = mysqli_query($conn,$sql)
or die ('Error in Query Try Again 1:--' . mysqli_error());
//Print table to the web page

echo "<table width='100%' border='2'>";
// keeps getting the next row until there are no more to get
while($row = mysqli_fetch_array( $result )) {
	
	// Print out the contents of each row into a table
	
	echo "<tr> <center> <h1>";
	echo '<a href="mobileEntryFront.php?tid='.$row['tid'].'&card='.$row['card'].'">Card '.$row['card'].'</font></a>';
	echo "</tr>";
} 
echo "</table>";



 ?> 
 
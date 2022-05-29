                       <!DOCTYPE html>
<html lang="en">
<head>
  <title>KansasGolfScores.com</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="./vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> 
     <link rel="stylesheet" href="./vendor/bootstrap/css/w3.css">    
  
      
   
<h4 class="card-header bg-dark">  
<center>       
<a href="../indexg.php">  Home</a></h4>
</center>       
       
<button class="block" onclick="goBack()">Go Back</button>

<script>
function goBack() {
  window.history.back();
}
</script>

 </head>  <body class="bg-secondary">
    <!-- Page Content -->
    <div class="container">
 
      <section class="bg-secondary"  class="text-primary" id="about">
        <div class="container">
            <div class="row">


            <!-- Columns are always 50% wide, on mobile and desktop -->

  <div class="col-md-10">
          
 
 
 
 
 
 
 
 
 
 <?php
 //authentication for coaches to get to their pages, not for public pages.
session_start();
if(!isset($_SESSION['email']))
   // if there is no valid session
{
    header("Location:login-system/index.php");
}

//include_once("headerb.php");
include_once("dbconnectg.php");
//include_once("analyticstracking.php"); 
 ?> 


<?php
//INITIAL PAGE SETTINGS-----------



if(!empty($_GET['card']))
{
$card = $_GET['card'];
}
if(!empty($_GET['tid']))
{
$trny = $_GET['tid'];
}

        
    $sql = "SELECT id FROM users WHERE users.email = '$_SESSION[email]'"; 
			$result = mysqli_query($conn,$sql) or die(mysqli_error());
				while($row = mysqli_fetch_array( $result )) {
			$userid = $row['id']; }

$sql = "SELECT id from tournament WHERE id = '$trny' "; 
$result = mysqli_query($conn,$sql) or die(mysqli_error());
// keeps getting the next row until there are no more to get
while($row = mysqli_fetch_array( $result )) {
$trny = $row['id']; 
}

 //echo $trny;
?>


<?php
//Submit Query to MySql Database


$sql = "SELECT scores.card, scores.tid, scores.uid, max(tournament.id) as id 
FROM scores
INNER JOIN tournament ON scores.tid = tournament.id
WHERE '$trny' = tournament.id 
GROUP by scores.card 
ORDER by tournament.id DESC, scores.card ASC";


$result = mysqli_query($conn,$sql)
or die ('Error in Query Try Again:--' . mysqli_error());
//Print table to the web page
echo "<table class='table'  >";
echo '<tr><th colspan="30">Cards: Click on the card you want to edit.</th></tr>';
// keeps getting the next row until there are no more to get
while($row = mysqli_fetch_array( $result )) {
	// Print out the contents of each row into a table
	
	echo "<td><center>";
	echo '<a href="cardtotalg.php?tid='.$trny.'&card='.$row['card'].'">'.$row['card'].'</font></a>';
	echo "</td>"; 
	
} 
echo "</table>";



 ?>
 


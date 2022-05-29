<!DOCTYPE html>  
<head>
  <title>KansasGolfScores.com</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords" content="High School, Golf, Scores, Tournaments">
 <link rel="stylesheet" href="../../global_style/style/bootstrap.min.css">      
    <link rel="stylesheet" href="../../global_style/style/style_nopict.css"> 
  <script src="../../global_style/js/jquery-2.1.4.min.js"></script>
  <script src="../../global_style/js/bootstrap.min.js"></script>

</head><body>	










   <?php
   

 //authentication for coaches to get to their pages, not for public pages.
session_start();
session_regenerate_id();
if(!isset($_SESSION['email']))
   // if there is no valid session
{
    header("Location:login-system/index.php");
}

include_once("headera.php");
include_once("databaseconnect.php");
//include_once("analyticstracking.php"); 
 ?> 


<?php

//query the db for any scores not submitted to fill in to calculate accurate totals
$sql = "SELECT * FROM `scores` WHERE `id` =  '".$_POST['id']."' LIMIT 1";
$result = mysqli_query($conn,$sql);
$player_exists = mysqli_num_rows($result);
$scores = mysqli_fetch_assoc($result);
                       {
	echo '<CENTER><h2>! Golfer Updated Successfully!</h2>';
	echo "<br>"; 
	echo $_POST['id'];
	echo "<br>";
	echo $_POST['tmid'];
	echo "<br>";
	echo $_POST['pid'];
	echo "<br>";
	echo $_POST['points'];
	echo "<br>";
}

	
	
$i=0;


$sql="UPDATE `scores` SET 
".(( !$_POST['tmid'] ) ? "" : "`tmid` = '".$_POST[tmid]."', ")."
".(( !$_POST['pid'] ) ? "" : "`pid` = '".$_POST[pid]."', ")."
".(( !$_POST['points'] ) ? "" : "`points` = '".$_POST[points]."', ")."




WHERE `id` = '".$_POST['id']."'";

if (!mysqli_query($conn,$sql))
  {
  die('Error: ' . mysqli_error());
  }


`spam` = '1'
 


if(!empty($_GET['id']))
{
$id = $_GET['id'];
}

?>


<div align="center">
    <p class="style1"><strong>Update Golfer Information</strong></p>

       <a href="index.php">Home Page</a>
        <a href="tournaments.php">Tournament Page</a>
  </div>
  
  
  <?php  
  
  
  $query = "SELECT * FROM `scores` WHERE `id` LIKE '$id'  LIMIT 1";
if(@!$result = mysqli_query($conn,$query))
	echo 'PHP LINE: '.__LINE__.'. Epic fail 1.'. mysqli_error();
else {
$setup = mysqli_fetch_assoc($result);
//Displays Array information
 //print_r  ($setup);
 
 
 //Tournament ID
$tid = $setup['id'];
$player_1 = $setup['pid'];
$team = $setup['tmid'];
$points = $setup['points'];
         }  

?>
  
  <form action="<?php 
  
  
  if ($success){
    // we want to redirect via PHP so that users do not get that "resubmit message"
    header('location: '.$_SERVER['PHP_SELF'].'?status=sent');
} else {
    // we want the form to show up again? so, pass an error
    $status = 'error';
}


 ?>" method="post"> 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
  <br>
 <center>    <h1> <b>Update Golfer Information</b>    </h1>
    
    <p>ID: <input type="varchar" name="id" value="<?php echo $id;?>"/><br>
       
<table width="600" border="1">

	  Name:<input type="varchar" name="pid" size="auto" value='<?php echo $player_1; ?>'/>
    Team: <input type="varchar" name="tmid" size="35" value='<?php echo $team; ?>'/>
    Points: <input type="varchar" name="points" size="15" value='<?php echo $points; ?>'/>
  </table>

      <input name="submit" type="submit" value="Update Golfer" />
      </h1>   

  </form>

       <a href="WAC.php"> <H1>Edit More Points</h1></a>    </center>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>KansasGolfScores.com</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> 
     <link rel="stylesheet" href="../../vendor/bootstrap/css/w3.css">    
  
      
   
<h4 class="card-header bg-dark">  
<center>       
<a href="index.php">  Home</a></h4>
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
    

 <?php
 //authentication for coaches to get to their pages, not for public pages.
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
if(!isset($_SESSION['email']))
   // if there is no valid session
{
    header("Location:login-system/index.php");
}

//include_once("header.php");
include_once("databaseconnect.php");
 ?> 





<?php

//Get number of Name to Search For.
if(!empty($_GET['id']))
{
$id = $_GET['id'];
}
if($_POST['submit'] == "Update Tournament")

{
//query the db for any scores not submitted to fill in to calculate accurate totals
$sql = "SELECT * FROM `tournament` WHERE `id` =  '$id' LIMIT 1";
$result = mysqli_query($conn,$sql);
$player_exists = mysqli_num_rows($result);
$scores = mysqli_fetch_assoc($result);
$id = ($_POST[id]) ? $_POST[id] : $scores['id'];
$state = ($_POST[state]) ? $_POST[state] : $scores['state']; 
$tournament = ($_POST[tournament]) ? $_POST[tournament] : $scores['tournament']; 
$event = ($_POST[event]) ? $_POST[event] : $scores['event'];
$date = ($_POST[date]) ? $_POST[date] : $scores['date'];
$par = ($_POST[par]) ? $_POST[par] : $scores['par'];
$rounds = ($_POST[rounds]) ? $_POST[rounds] : $scores['rounds'];
$uid = ($_POST[uid]) ? $_POST[uid] : $scores['uid'];
$status = ($_POST[status]) ? $_POST[status] : $scores['status'];
$comments = ($_POST[comments]) ? $_POST[comments] : $scores['comments'];
$btyb = ($_POST[btyb]) ? $_POST[btyb] : $scores['btyb'];
$notes = ($_POST[notes]) ? $_POST[notes] : $scores['notes'];
$rating = ($_POST[rating]) ? $_POST[rating] : $scores['rating'];
$slope = ($_POST[slope]) ? $_POST[slope] : $scores['slope'];
$leaderboard = ($_POST[leaderboard]) ? $_POST[leaderboard] : $scores['leaderboard'];
if($teacher_exists != 1)
{
echo '<h2></h2>';
} else {
	echo '<CENTER><h2>! Golfer Updated Successfully!</h2>';
	echo "<br>"; 
	echo $_POST['id'];
	echo "<br>";
	echo $_POST['tournament'];
	echo "<br>";
	echo $_POST['date'];
}

	
	
$i=0;

$sql="UPDATE `tournament` SET 
".(( !$_POST['state'] ) ? "" : "`state` = '".$_POST[state]."', ")."
".(( !$_POST['tournament'] ) ? "" : "`tournament` = '".$_POST[tournament]."', ")."
".(( !$_POST['date'] ) ? "" : "`date` = '".$_POST[date]."', ")."
".(( !$_POST['event'] ) ? "" : "`event` = '".$_POST[event]."', ")."
".(( !$_POST['par'] ) ? "" : "`par` = '".$_POST[par]."', ")."
".(( !$_POST['rounds'] ) ? "" : "`rounds` = '".$_POST[rounds]."', ")."
".(( !$_POST['id'] ) ? "" : "`id` = '".$_POST[id]."', ")."
".(( !$_POST['uid'] ) ? "" : "`uid` = '".$_POST[uid]."', ")."
".(( !$_POST['status'] ) ? "" : "`status` = '".$_POST[status]."', ")."
".(( !$_POST['comments'] ) ? "" : "`comments` = '".$_POST[comments]."', ")."
".(( !$_POST['btyb'] ) ? "" : "`btyb` = '".$_POST[btyb]."', ")."
".(( !$_POST['notes'] ) ? "" : "`notes` = '".$_POST[notes]."', ")."
".(( !$_POST['rating'] ) ? "" : "`rating` = '".$_POST[rating]."', ")."
".(( !$_POST['slope'] ) ? "" : "`slope` = '".$_POST[slope]."', ")."
".(( !$_POST['leaderboard'] ) ? "" : "`leaderboard` = '".$_POST[leaderboard]."', ")."

`spam` = '1'


WHERE `id` = '$id'";

if (!mysqli_query($conn,$sql))
  {
  die('Error: ' . mysqli_error());
  }
  
  
  


}



?>


  <?php  
  
  
  $sql = "SELECT * FROM `tournament` WHERE `id` LIKE '$id'  LIMIT 1";
if(@!$result = mysqli_query($conn,$sql))
	echo 'PHP LINE: '.__LINE__.'. Epic fail 1.'. mysqli_error();
else {
$setup = mysqli_fetch_assoc($result);
//Displays Array information
// print_r  ($setup);
 
 
 //Tournament ID
$tid = $setup['id'];
$state = $setup['state'];
$tournament = $setup['tournament'];
$date = $setup['date'];
$event = $setup['event'];
$par = $setup['par'];
$rounds = $setup['rounds'];
$sttus = $setup['status'];
$comments = $setup['comments'];
$btyb = $setup['btyb'];
$uid = $setup['uid'];
$notes = $setup['notes'];
$rating = $setup['rating'];
$slope = $setup['slope'];
$leaderboard = $setup['leaderboard'];
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
 
        </div>
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
        

            <div class="col-lg-12 mb-4" class="bg-light">
     <?php // echo $tid; ?>     

  <br>
 <center>    <h1> <b>Update Tournament Information</b>    </h1>
 <h4 class="card-header bg-dark">  
<center>       
<a href="editpar.php?id=<?php echo $tid; ?>">Edit Par</a></h4>
</center> </h4>
 <h4 class="card-header bg-dark">   
<center>       
<a href="edityards.php?id=<?php echo $tid; ?>">Edit Yardage</a></h4>
</center> </h4>
  <center>
    
    <p><input type="hidden" name="id" value="<?php echo $id;?>"/><br>
       

       	  State:<input type="varchar" name="state" size="1" value='<?php echo $state; ?>'/>   
  
	  Tournament Name:<input type="varchar" name="tournament" size="30" value='<?php echo $tournament; ?>'/> <br> <br>
    Date: <input type="varchar" name="date" id="datepicker" size="15" value='<?php echo $date; ?>'/>
     Event: <input type="varchar" name="event" size="15" value='<?php echo $event; ?>'/> <br><br>
      
        <br>
     
      
      Coach ID # (To Give this Tournament to Another Coach): Check Coaches Directory for Coaches UID's <input type="varchar" name="uid" size="5" value='<?php echo $uid; ?>'/>    <br> <br>
            Type of Tournament (Tournament Code): <input type="int" name="status" size="5" value='<?php echo $sttus; ?>'/>  <br>
             
    <h4>Tournament Codes: <br> 1 = 18 hole Varsity   2 = 36 hole Varsity <br>
     3 = 54 hole Varsity, 4 = 72 hole Varsity, <br>5 = 18 hole JV, 6 = 9 hole JV.<br> 7. Do Not include in Rankings.<br><br></h4>         
                  Par: <input type="varchar" name="par" size="5" value='<?php echo $par; ?>'/>        
                  Rating: <input type="varchar" name="rating" size="5" value='<?php echo $rating; ?>'/> 
            Slope: <input type="varchar" name="slope" size = "5" value='<?php echo $slope; ?>'/> 
                   Number of Rounds: <input type="int" name="rounds" size="5" value='<?php echo $rounds; ?>'/>  <br><br>
             Number of Rows in Live Leaderboard: <input type="varchar" name="leaderboard" size = "5" value='<?php echo $leaderboard; ?>'/> 
      Comments: <input type="varchar" name="comments" size="35" value='<?php echo $comments; ?>'/>  <br>  <br>
            Brought to You By: <input type="varchar" name="btyb" size="35" value='<?php echo $btyb; ?>'/>
           Score Card Notes: <input type="varchar" name="notes" size = "25" value='<?php echo $notes; ?>'/> <br>  <br>
        
        <input name="submit" colspan="2" type="submit" value="Update Tournament" />    
       </div>      
  </form>
</body>
</html>

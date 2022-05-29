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
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.11/jquery-ui.min.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>

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
include_once("analyticstracking.php") 
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
$tournament = ($_POST[tournament]) ? $_POST[tournament] : $scores['tournament']; 
$event = ($_POST[event]) ? $_POST[event] : $scores['event'];
$date = ($_POST[date]) ? $_POST[date] : $scores['date'];
$par = ($_POST[par]) ? $_POST[par] : $scores['par'];
$uid = ($_POST[uid]) ? $_POST[uid] : $scores['uid'];
$number_holes = ($_POST[number_holes]) ? $_POST[number_holes] : $scores['number_holes'];
$comments = ($_POST[comments]) ? $_POST[comments] : $scores['comments'];
$btyb = ($_POST[btyb]) ? $_POST[btyb] : $scores['btyb'];
$comments = ($_POST[notes]) ? $_POST[notes] : $scores['notes'];
$rating = ($_POST[rating]) ? $_POST[rating] : $scores['rating'];
$slope = ($_POST[slope]) ? $_POST[slope] : $scores['slope'];
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
".(( !$_POST['tournament'] ) ? "" : "`tournament` = '".$_POST[tournament]."', ")."
".(( !$_POST['date'] ) ? "" : "`date` = '".$_POST[date]."', ")."
".(( !$_POST['event'] ) ? "" : "`event` = '".$_POST[event]."', ")."
".(( !$_POST['par'] ) ? "" : "`par` = '".$_POST[par]."', ")."
".(( !$_POST['number_holes'] ) ? "" : "`number_holes` = '".$_POST[number_holes]."', ")."
".(( !$_POST['comments'] ) ? "" : "`comments` = '".$_POST[comments]."', ")."
".(( !$_POST['btyb'] ) ? "" : "`btyb` = '".$_POST[btyb]."', ")."
".(( !$_POST['notes'] ) ? "" : "`notes` = '".$_POST[notes]."', ")."
".(( !$_POST['rating'] ) ? "" : "`rating` = '".$_POST[rating]."', ")."
".(( !$_POST['slope'] ) ? "" : "`slope` = '".$_POST[slope]."', ")."

`spam` = '1'


WHERE `id` = '$id'";

if (!mysqli_query($conn,$sql))
  {
  die('Error: ' . mysqli_error());
  }
  
  
  
  $sql="UPDATE `scores` SET 
".(( !$_POST['rating'] ) ? "" : "`rating` = '".$_POST[rating]."', ")."
".(( !$_POST['slope'] ) ? "" : "`slope` = '".$_POST[slope]."', ")."
".(( !$_POST['par'] ) ? "" : "`par` = '".$_POST[par]."', ")."

`spam` = '1'


WHERE `tid` = '$id'";

if (!mysqli_query($conn,$sql))
  {
  die('Error: ' . mysqli_error());
  }

}



?>


<div align="center">
    <p class="style1"><strong>Update Tournament Information</strong></p>

       <a href="index.php">Home Page</a>
        <a href="tournaments.php">Tournament Page</a>
  </div>
  
  
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
$tournament = $setup['tournament'];
$date = $setup['date'];
$event = $setup['event'];
$par = $setup['par'];
$number_holes = $setup['number_holes'];
$comments = $setup['comments'];
$btyb = $setup['btyb'];
$notes = $setup['notes'];
$rating = $setup['rating'];
$slope = $setup['slope'];
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
 <center>    <h1> <b>Update Tournament Information</b>    </h1>
    
    <p><input type="hidden" name="id" value="<?php echo $id;?>"/><br>
       
<table width="875" border="1">
  <tr><td>

	  Tournament:<input type="varchar" name="tournament" size="50" value='<?php echo $tournament; ?>'/>   </td><td> </tr><tr><td>
    Date: <input type="varchar" name="date" id="datepicker" size="35" value='<?php echo $date; ?>'/> <br></td></tr><tr><td>
     Event: <input type="varchar" name="event" size="35" value='<?php echo $event; ?>'/> <br></td></tr><tr><td>
      Par: <input type="varchar" name="par" size="5" value='<?php echo $par; ?>'/> <br></td></tr><tr><td>
       Number Of Holes: <input type="varchar" name="number_holes" size="5" value='<?php echo $number_holes; ?>'/> <br></td></tr><tr><td>
                  Rating: <input type="varchar" name="rating" size="5" value='<?php echo $rating; ?>'/> <br></td></tr><tr><td>
            Slope: <input type="varchar" name="slope" size = "5" value='<?php echo $slope; ?>'/> <br></td></tr><tr><td>
      Comments: <input type="varchar" name="comments" size="35" value='<?php echo $comments; ?>'/> <br></td></tr><tr><td>
            Brought to You By: <input type="varchar" name="btyb" size="35" value='<?php echo $btyb; ?>'/> <br></td></tr><tr><td>
            Card Notes: <input type="varchar" name="notes" size = "100" value='<?php echo $notes; ?>'/> <br></td></tr><tr><td>
      
             

</div></th>
</div>
 <center>   <input name="submit" colspan="2" type="submit" value="Update Tournament" />
    </center>
	 

  </form>


</body>
</html>

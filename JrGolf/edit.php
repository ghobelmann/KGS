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
 
      <section class="bg-secondary"  class="text-primary" id="about">
        <div class="container">
            <div class="row">


            <!-- Columns are always 50% wide, on mobile and desktop -->

  <div class="col-md-12">
          
 
 <body>	
   
   <?php
 //authentication for coaches to get to their pages, not for public pages.
session_start();
session_regenerate_id();
if(!isset($_SESSION['email']))
   // if there is no valid session
{
    header("Location:login-system/index.php");
}

//include_once("headera.php");
include_once("databaseconnect.php");
//include_once("headera.php");
//include_once("analyticstracking.php");

        $sql = "SELECT id FROM users WHERE users.email = '$_SESSION[email]'"; 
			$result = mysqli_query($conn,$sql) or die(mysqli_error());
				while($row = mysqli_fetch_array( $result )) {
			$userid = $row['id']; }
     //  echo $userid;

 $output = '';
                  //echo $userid;  
 ?> 

<?php


$sql = "SELECT DISTINCT max(tid) as tid from scores WHERE uid = $userid";
  $result = mysqli_query($conn,$sql) or die(mysqli_error());
  while($row = mysqli_fetch_array( $result )) {
   $tidno = $row['tid'];  }
  // echo $useridno;





if($_POST['submit'] == "Update Golfer")

{
//query the db for any scores not submitted to fill in to calculate accurate totals
$sql = "SELECT * FROM `scores` WHERE `uid` =  '$useridno' ORDER by tid desc LIMIT 1";
$result = mysqli_query($conn,$sql);
$player_exists = mysqli_num_rows($result);
$scores = mysqli_fetch_assoc($result);
$tournamentid = $scores['tid'];
if($teacher_exists != 1)
{
echo '<h2></h2>';
} else {
	echo '<CENTER><h2>! Golfer Updated Successfully!</h2>';
	echo "<br>"; 
	echo $_POST['id'];
	echo "<br>";
	echo $_POST['tmid'];
	echo "<br>";
	echo $_POST['pid'];
	echo "<br>";
	echo $_POST['card'];
	echo "<br>";
	echo $_POST['teetime'];
	echo "<br>";
  	echo $_POST['id'];
  	echo "<br>";
}

	
	
$i=0;

$sql="UPDATE `scores` SET 
".(( !$_POST['tmid'] ) ? "" : "`tmid` = '".$_POST[tmid]."', ")."
".(( !$_POST['pid'] ) ? "" : "`pid` = '".$_POST[pid]."', ")."
".(( !$_POST['division'] ) ? "" : "`division` = '".$_POST[division]."', ")."
".(( !$_POST['teetime'] ) ? "" : "`teetime` = '".$_POST[teetime]."', ")."
".(( !$_POST['gender'] ) ? "" : "`gender` = '".$_POST[gender]."', ")."

`spam` = '1'


WHERE `pid` = '".$_POST['pid']."'";

if (!mysqli_query($conn,$sql))
  {
  die('Error: Update Scores ' . mysqli_error());
  }
  


}


if(!empty($_GET['pid']))
{
$pid = $_GET['pid'];
}
//echo $id;

?>   


  </div>
           
  
  <?php  
  
  
  $sql = "SELECT scores.id, scores.pid, scores.tmid, scores.card, scores.gender,
scores.front, scores.back, scores.total, scores.division, scores.teetime,
roster.pid, roster.player_1  FROM scores 
INNER JOIN roster ON scores.pid = roster.pid 
INNER JOIN team ON scores.tmid = team.tmid 
WHERE scores.pid LIKE '$pid'  LIMIT 1";
if(@!$result = mysqli_query($conn,$sql))
	echo 'PHP LINE: '.__LINE__.'. Epic fail 1.'. mysqli_error();
else {
$setup = mysqli_fetch_assoc($result);
//Displays Array information
 //print_r  ($setup);
 
 
 //Tournament ID
$tid = $setup['id'];
$pid = $setup['pid'];
$player_1 = $setup['player_1'];
$tmid = $setup['tmid'];
$card = $setup['card'];
$teetime = $setup['teetime'];
$division = $setup['division'];
$gender = $setup['gender'];

//echo $school;
         }
         
         
         
           $sql = "SELECT scores.tid FROM scores 
WHERE `tid` LIKE '$tid'  LIMIT 1";
if(@!$result = mysqli_query($conn,$sql))
	echo 'PHP LINE: '.__LINE__.'. Epic fail 1.'. mysqli_error();
else {
$setup = mysqli_fetch_assoc($result);
//Displays Array information
 //print_r  ($setup);

         }

?>
  
  <form action="<?php 
  
  
  if ($success){
    // we want to redirect via PHP so that users do not get that "resubmit message"
    header('location: index.php');
} 








 ?>" method="post"> 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

 <center>    
    
  
            <h2> <?php echo $player_1; ?></h2>
<table class="table">
  <tr><td><center><b>

	  Name:<br><input type="varchar" name="player_1" value='<?php echo $player_1; ?>' readonly /><br> 

            

             

    
           Division:<br> <input type="varchar" name="division"  value='<?php echo $division; ?>'/> </td>

 <td> Tee Time or Hole Number <br> <input type="varchar" name="teetime"  value='<?php echo $teetime; ?>'/> </td></tr>

<tr><td>Gender<br> <input type="varchar" name="gender"  value='<?php echo $gender; ?>'/> </td>
  
  <td>  <p> <input type="hidden" name="pid" value="<?php echo $pid;?>"/><br></td></tr>
  <tr><td>
</div>

      <input name="submit" type="submit" value="Update Golfer" />
      </h1>    </center>
	 
	  

  </form>
    </table>
      
</div>

<h3> To edit your entry, Click in the Division or Gender Box, and change the entry. <br>
Entries must be typed exactly <br>
Gender - Boys or Girls (no space after the s) or for <br>
Divisions: <br>1 = 5-7 4 Hole <br>
 2 = 5-7 9 Hole <br>3 = 8-9 <br>4 = 10-11 <br>5 = 12-13 <br>6 = 14-15 <br>7 = 16-18.
</h3>




  </div>
</center>
</body>
</html>
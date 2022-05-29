<META HTTP-EQUIV="Refresh" CONTENT="1;URL=admin.php">




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
include_once("analyticstracking.php"); 
 ?> 


<?php
if($_SESSION['email'] == "hobelmann@usd237.com")

{
//query the db for any scores not submitted to fill in to calculate accurate totals
$sql = "SELECT * FROM `scores` WHERE `pid` =  '".$_POST['pid']."' LIMIT 1";
$result = mysqli_query($conn,$sql);
$player_exists = mysqli_num_rows($result);
$scores = mysqli_fetch_assoc($result);
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
	echo $_POST['points'];
	echo "<br>";
}

	
	
$i=0;


$sql="UPDATE `scores` SET 
".(( !$_POST['tmid'] ) ? "" : "`tmid` = '".$_POST[tmid]."', ")."
".(( !$_POST['pid'] ) ? "" : "`pid` = '".$_POST[pid]."', ")."
".(( !$_POST['points'] ) ? "" : "`points` = '".$_POST[points]."', ")."


`spam` = '1'


WHERE `id` = '".$_POST['id']."'";

if (!mysqli_query($conn,$sql))
  {
  die('Error: ' . mysqli_error());
  }
  

}


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
  
  
  $query = "SELECT * FROM `scores` 
  INNER JOIN roster ON scores.pid = roster.pid
  LEFT JOIN team ON scores.tmid = team.tmid 
  
  WHERE `id` LIKE '$id'  LIMIT 1";
if(@!$result = mysqli_query($conn,$query))
	echo 'PHP LINE: '.__LINE__.'. Epic fail 1.'. mysqli_error();
else {
$setup = mysqli_fetch_assoc($result);
//Displays Array information
 //print_r  ($setup);
 
 
 //Tournament ID
$tid = $setup['id'];
$player_1 = $setup['player_1'];
$team = $setup['school'];
$pid = $setup['pid'];
$tmid = $setup['tmid'];
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

	  Name:<input type="varchar" name="player_1" size="15" value='<?php echo $player_1; ?>'/>
    	  NameID:<input type="varchar" name="pid" size="3" value='<?php echo $pid; ?>'/>
    Team: <input type="varchar" name="team" size="35" value='<?php echo $team; ?>'/>
    TeamID: <input type="varchar" name="tmid" size="3" value='<?php echo $tmid; ?>'/>
    Points: <input type="dec" name="points" size="15" value='<?php echo $points; ?>'/>
  </table>

      <input name="submit" type="submit" value="Update Golfer" />
      </h1>   

  </form>

       <a href="GWAL_League.php"> <H1>Edit More Points</h1></a>    </center>
</body>
</html>

<META HTTP-EQUIV="Refresh" CONTENT="1;URL=admin.php">
<?php
//INITIAL PAGE SETTINGS-----------
$page_title = "Enter Scores";
$permission = "superadmin,admin";
define("IN_GOLF_STATS", TRUE);
include_once("common.php");
include_once("headera.php");
//INITIAL PAGE SETTINGS-----------

if(!$_SESSION['username'] | !isset($_SESSION['password']) | !$_SESSION['permissions'])
{
$logged_in = FALSE;
} else {
$logged_in = TRUE;
}

$user = $_SESSION['username'];
?>



<?php
if($_SESSION['username'] == "mwatts")

{
//query the db for any scores not submitted to fill in to calculate accurate totals
$sql = "SELECT * FROM `scores` WHERE `id` =  '".$_POST['id']."' LIMIT 1";
$result = mysql_query($sql);
$player_exists = mysql_num_rows($result);
$scores = mysql_fetch_assoc($result);
if($teacher_exists != 1)
{
echo '<h2></h2>';
} else {
	echo '<CENTER><h2>! Golfer Updated Successfully!</h2>';
	echo "<br>"; 
	echo $_POST['id'];
	echo "<br>";
	echo $_POST['team'];
	echo "<br>";
	echo $_POST['player_1'];
	echo "<br>";
	echo $_POST['points'];
	echo "<br>";
}

	
	
$i=0;


$sql="UPDATE `scores` SET 
".(( !$_POST['team'] ) ? "" : "`team` = '".$_POST[team]."', ")."
".(( !$_POST['player_1'] ) ? "" : "`player_1` = '".$_POST[player_1]."', ")."
".(( !$_POST['points'] ) ? "" : "`points` = '".$_POST[points]."', ")."


`spam` = '1'


WHERE `id` = '".$_POST['id']."'";

if (!mysql_query($sql))
  {
  die('Error: ' . mysql_error());
  }
  
  $sql1="UPDATE `virtual` SET 
".(( !$_POST['team'] ) ? "" : "`team` = '".$_POST[team]."', ")."
".(( !$_POST['player_1'] ) ? "" : "`player_1` = '".$_POST[player_1]."', ")."

`spam` = '1'


WHERE `player_1` = '".$_POST['player_1']."'";

if (!mysql_query($sql1))
  {
  die('Error: ' . mysql_error());
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
  
  
  $query = "SELECT * FROM `scores` WHERE `id` LIKE '$id'  LIMIT 1";
if(@!$result = mysql_query($query))
	echo 'PHP LINE: '.__LINE__.'. Epic fail 1.'. mysql_error();
else {
$setup = mysql_fetch_assoc($result);
//Displays Array information
 //print_r  ($setup);
 
 
 //Tournament ID
$tid = $setup['id'];
$player_1 = $setup['player_1'];
$team = $setup['team'];
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

	  Name:<input type="varchar" name="player_1" size="auto" value='<?php echo $player_1; ?>'/>
    Team: <input type="varchar" name="team" size="35" value='<?php echo $team; ?>'/>
    Points: <input type="varchar" name="points" size="15" value='<?php echo $points; ?>'/>
  </table>

      <input name="submit" type="submit" value="Update Golfer" />
      </h1>   

  </form>

       <a href="WAC.php"> <H1>Edit More Points</h1></a>    </center>
</body>
</html>

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


if(!empty($_GET['id']))
{
$id = $_GET['id'];
}

?>



<?php
if($_POST['submit'] == "Update Tournament")

{
//query the db for any scores not submitted to fill in to calculate accurate totals
$sql = "SELECT * FROM `tournament` WHERE `id` =  '".$_POST['id']."' LIMIT 1";
$result = mysql_query($sql);
$player_exists = mysql_num_rows($result);
$scores = mysql_fetch_assoc($result);
if($teacher_exists != 1)
{
echo '<h2>Update Successful</h2>';
}

	
	
$i=0;

$sql="UPDATE `tournament` SET 
".(( !$_POST['tournament'] ) ? "" : "`tournament` = '".$_POST[tournament]."', ")."
".(( !$_POST['hole1'] ) ? "" : "`hole1` = '".$_POST[hole1]."', ")."
".(( !$_POST['hole2'] ) ? "" : "`hole2` = '".$_POST[hole2]."', ")."
".(( !$_POST['hole3'] ) ? "" : "`hole3` = '".$_POST[hole3]."', ")."
".(( !$_POST['hole4'] ) ? "" : "`hole4` = '".$_POST[hole4]."', ")."
".(( !$_POST['hole5'] ) ? "" : "`hole5` = '".$_POST[hole5]."', ")."
".(( !$_POST['hole6'] ) ? "" : "`hole6` = '".$_POST[hole6]."', ")."
".(( !$_POST['hole7'] ) ? "" : "`hole7` = '".$_POST[hole7]."', ")."
".(( !$_POST['hole8'] ) ? "" : "`hole8` = '".$_POST[hole8]."', ")."
".(( !$_POST['hole9'] ) ? "" : "`hole9` = '".$_POST[hole9]."', ")."
".(( !$_POST['hole10'] ) ? "" : "`hole10` = '".$_POST[hole10]."', ")."
".(( !$_POST['hole11'] ) ? "" : "`hole11` = '".$_POST[hole11]."', ")."
".(( !$_POST['hole12'] ) ? "" : "`hole12` = '".$_POST[hole12]."', ")."
".(( !$_POST['hole13'] ) ? "" : "`hole13` = '".$_POST[hole13]."', ")."
".(( !$_POST['hole14'] ) ? "" : "`hole14` = '".$_POST[hole14]."', ")."
".(( !$_POST['hole15'] ) ? "" : "`hole15` = '".$_POST[hole15]."', ")."
".(( !$_POST['hole16'] ) ? "" : "`hole16` = '".$_POST[hole16]."', ")."
".(( !$_POST['hole17'] ) ? "" : "`hole17` = '".$_POST[hole17]."', ")."
".(( !$_POST['hole18'] ) ? "" : "`hole18` = '".$_POST[hole18]."', ")."

`spam` = '1'


WHERE `id` = '".$_POST['id']."'";

if (!mysql_query($sql))
  {
  die('Error: ' . mysql_error());
  }
  


}



?>


<div align="center">
    <p class="style1"><strong>Update Tournament Information</strong></p>

       <a href="index.php">Home Page</a>
        <a href="tournaments.php">Tournament Page</a>
  </div>
  
  
  <?php  
  
  
  $query = "SELECT * FROM `tournament` WHERE `id` LIKE '$id'  LIMIT 1";
if(@!$result = mysql_query($query))
	echo 'PHP LINE: '.__LINE__.'. Epic fail 1.'. mysql_error();
else {
$setup = mysql_fetch_assoc($result);
//Displays Array information
 //print_r  ($setup);
 
 
 //Tournament ID
$tid = $setup['id'];
$tournament = $setup['tournament'];
$h1 =  $setup['hole1'];
$h2 =  $setup['hole2'];
$h3 =  $setup['hole3'];
$h4 =  $setup['hole4'];
$h5 =  $setup['hole5'];
$h6 =  $setup['hole6'];
$h7 =  $setup['hole7'];
$h8 =  $setup['hole8'];
$h9 =  $setup['hole9'];
$h10 =  $setup['hole10'];
$h11 =  $setup['hole11'];
$h12 =  $setup['hole12'];
$h13 =  $setup['hole13'];
$h14 =  $setup['hole14'];
$h15 =  $setup['hole15'];
$h16 =  $setup['hole16'];
$h17 =  $setup['hole17'];
$h18 =  $setup['hole18'];

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
       
<table width="875" border="1">
  <tr><td>
         <table width="445" border="1">    
	  Tournament:<input type="varchar" name="tournament" size="50" value='<?php echo $tournament; ?>'/>  
          
  <h2><b>Handicap: Enter Each Holes Handicap<b></h2>
  <tr>
    <th width="43"><div align="center">1 <input type="int" name="hole1" size="6" value='<?php echo $h1; ?>'/></div></td>
    <td width="43"><div align="center">2 <input type="int" name="hole2" size="6" value='<?php echo $h2; ?>'/></div></td>
    <td width="43"><div align="center">3 <input type="int" name="hole3" size="6" value='<?php echo $h3; ?>'/></div></td>
    <td width="43"><div align="center">4 <input type="int" name="hole4" size="6" value='<?php echo $h4; ?>'/></div></td>
    <td width="43"><div align="center">5 <input type="int" name="hole5" size="6" value='<?php echo $h5; ?>'/></div></td>
    <td width="43"><div align="center">6 <input type="int" name="hole6" size="6" value='<?php echo $h6; ?>'/></div></td>
    <td width="43"><div align="center">7 <input type="int" name="hole7" size="6" value='<?php echo $h7; ?>'/></div></td>
    <td width="43"><div align="center">8 <input type="int" name="hole8" size="6" value='<?php echo $h8; ?>'/></div></td>
    <td width="43"><div align="center">9 <input type="int" name="hole9" size="6" value='<?php echo $h9; ?>'/></div></td>
    </tr>
</table>
  	 
  <br>
      <table width="445" border="1">
        <tr>
          <th width="43"><div align="center">10 <input type="int" name="hole10" size="6" value='<?php echo $h10; ?>'/></div></td>
          <td width="43"><div align="center">11 <input type="int" name="hole11" size="6" value='<?php echo $h11; ?>'/></div></td>
          <td width="43"><div align="center">12 <input type="int" name="hole12" size="6" value='<?php echo $h12; ?>'/></div></td>
          <td width="43"><div align="center">13 <input type="int" name="hole13" size="6" value='<?php echo $h13; ?>'/></div></td>
          <td width="43"><div align="center">14 <input type="int" name="hole14" size="6" value='<?php echo $h14; ?>'/></div></td>
          <td width="43"><div align="center">15 <input type="int" name="hole15" size="6" value='<?php echo $h15; ?>'/></div></td>
          <td width="43"><div align="center">16 <input type="int" name="hole16" size="6" value='<?php echo $h16; ?>'/></div></td>
          <td width="43"><div align="center">17 <input type="int" name="hole17" size="6" value='<?php echo $h17; ?>'/></div></td>
          <td width="43"><div align="center">18 <input type="int" name="hole18" size="6" value='<?php echo $h18; ?>'/></div></td>
        </tr>
    </table>
             

</div></th>
</div>

      <input name="submit" type="submit" value="Update Tournament" />
      </h1>    </center>
	 

  </form>


</body>
</html>

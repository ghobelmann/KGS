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

  <div class="col-md-10">
          
 
 
 
 
   <?php
 //authentication for coaches to get to their pages, not for public pages.
session_start();
session_regenerate_id();
if(!isset($_SESSION['email']))
   // if there is no valid session
{
    header("Location:login-system/index.php");
}

include_once("header.php");
include_once("databaseconnect.php");
//include_once("analyticstracking.php");  
 ?> 

<?php

   if(!empty($_GET['id']))
{
$id = $_GET['id'];
}

if($_POST['submit'] == "Update Par")

{
//query the db for any scores not submitted to fill in to calculate accurate totals
$sql = "SELECT * FROM `tournament` WHERE `id` =  '".$_POST['id']."' LIMIT 1";
$result = mysqli_query($conn,$sql);
$player_exists = mysqli_num_rows($result);
$scores = mysqli_fetch_assoc($result);
if($teacher_exists != 1)
{
echo '<h2>Update Successful</h2>';
} 

	
	
$i=0;

$sql="UPDATE `tournament` SET 
".(( !$_POST['hole1'] ) ? "" : "`h1` = '".$_POST[hole1]."', ")."
".(( !$_POST['hole2'] ) ? "" : "`h2` = '".$_POST[hole2]."', ")."
".(( !$_POST['hole3'] ) ? "" : "`h3` = '".$_POST[hole3]."', ")."
".(( !$_POST['hole4'] ) ? "" : "`h4` = '".$_POST[hole4]."', ")."
".(( !$_POST['hole5'] ) ? "" : "`h5` = '".$_POST[hole5]."', ")."
".(( !$_POST['hole6'] ) ? "" : "`h6` = '".$_POST[hole6]."', ")."
".(( !$_POST['hole7'] ) ? "" : "`h7` = '".$_POST[hole7]."', ")."
".(( !$_POST['hole8'] ) ? "" : "`h8` = '".$_POST[hole8]."', ")."
".(( !$_POST['hole9'] ) ? "" : "`h9` = '".$_POST[hole9]."', ")."
".(( !$_POST['hole10'] ) ? "" : "`h10` = '".$_POST[hole10]."', ")."
".(( !$_POST['hole11'] ) ? "" : "`h11` = '".$_POST[hole11]."', ")."
".(( !$_POST['hole12'] ) ? "" : "`h12` = '".$_POST[hole12]."', ")."
".(( !$_POST['hole13'] ) ? "" : "`h13` = '".$_POST[hole13]."', ")."
".(( !$_POST['hole14'] ) ? "" : "`h14` = '".$_POST[hole14]."', ")."
".(( !$_POST['hole15'] ) ? "" : "`h15` = '".$_POST[hole15]."', ")."
".(( !$_POST['hole16'] ) ? "" : "`h16` = '".$_POST[hole16]."', ")."
".(( !$_POST['hole17'] ) ? "" : "`h17` = '".$_POST[hole17]."', ")."
".(( !$_POST['hole18'] ) ? "" : "`h18` = '".$_POST[hole18]."', ")."

`spam` = '1'


WHERE `id` = '".$_POST['id']."'";

if (!mysqli_query($conn,$sql))
  {
  die('Error: ' . mysqli_error());
  }
  


}



?>


  
  <?php  
  
  
  $query = "SELECT * FROM `tournament` WHERE `id` LIKE '$id'  LIMIT 1";
if(@!$result = mysqli_query($conn,$query))
	echo 'PHP LINE: '.__LINE__.'. Epic fail 1.'. mysqli_error();
else {
$setup = mysqli_fetch_assoc($result);
//Displays Array information
 //print_r  ($setup);
 
 
 //Tournament ID
$tid = $setup['id'];
$tournament = $setup['tournament'];
$h1 =  $setup['h1'];
$h2 =  $setup['h2'];
$h3 =  $setup['h3'];
$h4 =  $setup['h4'];
$h5 =  $setup['h5'];
$h6 =  $setup['h6'];
$h7 =  $setup['h7'];
$h8 =  $setup['h8'];
$h9 =  $setup['h9'];
$h10 =  $setup['h10'];
$h11 =  $setup['h11'];
$h12 =  $setup['h12'];
$h13 =  $setup['h13'];
$h14 =  $setup['h14'];
$h15 =  $setup['h15'];
$h16 =  $setup['h16'];
$h17 =  $setup['h17'];
$h18 =  $setup['h18'];

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
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 <br><div class="col-md-8">
   <h1> <b>Update Tournament Information</b>    </h1>
    
    <p>ID: <input type="varchar" name="id" value="<?php echo $id;?>"/><br>
       
    <table class="table">   
  <tr><td>
  <table class="table">    
          
  <h2><b>Par: Enter Each Holes Par<b></h2>
  <tr>
   <th width="43"><div align="center">Hole 1<input type="int" name="hole1" size="6" value='<?php echo $h1; ?>'/></div></td>
    <td width="43"><div align="center">Hole 2 <input type="int" name="hole2" size="6" value='<?php echo $h2; ?>'/></div></td>
    <td width="43"><div align="center">Hole 3 <input type="int" name="hole3" size="6" value='<?php echo $h3; ?>'/></div></td>
    <td width="43"><div align="center">Hole 4 <input type="int" name="hole4" size="6" value='<?php echo $h4; ?>'/></div></td>
    <td width="43"><div align="center">Hole 5 <input type="int" name="hole5" size="6" value='<?php echo $h5; ?>'/></div></td>
    <td width="43"><div align="center">Hole 6 <input type="int" name="hole6" size="6" value='<?php echo $h6; ?>'/></div></td>
    <td width="43"><div align="center">Hole 7 <input type="int" name="hole7" size="6" value='<?php echo $h7; ?>'/></div></td>
    <td width="43"><div align="center">Hole 8 <input type="int" name="hole8" size="6" value='<?php echo $h8; ?>'/></div></td>
    <td width="43"><div align="center">Hole 9 <input type="int" name="hole9" size="6" value='<?php echo $h9; ?>'/></div></td>
    </tr>
</table>
  	 
  <br>
  <table class="table">   
        <tr>
          <th width="43"><div align="center">Hole 10 <input type="int" name="hole10" size="6" value='<?php echo $h10; ?>'/></div></td>
          <td width="43"><div align="center">Hole 11 <input type="int" name="hole11" size="6" value='<?php echo $h11; ?>'/></div></td>
          <td width="43"><div align="center">Hole 12 <input type="int" name="hole12" size="6" value='<?php echo $h12; ?>'/></div></td>
          <td width="43"><div align="center">Hole 13 <input type="int" name="hole13" size="6" value='<?php echo $h13; ?>'/></div></td>
          <td width="43"><div align="center">Hole 14 <input type="int" name="hole14" size="6" value='<?php echo $h14; ?>'/></div></td>
          <td width="43"><div align="center">Hole 15 <input type="int" name="hole15" size="6" value='<?php echo $h15; ?>'/></div></td>
          <td width="43"><div align="center">Hole 16 <input type="int" name="hole16" size="6" value='<?php echo $h16; ?>'/></div></td>
          <td width="43"><div align="center">Hole 17 <input type="int" name="hole17" size="6" value='<?php echo $h17; ?>'/></div></td>
          <td width="43"><div align="center">Hole 18 <input type="int" name="hole18" size="6" value='<?php echo $h18; ?>'/></div></td>
        </tr>
    </table>
             

</div></th>
</div>

      <input name="submit" type="submit" value="Update Par" />
      </h1>    </center>
	 

  </form>
  </div>


</body>
</html>

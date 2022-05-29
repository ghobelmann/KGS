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

include_once("databaseconnect.php");
//include_once("analyticstracking.php");  
 ?> 

<?php

   if(!empty($_GET['id']))
{
$id = $_GET['id'];
}

if($_POST['submit'] == "Update Yards")

{
//query the db for any scores not submitted to fill in to calculate accurate totals
$sql = "SELECT * FROM `tournament` WHERE id = $id LIMIT 1";
$result = mysqli_query($conn,$sql);
$player_exists = mysqli_num_rows($result);
$scores = mysqli_fetch_assoc($result);
if($teacher_exists != 1)
{
echo '<h2>Update Successful</h2>';
} 

	
	
$i=0;

$sql="UPDATE `tournament` SET 
".(( !$_POST['hole1'] ) ? "" : "`y1` = '".$_POST[hole1]."', ")."
".(( !$_POST['hole2'] ) ? "" : "`y2` = '".$_POST[hole2]."', ")."
".(( !$_POST['hole3'] ) ? "" : "`y3` = '".$_POST[hole3]."', ")."
".(( !$_POST['hole4'] ) ? "" : "`y4` = '".$_POST[hole4]."', ")."
".(( !$_POST['hole5'] ) ? "" : "`y5` = '".$_POST[hole5]."', ")."
".(( !$_POST['hole6'] ) ? "" : "`y6` = '".$_POST[hole6]."', ")."
".(( !$_POST['hole7'] ) ? "" : "`y7` = '".$_POST[hole7]."', ")."
".(( !$_POST['hole8'] ) ? "" : "`y8` = '".$_POST[hole8]."', ")."
".(( !$_POST['hole9'] ) ? "" : "`y9` = '".$_POST[hole9]."', ")."
".(( !$_POST['hole10'] ) ? "" : "`y10` = '".$_POST[hole10]."', ")."
".(( !$_POST['hole11'] ) ? "" : "`y11` = '".$_POST[hole11]."', ")."
".(( !$_POST['hole12'] ) ? "" : "`y12` = '".$_POST[hole12]."', ")."
".(( !$_POST['hole13'] ) ? "" : "`y13` = '".$_POST[hole13]."', ")."
".(( !$_POST['hole14'] ) ? "" : "`y14` = '".$_POST[hole14]."', ")."
".(( !$_POST['hole15'] ) ? "" : "`y15` = '".$_POST[hole15]."', ")."
".(( !$_POST['hole16'] ) ? "" : "`y16` = '".$_POST[hole16]."', ")."
".(( !$_POST['hole17'] ) ? "" : "`y17` = '".$_POST[hole17]."', ")."
".(( !$_POST['hole18'] ) ? "" : "`y18` = '".$_POST[hole18]."', ")."

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
$tid = $setup['course'];
$tournament = $setup['tournament'];
$h1 =  $setup['y1'];
$h2 =  $setup['y2'];
$h3 =  $setup['y3'];
$h4 =  $setup['y4'];
$h5 =  $setup['y5'];
$h6 =  $setup['y6'];
$h7 =  $setup['y7'];
$h8 =  $setup['y8'];
$h9 =  $setup['y9'];
$h10 =  $setup['y10'];
$h11 =  $setup['y11'];
$h12 =  $setup['y12'];
$h13 =  $setup['y13'];
$h14 =  $setup['y14'];
$h15 =  $setup['y15'];
$h16 =  $setup['y16'];
$h17 =  $setup['y17'];
$h18 =  $setup['y18'];

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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
  <br><div  class="col-md-12">
 <center>    <h1> <b>Update Tournament        Information</b>    </h1>
    
    <p>ID: <input type="varchar" name="id" value="<?php echo $id;?>"/><br>
       
    <table class="table">   
  <tr><td>
         <table class="table">    
          
  <h2><b>Yardage: Enter Each Holes Yardage<b></h2>
  <tr>
    <th width="43"><div align="center">Hole 1<br> <input type="int" name="hole1" size="6" value='<?php echo $h1; ?>'/></div></td>
    <td width="43"><div align="center">Hole 2<br> <input type="int" name="hole2" size="6" value='<?php echo $h2; ?>'/></div></td>
    <td width="43"><div align="center">Hole 3<br> <input type="int" name="hole3" size="6" value='<?php echo $h3; ?>'/></div></td>
    <td width="43"><div align="center">Hole 4<br> <input type="int" name="hole4" size="6" value='<?php echo $h4; ?>'/></div></td>
    <td width="43"><div align="center">Hole 5<br> <input type="int" name="hole5" size="6" value='<?php echo $h5; ?>'/></div></td>
    <td width="43"><div align="center">Hole 6<br> <input type="int" name="hole6" size="6" value='<?php echo $h6; ?>'/></div></td>
    <td width="43"><div align="center">Hole 7<br> <input type="int" name="hole7" size="6" value='<?php echo $h7; ?>'/></div></td>
    <td width="43"><div align="center">Hole 8<br> <input type="int" name="hole8" size="6" value='<?php echo $h8; ?>'/></div></td>
    <td width="43"><div align="center">Hole 9<br> <input type="int" name="hole9" size="6" value='<?php echo $h9; ?>'/></div></td>
   </th> </tr>
</table>
  	 
  <br>
  <table class="table">   
        <tr>
          <th width="43"><div align="center">Hole 10<br> <input type="int" name="hole10" size="6" value='<?php echo $h10; ?>'/></div></td>
          <td width="43"><div align="center">Hole 11<br> <input type="int" name="hole11" size="6" value='<?php echo $h11; ?>'/></div></td>
          <td width="43"><div align="center">Hole 12<br> <input type="int" name="hole12" size="6" value='<?php echo $h12; ?>'/></div></td>
          <td width="43"><div align="center">Hole 13<br> <input type="int" name="hole13" size="6" value='<?php echo $h13; ?>'/></div></td>
          <td width="43"><div align="center">Hole 14<br> <input type="int" name="hole14" size="6" value='<?php echo $h14; ?>'/></div></td>
          <td width="43"><div align="center">Hole 15<br> <input type="int" name="hole15" size="6" value='<?php echo $h15; ?>'/></div></td>
          <td width="43"><div align="center">Hole 16<br> <input type="int" name="hole16" size="6" value='<?php echo $h16; ?>'/></div></td>
          <td width="43"><div align="center">Hole 17<br> <input type="int" name="hole17" size="6" value='<?php echo $h17; ?>'/></div></td>
          <td width="43"><div align="center">Hole 18<br> <input type="int" name="hole18" size="6" value='<?php echo $h18; ?>'/></div></td>
        </tr>
    </table>
             

</div></th>
</div>

      <input name="submit" type="submit" value="Update Yards" />
      </h1>    </center>
	 

  </form>
  </div>
  </div>


  </div>
             </div>
                </div>
 
 
 
 

  

</body>
</html>

<!DOCTYPE html>  
    <meta content="Kansas Girls and Boys Golf including scores, stats" name="description"/>
    <meta property="og:title" content="Boys Golf Kansas" itemprop="name"/>
    <meta property="og:url" content="http://www.kansasgolfscores.com" itemprop="url"/>

    <meta property="og:description" content="Girls and Boys Golf including scores, stats Kansas" itemprop="description"/>
    <meta property="og:site_name" content="kansasgolfscores.com"/>
    <meta name="twitter:card" content="summary" />

<head>
  <title>KansasGolfScores.com</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords" content="High School, Golf, Scores, Tournaments">
 <link rel="stylesheet" href="../../includes/bootstrap.min.css">     
  <script src="../../includes/jquery-2.1.4.min.js"></script>
  <script src="../../includes/bootstrap.min.js"></script>

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

if($_POST['submit'] == "Update Roster")

{
//query the db for any scores not submitted to fill in to calculate accurate totals
$sql = "SELECT * FROM `roster` WHERE `pid` =  '".$_POST['pid']."' LIMIT 1";
$result = mysqli_query($conn,$sql);
$player_exists = mysqli_num_rows($result);
$scores = mysqli_fetch_assoc($result);
if($teacher_exists != 1)
{
echo '<h2></h2>';
} else {
	echo '<CENTER><h2>! Roster Updated Successfully!</h2>';
	echo "<br>"; 
	echo $_POST['id'];
	echo "<br>";
	echo $_POST['player_1'];
	echo "<br>";
	echo $_POST['grade'];
  	echo "<br>";
	echo $_POST['password'];
	echo "<br>";
}

	
	
$i=0;



//  
  if(!empty($_POST['password'])) {
  
$sql="UPDATE `roster` SET `password` = MD5('".$_POST['password']."') WHERE `roster`.`pid` = '".$_POST['pid']."'";
      
if (!mysqli_query($conn,$sql))
  {
  die('Error: Updating Password' . mysqli_error());
  }    }else
  {}



$sql="UPDATE `roster` SET `grade` = '".$_POST['grade']."' WHERE `roster`.`pid` = '".$_POST['pid']."'";

if (!mysqli_query($conn,$sql))
  {
  die('Error: Updating Grade' . mysqli_error());
  }


  $sql="UPDATE `roster` SET `player_1` = '".$_POST['player_1']."' WHERE `roster`.`pid` = '".$_POST['pid']."'";

if (!mysqli_query($conn,$sql))
  {
  die('Error: Updating Name' . mysqli_error());
  }
  
  
    $sql="UPDATE `roster` SET `username` = '".$_POST['player_1']."' WHERE `roster`.`pid` = '".$_POST['pid']."'";

if (!mysqli_query($conn,$sql))
  {
  die('Error: Updating Name' . mysqli_error());
  }
  
    $sql="UPDATE `roster` SET `tmid` = '".$_POST['tmid']."' WHERE `roster`.`pid` = '".$_POST['pid']."'";

if (!mysqli_query($conn,$sql))
  {
  die('Error: Updating Team' . mysqli_error());
  }


}


if(!empty($_GET['pid']))
{
$pid = $_GET['pid'];
}

?>


<div align="center">
    <h3>Upgrade Player Info, this will change information in the database</h3>

       <a href="index.php">Home Page</a>
  </div>
  
  
  <?php  
  
  
  $query = "SELECT * FROM `roster` WHERE `pid` LIKE '$pid'  LIMIT 1";
if(@!$result = mysqli_query($conn,$query))
	echo 'PHP LINE: '.__LINE__.'. Epic fail 1.'. mysqli_error();
else {
$setup = mysqli_fetch_assoc($result);
//Displays Array information
 //print_r  ($setup);
 
 
 //Tournament ID
$pid = $setup['pid'];
 //Course ID
$grade = $setup['grade'];
$player_1 = $setup['player_1'];
$tmid = $setup['tmid'];
$password = $setup['password'];

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
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
            
    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    
    </nav>

    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3"><?php  echo $tname;  ?>
        <small></small>
      </h1>


      <ol class="breadcrumb">
        <li class="breadcrumb-item">
       
        <li class="mx-auto" >
 
 
 
  <br>   <h1> <b>Update Roster Info </b> </h1>
    
    <p>ID: <input type="varchar" name="pid" readonly value="<?php echo $pid;?>"/><br>
       
<table class="table">
  <tr>

	  Grade:<input type="grade" name="grade" size="15" value='<?php echo  $grade; ?>'/>    </tr> <br>
<tr>   Name: <input type="varchar" name="player_1" size="35" value='<?php echo $player_1; ?>'/>  </tr> <br>
 <tr>   Password:<input type="varchar" name="password" size="35"   </tr> <br>
Team ID: <input type="varchar" name="tmid" size="5"  readonly value='<?php echo $tmid; ?>'/>  </tr>   <br>
</div></th>
</div>   <br>

      <input name="submit" type="submit" value="Update Roster" />
      </h1>    </center>
  </form>
  
  </div></div>
<?php include("footer.php"); ?>

</body>
</html>

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
include("databaseconnect.php");

if(!empty($perm))
{
$perm;
echo $perm;
}
 //authentication for coaches to get to their pages, not for public pages.
if ($perm > '5') {
    echo "Permission Granted";
} else {
header("Location: index.php", TRUE, 303);
exit;
}

include_once("headera.php");
//include_once("analyticstracking.php");  
 ?> 


<?php

if($_POST['submit'] == "Update Payment")

{
//query the db for any scores not submitted to fill in to calculate accurate totals
$sql = "SELECT * FROM `team` WHERE `tmid` =  '".$_POST['tmid']."' LIMIT 1";
$result = mysqli_query($conn,$sql);
$player_exists = mysqli_num_rows($result);
$scores = mysqli_fetch_assoc($result);
if($teacher_exists != 1)
{
echo '<h2></h2>';
} else {
	echo '<CENTER><h2>! Payment Updated Successfully!</h2>';
	echo "<br>"; 
	echo $_POST['tmid'];
	echo "<br>";
	echo $_POST['school'];
	echo "<br>";
	echo $_POST['amount'];
	echo "<br>";
}

	
	
$i=0;



//  




$sql="UPDATE `team` SET `paid` = '".$_POST['paid']."' WHERE `team`.`tmid` = '".$_POST['tmid']."'";

if (!mysqli_query($conn,$sql))
  {
  die('Error: Updating' . mysqli_error());
  }


  $sql="UPDATE `team` SET `amount` = '".$_POST['amount']."' WHERE `team`.`tmid` = '".$_POST['tmid']."'";

if (!mysqli_query($conn,$sql))
  {
  die('Error: Updating' . mysqli_error());
  }
  



}


if(!empty($_GET['tmid']))
{
$tmid = $_GET['tmid'];
}

?>


<div align="center">
    <h3>Update Payments</h3>

       <a href="index.php">Home Page</a>
  </div>
  
  
  <?php  
  
  
  $query = "SELECT * FROM `team` WHERE `tmid` LIKE '$tmid'  LIMIT 1";
if(@!$result = mysqli_query($conn,$query))
	echo 'PHP LINE: '.__LINE__.'. Epic fail 1.'. mysqli_error();
else {
$setup = mysqli_fetch_assoc($result);
//Displays Array information
 //print_r  ($setup);
 
 
 //Tournament ID
$tmid = $setup['tmid'];
 //Course ID
$school = $setup['school'];
$paid = $setup['paid'];
$amount = $setup['amount'];

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
 <center>    <h1> <b>Update Payments </b> </h1>
    
    <p>ID: <input type="varchar" name="tmid" value="<?php echo $tmid;?>"/><br>
       
<table width="875" border="1">
  <tr>

	  School:<input type="grade" name="grade" size="15" value='<?php echo  $school; ?>'/>    </tr>
    
    KCA:
     <select name="paid">
  <option value="1">Yes</option>
  <option value="0">No</option>
</select> 


Amount Paid: <input type="varchar" name="amount" size="7" value='<?php echo $amount; ?>'/>  </tr>
</div></th>
</div>

      <input name="submit" type="submit" value="Update Payment" />
      </h1>    </center>
  </form>
<?php include("footer.php"); ?>

</body>
</html>

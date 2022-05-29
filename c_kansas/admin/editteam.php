 <!DOCTYPE html>  
<head>
  <title>KansasGolfScores.com</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords" content="High School, Golf, Scores, Tournaments">
  <link rel="stylesheet" href="../../global_style/style/css/bootstrap.css">
   <link rel="stylesheet" href="../../global_style/style/style_nopict.css">
  <script src="../../global_style/js/jquery-2.1.4.min.js"></script>
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
    $sql = "SELECT id, tmid FROM users WHERE users.email = '$_SESSION[email]'"; 
			$result = mysqli_query($conn,$sql) or die(mysqli_error());
				while($row = mysqli_fetch_array( $result )) {
			$userid = $row['id'];
      $tmid = $row['tmid']; }
      echo $userid;
      
 ?>  
 
 
    



   <?php
$sql="SELECT class FROM classification";
$result=mysqli_query($conn,$sql);

$options="";

while ($row=mysqli_fetch_array($result)) {   
    $class=$row["class"];
    $classification.="<OPTION VALUE=\"$class\">".$class;

}
?>

<?php

if($_POST['submit'] == "Update Team")

{
//query the db for any scores not submitted to fill in to calculate accurate totals
$sql = "SELECT * FROM `team` WHERE `tmid` =  '".$_POST['tmid']."' LIMIT 1";
$result = mysqli_query($conn,$sql);
$player_exists = mysqli_num_rows($result);
$scores = mysqli_fetch_assoc($result);
if($teacher_exists != 1)


	
	
$i=0;

$sql="UPDATE `team` SET 
".(( !$_POST['school'] ) ? "" : "`school` = '".$_POST[school]."', ")."

".(( !$_POST['abv'] ) ? "" : "`abv` = '".$_POST[abv]."', ")."

".(( !$_POST['coach'] ) ? "" : "`coach` = '".$_POST[coach]."', ")."

".(( !$_POST['state'] ) ? "" : "`state` = '".$_POST[state]."', ")."

".(( !$_POST['classification'] ) ? "" : "`classification` = '".$_POST[classification]."', ")."

".(( !$_POST['league'] ) ? "" : "`league` = '".$_POST[league]."', ")."


`spam` = '1'


WHERE `tmid` = '".$_POST['id']."'";

if (!mysqli_query($conn,$sql))
  {
  die('Error: ' . mysqli_error());
  }

}


?>


<div align="center">
    <p class="style1"><strong>Update Golfer Infomration</strong></p>

       <a href="index.php">Home Page</a>
  </div>
  
  
     <?php
$sql="SELECT * FROM league";
$result=mysqli_query($conn,$sql);

$options="";

while ($row=mysqli_fetch_array($result)) {   
    $league=$row["league"];
    $options.="<OPTION VALUE=\"$league\">".$league;

}
?>

  
  <?php  
  
  
  $query = "SELECT * FROM `team` WHERE `tmid` LIKE '$tmid'  LIMIT 1";
if(@!$result = mysqli_query($conn,$query))
	echo 'PHP LINE: '.__LINE__.'. Epic fail 1.'. mysqli_error();
else {
$setup = mysqli_fetch_assoc($result);
//Displays Array information
 //print_r  ($setup);
 
 
 //Tournament ID

$team = $setup['school'];
$abv = $setup['abv'];
$class = $setup['classification'];
$league = $setup['league'];
$coach = $setup['coach'];
$state = $setup['state'];
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
 <center>    <h1> <b>Update Team Information </b> </h1>
    
    <p>ID: <input type="varchar" name="id" value="<?php echo $tmid;?> " readonly/><br> <hr>
    

   Change Team Name: <input type="varchar" name="school" size="35" value='<?php echo $team; ?>'/> <br> <br>
   
   
   Change Team Abbreviation: <input type="varchar" name="abv" size="10" value='<?php echo $abv; ?>'/> <br> <br>
   
   
      Change Coach Name: <input type="varchar" name="coach" size="35" value='<?php echo $coach; ?>'/> <br> <br>
      
            Change State Name: <input type="varchar" name="state" size="35" value='<?php echo $state; ?>'/> <br> <br>
   
   
Change Classification: Current = <?php echo $class; ?>
            <select name="classification" id="classification"  align="right">
              <OPTION VALUE=><?php echo $classification ?></OPTION>
            </SELECT>  <br>

 <br>


League: Current = <?php echo $league; ?>
            <select name="league" id="drop1">
              <OPTION VALUE=><?php echo $options ?></OPTION>
            </SELECT>   <br>

</div></th>
</div>

      <input name="submit" type="submit" value="Update Team" />
      </h1>    </center>
  </form>
<?php include("footer.php"); ?>

</body>
</html>
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

if(!empty($_GET['state']))
{
$state = $_GET['state'];
}
 if(!empty($_GET['db']))
{
$db = $_GET['db'];
}
$dataBase = $db;

       include_once("databaseconnect.php"); 


?> 

 
 
   <?php
 //authentication for coaches to get to their pages, not for public pages.
session_start();
session_regenerate_id();
if(!isset($_SESSION['email']))
   // if there is no valid session
{
    header("Location:glogin-system/index.php");
}

 ?> 
 
  <?php         
    $sql = "SELECT id, tmid FROM users WHERE users.email = '$_SESSION[email]'"; 
			$result = mysqli_query($conn,$sql) or die(mysqli_error());
				while($row = mysqli_fetch_array( $result )) {
			$userid = $row['id'];
      $tmid = $row['tmid']; }
    // echo $userid;
      
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

".(( !$_POST['regionals'] ) ? "" : "`regionals` = '".$_POST[regionals]."', ")."

".(( !$_POST['league'] ) ? "" : "`league` = '".$_POST[league]."', ")."


`spam` = '1'


WHERE `tmid` = '".$_POST['id']."'";

if (!mysqli_query($conn,$sql))
  {
  die('Error: ' . mysqli_error());
  }

}


?>

            
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
 
 


<div align="center">
    <p class="style1"><strong>Update Team Information</strong></p>

 
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
$sql="SELECT * FROM regionals";
$result=mysqli_query($conn,$sql);

$optionsr="";

while ($row=mysqli_fetch_array($result)) {   
    $regionals=$row["regional"];
    $optionsr.="<OPTION VALUE=\"$regionals\">".$regionals;

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
$regionals = $setup['regionals'];
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


 ?>" \method="post"> 
 
 
 
 
 
 
 
 
 
 
 
 
   <div class="container">
 
 
 
  <br>
 <center>    <h1> <b>Update Team Information </b> </h1>
    
    <p>ID: <input type="varchar" name="id" value="<?php echo $tmid;?> " readonly/><br> <hr>
    

   Change Team Name: <input type="varchar" name="school" size="35" value='<?php echo $team; ?>'/> <br> <br>
   
   
   Change Team Abbreviation: <input type="varchar" name="abv" size="10" value='<?php echo $abv; ?>'/> <br> <br>
   
   
      Change Coach Name: <input type="varchar" name="coach" size="35" value='<?php echo $coach; ?>'/> <br> <br>
      
            Change State Name: <input type="varchar" name="state" size="35" value='<?php echo $state; ?>'/> <br> <br>
   
   
Change Classification: Current = <?php echo $class; ?>
            <select name="classification" id="classification"  align="right">
              <OPTION VALUE=> </OPTION>
              <OPTION VALUE=>1A</OPTION>
              <OPTION VALUE=>2A</OPTION>
              <OPTION VALUE=>3A</OPTION>
              <OPTION VALUE=>4A</OPTION>
              <OPTION VALUE=>5A</OPTION>
              <OPTION VALUE=>6A</OPTION>
            </SELECT>  <br>

 <br>


League: Current = <?php echo $league; ?>
            <select name="league" id="drop1">
              <OPTION VALUE=><?php echo $options ?></OPTION>
            </SELECT>   <br>
            
Regionals: Current = <?php echo $regionals; ?>
            <select name="regionals" id="drop1">
              <OPTION VALUE=><?php echo $optionsr ?></OPTION>
            </SELECT>   <br>


            
      <input name="submit" type="submit" value="Update Team" />
</div></th>
</div>
  </form>
<?php include("footer.php"); ?>

</body>
</html>

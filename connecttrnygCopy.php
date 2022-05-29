




  
  
  

<?php 
 //authentication for coaches to get to their pages, not for public pages.
session_start();
session_regenerate_id();
if(!isset($_SESSION['email']))
   // if there is no valid session
{
    header("Location:login-system/index.php");
}

//include_once("headerb.php");


  ini_set('display_errors', 1); 
  ini_set('display_startup_errors', 1); 
  error_reporting(E_ALL);

  $database = "g_2020Main";

include_once("dbconnectg.php");
 ?> 
 
  <?php         
    $sql = "SELECT id FROM users WHERE users.email = '$_SESSION[email]'"; 
			$result = mysqli_query($conn,$sql) or die(mysqli_error());
				while($row = mysqli_fetch_array( $result )) {
			$userid = $row['id']; }
      echo $userid; 
      
 
 ?>    
 
 
 
        <?php
$sql="SELECT max(id) as id, date, uid FROM tournament 
WHERE  `uid` = '$userid'";
$result=mysqli_query($conn,$sql);

$options="";

while ($row=mysqli_fetch_array($result)) {   
    $trnysetup=$row["id"];
    echo $trnysetup;
}
?>

<HTML>
<HEAD>
  <META HTTP-EQUIV="Refresh" CONTENT="5;URL=indexg.php">


</HEAD>

<center>
  <H1>! Tournament Added - Great Job!!!</H1>
  <h2>You can now enter the golfers names and what scorecards they are on</h2><br>
  
  <h2>Click on Assign to Card to enter by Team or by Card.</h2> <br>
  
  
    <h2>This page will automatically redirect, please do not click refresh.</h2> <br>
</center>



</BODY>
</HTML>


     

<?php 
 $team = isset($_POST['1']) ? $_POST['1'] : '';
if( !empty($team) ) {
      $sqlInsert="INSERT INTO trnyteams (tmid, tid)
 VALUES
      ('$team','$trnysetup')"; 
      echo $team;
      echo '<br';
      echo $trnysetup;
      $insertExec=mysqli_query($conn,$sqlInsert);  
}  
?>




   
<?php 
    $team = isset($_POST['2']) ? $_POST['2'] : '';
if( !empty($team) ) {
      $sqlInsert="INSERT INTO trnyteams (tmid, tid)
 VALUES
      ('$team','$trnysetup')"; 
      $insertExec=mysqli_query($conn,$sqlInsert);  
}  
?>

<?php
    $team = isset($_POST['3']) ? $_POST['3'] : '';
if( !empty($team) ) {
      $sqlInsert="INSERT INTO trnyteams (tmid, tid)
 VALUES
      ('$team','$trnysetup')"; 
      $insertExec=mysqli_query($conn,$sqlInsert);  
}  
?>


  <?php
    $team = isset($_POST['4']) ? $_POST['4'] : '';
if( !empty($team) ) {
      $sqlInsert="INSERT INTO trnyteams (tmid, tid)
 VALUES
      ('$team','$trnysetup')"; 
      $insertExec=mysqli_query($conn,$sqlInsert);  
}  
?>

        <?php 
    $team = isset($_POST['5']) ? $_POST['5'] : '';
if( !empty($team) ) {
      $sqlInsert="INSERT INTO trnyteams (tmid, tid)
 VALUES
      ('$team','$trnysetup')"; 
      $insertExec=mysqli_query($conn,$sqlInsert);  
}  
?>


  <?php
    $team = isset($_POST['6']) ? $_POST['6'] : '';
if( !empty($team) ) {
      $sqlInsert="INSERT INTO trnyteams (tmid, tid)
 VALUES
      ('$team','$trnysetup')"; 
      $insertExec=mysqli_query($conn,$sqlInsert);  
}  
?>

            <?php
    $team = isset($_POST['7']) ? $_POST['7'] : '';
if( !empty($team) ) {
      $sqlInsert="INSERT INTO trnyteams (tmid, tid)
 VALUES
      ('$team','$trnysetup')"; 
      $insertExec=mysqli_query($conn,$sqlInsert);  
}  
?>

      <?php
    $team = isset($_POST['8']) ? $_POST['8'] : '';
if( !empty($team) ) {
      $sqlInsert="INSERT INTO trnyteams (tmid, tid)
 VALUES
      ('$team','$trnysetup')"; 
      $insertExec=mysqli_query($conn,$sqlInsert);  
}  
?>
         <?php
    $team = isset($_POST['9']) ? $_POST['9'] : '';
if( !empty($team) ) {
      $sqlInsert="INSERT INTO trnyteams (tmid, tid)
 VALUES
      ('$team','$trnysetup')"; 
      $insertExec=mysqli_query($conn,$sqlInsert);  
}  
?>           

<?php 
    $team = isset($_POST['10']) ? $_POST['10'] : '';
if( !empty($team) ) {
      $sqlInsert="INSERT INTO trnyteams (tmid, tid)
 VALUES
      ('$team','$trnysetup')"; 
      $insertExec=mysqli_query($conn,$sqlInsert);  
}  
?>

          <?php
    $team = isset($_POST['11']) ? $_POST['11'] : '';
if( !empty($team) ) {
      $sqlInsert="INSERT INTO trnyteams (tmid, tid)
 VALUES
      ('$team','$trnysetup')"; 
      $insertExec=mysqli_query($conn,$sqlInsert);  
}  
?> 
<?php
    $team = isset($_POST['12']) ? $_POST['12'] : '';
if( !empty($team) ) {
      $sqlInsert="INSERT INTO trnyteams (tmid, tid)
 VALUES
      ('$team','$trnysetup')"; 
      $insertExec=mysqli_query($conn,$sqlInsert);  
}  
?>

<?php
    $team = isset($_POST['13']) ? $_POST['13'] : '';
if( !empty($team) ) {
      $sqlInsert="INSERT INTO trnyteams (tmid, tid)
 VALUES
      ('$team','$trnysetup')"; 
      $insertExec=mysqli_query($conn,$sqlInsert);  
}  
?>



             <?php
    $team = isset($_POST['14']) ? $_POST['14'] : '';
if( !empty($team) ) {
      $sqlInsert="INSERT INTO trnyteams (tmid, tid)
 VALUES
      ('$team','$trnysetup')"; 
      $insertExec=mysqli_query($conn,$sqlInsert);  
}  
?>

<?php
    $team = isset($_POST['15']) ? $_POST['15'] : '';
if( !empty($team) ) {
      $sqlInsert="INSERT INTO trnyteams (tmid, tid)
 VALUES
      ('$team','$trnysetup')"; 
      $insertExec=mysqli_query($conn,$sqlInsert);  
}  
?>

<?php
    $team = isset($_POST['16']) ? $_POST['16'] : '';
if( !empty($team) ) {
      $sqlInsert="INSERT INTO trnyteams (tmid, tid)
 VALUES
      ('$team','$trnysetup')"; 
      $insertExec=mysqli_query($conn,$sqlInsert);  
}  
?>


<?php
    $team = isset($_POST['17']) ? $_POST['17'] : '';
if( !empty($team) ) {
      $sqlInsert="INSERT INTO trnyteams (tmid, tid)
 VALUES
      ('$team','$trnysetup')"; 
      $insertExec=mysqli_query($conn,$sqlInsert);  
}  
?>

<?php
    $team = isset($_POST['18']) ? $_POST['18'] : '';
if( !empty($team) ) {
      $sqlInsert="INSERT INTO trnyteams (tmid, tid)
 VALUES
      ('$team','$trnysetup')"; 
      $insertExec=mysqli_query($conn,$sqlInsert);  
}  
?>

 <?php
    $team = isset($_POST['19']) ? $_POST['19'] : '';
if( !empty($team) ) {
      $sqlInsert="INSERT INTO trnyteams (tmid, tid)
 VALUES
      ('$team','$trnysetup')"; 
      $insertExec=mysqli_query($conn,$sqlInsert);  
}  
?>

    <?php
    $team = isset($_POST['20']) ? $_POST['20'] : '';
if( !empty($team) ) {
      $sqlInsert="INSERT INTO trnyteams (tmid, tid)
 VALUES
      ('$team','$trnysetup')"; 
      $insertExec=mysqli_query($conn,$sqlInsert);  
}  
?>

<?php
    $team = isset($_POST['21']) ? $_POST['21'] : '';
if( !empty($team) ) {
      $sqlInsert="INSERT INTO trnyteams (tmid, tid)
 VALUES
      ('$team','$trnysetup')"; 
      $insertExec=mysqli_query($conn,$sqlInsert);  
}  
?>

<?php
    $team = isset($_POST['22']) ? $_POST['22'] : '';
if( !empty($team) ) {
      $sqlInsert="INSERT INTO trnyteams (tmid, tid)
 VALUES
      ('$team','$trnysetup')"; 
      $insertExec=mysqli_query($conn,$sqlInsert);  
}  
?>

  <?php
    $team = isset($_POST['23']) ? $_POST['23'] : '';
if( !empty($team) ) {
      $sqlInsert="INSERT INTO trnyteams (tmid, tid)
 VALUES
      ('$team','$trnysetup')"; 
      $insertExec=mysqli_query($conn,$sqlInsert);  
}  
?>


  <?php
    $team = isset($_POST['24']) ? $_POST['24'] : '';
if( !empty($team) ) {
      $sqlInsert="INSERT INTO trnyteams (tmid, tid)
 VALUES
      ('$team','$trnysetup')"; 
      $insertExec=mysqli_query($conn,$sqlInsert);  
}  
?>


   <?php
    $team = isset($_POST['25']) ? $_POST['25'] : '';
if( !empty($team) ) {
      $sqlInsert="INSERT INTO trnyteams (tmid, tid)
 VALUES
      ('$team','$trnysetup')"; 
      $insertExec=mysqli_query($conn,$sqlInsert);  
}  
?>

<?php
    $team = isset($_POST['26']) ? $_POST['26'] : '';
if( !empty($team) ) {
      $sqlInsert="INSERT INTO trnyteams (tmid, tid)
 VALUES
      ('$team','$trnysetup')"; 
      $insertExec=mysqli_query($conn,$sqlInsert);  
}  
?>


  <?php
    $team = isset($_POST['27']) ? $_POST['27'] : '';
if( !empty($team) ) {
      $sqlInsert="INSERT INTO trnyteams (tmid, tid)
 VALUES
      ('$team','$trnysetup')"; 
      $insertExec=mysqli_query($conn,$sqlInsert);  
}  
?>



    <?php
    $team = isset($_POST['28']) ? $_POST['28'] : '';
if( !empty($team) ) {
      $sqlInsert="INSERT INTO trnyteams (tmid, tid)
 VALUES
      ('$team','$trnysetup')"; 
      $insertExec=mysqli_query($conn,$sqlInsert);  
}  
?>





  <?php
    $team = isset($_POST['29']) ? $_POST['29'] : '';
if( !empty($team) ) {
      $sqlInsert="INSERT INTO trnyteams (tmid, tid)
 VALUES
      ('$team','$trnysetup')"; 
      $insertExec=mysqli_query($conn,$sqlInsert);  
}  
?>


   <?php
    $team = isset($_POST['30']) ? $_POST['30'] : '';
if( !empty($team) ) {
      $sqlInsert="INSERT INTO trnyteams (tmid, tid)
 VALUES
      ('$team','$trnysetup')"; 
      $insertExec=mysqli_query($conn,$sqlInsert);  
}  
?>

<?php
    $team = isset($_POST['31']) ? $_POST['31'] : '';
if( !empty($team) ) {
      $sqlInsert="INSERT INTO trnyteams (tmid, tid)
 VALUES
      ('$team','$trnysetup')"; 
      $insertExec=mysqli_query($conn,$sqlInsert);  
}  
?>
 <?php
    $team = isset($_POST['32']) ? $_POST['32'] : '';
if( !empty($team) ) {
      $sqlInsert="INSERT INTO trnyteams (tmid, tid)
 VALUES
      ('$team','$trnysetup')"; 
      $insertExec=mysqli_query($conn,$sqlInsert);  
}  
?>




<?php
    $team = isset($_POST['33']) ? $_POST['33'] : '';
if( !empty($team) ) {
      $sqlInsert="INSERT INTO trnyteams (tmid, tid)
 VALUES
      ('$team','$trnysetup')"; 
      $insertExec=mysqli_query($conn,$sqlInsert);  
}  
?>

<?php
    $team = isset($_POST['34']) ? $_POST['34'] : '';
if( !empty($team) ) {
      $sqlInsert="INSERT INTO trnyteams (tmid, tid)
 VALUES
      ('$team','$trnysetup')"; 
      $insertExec=mysqli_query($conn,$sqlInsert);  
}  
?>

 <?php
    $team = isset($_POST['35']) ? $_POST['35'] : '';
if( !empty($team) ) {
      $sqlInsert="INSERT INTO trnyteams (tmid, tid)
 VALUES
      ('$team','$trnysetup')"; 
      $insertExec=mysqli_query($conn,$sqlInsert);  
}  
?>

    <?php
    $team = isset($_POST['36']) ? $_POST['36'] : '';
if( !empty($team) ) {
      $sqlInsert="INSERT INTO trnyteams (tmid, tid)
 VALUES
      ('$team','$trnysetup')"; 
      $insertExec=mysqli_query($conn,$sqlInsert);  
}  
?>

<?php
    $team = isset($_POST['37']) ? $_POST['37'] : '';
if( !empty($team) ) {
      $sqlInsert="INSERT INTO trnyteams (tmid, tid)
 VALUES
      ('$team','$trnysetup')"; 
      $insertExec=mysqli_query($conn,$sqlInsert);  
}  
?>

<?php
    $team = isset($_POST['38']) ? $_POST['38'] : '';
if( !empty($team) ) {
      $sqlInsert="INSERT INTO trnyteams (tmid, tid)
 VALUES
      ('$team','$trnysetup')"; 
      $insertExec=mysqli_query($conn,$sqlInsert);  
}  
?>

  <?php
    $team = isset($_POST['39']) ? $_POST['39'] : '';
if( !empty($team) ) {
      $sqlInsert="INSERT INTO trnyteams (tmid, tid)
 VALUES
      ('$team','$trnysetup')"; 
      $insertExec=mysqli_query($conn,$sqlInsert);  
}  
?>


  <?php
    $team = isset($_POST['40']) ? $_POST['40'] : '';
if( !empty($team) ) {
      $sqlInsert="INSERT INTO trnyteams (tmid, tid)
 VALUES
      ('$team','$trnysetup')"; 
      $insertExec=mysqli_query($conn,$sqlInsert);  
}  
?>


   <?php
    $team = isset($_POST['41']) ? $_POST['41'] : '';
if( !empty($team) ) {
      $sqlInsert="INSERT INTO trnyteams (tmid, tid)
 VALUES
      ('$team','$trnysetup')"; 
      $insertExec=mysqli_query($conn,$sqlInsert);  
}  
?>

<?php
    $team = isset($_POST['42']) ? $_POST['42'] : '';
if( !empty($team) ) {
      $sqlInsert="INSERT INTO trnyteams (tmid, tid)
 VALUES
      ('$team','$trnysetup')"; 
      $insertExec=mysqli_query($conn,$sqlInsert);  
}  
?>


  <?php
    $team = isset($_POST['43']) ? $_POST['43'] : '';
if( !empty($team) ) {
      $sqlInsert="INSERT INTO trnyteams (tmid, tid)
 VALUES
      ('$team','$trnysetup')"; 
      $insertExec=mysqli_query($conn,$sqlInsert);  
}  
?>



    <?php
    $team = isset($_POST['44']) ? $_POST['44'] : '';
if( !empty($team) ) {
      $sqlInsert="INSERT INTO trnyteams (tmid, tid)
 VALUES
      ('$team','$trnysetup')"; 
      $insertExec=mysqli_query($conn,$sqlInsert);  
}  
?>





  <?php
    $team = isset($_POST['45']) ? $_POST['45'] : '';
if( !empty($team) ) {
      $sqlInsert="INSERT INTO trnyteams (tmid, tid)
 VALUES
      ('$team','$trnysetup')"; 
      $insertExec=mysqli_query($conn,$sqlInsert);  
}  
?>


   <?php
    $team = isset($_POST['46']) ? $_POST['46'] : '';
if( !empty($team) ) {
      $sqlInsert="INSERT INTO trnyteams (tmid, tid)
 VALUES
      ('$team','$trnysetup')"; 
      $insertExec=mysqli_query($conn,$sqlInsert);  
}  
?>

<?php
    $team = isset($_POST['47']) ? $_POST['47'] : '';
if( !empty($team) ) {
      $sqlInsert="INSERT INTO trnyteams (tmid, tid)
 VALUES
      ('$team','$trnysetup')"; 
      $insertExec=mysqli_query($conn,$sqlInsert);  
}  
?>
 <?php
    $team = isset($_POST['48']) ? $_POST['48'] : '';
if( !empty($team) ) {
      $sqlInsert="INSERT INTO trnyteams (tmid, tid)
 VALUES
      ('$team','$trnysetup')"; 
      $insertExec=mysqli_query($conn,$sqlInsert);  
}  
?>

  

















 <?php
$sql = "DELETE * FROM `trnyteams` WHERE tmid <> = ''";

?>
                                      
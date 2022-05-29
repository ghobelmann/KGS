 <?php
 //authentication for coaches to get to their pages, not for public pages.
session_start();
session_regenerate_id();
if(!isset($_SESSION['email']))
   // if there is no valid session
{
    header("Location:login-system/index.php");
}

        if(!empty($_GET['id']))
{
$id = $_GET['tid'];
} 




include_once("databaseconnect.php");
 ?> 
  <!DOCTYPE html>
<html lang="en">
<head>
<title>Kansas Golf</title>
<meta charset="utf-8">
 <meta http-equiv="Refresh" content="1; url=EnterbyCard.php">
</head>
  <?php
$sql = "SELECT id FROM `users` WHERE email = '$_SESSION[email]' ORDER by `id` desc LIMIT 0 , 1 ";
if($results = @mysqli_query($conn,$sql))
{
$data = mysqli_fetch_assoc($results);

} else {
die('Error finding user: '.mysqli_error());
}
echo $data['id'];

?>
  
  
  
<?php
  
$front1 = "$_POST[front1]";
$back1 = "$_POST[back1]";
$total1 = $front1 + $back1;
  
  //Inserts Player 1 into tournament
  
  
  $golfer1 = isset($_POST['1']) ? $_POST['1'] : '';	
	    if( !empty($golfer1) ) {
$i=0;

$tournament = "$_POST[tid]";

$sql = "SELECT `tid` FROM `setup` WHERE `tid` = '".$_POST['tid']."' LIMIT 1";
if(@!$result = mysqli_query($conn,$sql))
	echo 'PHP LINE: '.__LINE__.'. Epic fail.'. mysqli_error();
$tid = mysqli_fetch_assoc($result);
 
 
 
 //check and see if already in tournament
$sql = "SELECT scores.pid, scores.tid FROM scores WHERE pid = '$_POST[1]' AND tid = $_POST[tid]";
if($result = mysqli_query($conn,$sql)){
$check = mysqli_num_rows($result);
echo $check;
	if(mysqli_num_rows($result)){
		echo "<h1>ERROR: Player 1 has Already been Entered in the Database.</h1>";
	}else{
  
  
   $status1 = false;
if(isset($_POST['status1'])){
    $status1= $_POST['status1'];
 } 
    $man1= false;
if(isset($_POST['man1'])){
    $man1= $_POST['man1'];
 } 

 } 
      $jv1= false;
if(isset($_POST['status1'])){
    $jv1= $_POST['status1'];
 } 
       $front1= false;
if(isset($_POST['front1'])){
    $front1= $_POST['front1'];
 } 
       $back1= false;
if(isset($_POST['back1'])){
    $back1= $_POST['back1'];
 }  
           $tmid1= false;
if(isset($_POST['tmid1'])){
    $tmid1= $_POST['tmid1'];
 }  
    

$sql="INSERT INTO `scores` (tmid, teetime,
card, tid, status)
VALUES
('$tmid1','$_POST[teetime]',
 '$_POST[card]','$_POST[tid]', '$_POST[status1]')";
if (!mysqli_query($conn,$sql))
  {
  die('Error: Player 1 Insert' . mysqli_error($conn));
  }
   }}
   ?>
   
   
   
   
		  </html>
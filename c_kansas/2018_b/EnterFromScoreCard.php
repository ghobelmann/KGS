 <?php
 
 error_reporting(E_ALL);
ini_set('display_errors', 1);
 
include_once("databaseconnect.php");
 //authentication for coaches to get to their pages, not for public pages.
if(!isset($_SESSION['email']))
   // if there is no valid session
{
    header("Location:login-system/index.php");
}

$sql = "SELECT id FROM `users` WHERE email = '$_SESSION[email]' ORDER by `id` desc LIMIT 0 , 1 ";
if($results = @mysqli_query($conn,$sql))
{
$data = mysqli_fetch_assoc($results);

} else {
die('Error finding user: '.mysqli_error());
}
echo $data['id'];

 ?> 
  <!DOCTYPE html>
<html lang="en">
<head>
<title>Kansas Golf</title>
<meta charset="utf-8">
<meta http-equiv="Refresh" content="1; url=<?php echo $_SERVER['HTTP_REFERER'];?>">
</head>
  
   
<?php
  
    

  //Inserts Player 1 into tournament
  
  $golfer1 = isset($_POST['1']) ? $_POST['1'] : '';	
	    if( !empty($golfer1) ) {
$i=0;
   $tournament = false;
if(isset($_POST['tid'])){
    $tournament = $_POST['tid'];
 } 


$sql = "SELECT `id` FROM `setup` WHERE `id` = '$tournament' LIMIT 1";
if(@!$result = mysqli_query($conn,$sql))
	echo 'PHP LINE: '.__LINE__.'. Epic fail Setup.'. mysqli_error();
$tid = mysqli_fetch_assoc($result);

    $sql1 = "SELECT id FROM users WHERE users.email = '$_SESSION[email]'"; 
			$result = mysqli_query($conn,$sql1) or die(mysqli_error());
				while($row = mysqli_fetch_array( $result )) {
			$userid = $row['id']; }
      
       //check and see if already in tournament
$sql = "SELECT scores.pid FROM scores WHERE pid = '$_POST[1]' AND tid = $tournament;";
if($result = mysqli_query($conn,$sql)){
$check = mysqli_num_rows($result);
echo $check;
	if(mysqli_num_rows($result)){
		echo "<h1>ERROR: Player 1 has Already been Entered in the Database.</h1>";
	}else{

 
   $noteam1 = false;
if(isset($_POST['noteam1'])){
    $noteam1= $_POST['noteam1'];
 } 
    $man21 = false;
if(isset($_POST['man_21'])){
    $man_21= $_POST['man_21'];
 } 
     $man41 = false;
if(isset($_POST['man_41'])){
    $man_41= $_POST['man_41'];
 } 
     $man61= false;
if(isset($_POST['man_61'])){
    $man_61= $_POST['man_61'];
 } 
      $jv1= false;
if(isset($_POST['jv1'])){
    $jv1= $_POST['jv1'];
 } 

               $tmid= false;
if(isset($_POST['tmid1'])){
    $tmid= $_POST['tmid1'];
 }  
            $card1= false;
if(isset($_POST['card1'])){
    $card1= $_POST['card1'];
 } 

             $non_varsity= false;
if(isset($_POST['non_varsity'])){
    $non_varsity= $_POST['non_varsity'];
 }  

 
 

    

$sql="INSERT INTO `scores` (pid, event, tmid, man_2, man_4, man_6,
card, tid, noteam, jv, uid, slope, rating, par, non_varsity)
VALUES
('$_POST[1]','$_POST[event]','$tmid',
'$man21','$man41','$man61',
'$card1','$_POST[tid]', 
 '$noteam1', '$jv1', 
 '$data[id]', '$_POST[slope]', '$_POST[rating]', 
'$_POST[par]', '$_POST[non_varsity]')";
if (!mysqli_query($conn,$sql))
  {
  die('Error: Player 1 Insert' . mysqli_error($conn));
  }
if ($noteam1 <> 'yes') {
         $sql1="INSERT INTO season (pid, tmid, tid)
VALUES
('$_POST[1]','$tmid','$_POST[tid]')";
        if (!mysqli_query($conn,$sql1))
  {
      die('Error: Vitual Insert ' . mysqli_error($conn));
  }
    }   }} }
   ?>
   
  
   
		  </html>
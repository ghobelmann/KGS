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
$id = $_GET['id'];
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
    

$sql="INSERT INTO `scores` (pid, event, tmid, teetime, man_2, man_4, man_6,
card, tid, noteam, jv, front, back, total, uid, slope, rating, par, non_varsity)
VALUES
('$_POST[1]','$_POST[event]','$tmid1','$_POST[teetime]',
'$man21','$man41','$man61',
'$_POST[card]','$_POST[tid]', 
 '$noteam1', '$jv1', 
'0','0', '$total1', '$data[id]', '$_POST[slope]', '$_POST[rating]', 
'$_POST[par]', '$_POST[non_varsity]')";
if (!mysqli_query($conn,$sql))
  {
  die('Error: Player 1 Insert' . mysqli_error($conn));
  }
if ($noteam1 <> 'yes') {
         $sql1="INSERT INTO season (pid, tmid, total, tid)
VALUES
('$_POST[1]','$tmid1', '$total1','$_POST[tid]')";
        if (!mysqli_query($conn,$sql1))
  {
      die('Error: Vitual Insert ' . mysqli_error($conn));
  }
    }   }} }
   ?>
   
   
   
   <?php
  
$front2 = "$_POST[front2]";
$back2 = "$_POST[back2]";
$total2 = $front2 + $back2;
  
  //Inserts Player 2 into tournament
  
  
  $golfer2 = isset($_POST['2']) ? $_POST['2'] : '';	
	    if( !empty($golfer2) ) {
$i=0;

$tournament = "$_POST[tid]";

$sql = "SELECT `id` FROM `setup` WHERE `id` = '".$_POST['tid']."' LIMIT 1";
if(@!$result = mysqli_query($conn,$sql))
	echo 'PHP LINE: '.__LINE__.'. Epic fail.'. mysqli_error();
$tid = mysqli_fetch_assoc($result);

 //check and see if already in tournament
$sql = "SELECT scores.pid, scores.tid FROM scores WHERE pid = '$_POST[2]' AND tid = $_POST[tid]";
if($result = mysqli_query($conn,$sql)){
$check = mysqli_num_rows($result);
echo $check;
	if(mysqli_num_rows($result)){
		echo "<h1>ERROR: Player 2 has Already been Entered in the Database.</h1>";
	}else{


    
   $noteam2 = false;
if(isset($_POST['noteam1'])){
    $noteam2= $_POST['noteam2'];
 } 
    $man22 = false;
if(isset($_POST['man_22'])){
    $man_22= $_POST['man_22'];
 } 
     $man42 = false;
if(isset($_POST['man_42'])){
    $man_42= $_POST['man_42'];
 } 
     $man62= false;
if(isset($_POST['man_62'])){
    $man_62= $_POST['man_62'];
 } 
      $jv2= false;
if(isset($_POST['jv2'])){
    $jv2= $_POST['jv2'];
 } 
       $front2= false;
if(isset($_POST['front2'])){
    $front2= $_POST['front2'];
 } 
       $back2= false;
if(isset($_POST['back2'])){
    $back2= $_POST['back2'];
 }
            $tmid2= false;
if(isset($_POST['tmid2'])){
    $tmid2= $_POST['tmid2'];
 }  



$sql22="INSERT INTO `scores` (pid, event, tmid, teetime, man_2, man_4, man_6,
card, tid, noteam, jv, front, back, total, uid, slope, rating, par, non_varsity)
VALUES
('$_POST[2]','$_POST[event]','$tmid2','$_POST[teetime]',
'$man22','$man42','$man62',
'$_POST[card]','$_POST[tid]', 
 '$noteam2', '$jv2', 
'0','0', '$total2', '$data[id]', '$_POST[slope]', '$_POST[rating]',
'$_POST[par]', '$_POST[non_varsity]')";
if (!mysqli_query($conn,$sql22))
  {
  die('Error: Player 2 Insert' . mysqli_error());
  }
if ($noteam2 <> 'yes') {
         $sql2="INSERT INTO season (pid, tmid, total, tid)
VALUES
('$_POST[2]','$tmid2', '$total2','$_POST[tid]')";
        if (!mysqli_query($conn,$sql2))
  {
      die('Error: Virutal Insert 2 ' . mysqli_error());
  }
    }   } }}
   ?>
   
   
   
   <?php
  
$front3 = "$_POST[front3]";
$back3 = "$_POST[back3]";
$total3 = $front3 + $back3;
  
  //Inserts Player 3 into tournament
  
  
  $golfer3 = isset($_POST['3']) ? $_POST['3'] : '';	
	    if( !empty($golfer3) ) {
$i=0;

$tournament = "$_POST[tid]";

$sql = "SELECT `id` FROM `setup` WHERE `id` = '".$_POST['tid']."' LIMIT 1";
if(@!$result = mysqli_query($conn,$sql))
	echo 'PHP LINE: '.__LINE__.'. Epic fail.'. mysqli_error();
$tid = mysqli_fetch_assoc($result);


  //check and see if already in tournament
$sql = "SELECT scores.pid, scores.tid FROM scores WHERE pid = '$_POST[3]' AND tid = $_POST[tid]";
if($result = mysqli_query($conn,$sql)){
$check = mysqli_num_rows($result);
echo $check;
	if(mysqli_num_rows($result)){
		echo "<h1>ERROR: Player 3 has Already been Entered in the Database.</h1>";
	}else{
  
  
    
   $noteam3 = false;
if(isset($_POST['noteam3'])){
    $noteam3= $_POST['noteam3'];
 } 
    $man23 = false;
if(isset($_POST['man_23'])){
    $man_23= $_POST['man_23'];
 } 
     $man43 = false;
if(isset($_POST['man_43'])){
    $man_43= $_POST['man_43'];
 } 
     $man63= false;
if(isset($_POST['man_63'])){
    $man_63= $_POST['man_63'];
 } 
      $jv3= false;
if(isset($_POST['jv3'])){
    $jv3= $_POST['jv3'];
 } 
       $front3= false;
if(isset($_POST['front3'])){
    $front3= $_POST['front3'];
 } 
       $back3= false;
if(isset($_POST['back3'])){
    $back3= $_POST['back3'];
 }
              $tmid3= false;
if(isset($_POST['tmid3'])){
    $tmid3= $_POST['tmid3'];
 }  



$sql="INSERT INTO `scores` (pid, event, tmid, teetime, man_2, man_4, man_6,
card, tid, noteam, jv, front, back, total, uid, slope, rating, par, non_varsity)
VALUES
('$_POST[3]','$_POST[event]','$tmid3','$_POST[teetime]',
'$man23','$man43','$man63',
'$_POST[card]','$_POST[tid]', 
 '$noteam3', '$jv3', 
'0','0', '$total3', '$data[id]', '$_POST[slope]', '$_POST[rating]',
'$_POST[par]', '$_POST[non_varsity]')";
if (!mysqli_query($conn,$sql))
  {
  die('Error: ' . mysqli_error());
  }
if ($noteam3 <> 'yes') {
         $sql3="INSERT INTO season (pid, tmid, total, tid)
VALUES
('$_POST[3]','$tmid3', '$total3','$_POST[tid]')";
        if (!mysqli_query($conn,$sql3))
  {
  die('Error: Player 3 Insert' . mysqli_error());
  }
    }   }  }}
   ?>
   
   
   
   
   <?php
  
$front4 = "$_POST[front4]";
$back4 = "$_POST[back4]";
$total4 = $front4 + $back4;
  
  //Inserts Player 4 into tournament
  
  
  $golfer4 = isset($_POST['4']) ? $_POST['4'] : '';	
	    if( !empty($golfer4) ) {
$i=0;

$tournament = "$_POST[tid]";

$sql = "SELECT `id` FROM `setup` WHERE `id` = '".$_POST['tid']."' LIMIT 1";
if(@!$result = mysqli_query($conn,$sql))
	echo 'PHP LINE: '.__LINE__.'. Epic fail.'. mysqli_error();
$tid = mysqli_fetch_assoc($result);



 //check and see if already in tournament
$sql = "SELECT scores.pid, scores.tid FROM scores WHERE pid = '$_POST[4]' AND tid = $_POST[tid]";
if($result = mysqli_query($conn,$sql)){
$check = mysqli_num_rows($result);
echo $check;
	if(mysqli_num_rows($result)){
		echo "<h1>ERROR: Player 4 has Already been Entered in the Database.</h1>";
	}else{
  
    
   $noteam4 = false;
if(isset($_POST['noteam4'])){
    $noteam4= $_POST['noteam4'];
 } 
    $man24 = false;
if(isset($_POST['man_24'])){
    $man_24= $_POST['man_24'];
 } 
     $man44 = false;
if(isset($_POST['man_44'])){
    $man_44= $_POST['man_44'];
 } 
     $man64= false;
if(isset($_POST['man_64'])){
    $man_64= $_POST['man_64'];
 } 
      $jv4= false;
if(isset($_POST['jv4'])){
    $jv4= $_POST['jv4'];
 } 
       $front4= false;
if(isset($_POST['front4'])){
    $front4= $_POST['front4'];
 } 
       $back4= false;
if(isset($_POST['back4'])){
    $back4= $_POST['back4'];
 }
              $tmid4= false;
if(isset($_POST['tmid4'])){
    $tmid4= $_POST['tmid4'];
 }  
  
  

$sql="INSERT INTO `scores` (pid, event, tmid, teetime, man_2, man_4, man_6,
card, tid, noteam, jv, front, back, total, uid, slope, rating, par, non_varsity)
VALUES
('$_POST[4]','$_POST[event]','$tmid4','$_POST[teetime]',
'$man24','$man44','$man64',
'$_POST[card]','$_POST[tid]', 
 '$noteam4', '$jv4', 
'0','0', '$total4', '$data[id]', '$_POST[slope]', '$_POST[rating]',
'$_POST[par]', '$_POST[non_varsity]')";
if (!mysqli_query($conn,$sql))
  {
  die('Error: ' . mysqli_error());
  }
if ($noteam4 <> 'yes') {
         $sql4="INSERT INTO season (pid, tmid, total, tid)
VALUES
('$_POST[4]','$tmid4', '$total4','$_POST[tid]')";
        if (!mysqli_query($conn,$sql4))
  {
  die('Error: Player 4 Insert' . mysqli_error());
  }
    }   }  }}
   ?>
   
     <?php
  
$front5 = "$_POST[front5]";
$back5 = "$_POST[back5]";
$total5 = $front5 + $back5;
  
  //Inserts Player 5 into tournament
  
  
  $golfer5 = isset($_POST['5']) ? $_POST['5'] : '';	
	    if( !empty($golfer5) ) {
$i=0;

$tournament = "$_POST[tid]";

$sql = "SELECT `id` FROM `setup` WHERE `id` = '".$_POST['tid']."' LIMIT 1";
if(@!$result = mysqli_query($conn,$sql))
	echo 'PHP LINE: '.__LINE__.'. Epic fail.'. mysqli_error();
$tid = mysqli_fetch_assoc($result);


 //check and see if already in tournament
$sql = "SELECT scores.pid, scores.tid FROM scores WHERE pid = '$_POST[5]' AND tid = $_POST[tid]";
if($result = mysqli_query($conn,$sql)){
$check = mysqli_num_rows($result);
echo $check;
	if(mysqli_num_rows($result)){
		echo "<h1>ERROR: Player 5 has Already been Entered in the Database.</h1>";
	}else{
  
         
   $noteam5 = false;
if(isset($_POST['noteam5'])){
    $noteam5= $_POST['noteam5'];
 } 
    $man25 = false;
if(isset($_POST['man_25'])){
    $man_25= $_POST['man_25'];
 } 
     $man45 = false;
if(isset($_POST['man_45'])){
    $man_45= $_POST['man_45'];
 } 
     $man65= false;
if(isset($_POST['man_65'])){
    $man_65= $_POST['man_65'];
 } 
      $jv5= false;
if(isset($_POST['jv5'])){
    $jv5= $_POST['jv5'];
 } 
       $front5= false;
if(isset($_POST['front5'])){
    $front5= $_POST['front5'];
 } 
       $back5= false;
if(isset($_POST['back5'])){
    $back5= $_POST['back5'];
 }
            $tmid5= false;
if(isset($_POST['tmid5'])){
    $tmid5= $_POST['tmid5'];
 }  
  

$sql="INSERT INTO `scores` (pid, event, tmid, teetime, man_2, man_4, man_6,
card, tid, noteam, jv, front, back, total, uid, slope, rating, par, non_varsity)
VALUES
('$_POST[5]','$_POST[event]','$tmid5','$_POST[teetime]',
'$man25','$man45','$man65',
'$_POST[card]','$_POST[tid]', 
 '$noteam5', '$jv5', 
'0','0', '$total5', '$data[id]', '$_POST[slope]', '$_POST[rating]',
'$_POST[par]', '$_POST[non_varsity]')";
if (!mysqli_query($conn,$sql))
  {
  die('Error: ' . mysqli_error());
  }
if ($noteam5 <> 'yes') {
         $sql5="INSERT INTO season (pid, tmid, total, tid)
VALUES
('$_POST[5]','$tmid5', '$total5','$_POST[tid]')";
        if (!mysqli_query($conn,$sql5))
  {
  die('Error: Player 5 Insert' . mysqli_error());
  }
    }   }}}
   ?>
  
   
   
   
   <?php
  
$front6 = "$_POST[front6]";
$back6 = "$_POST[back6]";
$total6 = $front6 + $back6;
  
  //Inserts Player 6 into tournament
  
  
  $golfer6 = isset($_POST['6']) ? $_POST['6'] : '';	
	    if( !empty($golfer6) ) {
$i=0;

$tournament = "$_POST[tid]";

$sql = "SELECT `id` FROM `setup` WHERE `id` = '".$_POST['tid']."' LIMIT 1";
if(@!$result = mysqli_query($conn,$sql))
	echo 'PHP LINE: '.__LINE__.'. Epic fail.'. mysqli_error();
$tid = mysqli_fetch_assoc($result);


 //check and see if already in tournament
$sql = "SELECT scores.pid, scores.tid FROM scores WHERE pid = '$_POST[6]' AND tid = $_POST[tid]";
if($result = mysqli_query($conn,$sql)){
$check = mysqli_num_rows($result);
echo $check;
	if(mysqli_num_rows($result)){
		echo "<h1>ERROR: Player 6 has Already been Entered in the Database.</h1>";
	}else{
  
           
   $noteam6 = false;
if(isset($_POST['noteam6'])){
    $noteam6= $_POST['noteam6'];
 } 
    $man26 = false;
if(isset($_POST['man_26'])){
    $man_26= $_POST['man_26'];
 } 
     $man46 = false;
if(isset($_POST['man_46'])){
    $man_46= $_POST['man_46'];
 } 
     $man66= false;
if(isset($_POST['man_66'])){
    $man_66= $_POST['man_66'];
 } 
      $jv6= false;
if(isset($_POST['jv6'])){
    $jv6= $_POST['jv6'];
 } 
       $front6= false;
if(isset($_POST['front6'])){
    $front6= $_POST['front6'];
 } 
       $back6= false;
if(isset($_POST['back6'])){
    $back6= $_POST['back6'];
 }
              $tmid6= false;
if(isset($_POST['tmid6'])){
    $tmid6= $_POST['tmid6'];
 }  

$sql="INSERT INTO `scores` (pid, event, tmid, teetime, man_2, man_4, man_6,
card, tid, noteam, jv, front, back, total, uid, slope, rating, par, non_varsity)
VALUES
('$_POST[6]','$_POST[event]','$tmid6','$_POST[teetime]',
'$man26','$man46','$man66',
'$_POST[card]','$_POST[tid]', 
 '$noteam6', '$jv6',
'0','0', '$total6', '$data[id]', '$_POST[slope]', '$_POST[rating]',
'$_POST[par]', '$_POST[non_varsity]')";
if (!mysqli_query($conn,$sql))
  {
  die('Error: ' . mysqli_error());
  }
if ($noteam6 <> 'yes') {
         $sql6="INSERT INTO season (pid, tmid, total, tid)
VALUES
('$_POST[6]','$tmid6', '$total6','$_POST[tid]')";
        if (!mysqli_query($conn,$sql6))
  {
  die('Error: Player 6 Insert' . mysqli_error());
  }
    }   }   }}
   ?>
   
   
		  </html>
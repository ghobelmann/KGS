                                        <?php    
 
include_once("dbconnectg.php");
 //authentication for coaches to get to their pages, not for public pages.
session_start();
if(!isset($_SESSION['email']))
   // if there is no valid session
{
    header("Location:glogin-system/index.php");
}


if(!empty($_GET['tid']))
{
$tid = $_GET['tid'];
}

$round = 2;

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

  
   
<?php
  
    

  //Inserts Player 1 into tournament
  
  $golfer1 = isset($_POST['1']) ? $_POST['1'] : '';	
	    if( !empty($golfer1) ) {
$i=0;

$tournament = "$_POST[tid]";

$sql = "SELECT `id` FROM `tournament` WHERE `id` = '".$_POST['tid']."' LIMIT 1";
if(@!$result = mysqli_query($conn,$sql))
	echo 'PHP LINE: '.__LINE__.'. Epic fail Setup.'. mysqli_error();
$tid = mysqli_fetch_assoc($result);

    $sql1 = "SELECT id FROM users WHERE users.email = '$_SESSION[email]'"; 
			$result = mysqli_query($conn,$sql1) or die(mysqli_error());
				while($row = mysqli_fetch_array( $result )) {
			$userid = $row['id']; }
      
       //check and see if already in tournament
$sql = "SELECT scores.pid FROM scores WHERE pid = '$_POST[1]' 
AND tid = $tournament AND round = $round;";
if($result = mysqli_query($conn,$sql)){
$check = mysqli_num_rows($result);
echo $check;
	if(mysqli_num_rows($result)){
		echo "<h1>ERROR: Player 1 has Already been Entered in the Database.</h1>";
	}else{
  
  $trrny = false;
 if(isset($_POST['tid'])){
    $ttrny= $_POST['tid'];
 }  
   echo $ttrny;
 
        $man1= false;
if(isset($_POST['man1'])){
    $man1= $_POST['man1'];
 } 


       $front1= false;
if(isset($_POST['front1'])){
    $front1= $_POST['front1'];
 } 
       $back1= false;
if(isset($_POST['back1'])){
    $back1= $_POST['back1'];
 }  
               $tmid= false;
if(isset($_POST['tmid'])){
    $tmid= $_POST['tmid'];
 }  
            $card1= false;
if(isset($_POST['card1'])){
    $card1= $_POST['card1'];
 } 
      $teetime1 = false;
if(isset($_POST['teetime1'])){
    $teetime1= $_POST['teetime1'];
 }
       $status1 = false;
if(isset($_POST['status1'])){
    $status= $_POST['status1'];
 }  

 
 $total1 = $front1 + $back1;
  

    

$sql="INSERT INTO `scores` (pid, tmid, teetime, man,
card, tid, front, back, total, uid, round, status)
VALUES
('$_POST[1]','$tmid','$_POST[teetime1]',
'$man1',
'$card1','$_POST[tid]', 
'$front1','$back1',
'$total1', '$data[id]', $round, '$_POST[status1]')";
if (!mysqli_query($conn,$sql))
  {
  die('Error: Player 1 Insert' . mysqli_error($conn));
  }  }} }




   ?>
   
   
   <?php
  
    


  //Inserts Player 2 into tournament
  
  $golfer2 = isset($_POST['2']) ? $_POST['2'] : '';	
	    if( !empty($golfer2) ) {
$i=0;


$sql = "SELECT `id` FROM `tournament` WHERE `id` = '".$_POST['tid']."' LIMIT 1";
if(@!$result = mysqli_query($conn,$sql))
	echo 'PHP LINE: '.__LINE__.'. Epic fail.'. mysqli_error();
$tid = mysqli_fetch_assoc($result);

$sql1 = "SELECT `id` FROM `users` WHERE `email` = '$_SESSION[email]' LIMIT 1";
if(@!$result = mysqli_query($conn,$sql1))
	echo 'PHP LINE: '.__LINE__.'. Epic fail.'. mysqli_error();
$uid = mysqli_fetch_assoc($result);

//print_r ($uid); 
         //check and see if already in tournament
$sql = "SELECT scores.pid FROM scores WHERE pid = '$_POST[2]' AND tid = $tournament AND round = $round;";
if($result = mysqli_query($conn,$sql)){
$check = mysqli_num_rows($result);
echo $check;
	if(mysqli_num_rows($result)){
		echo "<h1>ERROR: Player 2 has Already been Entered in the Database.</h1>";
	}else{

 
    $man2 = false;
if(isset($_POST['man2'])){
    $man2= $_POST['man2'];
 } 

       $front2= false;
if(isset($_POST['front2'])){
    $front2= $_POST['front2'];
 } 
       $back2= false;
if(isset($_POST['back2'])){
    $back2= $_POST['back2'];
 }  
               $tmid= false;
if(isset($_POST['tmid'])){
    $tmid= $_POST['tmid'];
 }  
            $card2= false;
if(isset($_POST['card2'])){
    $card2= $_POST['card2'];
 } 
      $teetime2 = false;
if(isset($_POST['teetime2'])){
    $teetime2= $_POST['teetime2'];
 } 
 
 $total2 = $front2 + $back2;
  
  


    

$sql="INSERT INTO `scores` (pid, tmid, teetime, man,
card, tid, front, back, total, uid, round, status)
VALUES
('$_POST[2]','$tmid','$_POST[teetime2]',
'$man2',
'$card2','$_POST[tid]', 
'$front2','$back2',
'$total2', '$data[id]', $round, '$_POST[status2]')";
if (!mysqli_query($conn,$sql))
  {
  die('Error: Player 2 Insert' . mysqli_error($conn));
  }
   }} }


   ?>
   
   
   <?php
  
    
 

  //Inserts Player 3 into tournament
  
  $golfer3 = isset($_POST['3']) ? $_POST['3'] : '';	
	    if( !empty($golfer3) ) {
$i=0;

$tournament = "$_POST[tid]";

$sql = "SELECT `id` FROM `tournament` WHERE `id` = '".$_POST['tid']."' LIMIT 1";
if(@!$result = mysqli_query($conn,$sql))
	echo 'PHP LINE: '.__LINE__.'. Epic fail.'. mysqli_error();
$tid = mysqli_fetch_assoc($result);

$sql1 = "SELECT `id` FROM `users` WHERE `email` = '$_SESSION[email]' LIMIT 1";
if(@!$result = mysqli_query($conn,$sql1))
	echo 'PHP LINE: '.__LINE__.'. Epic fail.'. mysqli_error();
$uid = mysqli_fetch_assoc($result);

//print_r ($uid);
 //check and see if already in tournament
$sql = "SELECT scores.pid FROM scores WHERE pid = '$_POST[3]' AND tid = $tournament AND round = $round;";
if($result = mysqli_query($conn,$sql)){
$check = mysqli_num_rows($result);
echo $check;
	if(mysqli_num_rows($result)){
		echo "<h1>ERROR: Player 3 has Already been Entered in the Database.</h1>";
	}else{

 

    $man3 = false;
if(isset($_POST['man3'])){
    $man3= $_POST['man3'];
 } 

       $front3= false;
if(isset($_POST['front3'])){
    $front3= $_POST['front3'];
 } 
       $back3= false;
if(isset($_POST['back3'])){
    $back3= $_POST['back3'];
 }  
               $tmid= false;
if(isset($_POST['tmid'])){
    $tmid= $_POST['tmid'];
 }  
            $card3= false;
if(isset($_POST['card3'])){
    $card3= $_POST['card3'];
 } 
      $teetime3 = false;
if(isset($_POST['teetime3'])){
    $teetime3= $_POST['teetime3'];
 } 
 
 $total3 = $front3 + $back3;
  


    

$sql="INSERT INTO `scores` (pid, tmid, teetime, man,
card, tid, front, back, total, uid, round, status)
VALUES
('$_POST[3]','$tmid','$_POST[teetime3]',
'$man3',
'$card3','$_POST[tid]', 
'$front3','$back3',
'$total3', '$data[id]', $round, '$_POST[status3]')";
if (!mysqli_query($conn,$sql))
  {
  die('Error: Player 3 Insert' . mysqli_error($conn));
  }
  }} }


   ?>
   
   
   <?php
  
    

  

  //Inserts Player 4 into tournament
  
  $golfer4 = isset($_POST['4']) ? $_POST['4'] : '';	
	    if( !empty($golfer4) ) {
$i=0;

$tournament = "$_POST[tid]";

$sql = "SELECT `id` FROM `tournament` WHERE `id` = '".$_POST['tid']."' LIMIT 1";
if(@!$result = mysqli_query($conn,$sql))
	echo 'PHP LINE: '.__LINE__.'. Epic fail.'. mysqli_error();
$tid = mysqli_fetch_assoc($result);

$sql1 = "SELECT `id` FROM `users` WHERE `email` = '$_SESSION[email]' LIMIT 1";
if(@!$result = mysqli_query($conn,$sql1))
	echo 'PHP LINE: '.__LINE__.'. Epic fail.'. mysqli_error();
$uid = mysqli_fetch_assoc($result);

//print_r ($uid); 

 //check and see if already in tournament
$sql = "SELECT scores.pid FROM scores WHERE pid = '$_POST[4]' AND tid = $tournament AND round = $round;";
if($result = mysqli_query($conn,$sql)){
$check = mysqli_num_rows($result);
echo $check;
	if(mysqli_num_rows($result)){
		echo "<h1>ERROR: Player 4 has Already been Entered in the Database.</h1>";
	}else{

 


     $man4= false;
if(isset($_POST['man4'])){
    $man4= $_POST['man4'];
 } 
 
       $front4= false;
if(isset($_POST['front4'])){
    $front4= $_POST['front4'];
 } 
       $back4= false;
if(isset($_POST['back4'])){
    $back4= $_POST['back4'];
 }  
               $tmid= false;
if(isset($_POST['tmid'])){
    $tmid= $_POST['tmid'];
 }  
            $card4= false;
if(isset($_POST['card4'])){
    $card4= $_POST['card4'];
 } 
         $teetime4 = false;
if(isset($_POST['teetime4'])){
    $teetime4= $_POST['teetime4'];
 } 
 
 $total4 = $front4 + $back4;
  



    
$sql="INSERT INTO `scores` (pid, tmid, teetime, man,
card, tid, front, back, total, uid, round, status)
VALUES
('$_POST[4]','$tmid','$_POST[teetime4]',
'$man4',
'$card4','$_POST[tid]', 
'$front4','$back4',
'$total4', '$data[id]', $round, '$_POST[status4]')";
if (!mysqli_query($conn,$sql))
  {
  die('Error: Player 4 Insert' . mysqli_error($conn));
  }
  }} }

   ?>
   
   
   <?php
  
    


  //Inserts Player 5 into tournament
  
  $golfer5 = isset($_POST['5']) ? $_POST['5'] : '';	
	    if( !empty($golfer5) ) {
$i=0;

$tournament = "$_POST[tid]";

$sql = "SELECT `id` FROM `tournament` WHERE `id` = '".$_POST['tid']."' LIMIT 1";
if(@!$result = mysqli_query($conn,$sql))
	echo 'PHP LINE: '.__LINE__.'. Epic fail.'. mysqli_error();
$tid = mysqli_fetch_assoc($result);

$sql1 = "SELECT `id` FROM `users` WHERE `email` = '$_SESSION[email]' LIMIT 1";
if(@!$result = mysqli_query($conn,$sql1))
	echo 'PHP LINE: '.__LINE__.'. Epic fail.'. mysqli_error();
$uid = mysqli_fetch_assoc($result);

//print_r ($uid); 
  
   //check and see if already in tournament
$sql = "SELECT scores.pid FROM scores WHERE pid = '$_POST[5]' AND tid = $tournament AND round = 2;";
if($result = mysqli_query($conn,$sql)){
$check = mysqli_num_rows($result);
echo $check;
	if(mysqli_num_rows($result)){
		echo "<h1>ERROR: Player 5 has Already been Entered in the Database.</h1>";
	}else{

 
    $man5 = false;
if(isset($_POST['man5'])){
    $man5= $_POST['man5'];
   }
       $front5= false;
if(isset($_POST['front5'])){
    $front5= $_POST['front5'];
 } 
       $back5= false;
if(isset($_POST['back5'])){
    $back5= $_POST['back5'];
 }  
               $tmid= false;
if(isset($_POST['tmid'])){
    $tmid= $_POST['tmid'];
 }  
            $card5= false;
if(isset($_POST['card5'])){
    $card5= $_POST['card5'];
 } 
 
    $teetime5 = false;
if(isset($_POST['teetime5'])){
    $teetime5= $_POST['teetime5'];
 } 
    $total5 = $front5 + $back5;

$sql="INSERT INTO `scores` (pid, tmid, teetime, man,
card, tid, front, back, total, uid, round, status)
VALUES
('$_POST[5]','$tmid','$_POST[teetime5]',
'$man5',
'$card5','$_POST[tid]', 
'$front5','$back5',
'$total5', '$data[id]', $round, '$_POST[status5]')";
if (!mysqli_query($conn,$sql))
  {
  die('Error: Player 5 Insert' . mysqli_error($conn));
  }
  }} }


   ?>
       <?php
  
    


  //Inserts Player 6 into tournament
  
  $golfer6 = isset($_POST['6']) ? $_POST['6'] : '';	
	    if( !empty($golfer6) ) {
$i=0;

$tournament = "$_POST[tid]";
$noteam6 = "$_POST[noteam6]";

$sql = "SELECT `id` FROM `tournament` WHERE `id` = '".$_POST['tid']."' LIMIT 1";
if(@!$result = mysqli_query($conn,$sql))
	echo 'PHP LINE: '.__LINE__.'. Epic fail.'. mysqli_error();
$tid = mysqli_fetch_assoc($result);

$sql1 = "SELECT `id` FROM `users` WHERE `email` = '$_SESSION[email]' LIMIT 1";
if(@!$result = mysqli_query($conn,$sql1))
	echo 'PHP LINE: '.__LINE__.'. Epic fail.'. mysqli_error();
$uid = mysqli_fetch_assoc($result);

$sql = "SELECT scores.pid FROM scores WHERE pid = '$_POST[6]' AND tid = $tournament AND round = 2;";
if($result = mysqli_query($conn,$sql)){
$check = mysqli_num_rows($result);
echo $check;
	if(mysqli_num_rows($result)){
		echo "<h1>ERROR: Player 6 has Already been Entered in the Database.</h1>";
	}else{

 

    $man6 = false;
if(isset($_POST['man6'])){
    $man6= $_POST['man6'];
    }
       $front6= false;
if(isset($_POST['front6'])){
    $front6= $_POST['front6'];
 } 
       $back6= false;
if(isset($_POST['back6'])){
    $back6= $_POST['back6'];
 }  
               $tmid= false;
if(isset($_POST['tmid'])){
    $tmid= $_POST['tmid'];
 }  
            $card6= false;
if(isset($_POST['card6'])){
    $card6= $_POST['card6'];
 } 
 
    $teetime6 = false;
if(isset($_POST['teetime6'])){
    $teetime6= $_POST['teetime6'];
 } 
 
 $total6 = $front6 + $back6;
  


    
$sql="INSERT INTO `scores` (pid, tmid, teetime, man,
card, tid, front, back, total, uid, round, status)
VALUES
('$_POST[6]','$tmid','$_POST[teetime6]',
'$man6',
'$card6','$_POST[tid]', 
'$front6','$back6',
'$total6', '$data[id]', $round, '$_POST[status6]')";
if (!mysqli_query($conn,$sql))
  {
  die('Error: Player 6 Insert' . mysqli_error($conn));
  }
  }} }


   ?>
   
    <head>
<title>Kansas Golf</title>
<meta charset="utf-8"> 
<META HTTP-EQUIV="Refresh" CONTENT="2;URL=selectteamg.php?id=<?php echo $ttrny; ?>">
</head>
   
		  </html>
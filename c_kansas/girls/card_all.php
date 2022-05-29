<!DOCTYPE html>  
<head>
  <title>KansasGolfScores.com</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords" content="High School, Golf, Scores, Tournaments">
 <link rel="stylesheet" href="../../includes/bootstrap.min.css">      
    <link rel="stylesheet" href="../../includes/w3.css"> 
  <script src="../../global_style/js/jquery-2.1.4.min.js"></script>
  <script src="../../global_style/js/bootstrap.min.js"></script>

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
include_once("analyticstracking.php"); 
//include_once("cards_menu.php");
 ?> 

<?php

//Find Card Number for Player Selected

if(!empty($_GET['card']))
{
$card = $_GET['card'];
}
//echo $card; 
?>

<body>

  <?php
      
        
    $sql = "SELECT id FROM users WHERE users.email = '$_SESSION[email]'"; 
			$result = mysqli_query($conn,$sql) or die(mysqli_error());
				while($row = mysqli_fetch_array( $result )) {
			$userid = $row['id']; }
      //echo $userid;
	  
	  //Find the last tournament created by this user, current tournament being ran.
  $sql = "SELECT max(id) as id, uid from tournament WHERE uid = '$userid'"; 
			$result = mysqli_query($conn,$sql) or die(mysqli_error());
				while($row = mysqli_fetch_array( $result )) {
			$trny = $row['id']; }
      //echo $trny;


//Find all the players on the card clicked on.
$sql = "SELECT scores.*, scores.front as front, scores.back as back, scores.total as total,
roster.pid, roster.player_1, team.tmid, team.school from scores
INNER JOIN tournament ON scores.tid = tournament.id
LEFT JOIN roster on scores.pid = roster.pid
LEFT JOIN team on scores.tmid = team.tmid
WHERE tournament.id = '$trny'";

      //echo $card;
     //echo $trny;
        
             
	$result = mysqli_query($conn,$sql) or die(mysqli_error());
					 echo "<div class='CSSTableGenerator' >";
			     echo "<table border='1'  >";
					 echo '<tr><th>Player</th><th>Team</th><th>Front</th><th>Back</th><th>Total</th></tr>';
// keeps getting the next row until there are no more to get
while($row = mysqli_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
  echo '<a href="card.php?pid='.$row['pid'].'&'.card.'='.$card.'">'.$row['player_1'].'</font></a>';
	echo '</td><td><a href="messageteam.php?tmid='.$row['tmid'].'">'.$row['school'].'</a></td><td>';
	echo $row['front'];
	echo "</td><td>"; 
	echo $row['back'];
	echo "</td><td>";
	echo $row['total'];
	echo "</td>";
} 
			echo "</table>";
   //echo $userid;
//  This works   
$sql = "SELECT * FROM `tournament` WHERE tournament.uid = '$userid' ORDER by `id` desc LIMIT 0 , 1 ";
	if($results = @mysqli_query($conn,$sql))
			{
		$data = mysqli_fetch_assoc($results);
  //echo $data['uid'];
    
			} else {
		die('Error: '.mysqli_error());
			}
    echo "Click on golfers name, then update scores and click Enter Scores<br>"; 
    echo "<h2>______________________Card $card</h2>" ;
    

    ?>
    
    
    
    
    	<?php 
if($_POST['submit'] == "Enter Scores")
{
//query the db for any scores not submitted to fill in to calculate accurate totals
$sql = "SELECT * FROM `scores` WHERE `pid` = '".$_POST['pid']."' AND `tid` = '".$_POST['tid']."' LIMIT 1";
$result = mysqli_query($conn,$sql);
$player_exists = mysqli_num_rows($result);
$scores = mysqli_fetch_assoc($result);
$one = ($_POST[dq]) ? $_POST[dq] : $scores['dq'];
$one = ($_POST[hole1]) ? $_POST[hole1] : $scores['hole1'];
$two = ($_POST[hole2]) ? $_POST[hole2] : $scores['hole2'];
$three = ($_POST[hole3]) ? $_POST[hole3] : $scores['hole3'];
$four = ($_POST[hole4]) ? $_POST[hole4] : $scores['hole4'];
$five = ($_POST[hole5]) ? $_POST[hole5] : $scores['hole5'];
$six = ($_POST[hole6]) ? $_POST[hole6] : $scores['hole6'];
$seven = ($_POST[hole7]) ? $_POST[hole7] : $scores['hole7'];
$eight = ($_POST[hole8]) ? $_POST[hole8] : $scores['hole8'];
$nine = ($_POST[hole9]) ? $_POST[hole9] : $scores['hole9'];
$ten = ($_POST[hole10]) ? $_POST[hole10] : $scores['hole10'];
$eleven = ($_POST[hole11]) ? $_POST[hole11] : $scores['hole11'];
$twelve = ($_POST[hole12]) ? $_POST[hole12] : $scores['hole12'];
$thirteen = ($_POST[hole13]) ? $_POST[hole13] : $scores['hole13'];
$fourteen = ($_POST[hole14]) ? $_POST[hole14] : $scores['hole14'];
$fifteen = ($_POST[hole15]) ? $_POST[hole15] : $scores['hole15'];
$sixteen = ($_POST[hole16]) ? $_POST[hole16] : $scores['hole16'];
$seventeen = ($_POST[hole17]) ? $_POST[hole17] : $scores['hole17'];
$eighteen = ($_POST[hole18]) ? $_POST[hole18] : $scores['hole18'];

$_POST['front'] = $one + $two + $three + $four + $five + $six + $seven + $eight + $nine;
$_POST['back'] = $ten + $eleven + $twelve + $thirteen + $fourteen + $fifteen + $sixteen + $seventeen + $eighteen;
$_POST['last6'] = $thirteen + $fourteen + $fifteen + $sixteen + $seventeen + $eighteen;
$_POST['last3'] = $sixteen + $seventeen + $eighteen;
$_POST['total'] = $_POST['front'] + $_POST['back'];
if($player_exists != 1)
{
echo '<h2><font color=red>Cannot find the player, team, and tournament combination you specified</font></h2>';
} else {
	echo '<left><h3>! Scores Updated Successfully!</h3>';
	echo "<br>"; 
	echo '<font size="16">Front--'.$_POST['front'].'</font>' ;
	echo '<font size="16">Back--'.$_POST['back'].'</font>' ;
	echo '<font size="16">Total--'.$_POST['total'].'</font>' ;
}

	
	
$i=0;

$sql="UPDATE `scores` SET 
".(( !$_POST['dq'] ) ? "" : "`dq` = '".$_POST[dq]."', ")."
".(( !$_POST['hole1'] ) ? "" : "`hole1` = '".$_POST[hole1]."', ")."
".(( !$_POST['hole2'] ) ? "" : "`hole2` = '".$_POST[hole2]."', ")."
".(( !$_POST['hole3'] ) ? "" : "`hole3` = '".$_POST[hole3]."', ")."
".(( !$_POST['hole4'] ) ? "" : "`hole4` = '".$_POST[hole4]."', ")."
".(( !$_POST['hole5'] ) ? "" : "`hole5` = '".$_POST[hole5]."', ")."
".(( !$_POST['hole6'] ) ? "" : "`hole6` = '".$_POST[hole6]."', ")."
".(( !$_POST['hole7'] ) ? "" : "`hole7` = '".$_POST[hole7]."', ")."
".(( !$_POST['hole8'] ) ? "" : "`hole8` = '".$_POST[hole8]."', ")."
".(( !$_POST['hole9'] ) ? "" : "`hole9` = '".$_POST[hole9]."', ")."
".(( !$_POST['hole10'] ) ? "" : "`hole10` = '".$_POST[hole10]."', ")."
".(( !$_POST['hole11'] ) ? "" : "`hole11` = '".$_POST[hole11]."', ")."
".(( !$_POST['hole12'] ) ? "" : "`hole12` = '".$_POST[hole12]."', ")."
".(( !$_POST['hole13'] ) ? "" : "`hole13` = '".$_POST[hole13]."', ")."
".(( !$_POST['hole14'] ) ? "" : "`hole14` = '".$_POST[hole14]."', ")."
".(( !$_POST['hole15'] ) ? "" : "`hole15` = '".$_POST[hole15]."', ")."
".(( !$_POST['hole16'] ) ? "" : "`hole16` = '".$_POST[hole16]."', ")."
".(( !$_POST['hole17'] ) ? "" : "`hole17` = '".$_POST[hole17]."', ")."
".(( !$_POST['hole18'] ) ? "" : "`hole18` = '".$_POST[hole18]."', ")."
".(( !$_POST['front'] ) ? "" : "`front` = '".$_POST[front]."', ")."
".(( !$_POST['back'] ) ? "" : "`back` = '".$_POST[back]."', ")."
".(( !$_POST['total'] ) ? "" : "`total` = '".$_POST[total]."', ")."
".(( !$_POST['last6'] ) ? "" : "`last6` = '".$_POST[last6]."', ")."
".(( !$_POST['last3'] ) ? "" : "`last3` = '".$_POST[last3]."', ")."
".(( !$_POST['card'] ) ? "" : "`card` = '".$_POST[card]."', ")."

`spam` = '1'


WHERE `pid` = '".$_POST['pid']."' AND `tid` = '".$_POST['tid']."' AND `tmid` = '".$_POST['tmid']."'";

if (!mysqli_query($conn,$sql))
  {
  die('Error: ' . mysqli_error());
  }


  $sql="UPDATE `virtual` SET 
".(( !$_POST['pid'] ) ? "" : "`pid` = '".$_POST[pid]."', ")."
".(( !$_POST['tmid'] ) ? "" : "`tmid` = '".$_POST[tmid]."', ")."
".(( !$_POST['total'] ) ? "" : "`total` = '".$_POST[total]."', ")."
`spam` = '1'


WHERE `pid` = '".$_POST['pid']."' AND `id` = id AND `tmid` = '".$_POST['tmid']."' AND `jv` <> '".yes."' ";

if (!mysqli_query($conn,$sql))
  {
  die('Error: ' . mysqli_error());
  }
}


$sql = " SELECT * FROM `tournament` WHERE uid = '$userid' ORDER by `id` desc LIMIT 0 , 1 ";
if($results = @mysqli_query($conn,$sql))
{
$data = mysqli_fetch_assoc($results);

} else {
die('Error: '.mysqli_error());
}




?>












<?php


?>

  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    
Name: <input type="varchar" name="pid_1"  
value="<?php 
//Get number of Team to Search For.
  if(!empty($_GET['pid']))
    {
        $pid = $_GET['pid'];
    }
//Submit Query to MySql Database
$sql = "SELECT scores.tmid, scores.pid, roster.pid, 
      roster.player_1, scores.pid 
      FROM scores
      INNER JOIN `roster` ON scores.pid = roster.pid
      WHERE scores.pid = '$pid' LIMIT 1";
  $result = mysqli_query($conn,$sql)
  or die ('Error in Query Try Again:--' . mysqli_error()); 
  while($row = mysqli_fetch_array( $result )) 
    {
      echo $row['player_1']; 
    }
?>"
size="26"/>
NameID: <input type="varchar" name="pid"  
value="<?php 
//Get number of Team to Search For.
  if(!empty($_GET['pid']))
    {
        $pid = $_GET['pid'];
    }
//Submit Query to MySql Database
$sql = "SELECT scores.tmid, scores.pid, roster.pid, 
      roster.player_1, scores.pid 
      FROM scores
      INNER JOIN `roster` ON scores.pid = roster.pid
      WHERE scores.pid = '$pid' LIMIT 1";
  $result = mysqli_query($conn,$sql)
  or die ('Error in Query Try Again:--' . mysqli_error()); 
  while($row = mysqli_fetch_array( $result )) 
    {
      echo $row['pid']; 
    }
?>"
size="3"/> 




Team: <input type="varchar" name="tmid_1" size="26" 
value="<?php 
//Get number of Team to Search For.
  if(!empty($_GET['pid']))
    {
        $pid = $_GET['pid'];
    }
//Submit Query to MySql Database
$sql = "SELECT scores.tmid, scores.pid, team.tmid, 
      team.school, scores.pid 
      FROM scores
      INNER JOIN `team` ON scores.tmid = team.tmid
      WHERE pid = '$pid' LIMIT 1";
  $result = mysqli_query($conn,$sql)
  or die ('Error in Query Try Again:--' . mysqli_error()); 
  while($row = mysqli_fetch_array( $result )) 
    {
      echo $row['school']; 
    }
?>"/>

TeamID: <input type="varchar" name="tmid" size="3" 
value="<?php 
//Get number of Team to Search For.
  if(!empty($_GET['pid']))
    {
        $pid = $_GET['pid'];
    }
//Submit Query to MySql Database
$sql = "SELECT scores.tmid, scores.pid, team.tmid, 
      team.school, scores.pid 
      FROM scores
      INNER JOIN `team` ON scores.tmid = team.tmid
      WHERE pid = '$pid' LIMIT 1";
  $result = mysqli_query($conn,$sql)
  or die ('Error in Query Try Again:--' . mysqli_error()); 
  while($row = mysqli_fetch_array( $result )) 
    {
      echo $row['tmid']; 
    }
?>"/>
   <tr>	<br>
                                                                              
DQ:    <input type="checkbox" name="dq" value="dq"/>  

 
                                                               
		

Date: <input type="varchar" name="date" size="9" value="<?php echo $data['date']; ?>"/>
Trny ID: <input type="varchar" name="id" size="4" value="<?php echo $data['id']; ?>"/>
Tournament ID: <input type="varchar" name="tid" size="3" value="<?php echo $data['id']; ?>"/> 
Tournament Name: <input type="varchar" name="tournament" size="17" value="<?php echo $data['tournament']; ?>"/>     






<table width="50" border="1">
  <tr>
    <td><div align="center" >Hole - 1 <input type="int" name="hole1" size="4" 
    
    
value="<?php //Get number of Team to Search For.

  
  if(!empty($_GET['pid']))
    {
      $pid = $_GET['pid'];
    }
    //echo $pid;

//Submit Query to MySql Database
  $sql = "SELECT scores.hole1, scores.tid 
  FROM scores 
  INNER JOIN tournament on scores.tid = tournament.id
  WHERE scores.tid = '$trny' AND pid = '$pid' LIMIT 1";
  $result = mysqli_query($conn,$sql)
    or die ('Error in Query Try Again:--' . mysqli_error()); 
        while($row = mysqli_fetch_array( $result )) {
    echo $row['hole1']; 
    //echo $trny;
    //echo $name;
}?>"/>    
    
 
    
     </div></td>
    <td><div align="center" >Hole - 2 <input type="int" name="hole2" size="4" 
    
    
value="<?php //Get number of Team to Search For.
  if(!empty($_GET['name']))
    {
      $pid = $_GET['pid'];
    }
//Submit Query to mysqli Database
  $sql = "SELECT scores.hole2, scores.tid 
  FROM scores 
  INNER JOIN tournament on scores.tid = tournament.id
  WHERE scores.tid = '$trny' AND pid = '$pid' LIMIT 1";
  $result = mysqli_query($conn,$sql)
    or die ('Error in Query Try Again:--' . mysqli_error()); 
        while($row = mysqli_fetch_array( $result )) {
    echo $row['hole2']; 
}?>"/> 


</div></td>
    <td><div align="center" >Hole - 3 <input type="int" name="hole3" size="4" 
    
value="<?php //Get number of Team to Search For.
  if(!empty($_GET['pid']))
    {
      $pid = $_GET['pid'];
    }
//Submit Query to mysqli Database
   $sql = "SELECT scores.hole3, scores.tid 
  FROM scores 
  INNER JOIN tournament on scores.tid = tournament.id
  WHERE scores.tid = '$trny' AND pid = '$pid' LIMIT 1";
  $result = mysqli_query($conn,$sql)
    or die ('Error in Query Try Again:--' . mysqli_error()); 
        while($row = mysqli_fetch_array( $result )) {
    echo $row['hole3']; 
}?>"/> 

    </div></td>
    
    
    
</tr><tr>



  <tr>
    <td><div align="center" >Hole - 4 <input type="int" name="hole4" size="4" 
    
    
value="<?php //Get number of Team to Search For.
  if(!empty($_GET['pid']))
    {
      $pid = $_GET['pid'];
    }
//Submit Query to mysqli Database
  $sql = "SELECT scores.hole4, scores.tid 
  FROM scores 
  INNER JOIN tournament on scores.tid = tournament.id
  WHERE scores.tid = '$trny' AND pid = '$pid' LIMIT 1";
  $result = mysqli_query($conn,$sql)
    or die ('Error in Query Try Again:--' . mysqli_error()); 
        while($row = mysqli_fetch_array( $result )) {
    echo $row['hole4']; 
}?>"/>    
    
    
    
     </div></td>
    <td><div align="center" >Hole - 5 <input type="int" name="hole5" size="4" 
    
    
value="<?php //Get number of Team to Search For.
  if(!empty($_GET['pid']))
    {
      $pid = $_GET['pid'];
    }
//Submit Query to mysqli Database
  $sql = "SELECT scores.hole5, scores.tid 
  FROM scores 
  INNER JOIN tournament on scores.tid = tournament.id
  WHERE scores.tid = '$trny' AND pid = '$pid' LIMIT 1";
  $result = mysqli_query($conn,$sql)
    or die ('Error in Query Try Again:--' . mysqli_error()); 
        while($row = mysqli_fetch_array( $result )) {
    echo $row['hole5']; 
}?>"/> 


</div></td>
    <td><div align="center" >Hole - 6 <input type="int" name="hole6" size="4" 
    
value="<?php //Get number of Team to Search For.
  if(!empty($_GET['pid']))
    {
      $pid = $_GET['pid'];
    }
//Submit Query to mysqli Database
  $sql = "SELECT scores.hole6, scores.tid 
  FROM scores 
  INNER JOIN tournament on scores.tid = tournament.id
  WHERE scores.tid = '$trny' AND pid = '$pid' LIMIT 1";
  $result = mysqli_query($conn,$sql)
    or die ('Error in Query Try Again:--' . mysqli_error()); 
        while($row = mysqli_fetch_array( $result )) {
    echo $row['hole6']; 
}?>"/> 

    </div></td>
    
    
    
</tr><tr>
   
   
   
     <tr>
    <td><div align="center" >Hole - 7 <input type="int" name="hole7" size="4" 
    
    
value="<?php //Get number of Team to Search For.
  if(!empty($_GET['pid']))
    {
      $pid = $_GET['pid'];
    }
//Submit Query to mysqli Database
  $sql = "SELECT scores.hole7, scores.tid 
  FROM scores 
  INNER JOIN tournament on scores.tid = tournament.id
  WHERE scores.tid = '$trny' AND pid = '$pid' LIMIT 1";
  $result = mysqli_query($conn,$sql)
    or die ('Error in Query Try Again:--' . mysqli_error()); 
        while($row = mysqli_fetch_array( $result )) {
    echo $row['hole7']; 
}?>"/>    
    
    
    
     </div></td>
    <td><div align="center" >Hole - 8 <input type="int" name="hole8" size="4" 
    
    
value="<?php //Get number of Team to Search For.
  if(!empty($_GET['pid']))
    {
      $pid = $_GET['pid'];
    }
//Submit Query to mysqli Database
  $sql = "SELECT scores.hole8, scores.tid 
  FROM scores 
  INNER JOIN tournament on scores.tid = tournament.id
  WHERE scores.tid = '$trny' AND pid = '$pid' LIMIT 1";
  $result = mysqli_query($conn,$sql)
    or die ('Error in Query Try Again:--' . mysqli_error()); 
        while($row = mysqli_fetch_array( $result )) {
    echo $row['hole8']; 
}?>"/> 


</div></td>
    <td><div align="center" >Hole - 9 <input type="int" name="hole9" size="4" 
    
value="<?php //Get number of Team to Search For.
  if(!empty($_GET['pid']))
    {
      $pid = $_GET['pid'];
    }
//Submit Query to mysqli Database
  $sql = "SELECT scores.hole9, scores.tid 
  FROM scores 
  INNER JOIN tournament on scores.tid = tournament.id
  WHERE scores.tid = '$trny' AND pid = '$pid' LIMIT 1";
  $result = mysqli_query($conn,$sql)
    or die ('Error in Query Try Again:--' . mysqli_error()); 
        while($row = mysqli_fetch_array( $result )) {
    echo $row['hole9']; 
}?>"/> 

    </div></td>
    
    
    
    
</tr><tr>





  <tr>
    <td><div align="center" >Hole - 10 <input type="int" name="hole10" size="4" 
    
    
value="<?php //Get number of Team to Search For.
  if(!empty($_GET['pid']))
    {
      $pid = $_GET['pid'];
    }
//Submit Query to mysqli Database
  $sql = "SELECT scores.hole10, scores.tid 
  FROM scores 
  INNER JOIN tournament on scores.tid = tournament.id
  WHERE scores.tid = '$trny' AND pid = '$pid' LIMIT 1";
  $result = mysqli_query($conn,$sql)
    or die ('Error in Query Try Again:--' . mysqli_error()); 
        while($row = mysqli_fetch_array( $result )) {
    echo $row['hole10']; 
}?>"/>    
    
    
    
     </div></td>
    <td><div align="center" >Hole - 11 <input type="int" name="hole11" size="4" 
    
    
value="<?php //Get number of Team to Search For.
  if(!empty($_GET['pid']))
    {
      $pid = $_GET['pid'];
    }
//Submit Query to mysqli Database
   $sql = "SELECT scores.hole11, scores.tid 
  FROM scores 
  INNER JOIN tournament on scores.tid = tournament.id
  WHERE scores.tid = '$trny' AND pid = '$pid' LIMIT 1";
  $result = mysqli_query($conn,$sql)
    or die ('Error in Query Try Again:--' . mysqli_error()); 
        while($row = mysqli_fetch_array( $result )) {
    echo $row['hole11']; 
}?>"/> 


</div></td>
    <td><div align="center" >Hole - 12 <input type="int" name="hole12" size="4" 
    
value="<?php //Get number of Team to Search For.
  if(!empty($_GET['pid']))
    {
      $pid = $_GET['pid'];
    }
//Submit Query to mysqli Database
  $sql = "SELECT scores.hole12, scores.tid 
  FROM scores 
  INNER JOIN tournament on scores.tid = tournament.id
  WHERE scores.tid = '$trny' AND pid = '$pid' LIMIT 1";
  $result = mysqli_query($conn,$sql)
    or die ('Error in Query Try Again:--' . mysqli_error()); 
        while($row = mysqli_fetch_array( $result )) {
    echo $row['hole12']; 
}?>"/> 

    </div></td>
    
    
    
    
</tr><tr>



  <tr>
    <td><div align="center" >Hole - 13 <input type="int" name="hole13" size="4" 
    
    
value="<?php //Get number of Team to Search For.
  if(!empty($_GET['pid']))
    {
      $pid = $_GET['pid'];
    }
//Submit Query to mysqli Database
  $sql = "SELECT scores.hole13, scores.tid 
  FROM scores 
  INNER JOIN tournament on scores.tid = tournament.id
  WHERE scores.tid = '$trny' AND pid = '$pid' LIMIT 1";
  $result = mysqli_query($conn,$sql)
    or die ('Error in Query Try Again:--' . mysqli_error()); 
        while($row = mysqli_fetch_array( $result )) {
    echo $row['hole13']; 
}?>"/>    
    
    
    
     </div></td>
    <td><div align="center" >Hole - 14 <input type="int" name="hole14" size="4" 
    
    
value="<?php //Get number of Team to Search For.
  if(!empty($_GET['pid']))
    {
      $pid = $_GET['pid'];
    }
//Submit Query to mysqli Database
  $sql = "SELECT scores.hole14, scores.tid 
  FROM scores 
  INNER JOIN tournament on scores.tid = tournament.id
  WHERE scores.tid = '$trny' AND pid = '$pid' LIMIT 1";
  $result = mysqli_query($conn,$sql)
    or die ('Error in Query Try Again:--' . mysqli_error()); 
        while($row = mysqli_fetch_array( $result )) {
    echo $row['hole14']; 
}?>"/> 


     </div></td>
    <td><div align="center" >Hole - 15 <input type="int" name="hole15" size="4" 
    
    
value="<?php //Get number of Team to Search For.
  if(!empty($_GET['pid']))
    {
      $pid = $_GET['pid'];
    }
//Submit Query to mysqli Database
  $sql = "SELECT scores.hole15, scores.tid 
  FROM scores 
  INNER JOIN tournament on scores.tid = tournament.id
  WHERE scores.tid = '$trny' AND pid = '$pid' LIMIT 1";
  $result = mysqli_query($conn,$sql)
    or die ('Error in Query Try Again:--' . mysqli_error()); 
        while($row = mysqli_fetch_array( $result )) {
    echo $row['hole15']; 
}?>"/>
    
    
    
    
</tr><tr>




  <tr>
    <td><div align="center" >Hole - 16 <input type="int" name="hole16" size="4" 
    
    
value="<?php //Get number of Team to Search For.
  if(!empty($_GET['pid']))
    {
      $pid = $_GET['pid'];
    }
//Submit Query to mysqli Database
  $sql = "SELECT scores.hole16, scores.tid 
  FROM scores 
  INNER JOIN tournament on scores.tid = tournament.id
  WHERE scores.tid = '$trny' AND pid = '$pid' LIMIT 1";
  $result = mysqli_query($conn,$sql)
    or die ('Error in Query Try Again:--' . mysqli_error()); 
        while($row = mysqli_fetch_array( $result )) {
    echo $row['hole16']; 
}?>"/>    
    
    
    
     </div></td>
    <td><div align="center" >Hole - 17 <input type="int" name="hole17" size="4" 
    
    
value="<?php //Get number of Team to Search For.
  if(!empty($_GET['pid']))
    {
      $pid = $_GET['pid'];
    }
//Submit Query to mysqli Database
  $sql = "SELECT scores.hole17, scores.tid 
  FROM scores 
  INNER JOIN tournament on scores.tid = tournament.id
  WHERE scores.tid = '$trny' AND pid = '$pid' LIMIT 1";
  $result = mysqli_query($conn,$sql)
    or die ('Error in Query Try Again:--' . mysqli_error()); 
        while($row = mysqli_fetch_array( $result )) {
    echo $row['hole17']; 
}?>"/> 


     </div></td>
    <td><div align="center" >Hole - 18 <input type="int" name="hole18" size="4" 
    
    
value="<?php //Get number of Team to Search For.
  if(!empty($_GET['pid']))
    {
      $pid = $_GET['pid'];
    }
//Submit Query to mysqli Database
  $sql = "SELECT scores.hole18, scores.tid 
  FROM scores 
  INNER JOIN tournament on scores.tid = tournament.id
  WHERE scores.tid = '$trny' AND pid = '$pid' LIMIT 1";
  $result = mysqli_query($conn,$sql)
    or die ('Error in Query Try Again:--' . mysqli_error()); 
        while($row = mysqli_fetch_array( $result )) {
    echo $row['hole18']; 
}?>"/>

    </div></td>

    
    
    
</tr>
  </table>
      <p>     


    <input name="submit" type="submit" value="Enter Scores" />  

      
      </p>



  <?php
  $sql = "SELECT max(id) as id from tournament"; 
			

	 
$result = mysqli_query($sql) or die(mysqli_error());

// keeps getting the next row until there are no more to get
while($row = mysqli_fetch_array( $result )) {

$trny = $row['id']; 
 
}
    ?>



     <div id="footer">

</div>
</div> 
</div>
</body>
</html>



<p><?php include("footer.php"); ?>&nbsp;</p>
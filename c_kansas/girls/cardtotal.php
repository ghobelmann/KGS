 <?php
 //authentication for coaches to get to their pages, not for public pages.

//include_once("headera.php");
include_once("databaseconnect.php"); 

 ?> <!DOCTYPE html>
<html lang="en">
<head>
  <title>KansasGolfScores.com</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> 
     <link rel="stylesheet" href="../../vendor/bootstrap/css/w3.css">    
  
      


 </head>  <body class="bg-secondary">
    <!-- Page Content -->
    <div class="container">
 
      <section class="bg-light"  class="text-primary" id="about">
        <div class="container">
            <div class="row">


            <!-- Columns are always 50% wide, on mobile and desktop -->

  <div class="col-md-12">
          
 
 
<?php

//Find Card Number for Player Selected

if(!empty($_GET['card']))
{
$card = $_GET['card'];
}
if(!empty($_GET['tid']))
{
$trny = $_GET['tid'];
}
//echo $trny; 
?>

<body>

  <?php
      
        include_once("cards_menutotal.php");


//Find all the players on the card clicked on.
$sql = "SELECT scores.*, scores.front as front, 
scores.back as back, scores.total as total,
roster.pid, roster.player_1, team.tmid, team.school from scores
INNER JOIN tournament ON scores.tid = tournament.id
LEFT JOIN roster on scores.pid = roster.pid
LEFT JOIN team on scores.tmid = team.tmid
WHERE scores.card = '$card' AND tournament.id = '$trny'";

      //echo $card;
     //echo $trny;
        
             
	$result = mysqli_query($conn,$sql) or die(mysqli_error());
				
			     echo "<table class='table'  >";
					 echo '<tr><th>Player</th><th>Team</th><th>Status</th><th>Front</th><th>Back</th><th>Total</th></tr>';
// keeps getting the next row until there are no more to get
while($row = mysqli_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
  echo '<a href="cardtotal.php?tid='.$trny.'&pid='.$row['pid'].'&'.card.'='.$card.'">'.$row['player_1'].'</font></a>';
	  echo "</td><td>";
    echo $row['school'];
    echo "</td><td>";
    echo $row['status'];
    echo "</td><td>";
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
$sql = "SELECT * FROM `tournament` WHERE tournament.id = '$trny' LIMIT 0 , 1 ";
	if($results = @mysqli_query($conn,$sql))
			{
		$data = mysqli_fetch_assoc($results);
  //echo $data['uid'];
    
			} else {
		die('Error: '.mysqli_error());
			}
    echo "Click on golfers name, then update scores and click Enter Scores<br>";
   echo "Status Codes: 1 = Varsity on a Team, 2 = Varsity No Team, 3 = JV, 4 = C team 5 = DQ, 6 = WD";

    echo "<h2>______________________Card $card</h2>" ;
    

    ?>
      
    
    
    
    
    
    
    
    
    
    	<?php 
if($_POST['submit'] == "Enter Scores")
{
//query the db for any scores not submitted to fill in to calculate accurate totals
$sql = "SELECT * FROM `scores` WHERE `pid` = '".$_POST['pid']."' 
AND `tid` = '".$_POST['tid']."' LIMIT 1";
$result = mysqli_query($conn,$sql);
$player_exists = mysqli_num_rows($result);
$scores = mysqli_fetch_assoc($result);

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
".(( !$_POST['status'] ) ? "" : "`status` = '".$_POST[status]."', ")."
".(( !$_POST['front'] ) ? "" : "`front` = '".$_POST[front]."', ")."
".(( !$_POST['back'] ) ? "" : "`back` = '".$_POST[back]."', ")."
".(( !$_POST['total'] ) ? "" : "`total` = '".$_POST[total]."', ")."
".(( !$_POST['card'] ) ? "" : "`card` = '".$_POST[card]."', ")."

`spam` = '1' 
WHERE `pid` = '".$_POST['pid']."' AND `tid` = '".$_POST['tid']."' AND `tmid` = '".$_POST['tmid']."'";


 ?>
         <meta http-equiv="Refresh" content="1; url=<?php echo $_SERVER['HTTP_REFERER'];?>"> 
            <?php
            
            
if (!mysqli_query($conn,$sql))
  {
  die('Error: ' . mysqli_error());
  }

}


$sql = " SELECT * FROM `tournament` WHERE id = '$trny' LIMIT 0 , 1 ";
if($results = @mysqli_query($conn,$sql))
{
$data = mysqli_fetch_assoc($results);

} else {
die('Error: Virtual '.mysqli_error());
}





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




Team: <input type="varchar" name="tmid_1" size="16" 
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
  or die ('Error in Query TMID Try Again:--' . mysqli_error()); 
  while($row = mysqli_fetch_array( $result )) 
    {
      echo $row['tmid']; 
    }
?>"/>
   <tr>	<br>
                                                                              

 
                                                               
		
Date: <input type="varchar" name="date" size="9" value="<?php echo $data['date']; ?>"/>
Trny ID: <input type="varchar" name="id" size="4" value="<?php echo $data['id']; ?>" />
 <input type="varchar" name="tid" size="3" value="<?php echo $data['id']; ?>" hidden/> 
Tournament Name: <input type="varchar" name="tournament" size="27" value="<?php echo $data['tournament']; ?>"/>  <br>   





<table class="table">
  <tr>
  
  
      <td><div align="center" >Status (DQ - WD - JV ) <input type="int" name="status" size="4" 
    
    
value="<?php //Get number of Team to Search For.

  
  if(!empty($_GET['pid']))
    {
      $pid = $_GET['pid'];
    }
    //echo $pid;

//Submit Query to MySql Database
  $sql = "SELECT scores.status, scores.tid 
  FROM scores 
  INNER JOIN tournament on scores.tid = tournament.id
  WHERE scores.tid = '$trny' AND pid = '$pid' LIMIT 1";
  $result = mysqli_query($conn,$sql)
    or die ('Error in Query Status Try Again:--' . mysqli_error()); 
        while($row = mysqli_fetch_array( $result )) {
    echo $row['status']; 
    //echo $trny;
    //echo $name;
}?>"/>    
    
 
    
     </div></td>
     
    <td><div align="center" >Front <input type="int" name="front" size="4" 
    
    
value="<?php //Get number of Team to Search For.

  
  if(!empty($_GET['pid']))
    {
      $pid = $_GET['pid'];
    }
    //echo $pid;

//Submit Query to MySql Database
  $sql = "SELECT scores.front, scores.tid 
  FROM scores 
  INNER JOIN tournament on scores.tid = tournament.id
  WHERE scores.tid = '$trny' AND pid = '$pid' LIMIT 1";
  $result = mysqli_query($conn,$sql)
    or die ('Error in Query Front 9 Try Again:--' . mysqli_error()); 
        while($row = mysqli_fetch_array( $result )) {
    echo $row['front']; 
    //echo $trny;
    //echo $name;
}?>"/>    
    
 
    
     </div></td>
    <td><div align="center" >Back <input type="int" name="back" size="4" 
    
    
value="<?php //Get number of Team to Search For.
  if(!empty($_GET['pid']))
    {
      $pid = $_GET['pid'];
    }
//Submit Query to mysqli Database
  $sql = "SELECT scores.back, scores.tid 
  FROM scores 
  INNER JOIN tournament on scores.tid = tournament.id
  WHERE scores.tid = '$trny' AND pid = '$pid' LIMIT 1";
  $result = mysqli_query($conn,$sql)
    or die ('Error in Query Back 9 Try Again:--' . mysqli_error()); 
        while($row = mysqli_fetch_array( $result )) {
    echo $row['back']; 
}?>"/> 



    </div></td>

    
    
    
</tr>
  </table>
      <p>     


    <input name="submit" type="submit" value="Enter Scores" />  
  
      </p>      
    </body></html>




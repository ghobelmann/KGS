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
include_once("cards_menutotal.php");
 ?> 
<head>
  <title>KansasGolfScores.com</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords" content="High School, Golf, Scores, Tournaments">
  <link rel="stylesheet" type="text/css" href="style/style_nopict.css">
  <script src="../../global_style/js/jquery-2.1.4.min.js"></script>
</head><body>	

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
WHERE scores.card = '$card' AND tournament.id = '$trny'";

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
  echo '<a href="cardtotal.php?pid='.$row['pid'].'&'.card.'='.$card.'">'.$row['player_1'].'</font></a>';
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
".(( !$_POST['front'] ) ? "" : "`front` = '".$_POST[front]."', ")."
".(( !$_POST['back'] ) ? "" : "`back` = '".$_POST[back]."', ")."
".(( !$_POST['total'] ) ? "" : "`total` = '".$_POST[total]."', ")."
".(( !$_POST['card'] ) ? "" : "`card` = '".$_POST[card]."', ")."

`spam` = '1'


WHERE `pid` = '".$_POST['pid']."' AND `tid` = '".$_POST['tid']."' AND `tmid` = '".$_POST['tmid']."'";

if (!mysqli_query($conn,$sql))
  {
  die('Error: ' . mysqli_error());
  }


  $sql="UPDATE `season` SET 
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
                                                                              
DQ:    <input type="checkbox" name="dq" value="dq"/>  

 
                                                               
		

Date: <input type="varchar" name="date" size="9" value="<?php echo $data['date']; ?>"/>
Trny ID: <input type="varchar" name="id" size="4" value="<?php echo $data['id']; ?>"/>
 <input type="varchar" name="tid" size="3" value="<?php echo $data['id']; ?>" hidden/> 
Tournament Name: <input type="varchar" name="tournament" size="27" value="<?php echo $data['tournament']; ?>"/>     






<table width="50" border="1">
  <tr>
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
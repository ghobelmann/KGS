<!DOCTYPE html>
<html lang="en">
<head>
<title>KansasGolfScores.com Enter Scores</title>

<meta charset="utf-8">
<link href="style/style_nopict.css" rel="stylesheet">



 
</head>

<?php

$card = 1; 
error_reporting(E_ERROR);
//INITIAL PAGE SETTINGS-----------
$page_title = "Enter Scores";
define("IN_GOLF_STATS", TRUE);
include_once("common.php");
include_once("headera.php");
include_once("cards_menumobile.php");

//Find user logged in to select their tournaments only
if(!$_SESSION['username'] | !isset($_SESSION['password']) | !$_SESSION['permissions'])
{
$logged_in = FALSE;
} else {
$logged_in = TRUE;
}
$user = $_SESSION['username'];


//Find Card Number for Player Selected
if(!empty($_GET['position']))
{
$position = $_GET['position'];
}
$card = $position; 
?>

<body>
             <?php include_once("analyticstracking.php") ?>
    
      <?php
	  
	  //Find the last tournament created by this user, current tournament being ran.
  $query = "SELECT max(id) as id, user from tournament WHERE tournament.user = '$_SESSION[username]'"; 
			$result = mysql_query($query) or die(mysql_error());
				while($row = mysql_fetch_array( $result )) {
			$trny = $row['id']; }



//Find all the players on the card clicked on.
$query = "SELECT scores.*, tournament.id, 
scores.front as front, scores.back as back, scores.total as total 
FROM scores, tournament WHERE scores.tournament = tournament.tournament 
AND scores.position = '$position' AND tournament.id = '$trny'";
	$result = mysql_query($query) or die(mysql_error());
					echo "<div class='CSSTableGenerator' >";
			echo "<table border='1'  >";
					echo '<tr><th>Player</th><th>Team</th><th>Front</th><th>Back</th><th>Total</th></tr>';
// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td>"; 
	echo '<a href="cardmobile.php?name='.$row['player_1'].'&'.position.'='.$position.'">'.$row['player_1'].'</font></a>';
	echo '</td><td><a href="messageteam.php?team='.$row['team'].'">'.$row['team'].'</a></td><td>';
	echo $row['front'];
	echo "</td><td>"; 
	echo $row['back'];
	echo "</td><td>";
	echo $row['total'];
	echo "</td>";
} 
			echo "</table>";
//
$query = " SELECT * FROM `tournament` WHERE tournament.user = '$_SESSION[username]' ORDER by `date` desc LIMIT 0 , 1 ";
	if($results = @mysql_query($query))
			{
		$data = mysql_fetch_assoc($results);
			} else {
		die('Error: '.mysql_error());
			}
    echo "Click on golfers name, then update scores and click Enter Scores<br>"; 
    echo "<h2>______________________Card $card</h2>" ;
    ?>

	<?php
if($_POST['submit'] == "Enter Scores")
{
//query the db for any scores not submitted to fill in to calculate accurate totals
$sql = "SELECT * FROM `scores` WHERE `player_1` = '".$_POST['player_1']."' AND `tournament` = '".$_POST['tournament']."' 
AND `team` = '".$_POST['team']."'AND `date` = '".$_POST['date']."' LIMIT 1";
$result = mysql_query($sql);
$player_exists = mysql_num_rows($result);
$scores = mysql_fetch_assoc($result);
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
".(( !$_POST['position'] ) ? "" : "`position` = '".$_POST[position]."', ")."

`spam` = '1'


WHERE `player_1` = '".$_POST['player_1']."' AND `tournament` = '".$_POST['tournament']."' AND `team` = '".$_POST['team']."'AND `date` = '".$_POST['date']."'";

if (!mysql_query($sql))
  {
  die('Error: ' . mysql_error());
  }


  $sql="UPDATE `virtual` SET 
".(( !$_POST['player_1'] ) ? "" : "`player_1` = '".$_POST[player_1]."', ")."
".(( !$_POST['team'] ) ? "" : "`team` = '".$_POST[team]."', ")."
".(( !$_POST['total'] ) ? "" : "`total` = '".$_POST[total]."', ")."
".(( !$trny ) ? "" : "`course` = '".$trny."', ")."
`spam` = '1'


WHERE `player_1` = '".$_POST['player_1']."' AND `id` = id AND `team` = '".$_POST['team']."' AND `date` = '".$_POST['date']."' AND `jv` <> '".yes."' ";

if (!mysql_query($sql))
  {
  die('Error: ' . mysql_error());
  }
}


$query = " SELECT * FROM `tournament` WHERE user = '$user' ORDER by `id` desc LIMIT 0 , 1 ";
if($results = @mysql_query($query))
{
$data = mysql_fetch_assoc($results);

} else {
die('Error: '.mysql_error());
}




?>


<?php
if(!empty($_GET['name']))
{
$player_1 = $_GET['name'];
}
?>

  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    
Name: <input type="varchar" name="player_1" value="<?php echo $player_1; ?>"/>
Team: <input type="varchar" name="team" size="26" value="<?php //Get number of Team to Search For.
                                                if(!empty($_GET['name']))
                                                      {
                                                          $name = $_GET['name'];
                                                      }
                                                                    //Submit Query to MySql Database
                                             $query = "SELECT team FROM scores WHERE player_1 = '$name' LIMIT 1";
                                             $result = mysql_query($query)
                                                      or die ('Error in Query Try Again:--' . mysql_error()); 
                                                      while($row = mysql_fetch_array( $result )) 
                                                         {
                                                    echo $row['team']; 
                                                          }
                                                                              ?>"/>
                                                                              
DQ:    <input type="checkbox" name="dq" value="dq"/>  

  <tr>
                                                               
		
	<br>
Date: <input type="varchar" name="date" size="12" value="<?php echo $data['date']; ?>"/>
ID: <input type="varchar" name="id" size="4" value="<?php echo $data['id']; ?>"/>
Tournament: <input type="varchar" name="tournament" size="42" value="<?php echo $data['tournament']; ?>"/>    






<table width="50" border="1">
  <tr>
    <td><div align="center" >1 <select name="hole1" input type="int" size="4">  
        
 <option value="0">0</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
    <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
    <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</option>
  <option value="11">11</option>
    <option value="12">12</option>
  <option value="13">13</option>
  <option value="14">14</option>
  <option value="15">15</option>"
 
</select> 
    
    
     </div></td>
      <td><div align="center" >2 <select name="hole2" input type="int" size="4">  
        
 <option value="0">0</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
    <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
    <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</option>
  <option value="11">11</option>
    <option value="12">12</option>
  <option value="13">13</option>
  <option value="14">14</option>
  <option value="15">15</option>"
 
</select> 

    </div></td>
  
        <td><div align="center" >3 <select name="hole3" input type="int" size="4">  
        
 <option value="0">0</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
    <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
    <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</option>
  <option value="11">11</option>
    <option value="12">12</option>
  <option value="13">13</option>
  <option value="14">14</option>
  <option value="15">15</option>"
 
</select> 
</div></td>
  <tr>
    <td><div align="center" >4 <select name="hole4" input type="int" size="4">  
        
 <option value="0">0</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
    <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
    <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</option>
  <option value="11">11</option>
    <option value="12">12</option>
  <option value="13">13</option>
  <option value="14">14</option>
  <option value="15">15</option>"
 
</select> 
    
    
     </div></td>
      <td><div align="center" >5 <select name="hole5" input type="int" size="4">  
        
 <option value="0">0</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
    <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
    <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</option>
  <option value="11">11</option>
    <option value="12">12</option>
  <option value="13">13</option>
  <option value="14">14</option>
  <option value="15">15</option>"
 
</select> 

    </div></td>
  
        <td><div align="center" >6 <select name="hole6" input type="int" size="4">  
        
 <option value="0">0</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
    <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
    <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</option>
  <option value="11">11</option>
    <option value="12">12</option>
  <option value="13">13</option>
  <option value="14">14</option>
  <option value="15">15</option>"
 
</select> 
</div></td>
  <tr>
    <td><div align="center" >7 <select name="hole7" input type="int" size="4">  
        
 <option value="0">0</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
    <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
    <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</option>
  <option value="11">11</option>
    <option value="12">12</option>
  <option value="13">13</option>
  <option value="14">14</option>
  <option value="15">15</option>"
 
</select> 
    
    
     </div></td>
      <td><div align="center" >8 <select name="hole8" input type="int" size="4">  
        
 <option value="0">0</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
    <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
    <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</option>
  <option value="11">11</option>
    <option value="12">12</option>
  <option value="13">13</option>
  <option value="14">14</option>
  <option value="15">15</option>"
 
</select> 

    </div></td>
  
        <td><div align="center" >9 <select name="hole9" input type="int" size="4">  
        
 <option value="0">0</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
    <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
    <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</option>
  <option value="11">11</option>
    <option value="12">12</option>
  <option value="13">13</option>
  <option value="14">14</option>
  <option value="15">15</option>"
 
</select> 
</div></td>
  <tr>
    <td><div align="center" >10 <select name="hole10" input type="int" size="4">  
        
 <option value="0">0</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
    <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
    <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</option>
  <option value="11">11</option>
    <option value="12">12</option>
  <option value="13">13</option>
  <option value="14">14</option>
  <option value="15">15</option>"
 
</select> 
    
    
     </div></td>
      <td><div align="center" >11 <select name="hole11" input type="int" size="4">  
        
 <option value="0">0</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
    <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
    <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</option>
  <option value="11">11</option>
    <option value="12">12</option>
  <option value="13">13</option>
  <option value="14">14</option>
  <option value="15">15</option>"
 
</select> 

    </div></td>
  
        <td><div align="center" >12 <select name="hole12" input type="int" size="4">  
        
 <option value="0">0</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
    <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
    <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</option>
  <option value="11">11</option>
    <option value="12">12</option>
  <option value="13">13</option>
  <option value="14">14</option>
  <option value="15">15</option>"
 
</select> 
</div></td>
  <tr>
    <td><div align="center" >13 <select name="hole13" input type="int" size="4">  
        
 <option value="0">0</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
    <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
    <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</option>
  <option value="11">11</option>
    <option value="12">12</option>
  <option value="13">13</option>
  <option value="14">14</option>
  <option value="15">15</option>"
 
</select> 
    
    
     </div></td>
      <td><div align="center" >14 <select name="hole14" input type="int" size="4">  
        
 <option value="0">0</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
    <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
    <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</option>
  <option value="11">11</option>
    <option value="12">12</option>
  <option value="13">13</option>
  <option value="14">14</option>
  <option value="15">15</option>"
 
</select> 

    </div></td>
  
        <td><div align="center" >15 <select name="hole15" input type="int" size="4">  
        
 <option value="0">0</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
    <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
    <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</option>
  <option value="11">11</option>
    <option value="12">12</option>
  <option value="13">13</option>
  <option value="14">14</option>
  <option value="15">15</option>"
 
</select> 
</div></td>
  <tr>
    <td><div align="center" >16 <select name="hole16" input type="int" size="4">  
        
 <option value="0">0</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
    <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
    <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</option>
  <option value="11">11</option>
    <option value="12">12</option>
  <option value="13">13</option>
  <option value="14">14</option>
  <option value="15">15</option>"
 
</select> 
    
    
     </div></td>
      <td><div align="center" >17 <select name="hole17" input type="int" size="4">  
        
 <option value="0">0</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
    <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
    <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</option>
  <option value="11">11</option>
    <option value="12">12</option>
  <option value="13">13</option>
  <option value="14">14</option>
  <option value="15">15</option>"
 
</select> 

    </div></td>
  
        <td><div align="center" >18 <select name="hole18" input type="int" size="4">  
        
 <option value="0">0</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
    <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
    <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</option>
  <option value="11">11</option>
    <option value="12">12</option>
  <option value="13">13</option>
  <option value="14">14</option>
  <option value="15">15</option>"
 
</select> 
</div></td>
<tr>
    
    
    
</tr>
  </table>
      <p>     


    <input name="submit" type="submit" value="Enter Scores" />  

      
      </p>



  <?php                                                             
  $query = "SELECT max(id) as id from tournament"; 
			

	 
$result = mysql_query($query) or die(mysql_error());

// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )) {

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
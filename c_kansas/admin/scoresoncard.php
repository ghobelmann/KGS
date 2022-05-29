<?php
$page_title="Home";
define("IN_GOLF_STATS", TRUE);
define('IN_PHP_AUTH', TRUE);
include("databaseconnect.php");
include("PHP_AUTH/check_auth.php");
if(authorize("public") != "success")
{
header("Location: login.php?error=1");
die();
}


if(!empty($_GET['tournament']))
{
$trny = $_GET['tournament'];
}

?>
<head>
<STYLE TYPE="text/css">
     P.breakhere {page-break-before: always}
</STYLE>
<!--
.style1 {font-family: Arial, Helvetica, sans-serif}
.style2 {font-size: 10px}
.style3 {font-family: Arial, Helvetica, sans-serif; font-size: 10px; }
.style6 {font-family: Arial, Helvetica, sans-serif; font-size: 10px; color: #FFFFFF; }
.style7 {font-size: 16px}
.style8 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 16px;
	color: #FFFFFF;
	font-weight: bold;
}
.style10 {font-size: 16px; font-weight: bold; }
.style13 {color: #000000}
-->
</head>
















  
  
<table width="900" border="1">
	<?php $variable = '01'; 
  $query = "SELECT teetime FROM `scores` WHERE tournament = '".$trny."' 
AND position = '$variable'  LIMIT 1";
if(@!$result = mysql_query($query))
	echo 'PHP LINE: '.__LINE__.'. Epic fail 1.'. mysql_error();
else {
$setup = mysql_fetch_assoc($result);
//Displays Array information
 //print_r  ($setup);
 
 
 //Tournament ID

$teetime = $setup['teetime'];
         }
  
  
  
  
  ?>
  <tr>
    <td width="200">Card <?php echo $variable; ?> Front 9 </td>

    <td width="200"><div align="center">Team</div></td>
    <td width="56" bgcolor="#000000"><div align="center" class="style8">1</div></td>
    <td width="56" bgcolor="#000000"><div align="center" class="style8">2</div></td>
    <td width="56" bgcolor="#000000"><div align="center" class="style8">3</div></td>
	<td rowspan="6"><center><?php echo $trny; ?><br><?php echo $teetime; ?></center></td>
  </tr>
  <tr>

    <?php
	
	

//Select Players name from form 

$query = "SELECT player_1, tournament, team, date, position FROM scores WHERE tournament = '".$trny."' 
AND position = '$variable' ";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());


while($row = mysql_fetch_array( $result )){
	// Print out the contents of each row into a table
	echo "<tr><td>";
	echo $row['player_1'];
	echo "</td><td>";
	echo $row['team'];
	echo "</td><td><td></tr>";
}
$query = "SELECT scores.tid, par.* FROM scores, par WHERE scores.tid = par.id AND tournament = '".$trny."' LIMIT 1";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());


while($row = mysql_fetch_array( $result )){
	// Print out the contents of each row into a table
	
	echo "<tr><td colspan='2' bgcolor=#000000><div align=center class='style8'> Par <td bgcolor=#000000 align=center class='style8'>";
	echo $row['h1'];
	echo "</td><td bgcolor=#000000 align=center class='style8'>";
	echo $row['h2'];
	echo "</td><td bgcolor=#000000 align=center class='style8'>";
	echo $row['h3'];
	echo "</td><td bgcolor=#000000 align=center class='style8'>";
	echo $row['h1'] + $row['h2'] + $row['h3'];
	
	
	echo "</tr>";
}

$query = "SELECT scores.tid, yardage.* FROM scores, yardage WHERE scores.tid = yardage.id AND tournament = '".$trny."' LIMIT 1";
$result = mysql_query($query)
or die ('Error in Query Try Again:--' . mysql_error());


while($row = mysql_fetch_array( $result )){
	// Print out the contents of each row into a table
	
	echo "<tr><td colspan='2' bgcolor=#000000><div align=center class='style8'> Yardage <td bgcolor=#000000 align=center class='style8'>";
	echo $row['h1'];
	echo "</td><td bgcolor=#000000 align=center class='style8'>";
	echo $row['h2'];
	echo "</td><td bgcolor=#000000 align=center class='style8'>";
	echo $row['h3'];
	echo "</td><td bgcolor=#000000 align=center class='style8'>";

	echo $row['h1'] + $row['h2'] + $row['h3'];
	
	
	echo "</tr>";
}
?>

  
  
  
            <?php
        
        
        
//Get number of Team to Search For.
if(!empty($_GET['tournament']))
{
$tournament = $_GET['tournament'];
}

//set the limit for to top scores per team to add up
$limit=6;
 
//nasty script begins here
$query = "SELECT DISTINCT `tournament` FROM `scores` WHERE tournament = '$tournament'";
$tournaments=mysql_query($query);
while($tournament = mysql_fetch_assoc($tournaments))
{
$query = "SELECT DISTINCT `team` FROM `scores` WHERE `tournament` = '".$tournament['tournament']."' AND `noteam` <> '".yes."'" ;
$result=mysql_query($query);
$j=0;
while($team = mysql_fetch_assoc($result))
{
//print_r($team);

{

$teams[$j] = $team['team'];
$query2 = "SELECT *  FROM `scores` WHERE `team` = '".$team['team']."' AND `tournament` = '".$tournament['tournament']."' 
AND `noteam` <> '".yes."' AND `jv` <> '".yes."' ORDER BY `total` ASC";
$result2=mysql_query($query2);}




$i=1;
while($i <= $limit)
{
$data[$team['team']][$i] = mysql_fetch_assoc($result2);
$i++;
}
$j++;
}
$teams_size = count($teams);
$i=0;
while($i < $teams_size)
{
$k=1;
while($k <= $limit)
{
$scores[$k] = $data[$teams[$i]][$k]['total'];
$k++;
}
$totals[$teams[$i]] = array_sum($scores);
$i++;
}
//___________________________________________________
//sort($totals);

//_____________________________________________
echo "<div class='CSSTableGenerator' >";
echo '<table border="1">';
echo '<tr><td colspan="2" align="center"><h3>'.$tournament['tournament'].'</a></h3></td></tr><th>Team</th><th>Name</td>';
asort($totals);
foreach ($totals as $key => $val) {
    echo "<tr><td>".$key."</td><td>".$val."</td></tr>";
 }
 echo "</table><br><br>";
 unset($team);
 unset($teams);
 unset($result2);
 unset($data);
 unset($scores);
 unset($totals);
 unset($tournament);
 unset($i);
 unset($j);
 unset($k);
 }
//_____________________________________________
//used to show you the structure of the final output $totals is the variable
//print_r($totals);

?></div>
        <td valign='top' align='center'> 
        
	<?php
  
  if(!empty($_GET['tournament']))
{
$tournament = $_GET['tournament'];
}
$query = "SELECT * FROM tournament WHERE `tournament` =  '$tournament' LIMIT 1";

$result = mysql_query($query);

$data = mysql_fetch_assoc($result);

for($i=1; $i<=18; $i++)

{

   //this stores the numbers in $h1-$h18 not an array

//$h = "h{$i}";

 //${$h} = $data['hole'.$i];

 

   //or with an array which stores the numbers like this $h[1] - $h[18]

$h[$i] = $data['hole'.$i];

}
?>   
  
  
  
  
  
  <br>
  
  
  
    <P CLASS="breakhere">
  
  
  


  
  <br><br>
  </table>
  </body>
  </html>

  
  

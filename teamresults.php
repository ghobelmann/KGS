<?php
 
 if(!empty($_GET['id']))
{
$tid = $_GET['id'];
}

echo $tid;

if(!empty($_GET['state']))
{
$state = $_GET['state'];
}
if(!empty($_GET['db']))
{
$db = $_GET['db'];
}
$dataBase = $db;

switch ($dataBase) {
case "boys":
	include_once("databaseconnect.php");    
	break;
case "girls":
	include_once("dbconnectg.php"); 
	break;
default:
   include_once("databaseconnect.php"); 
} 


error_reporting(E_ALL); ini_set('display_errors', 0);
//authentication for coaches to get to their pages, not for public pages.

//include_once("headerb.php");


//$output = "http://www.kansasgolfscores.com/teamresults.php?id=$tid";

include("analyticstracking.php");
?>  
<head>
<title>KansasGolfScores.com</title>

<meta charset="utf-8">

<META HTTP-EQUIV="REFRESH" CONTENT="420">
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">   

	  <!-- Bootstrap core CSS -->
<!-- Custom styles for this template -->
<style type="text/css">


td {
padding: 4px;
}
body {
background-color: #000000;
background-image: url();
}
body,td,th {
color: #FFFFFF;
}
a:link {
color: #FFFFFF;
}
a:visited {
color: #FFFFFF;
}
.style3 {font-size: 8px
	  color:#00FF99}
	
.style4 {
font-size: 36px;
font-weight: bold;
color:#FFFFFF
}
.style5 {
font-size: 18px;
font-weight: bold;
color:#FFFFFF
}
.style6 {
font-size: 18px;
font-weight: bold;
}
-->
/* dislplay background image, background.jpg */
body {
  background-color: #111111; color: #003300;
  font-family: Arial, Helvetica, sans-serif; 
	}


  
</style>

<style>
.block {
display: block;
width: 25%;
border: none;
background-color: #4CAF50;
color: white;
padding: 14px 28px;
font-size: 16px;
cursor: pointer;
text-align: left;

}

.block:hover {
background-color: #ddd;
color: black;
}     
</style>

</head>	

<script>
function goBack() {
window.history.back();
}
</script>

<?php 
if(!empty($_GET['id']))
{
$tournament = $_GET['id'];
}
echo $tournanament;


?>

<button class="block" onclick="goBack()">Go Back</button>




<html>
<body>

<div class="row" >
<div  class="col-lg-12 col-md-8 col-sm-8 align-self-start" >
		
<?php
$query = "SELECT * FROM tournament
WHERE `id` =  '$tournament' LIMIT 1";

$result = mysqli_query($conn,$query);

$data = mysqli_fetch_assoc($result);
$tname = $data['tournament'];
$btyb = $data['btyb'];
$c = $data['leaderboard'];



echo '<h2><font color="white">'.$tname.'</font>';  

//echo '- BTYB -'.$btyb.''; 
//echo '<br>Ties Not Broken On This Page, go to Tournament Results.</h2></center>';
for($i=1; $i<=36; $i++)

{
$h[$i] = $data['hole'.$i];

}



?>


	 
<?php
//Get number of Team to Search For.
if(!empty($_GET['tid']))
{
$tournament = $_GET['tid'];




}
//new stuff

//get data
//get tournament name and ID
$query = "SELECT * FROM `tournament` WHERE `id` = '$tournament'  LIMIT 1";
if(@!$result = mysqli_query($conn,$query))
echo 'PHP LINE: '.__LINE__.'. Epic fail 1.'. mysqli_error();
else {
$setup = mysqli_fetch_assoc($result);
//Displays Array information
//print_r  ($setup);


//Tournament ID
$tid = $setup['id'];
//Course ID
$cid = $setup['id'];
$tname = $setup['id'];
unset($setup);

if(empty($cid))
echo 'ERROR: No course defined in setup table for this tournament!';
else {
$query = "SELECT h1, h2, h3, h4, h5, h6, h7, h8, h9, 
h10, h11, h12, h13, h14, h15, h16, h17, h18, id
FROM `tournament` WHERE `id` = '".$cid."' LIMIT 1";
if(@!$result = mysqli_query($conn,$query))
echo 'PHP LINE: '.__LINE__.'. Epic fail 2.'. mysqli_error();
else {
$sql_par = mysqli_fetch_assoc($result);

$pid = $sql_par['id'];


$query = "SELECT *, scores.manualscore, roster.pid, roster.player_1, 
team.tmid, team.school FROM `scores` 
INNER JOIN roster ON scores.pid = roster.pid 
LEFT JOIN team on scores.tmid = team.tmid
WHERE `tid` = '".$tid."' AND `total` > '0' AND round = '1' AND `status` < '5'
GROUP by scores.pid ";if(@!$result = mysqli_query($conn,$query))
echo 'PHP LINE: '.__LINE__.'. Epic fail 3.'. mysqli_error();
else {

$running_score = array();
$player_i = 0;

//calculate for each player
while($scores = mysqli_fetch_assoc($result))
{
$total = 0;
$holes_played = 0;
$score = 0;
//calculate for each hole
for($i=1; $i<=18; $i++)
{
//$par[$i] = $sql_par['h'.$i]; 
$hole_par = $sql_par['h'.$i];
if(empty($scores['hole'.$i]) || $scores['hole'.$i] < 1)
{
$hole_par = 0;
$scores['hole'.$i] = 0;
} else {
$holes_played++;
}
$score = $score + $scores['hole'.$i];
$total = $total + $scores['hole'.$i] - $hole_par;
}


$running_score[$player_i] = array("tname" => $data['tournament'], "tid" => $scores['tid'],"name" => $scores['player_1'], "team" => $scores['abv'],
"total" => $total, "score" => $score, "holes_played" => $holes_played);
//echo json_encode($running_score);
$player_i++;
}
function array_orderby()
{
$args = func_get_args();
$data = array_shift($args);
foreach ($args as $n => $field) {
	if (is_string($field)) {
		$tmp = array();
		foreach ($data as $key => $row)
			$tmp[$key] = $row[$field];
		$args[$n] = $tmp;
		}
}
$args[] = &$data;
call_user_func_array('array_multisort', $args);
return array_pop($args);
}
$running_score_sorted = array_orderby($running_score, 'total', 'back', 'last6', 'last3', SORT_ASC);

$i = 0;
$count = count($running_score_sorted);
$place = 1;
$table_size = $c;;


//echo $count;
echo '<div class="table" >';
echo '<table border="0">
<tr>';
while($i < $count)
{
echo '<td valign="top" align="center">';

echo '<table border="1">
<tr>
<th bgcolor="#FF0000">Place</th>
<th>Name</th>
<th>Team</th>
<th>To Par</th>
<th>Score</th>
<th>Plyd</th>
</tr>';












while($i < $count && $table_i < $table_size)
{
$player = $running_score_sorted[$i];

if($player['holes_played'] < 18)
$highlight = ' bgcolor="#394282C"';



if($player['total'] == 0)
$player['total'] = "E";
else if($player['total'] > 0)
$player['total'] = (string) '+'.$player['total'];
else if($player['total'] < 0)
$player['total'] = (string) $player['total'];



echo '<tr'.$highlight.'>
<td bgcolor="#990000" align="center">'.$place.'</td>
<td>'.$player['name'].'</td>
<td>'.$player['team'].'</td>
<td>'.$player['total'].'</td>
<td>'.$player['score'].'</td>
<td> '.$player['holes_played'].'</td>
</tr>';
$place++;
$i++;
$table_i++;
unset($highlight);
}

echo '</table>';
echo '</td>';
$table_i = 0;
}
echo '</tr>
</table>';
}
}
}
}
// echo json_encode($running_score_sorted);

$json_data = json_encode($running_score_sorted);
file_put_contents("./json/$tournament.json", $json_data);


?>
</div></div>   

  
	</div>
		   </center>
	   <div  class="col-lg-12 col-md-8 col-sm-8 align-self-start" >
<?php  //echo "<img src='../../vendor/QR/php/qr_img.php?d=$output' height='300' width='300'> ";   ?></p>      </div>
	</div>
</body>
</html>








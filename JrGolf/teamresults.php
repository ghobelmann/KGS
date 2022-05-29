 <?php
 //authentication for coaches to get to their pages, not for public pages.
session_start();
session_regenerate_id();
if(!isset($_SESSION['email']))
   // if there is no valid session
{
    header("Location:login-system/index.php");
}

//include_once("headerb.php");
include_once("databaseconnect.php");
include_once("../analyticstracking.php") 
 ?>  
<head>
  <title>KansasGolfScores.com</title>
 
  <meta charset="utf-8">
    <META HTTP-EQUIV="REFRESH" CONTENT="420">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <style type="text/css">
<!--


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
	   font-size: .6 em; }
	
/* Georgia, Times New Roman or serif font face */	
h1 {background-color: #304420; color: #FFFFFF;
		margin-bottom: 0;
		background-image:url(images/rock.jpg);
		background-repeat:no-repeat;
		background-position:right;
		padding: 20px; 
    font-family: Arial, Helvetica, sans-serif;
    }
		
/* Georgia, Times New Roman or serif font face */			
h2 { background-color:#FF0000; color:#304420; 
      font-family: Georgia, Times New Roman, serif;
      text-shadow: 1px 1px 1px #ccc; }
/* Georgia, Times New Roman or serif font face */	
h3 {background-color:#009900; color:#ffffff; 
      font-family: Arial, Helvetica, sans-serif;
      text-shadow: 2px 1px 1px #000;
      
</style>
</head>	


<?php if(!empty($_GET['id']))
{
$tournament = $_GET['id'];
}
echo $tournanament;
?>

<?php
$query = "SELECT leaderboard FROM tournament WHERE id = '$tournament' LIMIT 1"; 
			

	 
$result = mysqli_query($conn,$query) or die(mysqli_error());
$c = mysqli_fetch_row( $result )  

?>



<div style="position:absolute; top:-20; left:3;  z-index:2;">






<html>
<body>

<div style="position:relative; ">

<?php
$query = "SELECT * FROM tournament
WHERE `id` =  '$tournament' LIMIT 1";

$result = mysqli_query($conn,$query);

$data = mysqli_fetch_assoc($result);
 $tname = $data['tournament'];
 $btyb = $data['btyb'];



echo '<h2><center>'.$tname.' Live Leaderboard';  
echo '- BTYB -'.$btyb.'</h2></center>';  
for($i=1; $i<=18; $i++)

{
 $h[$i] = $data['hole'.$i];

}



?>


</head>
<body>

<?php
//Get number of Team to Search For.
if(!empty($_GET['tid']))
{
$tournament = $_GET['tid'];




}
//new stuff

//get data
//get tournament name and ID
$query = "SELECT * FROM `setup` WHERE `tid` = '$tournament'  LIMIT 1";
if(@!$result = mysqli_query($conn,$query))
	echo 'PHP LINE: '.__LINE__.'. Epic fail 1.'. mysqli_error();
else {
$setup = mysqli_fetch_assoc($result);
//Displays Array information
 //print_r  ($setup);
 
 
 //Tournament ID
$tid = $setup['tid'];
 //Course ID
$cid = $setup['course'];
$tname = $setup['tid'];
unset($setup);

if(empty($cid))
	echo 'ERROR: No course defined in setup table for this tournament!';
	else {
$query = "SELECT * FROM `par` WHERE `course` = '".$cid."' LIMIT 1";
if(@!$result = mysqli_query($conn,$query))
	echo 'PHP LINE: '.__LINE__.'. Epic fail 2.'. mysqli_error();
else {
$sql_par = mysqli_fetch_assoc($result);

$pid = $sql_par['id'];


$query = "SELECT *,
 roster.pid, roster.player_1, team.tmid, scores.division FROM `scores` 
INNER JOIN roster ON scores.pid = roster.pid 
LEFT JOIN team on scores.tmid = team.tmid
WHERE `tid` = '".$tid."' AND total > '0'";
if(@!$result = mysqli_query($conn,$query))
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


$running_score[$player_i] = array("name" => $scores['player_1'], "team" => $scores['division'],
 "total" => $total, "score" => $score, "holes_played" => $holes_played);
// print_r ($running_score);
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
$table_size = 21;;

//echo $count;
echo '<div class="CSSTableGenerator" >';
echo '<table border="0">
<tr>';
while($i < $count)
{
echo '<td valign="top" align="center">';
echo '<table border="1"">
<tr>
<th>Place</th>
<th>Name</th>
<th>Division</th>
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
<td>'.$place.'</td>
<td>'.$player['name'].'</td>
<td>'.$player['division'].'</td>
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
?>
</div> 
</center>
</body>
</html>
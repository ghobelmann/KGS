<!DOCTYPE html>  
<head>
  <title>KansasGolfScores.com</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords" content="High School, Golf, Scores, Tournaments">
 <link rel="stylesheet" href="../../global_style/style/bootstrap.min.css">      
    <link rel="stylesheet" href="../../global_style/style/style_nopict.css"> 
  <script src="../../global_style/js/jquery-2.1.4.min.js"></script>
  <script src="../../global_style/js/bootstrap.min.js"></script>

</head><body>	
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.php">KansasGolfScores.com</a>
	    <?php echo $user; ?>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home</a></li>

		  

		  
       <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Tournaments <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="tournaments.php">Tournaments</a></li>
          </ul>
	</li>

	</li>
      </ul>
	
      <ul class="nav navbar-nav navbar-right">
        <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="login.php"> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
  


<?php
$page_title = "Hole by Hole Scores";
$permission = "public";
define("IN_GOLF_STATS", TRUE);
include_once("common.php");
//include("header.php");
//include("menubar.php");
include("style/style.php");
?>


<?php if(!empty($_GET['tournament']))
{
$tournament = $_GET['tournament'];
}
?>

<?php
$query = "SELECT number FROM columns WHERE id = '1' LIMIT 1"; 
			

	 
$result = mysql_query($query) or die(mysql_error());
$c = mysql_fetch_row( $result )  

?>



<div style="position:absolute; top:23; left:3;  z-index:2;">









<php




<div style="position:relative; ">

<?php
$query = "SELECT * FROM tournament WHERE `tournament` =  '$tournament' LIMIT 1";

$result = mysql_query($query);

$data = mysql_fetch_assoc($result);

for($i=1; $i<=18; $i++)

{

   //this stores the numbers in $h1-$h18 not an array

 //  $h = "h{$i}";

 //  ${$h} = $data['hole'.$i];

 

   //or with an array which stores the numbers like this $h[1] - $h[18]

   $h[$i] = $data['hole'.$i];

}


$one = "$_POST[hole1]";
$two = "$_POST[hole2]";
$three = "$_POST[hole3]";
$four = "$_POST[hole4]";
$five = "$_POST[hole5]";
$six = "$_POST[hole6]";
$seven = "$_POST[hole7]";
$eight = "$_POST[hole8]";
$nine = "$_POST[hole9]";
$ten = "$_POST[hole10]";
$eleven = "$_POST[hole11]";
$twelve = "$_POST[hole12]";
$thirteen = "$_POST[hole13]";
$fourteen = "$_POST[hole14]";
$fifteen = "$_POST[hole15]";
$sixteen = "$_POST[hole16]";
$seventeen = "$_POST[hole17]";
$eighteen = "$_POST[hole18]";



?>


</head>
<body>
    <?php include_once("analyticstracking.php") ?>
<center>
<?php
//Get number of Team to Search For.
if(!empty($_GET['tournament']))
{
$tournament = $_GET['tournament'];
echo '<h2><center>'.$tournament.' Golf Live Scoring (Unofficial- TIES NOT BROKEN)</h2></center>';
}
//new stuff

//get data
//get tournament name and ID
$query = "SELECT * FROM `setup` WHERE `tournament` = '$tournament'  LIMIT 1";
if(@!$result = mysql_query($query))
	echo 'PHP LINE: '.__LINE__.'. Epic fail 1.'. mysql_error();
else {
$setup = mysql_fetch_assoc($result);
//Displays Array information
 //print_r  ($setup);
 
 
 //Tournament ID
$tid = $setup['id'];
 //Course ID
$cid = $setup['course'];
$tname = $setup['tournament'];
unset($setup);

if(empty($cid))
	echo 'ERROR: No course defined in setup table for this tournament!';
	else {
$query = "SELECT * FROM `par` WHERE `course` = '".$cid."' LIMIT 1";
if(@!$result = mysql_query($query))
	echo 'PHP LINE: '.__LINE__.'. Epic fail 2.'. mysql_error();
else {
$sql_par = mysql_fetch_assoc($result);

$pid = $sql_par['id'];


$query = "SELECT * FROM `scores` WHERE `tid` = '".$tid."' AND `jv` <> '".yes."'";
if(@!$result = mysql_query($query))
	echo 'PHP LINE: '.__LINE__.'. Epic fail 3.'. mysql_error();
else {

$running_score = array();
$player_i = 0;

//calculate for each player
while($scores = mysql_fetch_assoc($result))
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
  $back =  $hole10 + $hole11 + $hole12 + $hole13 + $hole14 + $hole15 + $hole16 + $hole17 + $hole18;
  $last6 =  $hole13 + $hole14 + $hole15 + $hole16 + $hole17 + $hole18;
  $last3 = $hole16 + $hole17 + $hole18;
	}


$running_score[$player_i] = array("name" => $scores['player_1'], "team" => $scores['team'],
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
$table_size = $c[0];;

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
<th>Team</th>
<th>To Par</th>
<th>Score</th>
<th>Plyd</th>
</tr>';



while($i < $count && $table_i < $table_size)
{
$player = $running_score_sorted[$i];

if($player['holes_played'] < 18)
	$highlight = ' bgcolor="#AA0000"';
  
  

if($player['total'] == 0)
	$player['total'] = "E";
else if($player['total'] > 0)
	$player['total'] = (string) '+'.$player['total'];
else if($player['total'] < 0)
	$player['total'] = (string) $player['total'];



echo '<tr'.$highlight.'>
<td>'.$place.'</td>
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





?>
</div> 
</center>
</body>
</html>
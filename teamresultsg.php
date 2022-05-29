                                                 <!DOCTYPE html>
<html lang="en">  
  <head>    
    <meta charset="utf-8">    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">    
    <meta name="description" content="High School Golf Results">    
    <meta name="author" content="Greg Hobelmann">    
    <title>KansasGolfScores.com
    </title>          
    <!-- Bootstrap core CSS -->    
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">   
    <!--  <link href="css/boysGolf.css" rel="stylesheet">      -->      
    <link rel="stylesheet" href="../vendor/bootstrap/css/w3.css">  
     <?php include_once("dbconnectg.php");   ?>  


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

     
  </head>
  
  <body>     <div class="container">      
         <div class="row">   
     <h3 class="col-12 col-sm-10 col-md-8 text-black">   
   <?php 



if(!empty($_GET['id']))
{
$tournament = $_GET['id'];
}
echo $tournanament;
?>

           
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
for($i=1; $i<=18; $i++)

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
if(!empty($_GET['id']))
{
$tid = $_GET['id'];




}
//new stuff

//get data
//get tournament name and ID
$query = "SELECT * FROM `tournament` WHERE `id` = '$tid'  LIMIT 1";
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
WHERE `tid` = '".$tid."' AND total > '0' 
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
$running_score_sorted = array_orderby($running_score, 'total',  'back', 'last6', 'last3', SORT_ASC);

$i = 0;
$count = count($running_score_sorted);
$place = 1;
$table_size = $c[0];;
  

//echo $count;
echo '<table>
<tr>';
while($i < $count)
{
echo '<td valign="top" align="center">';

echo '<table border="1">
<tr>
<th> - </th>
<th>Name</th>
<th>Tm</th>
<th>+/-</th>
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



echo '<tr'.$highlight.'> <p>
<td align="center">'.$place.'</td>
<td><font size="4">'.$player['name'].'</td>
<td><font size="4"><center>'.$player['team'].'</td>
<td><font size="4"><center>'.$player['total'].'</td>
<td><font size="4"><center> '.$player['holes_played'].'</td> </p>
</tr>';
$place++;
$i++;
$table_i++;
//unset($highlight);
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

?>
  </table>  </div></body></html>   
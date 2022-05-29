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
 
 
 








 <?php
 //authentication for coaches to get to their pages, not for public pages.


include_once("headera.php");
include_once("databaseconnect.php");
include_once("analyticstracking.php") 
 ?> 


   <!--

   Holes 1-18

 

 -->





<table>

<tr><td> 



<table border="1"  valign ="top">

    <tr>

        <td valign='top' width='30%' >         

Holes 1-18   

     

<?php

//Get number of Team to Search For.

if(!empty($_GET['tid']))

{

$tournament = $_GET['tid'];

}



//set the limit for to top scores per team to add up

$limit=4;

 

//nasty script begins here

$query = "SELECT DISTINCT `tid` FROM `scores` WHERE tid = '$tournament'";

$tournaments=mysqli_query($conn,$query);

while($tournament = mysqli_fetch_assoc($tournaments))

{

$query = "SELECT DISTINCT `tmid` FROM `scores` WHERE `tid` = '".$tournament['tid']."' AND `noteam` <> '".yes."'" ;

$result=mysqli_query($conn,$query);

$j=0;

while($team = mysqli_fetch_assoc($result))

{

//print_r($team);

{

$teams[$j] = $team['team'];

$query2 = "SELECT *  FROM `scores` WHERE `tmid` = '".$team['tmid']."' AND `tid` = '".$tournament['tid']."' 

AND `noteam` <> '".yes."' AND dq <> 'dq' AND `jv` <> '".yes."' ORDER BY `total` ASC";

$result2=mysqli_query($conn,$query2);}

$i=1;

while($i <= $limit)

{

$data[$team['tmid']][$i] = mysqli_fetch_assoc($result2);

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

echo "<div class='CSSTableGenerator' >";

echo '<table border="1">';

echo '<tr><td colspan="2" align="center"><h3>'.$tournament['tid'].'</a></h3></td></tr><th>Team</th><th>Score</td>';

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

?>




  </td>


</table> 





 <!--

   Holes 19-36

 

 -->




<table border="1"  valign ="top">

    <tr>

        <td valign='top' width='30%' >

         <?php

if(!empty($_GET['tid']))

{

$tournament = $_GET['tid'];

}

//set the limit for to top scores per team to add up

$limit=4; 

//nasty script begins here

$query = "SELECT DISTINCT `tid` FROM `scores` WHERE tid = '$tournament'";

$tournaments=mysqli_query($conn,$query);

while($tournament = mysqli_fetch_assoc($tournaments))

{

$query = "SELECT DISTINCT `tmid` FROM `scores` WHERE `tid` = '".$tournament['tid']."' AND `noteam` <> '".yes."'" ;

$result=mysqli_query($conn,$query);

$j=0;

while($team = mysqli_fetch_assoc($result))

{

{

$teams[$j] = $team['tmid'];

$query2 = "SELECT *  FROM `scores` WHERE `tmid` = '".$team['tmid']."' AND `tid` = '".$tournament['tid']."' 

AND `noteam` <> '".yes."' AND dq <> 'dq' AND `jv` <> '".yes."' ORDER BY `total2` ASC";

$result2=mysqli_query($conn,$query2);}

$i=1;

while($i <= $limit)

{

$data[$team['tmid']][$i] = mysqli_fetch_assoc($result2);

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

$scores[$k] = $data[$teams[$i]][$k]['total2'];

$k++;

}

$totals[$teams[$i]] = array_sum($scores);

$i++;

}

echo "<div class='CSSTableGenerator' >";

echo '<table border="1"> Holes 19-36';

echo '<tr><td colspan="2" align="center"><h3>'.$tournament['tid'].'</a></h3></td></tr><th>Team</th><th>Score</td>';

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

?>

  </td> 

   </table> 






   <!--

   Holes 1-36

 

 -->
 
 
 
 <table border="1"  valign ="top">

    <tr>

        <td valign='top' width='30%' >

         <?php

if(!empty($_GET['tid']))

{

$tournament = $_GET['tid'];

}

//set the limit for to top scores per team to add up

$limit=4; 

//nasty script begins here

$query = "SELECT DISTINCT `tid` FROM `scores` WHERE tid = '$tournament'";

$tournaments=mysqli_query($conn,$query);

while($tournament = mysqli_fetch_assoc($tournaments))

{

$query = "SELECT DISTINCT `tmid` FROM `scores` WHERE `tid` = '".$tournament['tid']."' AND `noteam` <> '".yes."'" ;

$result=mysqli_query($conn,$query);

$j=0;

while($team = mysqli_fetch_assoc($result))

{

{

$teams[$j] = $team['tmid'];

$query2 = "SELECT *  FROM `scores` WHERE `tmid` = '".$team['tmid']."' AND `tid` = '".$tournament['tid']."' 

AND `noteam` <> '".yes."' AND dq <> 'dq' AND `jv` <> '".yes."' ORDER BY `total3` ASC";

$result2=mysqli_query($conn,$query2);}

$i=1;

while($i <= $limit)

{

$data[$team['tmid']][$i] = mysqli_fetch_assoc($result2);

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

$scores[$k] = $data[$teams[$i]][$k]['total3'];

$k++;

}

$totals[$teams[$i]] = array_sum($scores);

$i++;

}

echo "<div class='CSSTableGenerator' >";

echo '<table border="1"> Holes 1-36';

echo '<tr><td colspan="2" align="center"><h3>'.$tournament['tid'].'</a></h3></td></tr><th>Team</th><th>Score</td>';

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

?>

  </td> 

   </table> 




<table border="1"  valign ="top">

    <tr>

        <td valign='top' width='30%' >

   


  </td></tr>

</table>



	<?php

  

  if(!empty($_GET['tid']))

{

$tournament = $_GET['tid'];

}

$query = "SELECT * FROM tournament WHERE `tid` =  '$tournament' LIMIT 1";



$result = mysqli_query($conn,$query);



$data = mysqli_fetch_assoc($result);



for($i=1; $i<=36; $i++)



{

$h[$i] = $data['hole'.$i];



}

?>        

        

  

 </table>    

        

        

<?php

//Get number of Team to Search For.

if(!empty($_GET['tid']))

{

$tournament = $_GET['tid'];

}

//Submit Query to MySql Database

$query = "SELECT pid, jv, tid, tmid, dq, total, total2, total3, manualscore, front, back,

front2, back2, last6, last3, rank

FROM (SELECT pid, jv, tid, tmid, dq, total, total2, total3, manualscore, front, back,

front2, back2, 

last6, last3,

@curRank := IF(@prevRank = total, @curRank, @incRank) AS rank,

@incRank := @incRank +1,

@prevRank := total

FROM scores sc,

(SELECT @curRank := 0, @prevRank := NULL, @incRank :=1) r  WHERE `tid` = '$tournament'

ORDER by total3, manualscore, total2, total ASC ) s 

WHERE `tid` = '$tournament' AND dq <> 'dq' AND `jv` != 'yes' GROUP by pid

ORDER BY total3, manualscore, total2, total, tmid ASC, pid ASC";

$result = mysqli_query($conn,$query)

or die ('Error in Rank Query Try Again:--' . mysqli_error());

                                                                        





//Print table to the web page

echo "<div class='CSSTableGenerator' >";

echo "<table border='1'  >";

echo "<tr> <th>Place </th><th>Player Name </th> <th>Team</th> <th>1-9</th> 

 <th>10-18</th><th>Total 1-18</th> <th>19-27</th> 

 <th>28-36</th><th>Total 27-36</th> <th>Total 1-36</th> </tr>";

// keeps getting the next row until there are no more to get

$i = 1;

while($row = mysqli_fetch_array( $result )) {

	// Print out the contents of each row into a table

	 	echo "<tr><td>";

	echo $row['rank'];

	echo "</td><td><CENTER>"; 

	echo '<a href="messagename.php?pid='.$row['pid'].'">'.$row['pid'].'</font></a>';

	echo "</td><td><CENTER>"; 

	echo $row['tmid'];

	echo "</td><td><CENTER>"; 

	echo $row['front'];

	echo "</td></strong><td><CENTER>"; 

	echo $row['back'];

	echo "</td></strong><td><strong><CENTER>"; 

	echo $row['total'];

  	echo "</td><td><CENTER>"; 

	echo $row['front2'];

	echo "</td></strong><td><CENTER>"; 

	echo $row['back2'];

	echo "</td></strong><td><strong><CENTER>"; 

	echo $row['total2'];

  	echo "</td></strong><td><strong><CENTER>"; 

	echo $row['total3'];

	echo "</td></tr></strong><CENTER>"; 

	$i++;

} 






  echo "</div>";
echo "</table>";
 







?>













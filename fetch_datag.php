 <html><head>
 
 </head>
 <?php
 include('dbconnectg.php');
 

if(isset($_POST["action"]))
{
 $query = "SELECT s.pid, s.status, tr.status, s.tmid, tr.par, r.player_1, 
r.grade, t.regionals, t.school, t.state, t.league, t.classification, t.tmid, 
s.tid, t.abv, count(s.pid) as countpl, avg(s.total) as total, 
avg((s.total-tr.rating)+ tr.par) as adj_score, tr.id
FROM scores s 
INNER JOIN roster r ON s.pid = r.pid 
LEFT JOIN team t on s.tmid = t.tmid 
LEFT JOIN tournament tr on s.tid = tr.id 
   WHERE s.total > '0' ";

 
  if(isset($_POST["stat"]))
 {
  $stat_filter = implode("','", $_POST["stat"]);
  $query .= "
   AND tr.status IN('".$stat_filter."')
 "; 
 echo $stat_filter;
 } 
 
 //   echo $state_filter;
    
    
 if(isset($_POST["classification"]))
 {
  $class_filter = implode("','", $_POST["classification"]);
  $query .= "
   AND t.classification IN('".$class_filter."')
  "; 
 }
//    echo $class_filter;
 
 if(isset($_POST["regionals"]))
 {
  $regionals_filter = implode("','", $_POST["regionals"]);
  $query .= "
   AND t.regionals IN('".$regionals_filter."')
  "; 
 }
 // echo $regionals_filter;
  
  
  
 if(isset($_POST["league"]))
 {
  $league_filter = implode("','", $_POST["league"]);
  $query .= "
   AND t.league IN('".$league_filter."')
   "; 
    //     echo $league_filter;
 }
 
 
  if(isset($_POST["school"]))
 {
  $school_filter = implode("','", $_POST["school"]);
  $query .= "
   AND t.school IN('".$school_filter."')
   "; 

 }
 

 
 
 
   $query .= "GROUP by s.pid ORDER by adj_score ASC LIMIT 100";
 


 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 $total_row = $statement->rowCount();
 $output = '';


//var_dump($result);
echo "<h2>";
echo $total_row;
echo " Total Players Found: ";
echo "";







 if($total_row > 0)
 
 {
    // output data of each row
echo "Filtering for: ";
echo "$state_filter $class_filter $regionals_filter $league_filter $school_filter</h2>";
echo "<table class='table table-hover'>";
echo "<tr><center> <th>Rank</th><th><center>Player Name </th><th><center>regionals</th><th><center>Rounds</th>
 <th><center>Team</th><th> 
<center>Class</th><th>Adj Avg</th> </tr>";
// keeps getting the next row until there are no more to get
$i = 1;
    //msqli #3
    foreach($result as $row) {
   
	// Print out the contents of each row into a table
	
	echo "<tr><td>"; 
	echo $i.'</td><td>';
	echo '<a href="http://www.kansasgolfscores.com/playerStats.php?pid='.$row['pid'].'&db=girls">'.$row['player_1'].'</a>';
    	echo "</td><td><CENTER>"; 
	echo $row['regionals'];
   	echo "</td><td><CENTER>"; 
  	echo $row['countpl'];
	echo "</td><td><CENTER>"; 
	echo '<a href="http://www.kansasgolfscores.com/teamStats.php?tmid='.$row['tmid'].'&db=girls">'.$row['abv'].'</a>';
  	echo "</td><td><CENTER>"; 
	echo $row['classification'];
    echo "</td><td><CENTER>"; 
    echo round ($row['adj_score'], 2);
	echo "</td><CENTER>"; 
	$i++;
} 
}  
 else
 {
  $output = '<h3>No Data Found</h3>';
 }
 echo $output;
}


?>

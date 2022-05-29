  <?php
     if(!empty($_GET['tid']))
{
$trny = $_GET['tid'];
} 
 
 ?>
 
 
 
 
 
 
 
          <!-- Content Row -->
      <div class="row">
        <!-- Sidebar Column -->
        <div class="col-lg-8 mb-4">
        <table border="1">
            <tr><td><a href="index.php">Home</a></td>
                    
               </div>

          </div>
        </div>
        <!-- Content Column -->







<?php
include_once("databaseconnect.php");
    if(!empty($_GET['tid']))
{
$trny = $_GET['tid'];
}  
//echo $trny; 
    if(!empty($_GET['card']))
{
$card = $_GET['card'];
}



     if($perm != '9')
   // if there is no valid session
{
    header("Location:login-system/index.php");
}

$connect = mysqli_connect("localhost", "root", "4Chr!5t3|6", "JrGolf");
  
    include_once("cards_menu9.php");   

$sql = "SELECT tournament FROM tournament 
   WHERE id = $trny";
$result = mysqli_query($connect, $sql); 

  while($row = mysqli_fetch_array($result))
     {
      $tourney = $row['tournament'];
        };


$query = "SELECT *, team.abv FROM scores 
  INNER JOIN roster on scores.pid = roster.pid 
   LEFT JOIN team on scores.tmid = team.tmid 
   WHERE tid = $trny AND card = $card";
$result = mysqli_query($connect, $query);  

   
?>

<html>  
 <head>  
          <title>Scorecard</title>  

 <link rel="stylesheet" href="../../global_style/style/bootstrap.min.css">     

  <script src="../../global_style/js/bootstrap.min.js"></script>

   <script src="../../global_style/vendor/jquery.tabledit.min.js"></script>  
       <style>  
     .sticky-image-wrapper{
        position: fixed;
        bottom: 0;
        width: 100%;
    }

    .sticky-image-wrapper img{
        display: table;
        position: relative;
        margin: auto;
        width: 100%;
   }
   
   
     hr {
    display: block;
    margin-top: 0.5em;
    margin-bottom: 0.5em;
    margin-left: auto;
    margin-right: auto;
    border-style: inset;
    border-width: 4px;
}
    
    </style>

        
    </head> 
    

    <body>  
     
     <div class="sticky-image-wrapper">
       <img src="images/footerLight.png" />
    </div>
    
         
  <div class="col-md-12">  
             
            <div class="table-responsive">  
    <h3 align="center"><?php echo $tourney; ?> Scorecard   # <?php echo $card; ?></h3> 
    <h3 align="center">If you can't see the numbers on each hole zoom out (ctrl -) or View Zoom out</h3>
 
    <table id="editable_table" class="table table-bordered table-striped">
     <thead>
      <tr>
       <th>Name</th>
       <th>School</th>
       <th>1</th> <th>2</th><th>3</th><th>4</th><th>5</th><th>6</th><th>7</th><th>8</th><th>9</th>
      <th>Front</th> <th>T</th> <th>Type DQ or WD</th>
       <th>Type Tie Breaker Place</th><th>Click Pen to Enter Scores</th>
      </tr>
     </thead>
     <tbody>    <hr> 
     <?php    
     while($row = mysqli_fetch_array($result))
     {
      echo '
      <tr>  
       <td>'.$row["player_1"].'</td>
        <td hidden>'.$row["pid"].'</td>    
       <td>'.$row["abv"].'</td>  
       <td>'.$row["hole1"].'</td>
        <td>'.$row["hole2"].'</td>
         <td>'.$row["hole3"].'</td>
          <td>'.$row["hole4"].'</td>
           <td>'.$row["hole5"].'</td>
            <td>'.$row["hole6"].'</td>
             <td>'.$row["hole7"].'</td>
              <td>'.$row["hole8"].'</td>
               <td>'.$row["hole9"].'</td>

                        <td hidden>'.$row["tid"].'</td>
                         <td>'.$row["front"].'</td>
                           <td>'.$row["total"].'</td>
                           <td>'.$row["dq"].'</td>
                            <td>'.$row["manualscore"].'</td>
                            
                           
      </tr>
      ';
     }
     ?>
     </tbody>
    </table>
   </div>  
  </div>  
 </body>  
</html> 
<script>  


$(document).ready(function(){  
     $('#editable_table').Tabledit({
      url:'action9.php',
      columns:{
       identifier:[1, 'pid'],
       editable:[[3, 'hole1'], [4, 'hole2'], [5, 'hole3'], [6, 'hole4'], [7, 'hole5'], [8, 'hole6'], [9, 'hole7'], [10, 'hole8'], [11, 'hole9'], [12, 'tid'],[13, 'dq'],[14, 'manualscore']]
      },
          autoSelect : true,
      	autoFocus : true,
        
      restoreButton : true, 
      deleteButton : false,
           
      onSuccess:function(data, textStatus, jqXHR)  
      {
        javascript:location.reload(true) 
      } 

     });
      
});   


 </script>   
 
 </div></div> 
 <div>
 

</div>
<hr>
      <div class="row">
        <div class="col-lg-2 col-sm-4 mb-4">
         <?php
         
          if(!empty($_GET['tid']))
{
$trny = $_GET['tid'];
}


  $sql = "SELECT tid, count(scores.pid) as count
   FROM scores WHERE tid = $trny";

$result = mysqli_query($conn,$sql) or die(mysqli_error());

 if ($result->num_rows > 0) {
echo '<table>';
echo '<thead class="thead-dark">';
echo '<tr><th scope="col"><center><h3>Total Golfers</h3></th></tr>';


// keeps getting the next row until there are no more to get

while($row = mysqli_fetch_array( $result )) {
	// Print out the contents of each row into a table
  echo "<tr><td><Center><h2>";
	echo $row['count'];
	echo "</h3></td></tr>"; 
	
	
} 

echo "</thead-dark></table>";

    } 
?>


 <?php
               
               if(!empty($_GET['tid']))
{
$trny = $_GET['tid'];
}


  $sql = "SELECT scores.tid, count(pid) as count, team.school, scores.tmid,
  team.abv
  FROM scores 
   INNER JOIN team on scores.tmid = team.tmid 
WHERE tid = $trny GROUP by tmid ORDER by school asc";

$result = mysqli_query($conn,$sql) or die(mysqli_error());

 if ($result->num_rows > 0) {
echo '<table>';
echo '<tr> <td colspan="3" align="center"><h3>Schools/Golfers</h3>';
echo '<tr><th scope="col"><center>Teams</th><th># </th></tr>';


// keeps getting the next row until there are no more to get

while($row = mysqli_fetch_array( $result )) {
	// Print out the contents of each row into a table
  echo "<tr><td><Center>";
	echo $row['abv'];
	echo "</td><td><center>"; 
  	echo $row['count'];
	echo "</td></tr>"; 
	
	
} 

echo "</thead-dark></table>";

    } 
?>


     <?php
    
    
//Get number of Team to Search For.
if(!empty($_GET['tid']))
{
$tid = $_GET['tid'];
 }
// echo $tid;

    $sql = "SELECT scores.id, scores.pid, scores.tmid, scores.tid, scores.front, 
    scores.back, scores.total, scores.last6, scores.last3,
   roster.pid, roster.player_1, roster.grade, team.tmid, team.abv
   FROM `scores`
   INNER JOIN roster on scores.pid = roster.pid 
   LEFT JOIN team on scores.tmid = team.tmid
   WHERE scores.tid = $tid AND `dq` != 'DQ'   AND `dq` != 'WD' AND
   total = 0";


$result = mysqli_query($conn,$sql)

or die ('Error in Query Try Again:-- Get Players' . mysqli_error()); 
  // var_dump($result);
//Print table to the web page
echo "<table>";
echo '<td colspan="3" align="center"><h3>Players With No Scores</h3>';
echo "<tr><th><center> Place </th><th><center>  Name </th> <th><center> Team</th><b><th><center> Total</th></b> </tr>";
// keeps getting the next row until there are no more to get
 $i=1;
while($row = mysqli_fetch_array( $result )) {
	// Print out the contents of each row into a table
	
	echo "<tr><td><center> "; 
	echo $i;
  echo "</td><td><CENTER>"; 
	echo $row['player_1'];
	echo "</td><td><CENTER>"; 
	echo $row['abv'];
  	echo "</td><td><CENTER>";
	echo $row['total'];
	echo "</td></b><CENTER>"; 
   $i++;
} 
echo"</table>";
       
?>  
</p>
          
        </div>

        <div class="col-lg-2 col-sm-4 mb-4">
    <?php




 
//Get number of Team to Search For.
if(!empty($_GET['tid']))
{
$trny = $_GET['tid'];
}

//set the limit for to top scores per team to add up
$limit=4;
 
//nasty script begins here
// Selects the tournament id (tid) from scores table
$sql = "SELECT DISTINCT `tid` FROM `scores` WHERE tid = '$trny'";

$tournaments=mysqli_query($conn,$sql);
//var_dump($tournaments);
                
while($trny = mysqli_fetch_assoc($tournaments))

{  

//This Selects the Teams that have players in the tournament
$sql = "SELECT scores.total, scores.tmid, team.school FROM scores
INNER JOIN team on scores.tmid = team.tmid
WHERE scores.tid = '".$_GET['tid']."'
AND `noteam` <> 'yes' AND `jv` != 'yes'
AND `dq` != 'DQ'   AND `dq` != 'WD' " ;
$result=mysqli_query($conn,$sql);
$j=0;
while($team = mysqli_fetch_assoc($result))

{

{

$teams[$j] = $team['tmid'];
//$teams[$j] = $team['school'];
$team_names[$j] = $team['school'];
//var_dump($team);
   // This selects all the player from 1 team at a time and gets their scores.
$sql2 = "SELECT pid, tmid, total, tid  FROM `scores` 
WHERE `tmid` LIKE '".$team['tmid']."' AND `tid` LIKE '".$trny['tid']."' 
AND `noteam` <> 'yes' AND `jv` != 'yes'  AND `dq` != 'DQ'   AND `dq` != 'WD'
ORDER BY `total` ASC";
$result2=mysqli_query($conn,$sql2);}

    


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

//var_dump ($data);
$k++;

}

//$totals[$teams[$i]] = array_sum($scores);
$totals[$team_names[$i]] = array_sum($scores);

$i++;

//var_dump($totals);
}

//___________________________________________________
//sort($totals);

//_____________________________________________

echo '<table>';
echo '<tr> <td colspan="3" align="center"><h3>Team Scores</h3>';
echo '<tr><td colspan="3" align="center"><h3><center>'.$tname.'</h3></td></tr><tr>
<th>Place</td><th><center>Team</td><th>Score</td><tr>';

asort($totals); $place=1; 
foreach ($totals as $key => $val)  { 
    echo "<tr><td>".$place."</td><td>".$key."</td><td><center>".$val."</td></tr>";
     $place++;
 }  

 echo "</table><br><br>";
 unset($team);
 unset($teams);
 unset($result2);
 unset($data);
 unset($scores);
 unset($totals);
 unset($trny);
 unset($i);
 unset($j);
 unset($k);
 }
//_____________________________________________
//used to show you the structure of the final output $totals is the variable
//print_r($totals);




?>

    
        </div>
        <div class="col-lg-4 col-sm-4 mb-4">
         
     <?php
    
    
//Get number of Team to Search For.
if(!empty($_GET['tid']))
{
$tid = $_GET['tid'];
 }
// echo $tid;

    $sql = "SELECT scores.id, scores.pid, scores.tmid, scores.tid, scores.front, 
    scores.back, scores.total, scores.last6, scores.last3,
   roster.pid, roster.player_1, roster.grade, team.tmid, team.abv
   FROM `scores`
   INNER JOIN roster on scores.pid = roster.pid 
   LEFT JOIN team on scores.tmid = team.tmid
   WHERE scores.tid = $tid AND `dq` != 'DQ'   AND `dq` != 'WD' AND
   total > 0
  ORDER BY `total`, `manualscore`, `back`, `last6`, `last3` ASC";


$result = mysqli_query($conn,$sql)

or die ('Error in Query Try Again:-- Get Players' . mysqli_error()); 
  // var_dump($result);
//Print table to the web page
echo "<table>";
echo '<td colspan="3" align="center"><h3>Individual Scores</h3>';
echo "<tr><th><center> Place </th><th><center>  Name </th> <th><center> Team</th><b><th><center> Front</th> 
</b><b><th><center>Back</th><th><center> Total</th></b> </tr>";
// keeps getting the next row until there are no more to get
 $i=1;
while($row = mysqli_fetch_array( $result )) {
	// Print out the contents of each row into a table
	
	echo "<tr><td><center> "; 
	echo $i;
  echo "</td><td><CENTER>"; 
	echo '<a href="edit.php?id='.$row['id'].'">'.$row['player_1'].'</font></a>';
	echo "</td><td><CENTER>"; 
	echo '<a href="teamStats.php?tmid='.$row['tmid'].'">'.$row['abv'].'</font></a>';
  echo "</td><td><CENTER>"; 
	echo $row['front'];
	echo "</td><td><CENTER>"; 
	echo $row['back'];
	echo "</td><td><CENTER>"; 
	echo $row['total'];
	echo "</td></b><CENTER>"; 
   $i++;
} 
echo"</table>";
       
?>        
        </div>





                <div class="col-lg-3 col-sm-4 mb-4">
         
          <?php
    
    
//Get number of Team to Search For.
if(!empty($_GET['tid']))
{
$tid = $_GET['tid'];
 }
// echo $tid;
  $sql = "SELECT * from tournament WHERE `id` = '$tid'";
       $result = mysqli_query($conn,$sql)
          or die ('Error in Query Try Again:--' . mysqli_error()); 
          echo "<div class='CSSTableGenerator' >";
          echo "<table border='1'>";
while($row = mysqli_fetch_array( $result )) {

         } 
    $sql = "SELECT scores.id, scores.dq, scores.pid, scores.tmid,
   roster.pid, roster.player_1, team.tmid, team.school, team.abv
   FROM `scores`
   INNER JOIN roster on scores.pid = roster.pid 
   LEFT JOIN team on scores.tmid = team.tmid
   WHERE scores.tid = '$tid' AND `dq` != '1'";


$result = mysqli_query($conn,$sql)

or die ('Error in Query Try Again:-- Get Players' . mysqli_error()); 
  // var_dump($result);
//Print table to the web page
echo "<table>";
echo "<tr><td colspan='6' align='center'><h3>Players who did not Finish</h3></td></tr>
<tr><th><center> Player Name </th> <th><center> Team</th><b><th><center>Status</th> 
</b> </tr>";
// keeps getting the next row until there are no more to get
 $i=1;
while($row = mysqli_fetch_array( $result )) {
	// Print out the contents of each row into a table
	
	echo "<tr><td><center> "; 
	echo '<a href="edit.php?id='.$row['id'].'">'.$row['player_1'].'</font></a>';
	echo "</td><td><CENTER>"; 
	echo '<a href="teamStats.php?tmid='.$row['tmid'].'">'.$row['abv'].'</a>';
  echo "</td><td><b><CENTER>"; 
  echo $row['dq'];
  echo "</td>"; 
} 
echo"</table>";
         
?> 
        </div>
  
      </div>
 
 
 


   <!-- Page Heading/Breadcrumbs -->
      <div class="col-lg-3 col-sm-4 mb-4">
      <p>
      
    
 
<?php



    if(!empty($_GET['tid']))
{
$trny = $_GET['tid'];
}  

      
$sql = "SELECT * FROM tournament WHERE id = $trny";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

        $slope = $row["slope"];
        $rating = $row["rating"];
        $par = $row["par"];
        $non_varsity = $row["non_varsity"];
    }
  
    
    
} else {
    echo "0 results";
}


    ?>
    




<?php

    if(!empty($_GET['tid']))
{
$trny = $_GET['tid'];
}  

$sql="SELECT trnyteams.tmid, trnyteams.tid, roster.tmid,
roster.player_1, roster.pid, tournament.uid FROM `trnyteams` 
INNER JOIN `roster` on trnyteams.tmid = roster.tmid
LEFT JOIN `tournament` on trnyteams.tid = tournament.id
WHERE trnyteams.tmid = roster.tmid AND 
trnyteams.tid = $trny 
ORDER by roster.player_1 ASC";
      
$result=mysqli_query($conn,$sql);

$players="";

while ($row=mysqli_fetch_array($result)) {

    $pid=$row["pid"];
    $name=$row["player_1"];
    $players.="<OPTION VALUE=\"$pid\">".$name;
}




$sql="SELECT trnyteams.id, trnyteams.tmid, trnyteams.tid,
team.tmid, team.school FROM `trnyteams`
INNER JOIN `team` ON trnyteams.tmid = team.tmid
  WHERE tid = $trny";
$result=mysqli_query($conn,$sql);

$teams="";

while ($row=mysqli_fetch_array($result)) {

    $trny = $row['tid'];
    $team=$row["tmid"];
    $school = $row["school"];
    
    $teams.="<OPTION VALUE=\"$team\">".$school;  
}
?>

        <hr>

  <div align="left"><strong><h3>Enter Player's in Tournament</h3></strong></div>
  <form action="EnterFromScoreCard.php" method="POST">
  
  
  
  
      		Card:
		 <select name="card1" required/> 
		   <option value=""></option>
  <option value="01">01</option>
  <option value="02">02</option>
  <option value="03">03</option>
  <option value="04">04</option>
    <option value="05">05</option>
  <option value="06">06</option>
  <option value="07">07</option>
  <option value="08">08</option>
    <option value="09">09</option>
  <option value="10">10</option>
  <option value="11">11</option>
  <option value="12">12</option>
    <option value="13">13</option>
  <option value="14">14</option>
  <option value="15">15</option>
  <option value="16">16</option>
    <option value="17">17</option>
  <option value="18">18</option>
  <option value="19">19</option>
  <option value="20">20</option>
    <option value="21">21</option>
  <option value="22">22</option>
  <option value="23">23</option>
  <option value="24">24</option>
    <option value="25">25</option>
      <option value="26">26</option>
        <option value="27">27</option>
          <option value="28">28</option>
            <option value="29">29</option>
              <option value="30">30</option>
                <option value="31">31</option>
                  <option value="32">32</option>
                    <option value="33">33</option>
                      <option value="34">34</option>
                        <option value="35">35</option>
                          <option value="36">36</option>
</select> 

            <br>

  
  
  
  
  
    <p align="left">
    
Name:
            <select name="1" id="drop1" required>
              <OPTION VALUE=><?php echo $players ?></OPTION>
            </SELECT>   <br>
            
            
            
            
Team:
            <select name="tmid1" id="drop2" required>
              <OPTION VALUE=><?php echo $teams ?></OPTION>
            </SELECT>  <br>

<font color="red"><b>Individual</b></font>    <input type="checkbox" name="noteam1" value="yes">  

JV <input type="checkbox" name="jv1" value="yes">




</p>
    <?php
$sql = "SELECT * FROM tournament 
   WHERE id = $trny";
$result = mysqli_query($connect, $sql); 

  while($row = mysqli_fetch_array($result))
     {
      $tourney = $row['tournament'];
      $id = $row['id'];
      $date = $row['date'];
       $slope = $row['slope'];
        $rating = $row['rating'];
         $par = $row['par'];
          $event = $row['event'];
           $nonvar = $row['non_varsity'];
      
        };
           ?>


      <input name="" type="submit" value="Enter Players" />    <br>
      <a href="edittrny.php?id=<?php echo $trny; ?>">Edit Tourney</a>    
       <a href="EnterTrnyTeam.php?id=<?php echo $trny; ?>">Enter New Team</a>
        <a href="trnyroster.php?id=<?php echo $trny; ?>">See all Players</a> <br>
      
    
      
 	<input type="varchar" name="tournament" size="1" value="<?php echo $tourney; ?>" readonly="readonly"/>

	<input type="id" name="tid" size="1" value="<?php echo $id; ?>" readonly="readonly"/>


  <input type="date" name="date" size="1" value="<?php echo $date; ?>" readonly="readonly"/> 
        
         <input type="int" name="slope" size="1" value="<?php echo $slope; ?>" readonly />
    <input type="decimal" name="rating" size="1" value="<?php echo $rating; ?>" readonly />
 <input type="int" name="par" size="1" value="<?php echo $par; ?>" readonly />    

        </form>
        
    <?php 
    $sql="SELECT * FROM team ORDER by school asc";
$result = $conn->query($sql);

$options="";

while ($row=mysqli_fetch_array($result)) {   
    $school=$row["school"];
    $tmid=$row["tmid"];
    $options.="<OPTION VALUE=\"$tmid\">".$school;

}?>    
        
         <div align="left"><strong><h4>Enter Rosters For Any School </h4></strong></div>
 <form id="myForm" action="connectpl.php" method="post">
			<p>Name:<input type="varchar" id="player_1" name="player_1" required />  
			  	<p>Grade:<select name="grade">
           <OPTION VALUE=''></OPTION> 
          <OPTION VALUE='09'>Freshman</OPTION>
          <OPTION VALUE='10'>Sophomore</OPTION>
          <OPTION VALUE='11'>Junior</OPTION>
          <OPTION VALUE='12'>Senior</OPTION></SELECT>   <br>
      	<td valign="top">School<select name="tmid" required id="drop1" ><OPTION VALUE=><?php echo $options ?></OPTION></SELECT>
		</p> <button id="sub">Enter Player</button>
</form>

    </div>
    <!-- /.container -->
    
    
    
    
    
    
    
    
    

 
 </body></html>
 
 
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
session_start();
session_regenerate_id();
if(!isset($_SESSION['email']))
   // if there is no valid session
{
    header("Location:login-system/index.php");
}

//include_once("headera.php");
include_once("databaseconnect.php");
include_once("headera.php");
//include_once("analyticstracking.php");

        $sql = "SELECT id FROM users WHERE users.email = '$_SESSION[email]'"; 
			$result = mysqli_query($conn,$sql) or die(mysqli_error());
				while($row = mysqli_fetch_array( $result )) {
			$userid = $row['id']; }
     //  echo $userid;

 $output = '';
                  //echo $userid;  
 ?> 

<?php


$sql = "SELECT DISTINCT max(tid) as tid from scores WHERE uid = $userid";
  $result = mysqli_query($conn,$sql) or die(mysqli_error());
  while($row = mysqli_fetch_array( $result )) {
   $tidno = $row['tid'];  }
  // echo $useridno;





if($_POST['submit'] == "Update Golfer")

{
//query the db for any scores not submitted to fill in to calculate accurate totals
$sql = "SELECT * FROM `scores` WHERE `uid` =  '$useridno' ORDER by tid desc LIMIT 1";
$result = mysqli_query($conn,$sql);
$player_exists = mysqli_num_rows($result);
$scores = mysqli_fetch_assoc($result);
$tournamentid = $scores['tid'];
if($teacher_exists != 1)
{
echo '<h2></h2>';
} else {
	echo '<CENTER><h2>! Golfer Updated Successfully!</h2>';
	echo "<br>"; 
	echo $_POST['id'];
	echo "<br>";
	echo $_POST['tmid'];
	echo "<br>";
	echo $_POST['pid'];
	echo "<br>";

	echo $_POST['jv'];
	echo "<br>";
	echo $_POST['card'];
	echo "<br>";
	echo $_POST['noteam'];
  	echo "<br>";
	echo $_POST['dq'];
  	echo "<br>";
	echo $_POST['teetime'];
	echo "<br>";
  	echo $_POST['man_2'];
  	echo "<br>";
    	echo $_POST['man_4'];
  	echo "<br>";
    	echo $_POST['man_6'];
  	echo "<br>";
}

	
	
$i=0;

$sql="UPDATE `scores` SET 
".(( !$_POST['tmid'] ) ? "" : "`tmid` = '".$_POST[tmid]."', ")."
".(( !$_POST['pid'] ) ? "" : "`pid` = '".$_POST[pid]."', ")."

".(( !$_POST['jv'] ) ? "" : "`jv` = '".$_POST[jv]."', ")."
".(( !$_POST['card'] ) ? "" : "`card` = '".$_POST[card]."', ")."
".(( !$_POST['noteam'] ) ? "" : "`noteam` = '".$_POST[noteam]."', ")."
".(( !$_POST['dq'] ) ? "" : "`dq` = '".$_POST[dq]."', ")."
".(( !$_POST['wd'] ) ? "" : "`dq` = '".$_POST[wd]."', ")."
".(( !$_POST['manualscore'] ) ? "" : "`manualscore` = '".$_POST[manualscore]."', ")."
".(( !$_POST['teetime'] ) ? "" : "`teetime` = '".$_POST[teetime]."', ")."
".(( !$_POST['man_2'] ) ? "" : "`man_2` = '".$_POST[man_2]."', ")."
".(( !$_POST['man_4'] ) ? "" : "`man_4` = '".$_POST[man_4]."', ")."
".(( !$_POST['man_6'] ) ? "" : "`man_6` = '".$_POST[man_6]."', ")."

`spam` = '1'


WHERE `id` = '".$_POST['id']."'";

if (!mysqli_query($conn,$sql))
  {
  die('Error: Update Scores ' . mysqli_error());
  }
  
  $sql1="UPDATE `season` SET 
".(( !$_POST['tmid'] ) ? "" : "`tmid` = '".$_POST[tmid]."', ")."
".(( !$_POST['pid'] ) ? "" : "`pid` = '".$_POST[pid]."', ")."

`spam` = '1'


WHERE `pid` = '".$_POST['pid']."'";

if (!mysqli_query($conn,$sql1))
  {
  die('Error: Season ' . mysqli_error());
  }

}


if(!empty($_GET['id']))
{
$id = $_GET['id'];
}
//echo $id;

?>   


  </div>
           
  
  <?php  
  
  
  $sql = "SELECT scores.id, scores.pid, scores.tmid, scores.card,
scores.front, scores.back, scores.total,scores.dq, scores.jv, 
scores.manualscore, scores.noteam, scores.teetime, scores.man_2, 
scores.man_4, scores.man_6,
roster.pid, roster.player_1, team.school FROM scores 
INNER JOIN roster ON scores.pid = roster.pid 
INNER JOIN team ON scores.tmid = team.tmid 
WHERE `id` LIKE '$id'  LIMIT 1";
if(@!$result = mysqli_query($conn,$sql))
	echo 'PHP LINE: '.__LINE__.'. Epic fail 1.'. mysqli_error();
else {
$setup = mysqli_fetch_assoc($result);
//Displays Array information
 //print_r  ($setup);
 
 
 //Tournament ID
$tid = $setup['id'];
$pid = $setup['pid'];
$player_1 = $setup['player_1'];
$tmid = $setup['tmid'];
$school = $setup['school'];
$jv = $setup['jv'];
$card = $setup['card'];
$noteam = $setup['noteam'];
$manualscore = $setup['manualscore'];
$manualteamscore = $setup['manualteamscore'];
$teetime = $setup['teetime'];
$man_2 = $setup['man_2'];
$man_4 = $setup['man_4'];
$man_6 = $setup['man_6'];

//echo $school;
         }
         
         
         
           $sql = "SELECT scores.tid FROM scores 
WHERE `tid` LIKE '$tid'  LIMIT 1";
if(@!$result = mysqli_query($conn,$sql))
	echo 'PHP LINE: '.__LINE__.'. Epic fail 1.'. mysqli_error();
else {
$setup = mysqli_fetch_assoc($result);
//Displays Array information
 //print_r  ($setup);

         }

?>
  
  <form action="<?php 
  
  
  if ($success){
    // we want to redirect via PHP so that users do not get that "resubmit message"
    header('location: '.$_SERVER['PHP_SELF'].'?status=sent');
} else {
    // we want the form to show up again? so, pass an error
    $status = 'error';
}







$sql="SELECT trnyteams.tmid, trnyteams.tid, roster.tmid,
roster.player_1, roster.pid, tournament.uid FROM `trnyteams` 
INNER JOIN `roster` on trnyteams.tmid = roster.tmid
LEFT JOIN `tournament` on trnyteams.tid = tournament.id
WHERE trnyteams.tmid = roster.tmid AND 
trnyteams.tid = '$tidno' AND tournament.uid = '$userid'";

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
  WHERE tid = '$tidno'";
$result=mysqli_query($conn,$sql);

$teams="";

while ($row=mysqli_fetch_array($result)) {

    
    $tmid=$row["tmid"];
    $school2 = $row["school"];
    
    $teams.="<OPTION VALUE=\"$tmid\">".$school2;
}


 ?>" method="post"> 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

 <center>    
    
  
            <h2> <?php echo $player_1; ?></h2>
<table width="auto" border="6">
  <tr><td><center><b>

	  Name:<br><input type="varchar" name="player_1" value='<?php echo $player_1; ?>' readonly /><br> 
Select New Player:<br><select name="pid" id="drop1">  
       <OPTION VALUE=><?php echo $players ?></OPTION>
            </SELECT><br></td><td>    
            
            
        <center><b>  
    Team: <br><input type="varchar" name="school" value='<?php echo $school; ?> 'readonly /><br> 
      Team:<br>
            <select name="tmid" id="drop2" >
              <OPTION VALUE=><?php echo $teams ?></OPTION>
            </SELECT> </td><td> 
            
            
            
            <center><b>  
              Card on Now: <input type="varchar" size="3" name="cardid" value='<?php echo $card; ?>' readonly/> <br>  
              
              
                		Change Card #:
		 <select name="card" /> 
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
    
             </td><td>
              
                <center><b>
              <a href="index.php">Home Page</a>
        
        </td</tr><td>
        
	                
    
    </td></tr><tr><td>
             

    <input type="checkbox" name="jv" value="yes"> Make a JV Player  <br>
     <input type="checkbox" name="jv" value=" " >Take off JV Player </td><br> <td>
    

    
    
    <input type="checkbox" name="noteam" value="yes">Player is not on a Team    <br>
    <input type="checkbox" name="noteam" value=" ">Player is on Team Now</td><br>  <td>
    
    
    Manual Score <br>(Type place player got) <br> <input type="varchar" name="manualscore"  value='<?php echo $manualscore; ?>'/> </td><td> 
    
    
        
    Manual Team Score <br>(Type place team got) <br> <input type="varchar" name="manualteamscore"  value='<?php echo $manualteamscore; ?>'/> </td></tr><tr><td>   
    
    
    
        <input type="checkbox" name="dq" value="DQ"> DQ this player  <br>
     <input type="checkbox" name="dq" value=" ">UNDO DQ this player </td><br> <td>


          <input type="checkbox" name="dq" value="WD"> Withdraw this player  <br>
     <input type="checkbox" name="dq" value=" ">UNDO WD this player </td><br> <td>




  Tee Time or Hole Number <br> <input type="varchar" name="teetime"  value='<?php echo $teetime; ?>'/> </td>
  
  <td>  <p>ID: <input type="varchar" name="id" value="<?php echo $id;?>"/><br></td></tr>
  <tr><td>
    
           <input type="checkbox" name="man_2" value="yes">Player is on 2 Man Team    <br>
    <input type="checkbox" name="man_2" value=" ">Player is not on 2 Man Team Now</td><br>  <td>
    
        <input type="checkbox" name="man_4" value="yes">Player is on 4 Man Team    <br>
    <input type="checkbox" name="man_4" value=" ">Player is not on 4 Man Team Now</td><br>  <td>
    
        <input type="checkbox" name="man_6" value="yes">Player is on 6 Man Team    <br>
    <input type="checkbox" name="man_6" value=" ">Player is not on 6 Man Team Now</td><br>  <td>
</div>

      <input name="submit" type="submit" value="Update Golfer" />
      </h1>    </center>
	 
	  

  </form>
    </table>
      
<?php

if(!empty($_GET['id']))
{
$id = $_GET['id'];
}
$sql = "SELECT tmid, tid, count(pid) as count, avg(total) as avg from scores 
WHERE tid = '$tidno' AND uid = '$userid'  group by tid order by tmid asc, pid asc"; 
	 
$result = mysqli_query($conn,$sql) or die(mysqli_error());


echo "<div class='CSSTableGenerator' >";
echo "<table border='1'>";
echo "<tr> <th>Tournament</th> <th>Number of Players</th><th>Average Score</th></tr>";
// keeps getting the next row until there are no more to get
while($row = mysqli_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td><CENTER>"; 
	echo $row['tid'];
	echo "</td><td><CENTER>"; 
	echo $row['count'];
	echo "</td><td><CENTER>"; 
	echo $row['avg'];
	echo "</td></tr><CENTER>"; 
	
	
} 

echo "</table>";
?></div>


<?php

$sql="SELECT trnyteams.tmid, trnyteams.tid, roster.tmid,
roster.player_1, roster.pid, tournament.uid FROM `trnyteams` 
INNER JOIN `roster` on trnyteams.tmid = roster.tmid
LEFT JOIN `tournament` on trnyteams.tid = tournament.id
WHERE trnyteams.tmid = roster.tmid AND 
trnyteams.tid = '$data[id]' AND tournament.uid = '$userid'";

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
  WHERE tid = '$data[id]'";
$result=mysqli_query($conn,$sql);

$teams="";

while ($row=mysqli_fetch_array($result)) {

    
    $team=$row["tmid"];
    $school = $row["school"];
    
    $teams.="<OPTION VALUE=\"$team\">".$school;
}
?>




<?php


$sql = "SELECT scores.id, scores.pid, scores.tmid, scores.card,
scores.front, scores.back, scores.total,scores.dq, scores.jv,
scores.noteam, scores.teetime, scores.man_2, scores.man_4, scores.man_6,
roster.pid, roster.player_1, team.school from scores 
INNER JOIN roster ON scores.pid = roster.pid 
INNER JOIN team ON scores.tmid = team.tmid 
WHERE tid = '12' AND uid = '$userid'  order by tid, tmid, card"; 
	 
$result = mysqli_query($conn,$sql) or die(mysqli_error());



echo "<table border='1'>";
echo "<tr><th>Player/Edit Score</th> <th>Team</th><th>Card</th><th>Front</th><th>Back</th><th>Total</th>
<th>DQ</th><th>JV</th><th>No Team</th><th>Event</th><th>Tee Time - Hole Number</th><th>Delete</th>
<th>2 Man</th><th>4 Man</th><th>6 Man</th></tr>";
// keeps getting the next row until there are no more to get
while($row = mysqli_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr><td>";
  	echo '<a href="edit.php?id='.$row['id'].'">'.$row['player_1'].'</font></a>';
	echo "</td><td><CENTER>"; 
	echo $row['school'];
  echo "</td><td><CENTER>";
	echo $row['card'];
	echo "</td><td><CENTER>";
	echo $row['front'];
	echo "</td><td><CENTER>";
	echo $row['back'];
	echo "</td><td><CENTER>";
	echo $row['total'];
    	echo "</td><td><CENTER>";
	echo $row['dq'];
  	echo "</td><td><CENTER>";
	echo $row['jv'];
	echo "</td><td><CENTER>";
	echo $row['noteam'];
  	echo "</td><td><CENTER>";
	echo $row['event'];
    	echo "</td><td><CENTER>";
	echo $row['teetime'];
  echo "</td><td><CENTER>";
	echo '<a href="deletevirtualscores.php?id='.$row['id'].'">'.$row['id'].'</font></a>';
  	echo "</td><td><CENTER>";
	echo $row['man_2'];
  	echo "</td><td><CENTER>";
	echo $row['man_4'];
    	echo "</td><td><CENTER>";
	echo $row['man_6'];
	echo "</center></td></tr>"; 
	
	
} 

echo "</table>";


?>
  </div>
</center>
</body>
</html>
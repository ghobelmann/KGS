               

<?php
   if(!empty($_GET['id']))
{
$tid = $_GET['id'];
}

include_once("../databaseconnect.php");

  ?>










  
  
<table width="900" border="1">



	<?php    
  
  $sql = "SELECT tmid, email FROM users WHERE 
     users.email = '$_SESSION[email]'"; 
			$result = mysqli_query($conn,$sql) or die(mysqli_error());
				while($row = mysqli_fetch_array( $result )) {
			$tmid = $row['tmid']; }  
  
  
  $sql = "SELECT tournament, id, date, notes, btyb FROM tournament WHERE id = '".$tid."'";
  if(@!$result = mysqli_query($conn,$sql))
	echo 'PHP LINE: '.__LINE__.'. Epic fail trny info.'. mysqli_error();
else {
$trnyname = mysqli_fetch_assoc($result);

$tname = $trnyname['tournament'];
$tdate = $trnyname['date'];
$tnotes = $trnyname['notes'];
$btyb = $trnyname['btyb'];
      }
      
      
      $sql = "SELECT image FROM team WHERE tmid = '".$tmid."'";
  if(@!$result = mysqli_query($conn,$sql))
	echo 'PHP LINE: '.__LINE__.'. Epic fail trny info.'. mysqli_error();
else {
$images = mysqli_fetch_assoc($result);

$image = $images['image'];
//echo $image;
         }
        //Select # of Cards to Print
        
$sql = "SELECT max(card) as card FROM  scores WHERE tid = '".$tid."'";
  if(@!$result = mysqli_query($conn,$sql))
	echo 'PHP LINE: '.__LINE__.'. Epic fail trny info.'. mysqli_error();
else {
$cards = mysqli_fetch_assoc($result);

$card = $cards['card'];
      }


   for ($x = 1; $x <= $card; $x++) {
       $variable = $x; 




  $sql = "SELECT teetime FROM `scores` WHERE tid = '".$tid."' 
AND card = $variable  LIMIT 1";
if(@!$result = mysqli_query($conn,$sql))
	echo 'PHP LINE: '.__LINE__.'. Epic fail teetime.'. mysqli_error();
else {
$setup = mysqli_fetch_assoc($result);

$teetime = $setup['teetime'];
         }
?>    
  <tr><td colspan="8"> 
  
  
   <center><h2>  <?php echo $tname; ?> </h2></center></td>
   
    <td colspan="5"> <center><h2> Card: <?php echo $variable;?> -- Hole  <?php echo $teetime;  ?>
    <hr>
           <?php // echo $btyb; ?>
    </td></tr>


  <tr>
    <td width="250" align="right"><strong>Front 9</strong> </td>

    <td width="100"><div align="center">Team</div></td>
    <td width="56" bgcolor="#FFFFFF"><div align="center" class="style8">1</div></td>
    <td width="56" bgcolor="#FFFFFF"><div align="center" class="style8">2</div></td>
    <td width="56" bgcolor="#FFFFFF"><div align="center" class="style8">3</div></td>
    <td width="56" bgcolor="#FFFFFF"><div align="center" class="style8">4</div></td>
    <td width="56" bgcolor="#FFFFFF"><div align="center" class="style8">5</div></td>
    <td width="56" bgcolor="#FFFFFF"><div align="center" class="style8">6</div></td>
    <td width="56" bgcolor="#FFFFFF"><div align="center" class="style8">7</div></td>
    <td width="56" bgcolor="#FFFFFF"><div align="center" class="style8">8</div></td>
    <td width="56" bgcolor="#FFFFFF"><div align="center" class="style8">9</div></td>
    <td width="150" bgcolor="#FFFFFF"><div align="center" class="style8">Out</div></td>
	<td rowspan="7"><center><?php echo $trny; ?><br>
  
  <img class="img-fluid" 
            src="http://admin.kansasgolfscores.com/uploads/team/<?php echo $image; ?> " alt="" height="120" width="140"> </a>
  
  
  </center></td>
  </tr>
  <tr>

    <?php
 if(!empty($_GET['tid']))
{
$tid = $_GET['tid'];
}	
	

//Select Players name from form 

$sql = "SELECT scores.pid, scores.tid, scores.round, 
scores.tmid, scores.card, roster.pid,
roster.player_1, scores.tmid, team.tmid, team.abv
 FROM scores 
INNER JOIN roster on scores.pid = roster.pid
LEFT JOIN team on scores.tmid = team.tmid
WHERE tid = '".$tid."' AND round = 1
AND card = $variable ";
if(@!$result = mysqli_query($conn,$sql))
	echo 'PHP LINE: '.__LINE__.'. Epic fail 1.'. mysqli_error();


while($row = mysqli_fetch_array( $result )){
	// Print out the contents of each row into a table
	echo "<tr><td>";
	echo $row['player_1'];
	echo "</td><td>";
	echo $row['abv'];
	echo "</td><td><td><td><td><td><td><td><td><td><td></tr>";
}
$sql = "SELECT tid, tournament.* FROM scores
INNER JOIN tournament ON scores.tid = tournament.id
 WHERE scores.tid = tournament.id AND tid = '".$tid."' AND round = 1 LIMIT 1";
$result = mysqli_query($conn,$sql)
or die ('Error in Query Try Again:--' . mysqli_error());


while($row = mysqli_fetch_array( $result )){
	// Print out the contents of each row into a table
	
	echo "<tr><td colspan='2' bgcolor=#FFFFFF><div align=right class='style8'> Par <td bgcolor=#FFFFFF align=center class='style8'>";
	echo $row['h1'];
	echo "</td><td bgcolor=#FFFFFF align=center class='style8'>";
	echo $row['h2'];
	echo "</td><td bgcolor=#FFFFFF align=center class='style8'>";
	echo $row['h3'];
	echo "</td><td bgcolor=#FFFFFF align=center class='style8'>";
	echo $row['h4'];
	echo "</td><td bgcolor=#FFFFFF align=center class='style8'>";
	echo $row['h5'];
	echo "</td><td bgcolor=#FFFFFF align=center class='style8'>";
	echo $row['h6'];
	echo "</td><td bgcolor=#FFFFFF align=center class='style8'>";
	echo $row['h7'];
	echo "</td><td bgcolor=#FFFFFF align=center class='style8'>";
	echo $row['h8'];
	echo "</td><td bgcolor=#FFFFFF align=center class='style8'>";
	echo $row['h9'];
	echo "</td><td bgcolor=#FFFFFF align=center class='style8'>";
	echo $row['h1'] + $row['h2'] + $row['h3'] + $row['h4'] + $row['h5'] + $row['h6'] + $row['h7'] + $row['h8'] + $row['h9'];
	
	
	echo "</tr>";
}

$sql = "SELECT tid, tournament.* FROM scores
INNER JOIN tournament ON scores.tid = tournament.id
 WHERE scores.tid = tournament.id AND tid = '".$tid."' LIMIT 1";
if(@!$result = mysqli_query($conn,$sql))
	echo 'PHP LINE: '.__LINE__.'. Epic fail 1.'. mysqli_error();


while($row = mysqli_fetch_array( $result )){
	// Print out the contents of each row into a table
	
	echo "<tr><td colspan='2' bgcolor=#FFFFFF><div align=right class='style8'> Yardage <td bgcolor=#FFFFFF align=center class='style8'>";
	echo $row['y1'];
	echo "</td><td bgcolor=#FFFFFF align=center class='style8'>";
	echo $row['y2'];
	echo "</td><td bgcolor=#FFFFFF align=center class='style8'>";
	echo $row['y3'];
	echo "</td><td bgcolor=#FFFFFF align=center class='style8'>";
	echo $row['y4'];
	echo "</td><td bgcolor=#FFFFFF align=center class='style8'>";
	echo $row['y5'];
	echo "</td><td bgcolor=#FFFFFF align=center class='style8'>";
	echo $row['y6'];
	echo "</td><td bgcolor=#FFFFFF align=center class='style8'>";
	echo $row['y7'];
	echo "</td><td bgcolor=#FFFFFF align=center class='style8'>";
	echo $row['y8'];
	echo "</td><td bgcolor=#FFFFFF align=center class='style8'>";
	echo $row['y9'];
	echo "</td><td bgcolor=#FFFFFF align=center class='style8'>";
	echo $row['y1'] + $row['y2'] + $row['y3'] + $row['y4'] + $row['y5'] + $row['y6'] + $row['y7'] + $row['y8'] + $row['y9'];
	
	
	echo "</tr>";
}
?>


    <?php
//Select Players name from form 
                                
unset ($variable);
 echo  "<tr style='page-break-after:always;'>" ;
}
?>
  
  
  
  
  
  
  
  
  
  <br>
  
  
  

    
    
    
    
    
    
    
    
    
    
    
    
    
  
  
  
  <br><br>
  </table>
  </body>
  </html>

  
  

                                                     

<?php
   if(!empty($_GET['id']))
{
$tid = $_GET['id'];
}

include_once("databaseconnect.php");

  ?>










  
  
<table width="auto" border="1" cellpadding="5">



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
  <tr><td colspan="16"> 
  
  
   <center><h1>  <?php echo $tname; ?> </h1></center></td>
   
    <td colspan="10"> <center><h2> Card: <?php echo $variable;?> -- Hole  <?php echo $teetime;  ?>
    <hr>
           
    </td></tr>


  <tr>
    <td width="450" align="right"> _____________________________________</td>

    <td width="50"><div align="center">Team</div></td>
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
        <td width="56" bgcolor="#FFFFFF"><div align="center" class="style8">10</div></td>
    <td width="56" bgcolor="#FFFFFF"><div align="center" class="style8">11</div></td>
    <td width="56" bgcolor="#FFFFFF"><div align="center" class="style8">12</div></td>
    <td width="56" bgcolor="#FFFFFF"><div align="center" class="style8">13</div></td>
    <td width="56" bgcolor="#FFFFFF"><div align="center" class="style8">14</div></td>
    <td width="56" bgcolor="#FFFFFF"><div align="center" class="style8">15</div></td>
    <td width="56" bgcolor="#FFFFFF"><div align="center" class="style8">16</div></td>
    <td width="56" bgcolor="#FFFFFF"><div align="center" class="style8">17</div></td>
    <td width="56" bgcolor="#FFFFFF"><div align="center" class="style8">18</div></td>
    <td width="150" bgcolor="#FFFFFF"><div align="center" class="style8">In</div></td>
	 <td width="150" bgcolor="#FFFFFF"><div align="center" class="style8">Total</div></td>
	<td rowspan="7"><center><?php echo $trny; ?><br>
  
  
 <a href="http://admin.kansasgolfscores.com/c_kansas/girls/uploads/team/<?php echo $image; ?>" > <img class="img-fluid" 
            src="http://admin.kansasgolfscores.com/c_kansas/girls/uploads/team/<?php echo $image; ?> " alt="<?php echo $image; ?>" height="120" width="140"> </a>
  
  
  </center></td>
  </tr>
  <tr>

    <?php
 if(!empty($_GET['tid']))
{
$tid = $_GET['tid'];
}	
	

//Select Players name from form 

$sql = "SELECT scores.pid, scores.tid, 
scores.tmid, scores.card, roster.pid,
roster.player_1, scores.tmid, team.tmid, team.abv
 FROM scores 
INNER JOIN roster on scores.pid = roster.pid
LEFT JOIN team on scores.tmid = team.tmid
WHERE tid = '".$tid."' 
AND card = $variable ";
if(@!$result = mysqli_query($conn,$sql))
	echo 'PHP LINE: '.__LINE__.'. Epic fail 1.'. mysqli_error();


while($row = mysqli_fetch_array( $result )){
	// Print out the contents of each row into a table
	echo "<tr><td height='50'>";
	echo "                                            ";
  echo "</td><td><h2>";
	echo $row['abv'];
	echo "</h2></td><td><td><td><td><td><td><td><td><td><td><td><td><td><td><td><td><td><td><td><td><td></tr>";
}
$sql = "SELECT tid, par.* FROM scores
INNER JOIN par ON scores.tid = par.course
 WHERE scores.tid = par.course AND tid = '".$tid."' LIMIT 1";
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
	echo $row['h1'] + $row['h2'] + $row['h3'] + $row['h4'] + $row['h5'] + 
  $row['h6'] + $row['h7'] + $row['h8'] + $row['h9'];
  echo "</td><td>";
  
  
  
	echo $row['h10'];
	echo "</td><td bgcolor=#FFFFFF align=center class='style8'>";
	echo $row['h11'];
	echo "</td><td bgcolor=#FFFFFF align=center class='style8'>";
	echo $row['h12'];
	echo "</td><td bgcolor=#FFFFFF align=center class='style8'>";
	echo $row['h13'];
	echo "</td><td bgcolor=#FFFFFF align=center class='style8'>";
	echo $row['h14'];
	echo "</td><td bgcolor=#FFFFFF align=center class='style8'>";
	echo $row['h15'];
	echo "</td><td bgcolor=#FFFFFF align=center class='style8'>";
	echo $row['h16'];
	echo "</td><td bgcolor=#FFFFFF align=center class='style8'>";
	echo $row['h17'];
	echo "</td><td bgcolor=#FFFFFF align=center class='style8'>";
	echo $row['h18'];
	echo "</td><td bgcolor=#FFFFFF align=center class='style8'>";
	echo $row['h10'] + $row['h11'] + $row['h12'] + $row['h13'] + $row['h14'] + $row['h15'] + $row['h16'] + $row['h17'] + $row['h18'];
	echo "</td><td bgcolor=#FFFFFF align=center class='style8'>";
	echo $row['h1'] + $row['h2'] + $row['h3'] + $row['h4'] + $row['h5'] + $row['h6'] + $row['h7'] + $row['h8'] + $row['h9'] + $row['h10'] + $row['h11'] + $row['h12'] + $row['h13'] + $row['h14'] + $row['h15'] + $row['h16'] + $row['h17'] + $row['h18'];
	echo "</tr>";
	
}

$sql = "SELECT tid, yardage.* FROM scores
INNER JOIN yardage ON scores.tid = yardage.course
 WHERE scores.tid = yardage.course AND tid = '".$tid."' LIMIT 1";
if(@!$result = mysqli_query($conn,$sql))
	echo 'PHP LINE: '.__LINE__.'. Epic fail 1.'. mysqli_error();


while($row = mysqli_fetch_array( $result )){
	// Print out the contents of each row into a table
	
	echo "<tr><td colspan='2' bgcolor=#FFFFFF><div align=right class='style8'> Yardage <td bgcolor=#FFFFFF align=center class='style8'>";
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
  echo "</td><td>";
  	echo $row['h10'];
	echo "</td><td bgcolor=#FFFFFF align=center class='style8'>";
	echo $row['h11'];
	echo "</td><td bgcolor=#FFFFFF align=center class='style8'>";
	echo $row['h12'];
	echo "</td><td bgcolor=#FFFFFF align=center class='style8'>";
	echo $row['h13'];
	echo "</td><td bgcolor=#FFFFFF align=center class='style8'>";
	echo $row['h14'];
	echo "</td><td bgcolor=#FFFFFF align=center class='style8'>";
	echo $row['h15'];
	echo "</td><td bgcolor=#FFFFFF align=center class='style8'>";
	echo $row['h16'];
	echo "</td><td bgcolor=#FFFFFF align=center class='style8'>";
	echo $row['h17'];
	echo "</td><td bgcolor=#FFFFFF align=center class='style8'>";
	echo $row['h18'];
	echo "</td><td bgcolor=#FFFFFF align=center class='style8'>";
	echo $row['h10'] + $row['h11'] + $row['h12'] + $row['h13'] + $row['h14'] + $row['h15'] + $row['h16'] + $row['h17'] + $row['h18'];
		echo "</td><td bgcolor=#FFFFFF align=center class='style8'>";
	echo $row['h1'] + $row['h2'] + $row['h3'] + $row['h4'] + $row['h5'] + $row['h6'] + $row['h7'] + $row['h8'] + $row['h9'] + $row['h10'] + $row['h11'] + $row['h12'] + $row['h13'] + $row['h14'] + $row['h15'] + $row['h16'] + $row['h17'] + $row['h18'];

	echo "</td></tr>";
	
	
}
?>



    <?php
//Select Players name from form 

$sql = "SELECT scores.pid, scores.tid, 
scores.tmid, scores.card, roster.pid,
roster.player_1, scores.tmid, team.tmid, team.abv
 FROM scores 
INNER JOIN roster on scores.pid = roster.pid
LEFT JOIN team on scores.tmid = team.tmid
WHERE tid = '".$tid."' 
AND card = $variable ";
if(@!$result = mysqli_query($conn,$sql))
	echo 'PHP LINE: '.__LINE__.'. Epic fail 1.'. mysqli_error();


$sql = "SELECT tid, par.* FROM scores
INNER JOIN par ON scores.tid = par.course
 WHERE scores.tid = par.course AND tid = '".$tid."' LIMIT 1";
$result = mysqli_query($conn,$sql)
or die ('Error in Query Try Again:--' . mysqli_error());


$sql = "SELECT tid, yardage.* FROM scores
INNER JOIN yardage ON scores.tid = yardage.course
 WHERE scores.tid = yardage.course AND tid = '".$tid."' LIMIT 1";
if(@!$result = mysqli_query($conn,$sql))
	echo 'PHP LINE: '.__LINE__.'. Epic fail 1.'. mysqli_error();


while($row = mysqli_fetch_array( $result )){
	// Print out the contents of each row into a table
	

  	echo "<tr><td bgcolor=#FFFFFF align=center class='style8' colspan='24'><strong>";
	echo $tnotes;


  
}                                      
unset ($variable);
 echo  "<tr style='page-break-after:always;'>" ;
}
?>
  
  
  
  
  
  
  
  
  
  <br>
  
  
  

    
    
    
    
    
    
    
    
    
    
    
    
    
  
  
  
  <br><br>
  </table>
  </body>
  </html>

  
  

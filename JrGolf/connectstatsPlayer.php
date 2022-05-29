                                                 <?php
 //authentication for coaches to get to their pages, not for public pages.


include_once("databaseconnect.php");
     
      
      if(!empty($_POST['pid']))
{
$pid = $_POST['pid'];
}

 ?> 
  <!DOCTYPE html>
<html lang="en">
<head>
<title>Kansas Golf</title>
<meta charset="utf-8">
 <meta http-equiv="Refresh" content="2; url=http://www.kansasgolfscores.com/playerStats.php?pid=<?php echo $pid;?>&db=boys">
</head>                                        

  
<?php


$sql="INSERT INTO `stats` (tid, tmid, pid, tfairways, fairways, 
gir, putts, Tputts, 
updownc, updown, ssc, ss, pen,
ace, dbleagle, eagle, birdie, par1, bogie, doubleb, 
triple, other, place, score, include)
VALUES
('$_POST[tid]','$_POST[tmid]','$_POST[pid]',
'$_POST[tfw1]','$_POST[fw1]','$_POST[gir1]','$_POST[putts1]',
'$_POST[Tputts1]','$_POST[updownc1]','$_POST[updown1]',
'$_POST[ssc1]','$_POST[ss1]',
'$_POST[pen1]',
'$_POST[ace1]','$_POST[dbleagle1]', '$_POST[eagle1]',
'$_POST[birdie1]','$_POST[par1]',
'$_POST[bogie1]','$_POST[doubleb1]',
'$_POST[triple1]','$_POST[other1]',
'$_POST[place1]','$_POST[score1]','$_POST[include]')";
if (!mysqli_query($conn,$sql))
  {
  die('Error: Stats not Entered' . mysqli_error($conn));
  }
  
  
  
 ?> 
  
         <H1><center>Stats Successfully Entered</h1>
		  </html>
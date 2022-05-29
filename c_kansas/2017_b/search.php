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
//INITIAL PAGE SETTINGS-----------
define("IN_GOLF_STATS", TRUE);
include_once("common.php");
//INITIAL PAGE SETTINGS-----------



$today = date("Y-n-j"); 


?>

 
</div><center>
<h2>Search for :</h2><br><form action="datesearch.php" method="POST">
<h3><table>
	<tr>
		<td align="right">Search For Team:  </td>
		<td><input type="varchar" name="team" /></td>
</tr><tr>
	<td align="right">Player: </td>
	<td>    <input type="varchar" name="player" /></td>

</tr><tr>
	<td align="right">Tournament: </td>
	<td> <input type="varchar" name="tournament" /></td>
</tr><tr>
	<td align="right">Date:  </td>
	<td> <input type="varchar" name="date" value="<?php echo $today; ?>"/> </td>

  
    
          <input name="team" type="submit" value="Search"/>
       </h3></center>


</html>



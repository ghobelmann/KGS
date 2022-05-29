<?php
$page_title="Home";
define("IN_GOLF_STATS", TRUE);
define('IN_PHP_AUTH', TRUE);
include("databaseconnect.php");
include("PHP_AUTH/check_auth.php");
if(authorize("public") != "success")
{
header("Location: login.php?error=1");
die();
}
include("header.php");
include("menubar.php");
?>









<html>
<script language="JavaScript" type="text/JavaScript">
<!--
function MM_reloadPage(init) {  //reloads the window if Nav4 resized
  if (init==true) with (navigator) {if ((appName=="Netscape")&&(parseInt(appVersion)==4)) {
    document.MM_pgW=innerWidth; document.MM_pgH=innerHeight; onresize=MM_reloadPage; }}
  else if (innerWidth!=document.MM_pgW || innerHeight!=document.MM_pgH) location.reload();
}
MM_reloadPage(true);
//-->
</script>
<body>



<?php include("header.php"); ?>


<?php include("menubar.php"); ?>






<div id="Layer1" style="position:absolute; width:551px; height:453px; z-index:1; left: 188px; top: 130px;">
  <div align="center"><strong>Player 1/Team</strong></div>
  <form action="connect1.php" method="post">
    <p>Name:
        <input type="varchar" name="player_1" />
      Team:
		<input type="int" name="team" size="1"/>
    </p>
    <table width="395" border="1">
  <tr>
    <th width="40"><div align="center">1</th>
    <td width="38"><div align="center">2</div></td>
    <td width="45"><div align="center">3</div></td>
    <td width="45"><div align="center">4</div></td>
    <td width="40"><div align="center">5</div></td>
    <td width="45"><div align="center">6</td>
    <td width="45"><div align="center">7</td>
    <td width="45"><div align="center">8</td>
    <td width="45"><div align="center">9</td>
    <td width="35"><div align="center">Tot</td>
    <td width="35"><div align="center">Pnt</td>
  </tr>
</table>
  	 
      <p>
   	    
        <input type="int" name="hole1" size="1" />
		<input type="int" name="hole2" size="1"/>
      	<input type="int" name="hole3" size="1" />
        <input type="int" name="hole4" size="1"/>
        <input type="int" name="hole5" size="1"/>
        <input type="int" name="hole6" size="1"/>
        <input type="int" name="hole7" size="1"/>
        <input type="int" name="hole8" size="1"/>
        <input type="int" name="hole9" size="1"/>
        <input type="int" name="total" size="1"/>
        <input type="int" name="points" size="1"/>
            
        <br>
		
        
        <input type="int" name="hole1_1" size="1"/>
        <input type="int" name="hole2_1" size="1"/>
        <input type="int" name="hole3_1" size="1"/>
        <input type="int" name="hole4_1" size="1"/>
        <input type="int" name="hole5_1" size="1"/>
        <input type="int" name="hole6_1" size="1"/>
        <input type="int" name="hole7_1" size="1"/>
        <input type="int" name="hole8_1" size="1"/>
        <input type="int" name="hole9_1" size="1"/>
		<input type="int" name="total_1" size="1"/>
        <input type="int" name="points_1" size="1"/>
      </p>
	  
	   <p>Name:
        <input type="varchar" name="player_2" />
      Team:
		<input type="int" name="team_1" size="1"/>
    </p>
	
		<br>
      <table width="200" border="1">
        <tr>
          <th scope="row">Date</th>
          <td><div align="center"><strong>Match</strong></div></td>
        </tr>
      </table>
      <p>
        
        <input type="date" name="date" size="10"/>
        <input type="smallint" name="mtch" size="10"/>
      </p>
      <p>                
    <p>
      <input name="" type="submit" value="Enter Scores" />
</p>
  </form>
<?php include("footer.php"); ?>
</div>
</body>
</html>

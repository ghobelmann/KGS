<?php
$page_title = "Delete Entry";
$permission = "superadmin,admin";
define("IN_GOLF_STATS", TRUE);
include("common.php");
?>
<style type="text/css">
<!--
.style1 {font-size: 24px}
.style2 {font-size: 18px}
-->
</style>

<div align="center"><span class="style1">WARNING, THIS WILL PERMANTELY DELETE SCORES FROM DATABASE!!!!</span>
</div>
<p class="style1">Name:</p>
<form action="delete_name.php" method="POST">
Submit Name to Delete: 
  <input type="text" name="name" value="" size="30">
<input type="submit" value="send">
</form>

<span class="style1">Team:</span><br>
<form action="delete_team.php" method="POST">
Submit Team to Delete: 
  <input type="text" name="team" value="" size="20">
<input type="submit" value="send">
</form>

<span class="style1">Date:</span><br>
<form action="delete_date.php" method="POST">
Submit Date to Delete: 
  <input type="date" name="date" value="" size="15">
<input type="submit" value="send">
</form>

<span class="style1">Match</span><br>
<form action="delete_trny.php" method="POST">
  <p>Submit Match to Delete: 
    <input type="text" name="mtch" value="" size="15">
    <input type="submit" value="send">
  <span class="style1">:</span></p>
</form>


<p class="style1">Individual Player: </p>
<form action="delete_name_team.php" method="POST">
  <p>Submit Name, Team and Date to Delete: 
    <input type="text" name="name" value="" size="15">
	<input type="text" name="team" value="" size="15">
	<input type="date" name="date" value="" size="15">
    <input type="submit" value="send">
  </p>
</form>
<form action="team_r.php" method="POST">
  <p>&nbsp;</p>
</form>
</body>
</html>

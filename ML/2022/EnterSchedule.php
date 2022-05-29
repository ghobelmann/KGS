<?php
$page_title = "Enter Scores";
$permission = "superadmin,admin";
define("IN_GOLF_STATS", TRUE);
include("common.php");
?>

<html><title>Enter Schedule</title>
  <form action="connectsch.php" method="post">
  
  Team:<input type="int" name="team" size="10"/>
    <p>Player 1 :
    <input type="varchar" name="player_1" size="10"/>
Player 2:
      <input type="varchar" name="player_2" size="10"/>
Player 3:
      <input type="varchar" name="player_3" size="10"/>
Player 4:
      <input type="varchar" name="player_4" size="10"/>
</p>
  <p>
      <input name="" type="submit" value="Enter Schedule" />
      <a href="trnysetup.php">Reset Date</a> </p>
  </form>
<?php include("footer.php"); ?>
</body>
</html>

<?php
$page_title = "Enter Scores";
define("IN_GOLF_STATS", TRUE);
define('IN_PHP_AUTH', TRUE);
include("databaseconnect.php");
include("PHP_AUTH/check_auth.php");
if(authorize("superadmin,admin") != "success") die('unauthorized');
?>



<html>
<style type="text/css">
<!--
.style1 {color: #0000FF}
a:link {
	color: #0000CC;
}
a:visited {
	color: #FF0099;
}
-->
</style>
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

<?php include("databaseconnect.php"); ?>
<?php include("menubar.php"); ?>






<div id="Layer1" style="position:absolute; width:551px; height:453px; z-index:1; left: 188px; top: 130px;">
  <div align="center">
    <p><strong>Delete Player's Round Scores</strong></p>
    <p><strong>This will Permantely Delete a Players Scores</strong></p>
    <p><strong>Enter Name and Team </strong></p>
  </div>
  <form action="delete.php" method="post">
    <p>Name:
        <input type="varchar" name="player_1" />
      Team:
		<input type="varchar" name="team" size="20"/>
		
	</p>
    <p><a href="deleteall.php" class="style1">Delete All Scores "Clicking this will Delete the entire database!!!"</a>
    </p>
    </p>
  </form>
<?php include("footer.php"); ?>
</div>
</body>
</html>

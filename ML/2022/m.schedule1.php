   <html><head>
  
  <meta name="Smith Center Mens League" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style/bootstrap/css/bootstrap.css">
  <script src="style/jquery-2.1.4.min.js"></script>
  <script src="style/bootstrap.min.js"></script>
   </head>   <?php error_reporting (E_ALL ^ E_NOTICE); ?>
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
//include("header.php");
//include("menubar.php");

if(!empty($_GET['date']))
{
$date = $_GET['date'];
}
?>


	    <ul>
			  <li><a href="index.php">Home</a></li>
			  <li><a href="schedule1.php">Schedule</a></li>
			  <li><a href="divisions.php">ABCD Players</a></li>
			  <li><a href="datesearch.php">Results</a></li>
			  <li><a href="teamscores.php">Totals</a></li>
			  <li><a href="avghole.php" style="background-image: none;">POTY</a></li>
			</ul>
      		    <ul>
			  <li>  <?php if($logged_in) { echo'<a href="logout.php">Log Out</a>'; } else { echo'<a href="login.php">Login</a>'; } ?>
    
			  <li><a href="membersdirectory.php">Members</a></li>
			  <li><a href="subdirectory.php">Subs</a></li>
			  <li><a href="handicap.php">Handicaps</a></li>
			  <li><a href="avgtotal.php">Stats</a></li>
			  <li><a href="admin_page.php" style="background-image: none;">admin</a></li>
			</ul>
      




       <div align="center">
  <h2 align="left">Smith Center Golf League Schedule 2016<br>
  </h2>
</div>
<div align="left">
  <table border="0" cellpadding="0" cellspacing="0" width="715">
    <tbody>
      <tr>
        <td class="bodyText" valign="top" width="715"><table border="0" cellpadding="1" cellspacing="1" width="100%">
          <tbody>
          <tr><th><br></th></tr>
          <tr><th><br></th></tr>
            <tr bordercolor="#111111">
              <td colspan="7" height="21"><p align="center" class="style1"><font color="#ffffff"><u>May 4th 4 Man Scramble - White Tees: Wednesday 6:00 pm </u></font></p></td>
            </tr>
            <tr bordercolor="#111111">
              <td width="25%" height="18"><div align="center" class="style1"><u>May 11th - White Tees </u></div></td>
              <td width="11%" height="18"><div align="center" class="style2"><a href="messageteam.php?team=1">1</a>-<a href="messageteam.php?team=8">8</a></div></td>
              <td width="14%" height="18"><div align="center" class="style2"><a href="messageteam.php?team=2">2</a>-<a href="messageteam.php?team=7">7</a></div></td>
              <td width="11%" height="18"><div align="center" class="style2"><a href="messageteam.php?team=3">3</a>-<a href="messageteam.php?team=6">6</a></div></td>
              <td width="11%" height="18"><div align="center" class="style2"><a href="messageteam.php?team=4">4</a>-<a href="messageteam.php?team=5">5</a></div></td>
           
            </tr>
<tr><th><br></th></tr>
            <tr bordercolor="#111111">
              <td height="18"><div align="center" class="style2"><b><u>May 18th - Blue Tees </u></b></div></td>
              <td height="18"><div align="center" class="style2"><a href="messageteam.php?team=1">1</a>-<a href="messageteam.php?team=7">7</a></div></td>
              <td height="18"><div align="center" class="style2"><a href="messageteam.php?team=2">2</a>-<a href="messageteam.php?team=5"> 5 </a></div></td>
              <td height="18"><div align="center" class="style2"><a href="messageteam.php?team=3">3</a>-<a href="messageteam.php?team=4">4</a></div></td>
              <td height="18"><div align="center" class="style2"><a href="messageteam.php?team=6">6</a>-<a href="messageteam.php?team=8">8</a></div></td>
          
            </tr>
<tr><th><br></th></tr>         

          <td height="18"><div align="center" class="style2"><b><u>May 25th - White Tees AD BC Scramble </u></b></div></td>
      
          </tr>
<tr><th><br></th></tr>
          <tr bordercolor="#111111">
            <td height="18"><div align="center" class="style2"><b><u>June 1 - Blue Tees </u></b></div></td>
            <td height="18"><div align="center" class="style2"><a href="messageteam.php?team=1">1</a>-<a href="messageteam.php?team=6">6</a></div></td>
            <td height="18"><div align="center" class="style2"><a href="messageteam.php?team=2">2</a>-<a href="messageteam.php?team=3">3</a></div></td>
            <td height="18"><div align="center" class="style2"><a href="messageteam.php?team=7">7</a>-<a href="messageteam.php?team=5">5</a></div></td>
            <td height="18"><div align="center" class="style2"><a href="messageteam.php?team=4">4</a>-<a href="messageteam.php?team=8">8</a></div></td>
        
          </tr>
 <tr><th><br></th></tr>    
  <td height="18"><div align="center" class="style2"><b><u>June 8 - White Tees </u></b></div></td>
      <td height="18"><div align="center" class="style2"><a href="messageteam.php?team=1">1</a>-<a href="messageteam.php?team=5">5</a></div></td>
      <td height="18"><div align="center" class="style2"><a href="messageteam.php?team=7">7</a>-<a href="messageteam.php?team=3">3</a></div></td>
      <td height="18"><div align="center" class="style2"><a href="messageteam.php?team=8">8</a>-<a href="messageteam.php?team=2">2</a></div></td>
      <td height="18"><div align="center" class="style2"><a href="messageteam.php?team=6">6</a>-<a href="messageteam.php?team=4">4</a></div></td>
<tr><th><br></th></tr>

  <td height="18"><div align="center" class="style2"><b><u>June 15 - Blue Tees </u></b></div></td>
      <td height="18"><div align="center" class="style2">AC BD Scramble </div></td>

  </tr>

<tr><th><br></th></tr>

  <tr bordercolor="#111111">
    <td height="18"><div align="center" class="style2"><b><u>June 22 - White Tees </u></b></div></td>
    <td height="18"><div align="center" class="style2"><a href="messageteam.php?team=1">1</a>-<a href="messageteam.php?team=4">4</a></div></td>
    <td height="18"><div align="center" class="style2"><a href="messageteam.php?team=6">6</a>-<a href="messageteam.php?team=2">2</a></div></td>
    <td height="18"><div align="center" class="style2"><a href="messageteam.php?team=7">7</a>-<a href="messageteam.php?team=8">8</a></div></td>
    <td height="18"><div align="center" class="style2"><a href="messageteam.php?team=5">5</a>-<a href="messageteam.php?team=3">3</a></div></td>
  </tr>
  
    <tr bordercolor="#111111">
    <td height="18"><div align="center" class="style2"><b><u>June 29 - </u></b></div></td>
    <td height="18"><div align="center" class="style2">Harvest Break/Makeup Night.</div></td>
 </tr>
  
<tr><th><br></th></tr>
  <td height="18"><div align="center" class="style2"><b><u>July 6 - White Tees </u></b></div></td>
      <td height="18"><div align="center" class="style2"><a href="messageteam.php?team=1">1</a>-<a href="messageteam.php?team=3">3</a></div></td>
      <td height="18"><div align="center" class="style2"><a href="messageteam.php?team=2">2</a>-<a href="messageteam.php?team=4">4</a></div></td>
      <td height="18"><div align="center" class="style2"><a href="messageteam.php?team=5">5</a>-<a href="messageteam.php?team=8">8</a></div></td>
      <td height="18"><div align="center" class="style2"><a href="messageteam.php?team=6">6</a>-<a href="messageteam.php?team=7">7</a></div></td>
 </tr>
<tr><th><br></th></tr>
  <tr bordercolor="#111111">
    <td height="18"><div align="center" class="style2"><b><u>July 13 - Blue Tees </u></b></div></td>
         <td height="18"><div align="center" class="style2">AB CD Scramble White Tees</div></td>
  </tr>
<tr><th><br></th></tr>
 <td height="18"><div align="center" class="style2"><b><u>July 20 - White Tees </u></b></div></td>
      <td height="18"><div align="center" class="style2"><a href="messageteam.php?team=1">1</a>-<a href="messageteam.php?team=2">2</a></div></td>
      <td height="18"><div align="center" class="style2"><a href="messageteam.php?team=3">3</a>-<a href="messageteam.php?team=8">8</a></div></td>
      <td height="18"><div align="center" class="style2"><a href="messageteam.php?team=4">4</a>-<a href="messageteam.php?team=7">7</a></div></td>
      <td height="18"><div align="center" class="style2"><a href="messageteam.php?team=6">6</a>-<a href="messageteam.php?team=5">5</a></div></td>



 </tr>
<tr><th><br></th></tr>
  <tr bordercolor="#111111">
    <td height="18"><div align="center" class="style2"><b><u>July 27 - White Tees</u></b></div></td>
            <td height="18"><div align="center" class="style2">Low Net Tournament/Barbeque</div></td>
  
   </tr>
        </table></td>
      </tr>
    </tbody>
  </table>
</div>









<?php include("footer.php"); ?>

</body>
</html>


</body>






</html>
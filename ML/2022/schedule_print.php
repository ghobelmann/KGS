<?php error_reporting (E_ALL ^ E_NOTICE); ?>
<?php

$page_title="Schedule";
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
//include("style/style.php");

if(!$_SESSION['username'] | !isset($_SESSION['password']) | !$_SESSION['permissions'])
{
$logged_in = FALSE;
} else {
$logged_in = TRUE;
}
?>
<style type="text/css">
<!--
.style1 {font-weight: bold}
.style2 {font-size: 24px}
.style3 {
	font-weight: bold;
	font-size: 18px;
}
.style6 {font-size: 18px}
.style7 {font-weight: bold}
-->
</style>





    <div align="center">
  <h2 align="left">Smith Center Golf League Schedule 2013<a href="schedule_print.php"Print</a><br>
  </h2>
</div>
<div align="left">
   <table border="0" cellpadding="0" cellspacing="0" width="715">
          <tbody>
            <tr>
              <td class="bodyText" valign="top" width="715"><table border="0" cellspacing="1" cellpadding="1" width="100%">
                <tbody>
                  <tr>
                    <th><br class="style7" /></th>
                  </tr>
				    <tr bordercolor="#111111">
                    <td height="21" colspan="7"><p align="center" class="style3 style6"><strong><u>May 15th 4 Man Scramble - White Tees: Wednesday 6:00 pm </u></strong></p></td>
                  </tr>
                  <tr>
                    <th><br /></th>
                  </tr>
                
                  <tr bordercolor="#111111">
                    <td height="18" width="31%"><div align="center" class="style3"><u>May 22 - White Tees </u></div></td>
                    <td height="18" width="8%"><div class="style2" align="center"><a href="messageteam.php?team=1">1</a>-<a 
href="messageteam.php?team=12">bye</a></div></td>
                    <td height="18" width="14%"><div class="style2" align="center"><a href="messageteam.php?team=2">2</a>-<a 
href="messageteam.php?team=11">11</a></div></td>
                    <td height="18" width="11%"><div class="style2" align="center"><a href="messageteam.php?team=3">3</a>-<a 
href="messageteam.php?team=10">10</a></div></td>
                    <td height="18" width="11%"><div class="style2" align="center"><a href="messageteam.php?team=4">4</a>-<a 
href="messageteam.php?team=9">9</a></div></td>
                    <td height="18" width="11%"><div class="style2" align="center"><a href="messageteam.php?team=5">5</a>-<a 
href="messageteam.php?team=8">8</a></div></td>
                    <td height="18" width="14%"><div class="style2" align="center"><a href="messageteam.php?team=6">6</a>-<a 
href="messageteam.php?team=7">7</a></div></td>
                  </tr>
                  <tr>
                    <th><br /></th>
                  </tr>
                  <tr bordercolor="#111111">
                    <td height="18"><div align="center" class="style3"><b><u>May 29 - Blue Tees </u></b></div></td>
                    <td height="18"><div class="style2" align="center"><a href="messageteam.php?team=1">1</a>-<a 
href="messageteam.php?team=11">11</a></div></td>
                    <td height="18"><div class="style2" align="center"><a href="messageteam.php?team=10">10</a>-<a 
href="messageteam.php?team=12"> bye </a></div></td>
                    <td height="18"><div class="style2" align="center"><a href="messageteam.php?team=2">2</a>-<a 
href="messageteam.php?team=9">9</a></div></td>
                    <td height="18"><div class="style2" align="center"><a href="messageteam.php?team=3">3</a>-<a 
href="messageteam.php?team=8">8</a></div></td>
                    <td height="18"><div class="style2" align="center"><a href="messageteam.php?team=4">4</a>-<a 
href="messageteam.php?team=7">7</a></div></td>
                    <td height="18"><div class="style2" align="center"><a href="messageteam.php?team=5">5</a>-<a 
href="messageteam.php?team=6">6</a></div></td>
                  </tr>
                  <tr>
                    <th><br /></th>
                  </tr>
                  <tr>
                    <td height="18"><div align="center" class="style3"><b><u>June 5 - White Tees </u></b></div></td>
                    <td height="18"><div class="style2" align="center"><a href="messageteam.php?team=1">1</a>-<a 
href="messageteam.php?team=10">10</a></div></td>
                    <td height="18"><div class="style2" align="center"><a href="messageteam.php?team=9">9</a>-<a 
href="messageteam.php?team=11">11</a></div></td>
                    <td height="18"><div class="style2" align="center"><a href="messageteam.php?team=8">8</a>-<a 
href="messageteam.php?team=12">bye</a></div></td>
                    <td height="18"><div class="style2" align="center"><a href="messageteam.php?team=2">2</a>-<a 
href="messageteam.php?team=7">7</a></div></td>
                    <td height="18"><div class="style2" align="center"><a href="messageteam.php?team=3">3</a>-<a 
href="messageteam.php?team=6">6</a></div></td>
                    <td height="18"><div class="style2" align="center"><a href="messageteam.php?team=4">4</a>-<a 
href="messageteam.php?team=5">5</a></div></td>
                  </tr>
                  <tr>
                    <th><br /></th>
                  </tr>
                  <tr bordercolor="#111111">
                    <td height="18"><div align="center" class="style3"><b><u>June 12 - Blue Tees </u></b></div></td>
                    <td height="18"><div class="style2" align="center"><a href="messageteam.php?team=1">1</a>-<a 
href="messageteam.php?team=9">9</a></div></td>
                    <td height="18"><div class="style2" align="center"><a href="messageteam.php?team=8">8</a>-<a 
href="messageteam.php?team=10">10</a></div></td>
                    <td height="18"><div class="style2" align="center"><a href="messageteam.php?team=7">7</a>-<a 
href="messageteam.php?team=11">11</a></div></td>
                    <td height="18"><div class="style2" align="center"><a href="messageteam.php?team=6">6</a>-<a 
href="messageteam.php?team=12">bye</a></div></td>
                    <td height="18"><div class="style2" align="center"><a href="messageteam.php?team=2">2</a>-<a 
href="messageteam.php?team=5">5</a></div></td>
                    <td height="18"><div class="style2" align="center"><a href="messageteam.php?team=3">3</a>-<a 
href="messageteam.php?team=4">4</a></div></td>
                  </tr>
                  <tr>
                    <th><br /></th>
                  </tr>
                  <tr>
                    <td height="18"><div align="center" class="style3"><b><u>June 19 - White Tees </u></b></div></td>
                    <td height="18"><div class="style2" align="center"><a href="messageteam.php?team=1">1</a>-<a 
href="messageteam.php?team=8">8</a></div></td>
                    <td height="18"><div class="style2" align="center"><a href="messageteam.php?team=7">7</a>-<a 
href="messageteam.php?team=9">9</a></div></td>
                    <td height="18"><div class="style2" align="center"><a href="messageteam.php?team=6">6</a>-<a 
href="messageteam.php?team=10">10</a></div></td>
                    <td height="18"><div class="style2" align="center"><a href="messageteam.php?team=5">5</a>-<a 
href="messageteam.php?team=11">11</a></div></td>
                    <td height="18"><div class="style2" align="center"><a href="messageteam.php?team=4">4</a>-<a 
href="messageteam.php?team=12">bye</a></div></td>
                    <td height="18"><div class="style2" align="center"><a href="messageteam.php?team=2">2</a>-<a 
href="messageteam.php?team=3">3</a></div></td>
                  </tr>
                  <tr>
                    <th><br /></th>
                  </tr>
                  <tr>
                    <td height="18"><div align="center" class="style3"><b><u>June 26 - White Tees </u></b></div></td>
                    <td height="18"><div align="center" class="style2 style1">Horse Race</div></td>
                  </tr>
                  <tr>
                    <th>&nbsp;</th>
                  </tr>
                 
                  <tr bordercolor="#111111">
                    <td height="18"><div align="center" class="style6"><strong><b><u>July 3 - Blue Tees </u></b></strong></div></td>
                    <td height="18"><div class="style2" align="center"><a href="messageteam.php?team=1">1</a>-<a 
href="messageteam.php?team=7">7</a></div></td>
                    <td height="18"><div class="style2" align="center"><a href="messageteam.php?team=6">6</a>-<a 
href="messageteam.php?team=8">8</a></div></td>
                    <td height="18"><div class="style2" align="center"><a href="messageteam.php?team=5">5</a>-<a 
href="messageteam.php?team=9">9</a></div></td>
                    <td height="18"><div class="style2" align="center"><a href="messageteam.php?team=4">4</a>-<a 
href="messageteam.php?team=10">10</a></div></td>
                    <td height="18"><div class="style2" align="center"><a href="messageteam.php?team=3">3</a>-<a 
href="messageteam.php?team=11">11</a></div></td>
                    <td height="18"><div class="style2" align="center"><a href="messageteam.php?team=2">2</a>-<a 
href="messageteam.php?team=12">bye</a></div></td>
                  </tr>
                  <tr>
                    <th><br /></th>
                  </tr>
                  <tr>
                    <td height="18"><div align="center" class="style6"><strong><b><u>July 10 - White Tees </u></b></strong></div></td>
                    <td height="18"><div class="style2" align="center"><a href="messageteam.php?team=1">1</a>-<a 
href="messageteam.php?team=6">6</a></div></td>
                    <td height="18"><div class="style2" align="center"><a href="messageteam.php?team=5">5</a>-<a 
href="messageteam.php?team=7">7</a></div></td>
                    <td height="18"><div class="style2" align="center"><a href="messageteam.php?team=4">4</a>-<a 
href="messageteam.php?team=8">8</a></div></td>
                    <td height="18"><div class="style2" align="center"><a href="messageteam.php?team=3">3</a>-<a 
href="messageteam.php?team=9">9</a></div></td>
                    <td height="18"><div class="style2" align="center"><a href="messageteam.php?team=2">2</a>-<a 
href="messageteam.php?team=10">10</a></div></td>
                    <td height="18"><div class="style2" align="center"><a href="messageteam.php?team=11">11</a>-<a 
href="messageteam.php?team=12">bye</a></div></td>
                  </tr>
                  <tr>
                    <th><br /></th>
                  </tr>
                  <tr bordercolor="#111111">
                    <td height="18"><div align="center" class="style6"><strong><b><u>July 17 - Blue Tees </u></b></strong></div></td>
                    <td height="18"><div class="style2" align="center"><a href="messageteam.php?team=1">1</a>-<a 
href="messageteam.php?team=5">5</a></div></td>
                    <td height="18"><div class="style2" align="center"><a href="messageteam.php?team=4">4</a>-<a 
href="messageteam.php?team=6">6</a></div></td>
                    <td height="18"><div class="style2" align="center"><a href="messageteam.php?team=3">3</a>-<a 
href="messageteam.php?team=7">7</a></div></td>
                    <td height="18"><div class="style2" align="center"><a href="messageteam.php?team=2">2</a>-<a 
href="messageteam.php?team=8">8</a></div></td>
                    <td height="18"><div class="style2" align="center"><a href="messageteam.php?team=9">9</a>-<a 
href="messageteam.php?team=12">bye</a></div></td>
                    <td height="18"><div class="style2" align="center"><a href="messageteam.php?team=10">10</a>-<a 
href="messageteam.php?team=11">11</a></div></td>
                  </tr>
                  <tr>
                    <th><br /></th>
                  </tr>
                  <tr>
                    <td height="18"><div align="center" class="style6"><strong><b><u>Juy  24 - White Tees </u></b></strong></div></td>
                    <td height="18"><div class="style2" align="center"><a href="messageteam.php?team=1">1</a>-<a 
href="messageteam.php?team=4">4</a></div></td>
                    <td height="18"><div class="style2" align="center"><a href="messageteam.php?team=3">3</a>-<a 
href="messageteam.php?team=5">5</a></div></td>
                    <td height="18"><div class="style2" align="center"><a href="messageteam.php?team=2">2</a>-<a 
href="messageteam.php?team=6">6</a></div></td>
                    <td height="18"><div class="style2" align="center"><a href="messageteam.php?team=7">7</a>-<a 
href="messageteam.php?team=12">bye</a></div></td>
                    <td height="18"><div class="style2" align="center"><a href="messageteam.php?team=8">8</a>-<a 
href="messageteam.php?team=11">11</a></div></td>
                    <td height="18"><div class="style2" align="center"><a href="messageteam.php?team=9">9</a>-<a 
href="messageteam.php?team=10">10</a></div></td>
                  </tr>
                  <tr>
                    <th><br /></th>
                  </tr>
                  <tr bordercolor="#111111">
                    <td height="18"><div align="center" class="style6"><strong><b><u>July 31- Blue Tees</u></b></strong></div></td>
                    <td height="18"><div class="style2" align="center"><a href="messageteam.php?team=1">1</a>-<a 
href="messageteam.php?team=3">3</a></div></td>
                    <td height="18"><div class="style2" align="center"><a href="messageteam.php?team=2">2</a>-<a 
href="messageteam.php?team=4">4</a></div></td>
                    <td height="18"><div class="style2" align="center"><a href="messageteam.php?team=5">5</a>-<a 
href="messageteam.php?team=12">bye</a></div></td>
                    <td height="18"><div class="style2" align="center"><a href="messageteam.php?team=6">6</a>-<a 
href="messageteam.php?team=11">11</a></div></td>
                    <td height="18"><div class="style2" align="center"><a href="messageteam.php?team=7">7</a>-<a 
href="messageteam.php?team=10">10</a></div></td>
                    <td height="18"><div class="style2" align="center"><a href="messageteam.php?team=8">8</a>-<a 
href="messageteam.php?team=9">9</a></div></td>
                  </tr>
                  <tr>
                    <th><br /></th>
                  </tr>
                  <tr bordercolor="#111111">
                    <td height="18"><div align="center" class="style6"><strong><b><u>August 7 - White Tees </u></b></strong></div></td>
                    <td height="18"><div class="style2" align="center"><a href="messageteam.php?team=1">1</a>-<a 
href="messageteam.php?team=2">2</a></div></td>
                    <td height="18"><div class="style2" align="center"><a href="messageteam.php?team=3">3</a>-<a 
href="messageteam.php?team=12">bye</a></div></td>
                    <td height="18"><div class="style2" align="center"><a href="messageteam.php?team=4">4</a>-<a 
href="messageteam.php?team=11">11</a></div></td>
                    <td height="18"><div class="style2" align="center"><a href="messageteam.php?team=5">5</a>-<a 
href="messageteam.php?team=10">10</a></div></td>
                    <td height="18"><div class="style2" align="center"><a href="messageteam.php?team=6">6</a>-<a 
href="messageteam.php?team=9">9</a></div></td>
                    <td height="18"><div class="style2" align="center"><a href="messageteam.php?team=7">7</a>-<a 
href="messageteam.php?team=8">8</a></div></td>
                  </tr>
				                    <tr>
                    <th><br /></th>
                  </tr>
                  <tr bordercolor="#111111">
                    <td height="18"><div align="center" class="style2 style1"><b><u>August 14 - Rain Date </u></b></div></td>
                </tbody>
              </table></td>
            </tr>
          </tbody>
        </table>
</div>
</body>
</html>
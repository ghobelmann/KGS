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
<?php error_reporting (E_ALL ^ E_NOTICE); ?>
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
include("style/style.php");
?>

<p align="center">&nbsp;  </p>
<p><br>
  <br>
	    
</p>
<div align="center"></div>
		<table width="83%" height="807"  border="0" align="right" cellpadding="0" cellspacing="0" bordercolor="#CCCCCC">
          <tr>
            <td width="46%" align="center" valign="top"><p>    <th bgcolor="#333333" height="19" class="style30" scope="row"><span class="style5"><font color="black">
      <?php if($logged_in) { echo'<a href="logout.php">Log Out</a>'; } else { echo'<a href="login.php">Login</a>'; } ?>
    </font></span></th></p>
            </td>
            <td width="30%" align="left" valign="top">
					<p align="center" class="style5"><font color="white">              </font></p>
			</td>
            <td width="29%" align="left" valign="top"><p align="center" class="style5">&nbsp;</p>
            </td>
          </tr>
          <tr>
            <td colspan="2" align="center" valign="top"><table width="100%"  border="0" cellspacing="0" cellpadding="5">
                <tr>
                  <td align="center"><h2>Message Board</h2></td>
                </tr>
                <tr>
                  <td align="center"><?php
			 if(authorize("admin, superadmin, messageboard") == 'success')
			 {
			  if(isset($_POST['msg']) == 'submitted')
{
if(!$_POST['from'] || !$_POST['message'])
{
echo '<h2><font color="red">You must fill in both fields.</font></h2>';
} else {
$_POST['from'] = htmlspecialchars($_POST['from'], ENT_QUOTES);
$_POST['message'] = htmlspecialchars($_POST['message'], ENT_QUOTES);
$sql = "INSERT INTO `message_board` (`timestamp`, `from`, `message`) VALUES ('".time()."', '".$_POST['from']."', '".$_POST['message']."')";
mysql_query($sql) or die("Error on line ".__LINE__." : ".mysql_error());
}
}
?>
                      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="messageboard" class="style5">
                        <p>
                          <input name="msg" type="hidden" value="submitted">
                        </p>
                        <table width="327"  border="0" cellpadding="0" cellspacing="1" bgcolor="#E4E6AE">
                          <tr>
                            <td align="center" colspan="2">Post a new message </td>
                          </tr>
                          <tr>
                            <td width="90" align="right">Your Name:</td>
                            <td width="251" align="left"><input name="from" type="text" size="35" maxlength="40"></td>
                          </tr>
                          <tr bgcolor="#E4E6AE">
                            <td colspan="2"><textarea name="message" cols="50" size="35" rows="6"></textarea></td>
                          </tr>
                          <tr align="right">
                            <td colspan="2"><input name="submit" type="submit" value="Post"></td>
                          </tr>
                        </table>
                      </form>
                      <?php
}
?></td>
                </tr>
                <tr>
                  <td align="center"><?php
			  $sql = "SELECT * FROM `message_board` ORDER BY `id` DESC LIMIT 0,4";
			  $result = mysql_query($sql) or die("Error on line ".__LINE__." : ".mysql_error());
			  while($data = mysql_fetch_assoc($result))
			  {
			  $date = date("d-M-y",$data['timestamp']);
			  //$time = date("g:i A",$data['timestamp']);
			  echo '
			  <table width="100%"  border="1" cellspacing="0" cellpadding="5">
                <tr>
                  <td width="250" align="left" valign="top">Posted by:-----
                    '.$data['from'].'
                  <br><br>
                  	Date Posted:------'.$date.'
				
</td>
                  <td align="left" valign="top">'.$data['message'].'</td>
                </tr>
              </table>';
			  }
			  ?>
                      <p></p></td>
                </tr>
            </table></td>
            <td align="left" valign="top" width="29%"><p align="center" class="style5"><span class="style5"><font color="white">
            </font></span></p>
            </td>
          </tr>
          <tr>
            <td colspan="2" align="center" valign="top"><div align="center">              <script src="http://www.google-analytics.com/urchin.js" type="text/javascript">
            </script>
                    <script type="text/javascript">
_uacct = "UA-4452093-1";
urchinTracker();
            </script>
            </div></td>
            <td align="left" valign="top" width="29%"><p align="center" class="style5"></p></td>
          </tr>
          <tr>
            <td colspan="2" align="center" valign="top">&nbsp;</td>
            <td width="29%"><div align="center"> </div></td>
          </tr>
          <tr>
            <td colspan="2" align="center" valign="top"><p>&nbsp;</p>
            <p>&nbsp;            </p></td>
            <td width="29%"><div align="center">
                <p class="style5">&nbsp;</p>
            </div></td>
          </tr>
        </table>
				



</body>



</html>

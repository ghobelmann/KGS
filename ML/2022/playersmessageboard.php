
<?php
//INITIAL PAGE SETTINGS-----------
$page_title = "Enter Scores";
$permission = "superadmin,admin,player";
define("IN_GOLF_STATS", TRUE);
include("common.php");
include("header.php");
//include("menubar.php");
include("style/style.php");
//INITIAL PAGE SETTINGS-----------


$query = " SELECT * FROM `tournament` LIMIT 0 , 1 ";
if($results = @mysql_query($query))
{
$data = mysql_fetch_assoc($results);

} else {
die('Error: '.mysql_error());
}

?>
<?php error_reporting (E_ALL ^ E_NOTICE); ?>


<tr>
        <td colspan="2" align="right" valign="top">
          <table width="43%"  border="0" cellspacing="0" cellpadding="5">
            <tr>
              <td align="center"><h2 align="right">Message Board</h2></td>
            </tr>
            <tr>
              <td align="center">
			 <?php
			// if(authorize("admin, superadmin, messageboard") == 'success')
			 {
			 if(isset($_POST['msg']) == 'submitted')
{
if(!$_POST['from'] || !$_POST['message'])
{
echo '<h2><font color="red">You must fill in both fields.</font></h2>';
} else {
$_POST['from'] = htmlspecialchars($_POST['from'], ENT_QUOTES);
$_POST['message'] = htmlspecialchars($_POST['message'], ENT_QUOTES);
$sql = "INSERT INTO `p_message_board` (`timestamp`, `from`, `message`) VALUES ('".time()."', '".$_POST['from']."', '".$_POST['message']."')";
mysql_query($sql) or die("Error on line ".__LINE__." : ".mysql_error());
}
}
?>
			  <form name="messageboard" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			    
		        <div align="right">
		          <input name="msg" type="hidden" value="submitted">
		            <table width="0" height="250"  border="0" align="left" cellpadding="0" cellspacing="1">
		                            <tr>
                        <td align="left" colspan="2">Post a new message </td>
                      </tr>
        <tr>
          <td align="right">Your Name:</td>
          <td align="left"><input name="from" type="text" size="35" maxlength="40"></td>
        </tr>
        <tr>
          <td colspan="2"><textarea name="message" cols="50"  rows="7"></textarea></td>
        </tr>
        <tr align="right">
          <td colspan="2"><input name="submit" type="submit" value="Post"></td>
        </tr>
                                                                </table>
		        </div>
			  </form>
              
                <div align="right">
                  <?php
}
?>
                  </div></td>
            </tr>
            <tr>
              <td align="left">
			  <?php
			  $sql = "SELECT * FROM `p_message_board` ORDER BY `id` DESC LIMIT 0,30";
			  $result = mysql_query($sql) or die("Error on line ".__LINE__." : ".mysql_error());
			  while($data = mysql_fetch_assoc($result))
			  {
			  $date = date("d-M-y",$data['timestamp']);
			  $time = date("g:i A",$data['timestamp']);
			  echo '
			  <table width="100%"  border="2" cellspacing="2" cellpadding="3">
                <tr>
                  <td width="300" align="left" valign="top">
				  
				 Posted by:'.$data['from'].'<br>
                 Date Posted:'.$date.'<br>
				 Time Posted:'.$time.'<br>
</td>
                  <td width="60%" td align="left" valign="top">'.$data['message'].'</td>
                </tr>
              </table>';
			  }
			  ?>
			  <div align="right"></div></td>
            </tr>
          </table>
        </td>
      </tr>
    </table>
</body>
</html>

<?php
//Increment counter
mysql_query("UPDATE countertable SET count_playersmessageboard=count_playersmessageboard+1");

//extract count from database table
$query = "SELECT count_playersmessageboard FROM countertable";

$result = mysql_query($query) or die(mysql_error());
echo "<table border='1'>";
echo "<tr> <th>This page has been visited.</th></tr>";
// keeps getting the next row until there are no more to get

while($row = mysql_fetch_array( $result )) 
{
	// Print out the contents of each row into a table
	echo "<tr><td><center>";
	echo $row['count_playersmessageboard']; 
	echo "</td></tr>";

} 




?>
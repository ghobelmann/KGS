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


$query = " SELECT * FROM `matches` LIMIT 0 , 1 ";
if($results = @mysql_query($query))
{
$data = mysql_fetch_assoc($results);

} else {
die('Error: '.mysql_error());
}
if($_POST['submit'] == "Update Scores")
?>

<?php
{
//query the db for any scores not submitted to fill in to calculate accurate totals
$sql = "SELECT * FROM `scores` WHERE `id` =  '".$_POST['id']."' LIMIT 1";
$result = mysql_query($sql);
$player_exists = mysql_num_rows($result);
$scores = mysql_fetch_assoc($result);$id = ($_POST[id]) ? $_POST[id] : $scores['id'];



if($player_exists != 1)
{
echo '<h2><font color=red>Cannot update the repair combination you specified</font></h2>';
} else {
	echo '<CENTER><h2>! Player Record Updated Successfully!</h2>';
	echo "<br>"; 
	echo $_POST['id'];
	echo "<br>";
	echo $_POST['player_1'];
	echo "<br>";
	echo $_POST['team'];
	echo "<br>";
	echo $_POST['mtch'];
	echo "<br>";
	echo $_POST['hole1'];
	echo "<br>";
	echo $_POST['hole2'];
	echo "<br>";
	echo $_POST['hole3'];
	echo "<br>";
	echo $_POST['hole4'];
	echo "<br>";
	echo $_POST['hole5'];
	echo "<br>";
	echo $_POST['hole6'];
	echo "<br>";
	echo $_POST['hole7'];
	echo "<br>";
	echo $_POST['hole8'];
	echo "<br>";	
	echo $_POST['hole9'];
	echo "<br>";
	echo $_POST['total'];
	echo "<br>";
	echo $_POST['points'];
	echo "<br>";
	echo $_POST['date'];
	echo "<br>";
}

	
	
$i=0;

$sql="UPDATE `scores` SET 
".(( !$_POST['player_1'] ) ? "" : "`player_1` = '".$_POST[player_1]."', ")."
".(( !$_POST['date'] ) ? "" : "`date` = '".$_POST[date]."', ")."
".(( !$_POST['team'] ) ? "" : "`team` = '".$_POST[team]."', ")."
".(( !$_POST['mtch'] ) ? "" : "`mtch` = '".$_POST[mtch]."', ")."
".(( !$_POST['total'] ) ? "" : "`total` = '".$_POST[total]."', ")."
".(( !$_POST['hole1'] ) ? "" : "`hole1` = '".$_POST[hole1]."', ")."
".(( !$_POST['hole2'] ) ? "" : "`hole2` = '".$_POST[hole2]."', ")."
".(( !$_POST['hole3'] ) ? "" : "`hole3` = '".$_POST[hole3]."', ")."
".(( !$_POST['hole4'] ) ? "" : "`hole4` = '".$_POST[hole4]."', ")."
".(( !$_POST['hole5'] ) ? "" : "`hole5` = '".$_POST[hole5]."', ")."
".(( !$_POST['hole6'] ) ? "" : "`hole6` = '".$_POST[hole6]."', ")."
".(( !$_POST['hole7'] ) ? "" : "`hole7` = '".$_POST[hole7]."', ")."
".(( !$_POST['hole8'] ) ? "" : "`hole8` = '".$_POST[hole8]."', ")."
".(( !$_POST['hole9'] ) ? "" : "`hole9` = '".$_POST[hole9]."', ")."
".(( !$_POST['points'] ) ? "" : "`points` = '".$_POST[points]."', ")."

`spam` = '1'


WHERE `id` = '".$_POST['id']."'";

if (!mysql_query($sql))
  {
  die('Error: ' . mysql_error());
  }

}


if(!empty($_GET['id']))
{
$id = $_GET['id'];
}

?><style type="text/css">
<!--
body {
	background-color: #006600;
}
.style1 {color: #FFFFFF}
.style3 {color: #CCCCCC}
-->
</style>



  <div align="center">
    <p class="style1"><strong>Update Player, this will change information in the database</strong></p>

  </div>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <p class="style1">ID:
       <input type="varchar" name="id" value="<?php echo $id; ?>"/>
       

</p>

<table width="575" border="1">
  <tr>
    <th width="40"><div align="left">
      <span class="style1">Match<input type="varchar" name="mtch" size="32" /> </span><br> </td>       </tr><tr>
	  	    <td width="45"><div align="left"><span class="style1">Player<input type="varchar" name="player_1" size="32"/> </span></td>      </tr><tr>

    <td width="38"><div align="left" class="style1">Team <input type="varchar" name="team" size="4"/> </div></td>	    </tr><tr>
    <td width="45"><div align="left" class="style1">Match<input type="varchar" name="mtch" size="4" />  </div></td>  </tr><tr>
    <td width="40"><div align="left" class="style1">Hole 1<input type="varchar" name="hole1" size="4"/>  </div></td>    </tr><tr>
    <td width="45"><div align="left" class="style1">Hole 2<input type="varchar" name="hole2" size="4"/> </span></td></tr><tr>
       <td width="45"><div align="left" class="style1">Hole 3<input type="varchar" name="hole3" size="4"/> </span></td></tr><tr>
          <td width="45"><div align="left" class="style1">Hole 4<input type="varchar" name="hole4" size="4"/> </span></td></tr><tr>
             <td width="45"><div align="left" class="style1">Hole 5<input type="varchar" name="hole5" size="4"/> </span></td></tr><tr>
                <td width="45"><div align="left" class="style1">Hole 6<input type="varchar" name="hole6" size="4"/> </span></td></tr><tr>
                   <td width="45"><div align="left" class="style1">Hole 7<input type="varchar" name="hole7" size="4"/> </span></td></tr><tr>
                      <td width="45"><div align="left" class="style1">Hole 8<input type="varchar" name="hole8" size="4"/> </span></td></tr><tr>
                         <td width="45"><div align="left" class="style1">Hole 9<input type="varchar" name="hole9" size="4"/> </span></td></tr><tr>
                            <td width="45"><div align="left" class="style1">Total<input type="varchar" name="total" size="4"/> </span></td></tr><tr>
                               <td width="45"><div align="left" class="style1">Date<input type="date" name="date" size="4"/> </span></td></tr><tr>
      </tr>
</table>
  	 
      <p>
   	    

              <p>
      <input name="submit" type="submit" value="Update Scores" />
</p>
  </form>
<?php include("footer.php"); ?>

</body>
</html>

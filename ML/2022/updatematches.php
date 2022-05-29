<?php
$page_title = "Update Matches";
$permission = "superadmin,admin";
define("IN_GOLF_STATS", TRUE);
include("common.php");
if($_POST['submit'] == "Enter Scores")
{
//query the db for any scores not submitted to fill in to calculate accurate totals
$sql = "SELECT * FROM `matches` WHERE `id` = '".$_POST['id']."' LIMIT 1";
$result = mysql_query($sql);
$player_exists = mysql_num_rows($result);
$match = mysql_fetch_assoc($result);
$one = ($_POST[a]) ? $_POST[a] : $match['a'];
$two = ($_POST[b]) ? $_POST[b] : $match['b'];
$three = ($_POST[c]) ? $_POST[c] : $match['c'];
$four = ($_POST[d]) ? $_POST[d] : $match['d'];
$five = ($_POST[e]) ? $_POST[e] : $match['e'];
$six = ($_POST[f]) ? $_POST[f] : $match['f'];
$seven = ($_POST[g]) ? $_POST[g] : $match['g'];
$eight = ($_POST[h]) ? $_POST[h] : $match['h'];
$nine = ($_POST[i]) ? $_POST[i] : $match['i'];
$ten = ($_POST[j]) ? $_POST[j] : $match['j'];
$eleven = ($_POST[k]) ? $_POST[k] : $match['k'];
$twelve = ($_POST[l]) ? $_POST[l] : $match['l'];


if($id != 1)
{
echo '<h2><font color=red>Cannot find the Matches</font></h2>';
} else {
	echo '<CENTER><h2>! Matches Updated Successfully!</h2>';
	echo "<br>";
}

	
	
$i=0;

$sql="UPDATE `matches` SET ".(( !$_POST['a'] ) ? "" : "`a` = '".$_POST[a]."', ")."
".(( !$_POST['b'] ) ? "" : "`b` = '".$_POST[b]."', ")."
".(( !$_POST['c'] ) ? "" : "`c` = '".$_POST[c]."', ")."
".(( !$_POST['d'] ) ? "" : "`d` = '".$_POST[d]."', ")."
".(( !$_POST['e'] ) ? "" : "`e` = '".$_POST[e]."', ")."
".(( !$_POST['f'] ) ? "" : "`f` = '".$_POST[f]."', ")."
".(( !$_POST['g'] ) ? "" : "`g` = '".$_POST[g]."', ")."
".(( !$_POST['h'] ) ? "" : "`h` = '".$_POST[h]."', ")."
".(( !$_POST['i'] ) ? "" : "`i` = '".$_POST[i]."', ")."
".(( !$_POST['j'] ) ? "" : "`j` = '".$_POST[j]."', ")."
".(( !$_POST['k'] ) ? "" : "`k` = '".$_POST[k]."', ")."
".(( !$_POST['l'] ) ? "" : "`l` = '".$_POST[l]."', ")."

`spam` = '1'


WHERE `id` = '".$_POST['player_1']."';

if (!mysql_query($sql))
  {
  die('Error: ' . mysql_error());
  }

}

$query = " SELECT * FROM `tournament` LIMIT 0 , 1 ";
if($results = @mysql_query($query))
{
$data = mysql_fetch_assoc($results);

} else {
die('Error: '.mysql_error());
}



?>
<div align="center">
    <blockquote>
      <h2 align="center" class="style1"><strong>Update Players Scores This will change their results</strong></h2>
      <h2 align="center" class="style1"><strong>Enter Player Name, Team and Match Number </strong></h2>
    </blockquote>
</div>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <p class="style1">Name:
        <input type="varchar" name="player_1" />
      Team:
		<input type="varchar" name="team" size="20"/>
    </p>
    <p class="style1">Match	  :
	    <input type="varchar" name="mtch" size="20" ; ?>
	<p>
      <input type="checkbox" name="white" value="no"> 
       Un-Check White Tees
      <input type="checkbox" name="blue" value="no">
Un-Check Blue Tees </p>

  <p>
      <input type="checkbox" name="white" value="yes"> 
      Check White Tees
      <input type="checkbox" name="blue" value="yes">
Check Blue Tees </p>

    </p>
    <table width="375" border="1">
  <tr>
    <th width="40"><div align="center">
      <span class="style1">1</span></th>
    <td width="38"><div align="center" class="style1">2</div></td>
    <td width="45"><div align="center" class="style1">3</div></td>
    <td width="45"><div align="center" class="style1">4</div></td>
    <td width="40"><div align="center" class="style1">5</div></td>
    <td width="45"><div align="center">
      <span class="style1">6</span></td>
    <td width="45"><div align="center">
      <span class="style1">7</span></td>
    <td width="45"><div align="center">
      <span class="style1">8</span></td>
    <td width="45"><div align="center">
      <span class="style1">9</span></td>
    </tr>
</table>
  	 
      <p>
   	    
        <input type="int" name="hole1" size="2" />
		<input type="int" name="hole2" size="2"/>
      	<input type="int" name="hole3" size="2" />
        <input type="int" name="hole4" size="2"/>
        <input type="int" name="hole5" size="2"/>
        <input type="int" name="hole6" size="2"/>
        <input type="int" name="hole7" size="2"/>
        <input type="int" name="hole8" size="2"/>
        <input type="int" name="hole9" size="2"/>
</p>
      <p>Points:
      <input type="int" name="points" size="10"/>    </p>
      <p>
      <input name="submit" type="submit" value="Enter Scores" />
</p>
  </form>
<?php include("footer.php"); ?>

</body>
</html>

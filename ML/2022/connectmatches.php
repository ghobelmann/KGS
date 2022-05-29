<?php error_reporting (E_ALL ^ E_NOTICE);
session_start();
// Check if the user is logged in, otherwise redirect to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
	header("location: login.php");
	exit;
  }
?>

<HTML>
<HEAD>

<TITLE>Connect Matches</TITLE>
<META HTTP-EQUIV="Refresh" CONTENT="1;URL=index.php"



</HEAD>

<center>
  <H1>! Matches Added !</H1>
</center>



</BODY>
</HTML>


<?php 

$sql="UPDATE `matches` SET 
`date` = '$_POST[date]',
`a` = '$_POST[a]',
`b` = '$_POST[b]',
`c` = '$_POST[c]',
`d` = '$_POST[d]',
`e` = '$_POST[e]',
`f` = '$_POST[f]',
`g` = '$_POST[g]',
`h` = '$_POST[h]',
`i` = '$_POST[i]',
`j` = '$_POST[j]',
`k` = '$_POST[k]',
`l` = '$_POST[l]', 
`m` = '$_POST[m]',
`n` = '$_POST[n]',
`o` = '$_POST[o]',
`p` = '$_POST[p]',
`q` = '$_POST[q]',
`r` = '$_POST[r]',
`s` = '$_POST[s]',
`t` = '$_POST[t]',
`u` = '$_POST[u]',
`v` = '$_POST[v]',
`w` = '$_POST[w]',
`x` = '$_POST[x]' 
`y` = '$_POST[y]',
`z` = '$_POST[z]',
`aa` = '$_POST[aa]',
`bb = '$_POST[bb]' 
WHERE `matches`.`id` =1 LIMIT 1 ";
if (!mysqli_query($link, $sql))
  {
  die('Error: ' . mysqli_error());
  }



?>

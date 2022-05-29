<?php
$page_title = "Hole by Hole Scores";
$permission = "superadmin,admin,player";
define("IN_GOLF_STATS", TRUE);
include("common.php");
$query = " SELECT * FROM `tournament` LIMIT 0 , 1 ";
if($results = @mysql_query($query))
{
$data = mysql_fetch_assoc($results);

} else {
die('Error: '.mysql_error());
}

?>



<html>
<head>
<title>Golfers in Database</title>
</head>
<body>
<?php

if (!$_REQUEST['Submit']) {
     html_form();
} elseif ($_REQUEST['Submit'] == "ViewComputers") {
     select_computer();
} elseif ($_REQUEST['Submit'] == "Edit") {
     get_data(); 
} elseif ($_REQUEST['Submit'] == "Delete") {
     delete_computer(); 
} elseif ($_REQUEST['Submit'] == "Update") {
     update_computer(); 
}  

function my_conn() {

/* set's the variables for MySQL connection */ 

$server = "localhost:3306"; // this is the server address and port
$username = "root"; // change this to your username
$password = "usd_237"; // change this to your password

/* Connects to the MySQL server */ 

$link = @mysql_connect ($server, $username, $password) or die (mysql_error()); 

/* Defines the Active Database for the Connection */ 

if (!@mysql_select_db("golf", $link)) { 
     echo "<p>There has been an error. This is the error message:</p>";
     echo "<p><strong>" . mysql_error() . "</strong></p>";
     echo "Please Contact Your Systems Administrator with the details";
}

return $link; 

} 

function html_form() {

$conn = my_conn();
$SQL = "SELECT DISTINCT player_1 FROM scores order by player_1;";

$result = mysql_query($SQL, $conn);
if (!$result) {
    echo("<p>Error performing query: " . mysql_error() . "</p>");
exit();

} 
?>

<p>Please enter the Players Name</p>
<form name="player_1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
Golfers Name: <select name="player_1">
<?php
while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
    echo("<option value=\"" . $row["player_1"] . "\">" . $row["player_1"] . "</option>\n");
} 
?>
</select>
<input type="submit" name="Submit" value="View Golfer" />
</form> 

<?php

/* Closes Connection to the MySQL server */

mysql_close ($conn);

}


//function select_computer() {

?>
<h4>Golfers in Database</h4> 
<?php

$conn = my_conn(); 

/* Sets the SQL Query */
$sql = "SELECT * FROM scores";
$sql .= " WHERE (player_1 = '{$_POST['player_1']}')";



/* Passes a Query to the Active Database */



$result = mysql_query($sql, $conn);  
if (!$result) {
  echo("<p>Error performing query: " . mysql_error() . "</p>");
  exit();
}



//}



/* Starts the table and creates headings */
?>
<table width="800" border="1" align="left" cellpadding="2" cellspacing="2" bordercolor="#000000">
<tr>
<td><strong>Name</strong></td>
<td><strong>Team</strong></td>
<td><strong>Date</strong></td>
<td><strong>Hole 1</strong></td>
<td><strong>Hole 2</strong></td>
<td><strong>Hole 3</strong></td>
<td><strong>Hole 4</strong></td>
<td><strong>Hole 5</strong></td>
<td><strong>Hole 6</strong></td>
<td><strong>Hole 7</strong></td>
<td><strong>Hole 8</strong></td>
<td><strong>Hole 9</strong></td>


</tr> 
<?php

/* Retrieves the rows from the query result set
and puts them into a HTML table row */

while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
    echo("<tr>\n<td>" . $row["player_1"] . "</td>");
    echo("<td>" . $row["team"] . "</td>");
	echo("<td>" . $row["date"] . "</td>");
	echo("<td>" . $row["hole1"] . "</td>");
	echo("<td>" . $row["hole2"] . "</td>");
	echo("<td>" . $row["hole3"] . "</td>");
	echo("<td>" . $row["hole4"] . "</td>");
	echo("<td>" . $row["hole5"] . "</td>");
	echo("<td>" . $row["hole6"] . "</td>");
	echo("<td>" . $row["hole7"] . "</td>");
	echo("<td>" . $row["hole8"] . "</td>");
	echo("<td>" . $row["hole9"] . "</td>");
    echo("<td><a href=\"" . $_SERVER['PHP_SELF'] . "?id=" .$row['id'] . "&Submit=Edit\">Edit</a></td>");
	echo("<td><a href=\"" . $_SERVER['PHP_SELF'] . "?id=" .$row['id'] . "&Submit=Delete\">Delete</a></td></tr>\n\n");
}

/* Closes the table */
?>

<?PHP 

/* Closes Connection to the MySQL server */

mysql_close ($conn);
html_form(); 


function get_data() {    

/* Calls our connection function */

$conn = my_conn(); 

/* Defines query */

$sql = "SELECT * FROM scores WHERE id = " . $_REQUEST['id'] . ";"; 

/* Passes query to database */

$result = mysql_query($sql, $conn);
if (!$result) {
  echo("<p>Error performing query: " . mysql_error() . "</p>");
  exit();
} 

/* creates our row array with an if statement to report errors */

if ($row = @mysql_fetch_array($result, MYSQL_ASSOC)) { 

/* prints out the artist and title */

print "<h4>$row[player_1] from $row[team] playing at $row[tournament]</h4>";

/* prints out our HTML form '\"' */

print "<form name=\"player_1\" method=\"post\" action=\"$_SERVER[PHP_SELF]\">";

/* Prints out hidden releaseID - we don't put this in the HTML form
so that the uer cannot edit the Key value in error */

print "<input type=\"text\" name=\"id\" value=\"$row[id]\">";

/* prints out our HTML table and fields 'escaping' any double quotes '\"' */ 
 
print "<table width=\"600\"> 

<tr>
<td width=\"150\"><strong>Player</strong></td>
<td width=\"350\"><input type=\"text\" name=\"player_1\" value=\"$row[player_1]\"></td>
<td rowspan=\"5\" valign=\"top\"><input type=\"submit\" name=\"Submit\" value=\"Update\">
</td>
</tr> 
<tr>
<td width=\"40\"><strong>Team</strong></td>
<td width=\"40\"><input type=\"text\" name=\"team\" value=\"$row[team]\"></td>
</td>
</tr> 
<tr>
<td width=\"40\"><strong>Date</strong></td>
<td width=\"40\"><input type=\"text\" name=\"date\" value=\"$row[date]\"></td>
</td>
</tr> 
<tr>
<td width=\"40\"><strong>Hole 1</strong></td>
<td width=\"40\"><input type=\"text\" name=\"hole1\" value=\"$row[hole1]\"></td>
</td>
</tr> 
<tr>
<td width=\"40\"><strong>Hole 2</strong></td>
<td width=\"40\"><input type=\"text\" name=\"hole2\" value=\"$row[hole2]\"></td>
</td>
</tr> 
<tr>
<td width=\"40\"><strong>Hole 3</strong></td>
<td width=\"40\"><input type=\"text\" name=\"hole3\" value=\"$row[hole3]\"></td>
</td>
</tr> 
<tr>
<td width=\"40\"><strong>Hole 4</strong></td>
<td width=\"40\"><input type=\"text\" name=\"hole4\" value=\"$row[hole4]\"></td>
</td>
</tr> 
<tr>
<td width=\"40\"><strong>Hole 5</strong></td>
<td width=\"40\"><input type=\"text\" name=\"hole5\" value=\"$row[hole5]\"></td>
</td>
</tr> 
<tr>
<td width=\"40\"><strong>Hole 6</strong></td>
<td width=\"40\"><input type=\"text\" name=\"hole6\" value=\"$row[hole6]\"></td>
</td>
</tr> 
<tr>
<td width=\"40\"><strong>Hole 7</strong></td>
<td width=\"40\"><input type=\"text\" name=\"hole7\" value=\"$row[hole7]\"></td>
</td>
</tr> 
<tr>
<td width=\"40\"><strong>Hole 8</strong></td>
<td width=\"40\"><input type=\"text\" name=\"hole8\" value=\"$row[hole8]\"></td>
</td>
</tr> 
<tr>
<td width=\"40\"><strong>Hole 9</strong></td>
<td width=\"40\"><input type=\"text\" name=\"hole9\" value=\"$row[hole9]\"></td>
</td>
</tr> 
</tr> 
</table> 
</form>"; 

/* Second SQL query */

$sql_count = "SELECT * FROM scores WHERE scores.id =" . $_REQUEST['id'];

/* Passes count query to database */

$result_count = @mysql_query($sql_count, $conn);
if (!$result_count) {
  echo("<p>Error performing query: " . mysql_error() . "</p>");
  exit();
} 

/* Counts the number of rows (therefore copies) */

$count = mysql_num_rows($result_count);

if ($count != 1) {
print "<p>There are $count copies of this Golfer</p>";
} else {
print "<p>There is $count copy of this Golfer</p>";
}

} else { 
    echo("There has been an error" . mysql_error()); 
} 

/* closes connection */ 

mysql_close ($conn); 

} 


function delete_computer() {

/* Calls our connection function */

$conn = my_conn();

/* Defines query */

$sql_delete = "DELETE FROM `scores` ";
$sql_delete .= "WHERE (`scores`.`id` = " . $_REQUEST['id'] . ")";

/* Passes query to database */

$result = mysql_query($sql_delete, $conn);
if (!$result) {
  echo("<p>Error performing query: " . mysql_error() . "</p>");
  exit();
}


/* Prints succes message */

print "<p> Successfully Deleted</p>";

/* closes connection */

mysql_close ($conn);

/* Calls get_data() function */

//get_data();

}

function update_computer() {

/* Calls our connection function */

$conn = my_conn();

/* Defines query */
$sql_update = "UPDATE scores SET ";
$sql_update .= "player_1 = '" . $_REQUEST['player_1'] . "', ";
$sql_update .= "team = '" . $_REQUEST['team'] . "', ";
$sql_update .= "date = '" . $_REQUEST['date'] . "', ";
$sql_update .= "hole1 = '" . $_REQUEST['hole1'] . "', ";
$sql_update .= "hole2= '" . $_REQUEST['hole2'] . "', ";
$sql_update .= "hole3= '" . $_REQUEST['hole3'] . "', ";
$sql_update .= "hole4= '" . $_REQUEST['hole4'] . "', ";
$sql_update .= "hole5= '" . $_REQUEST['hole5'] . "', ";
$sql_update .= "hole6= '" . $_REQUEST['hole6'] . "', ";
$sql_update .= "hole7= '" . $_REQUEST['hole7'] . "', ";
$sql_update .= "hole8= '" . $_REQUEST['hole8'] . "', ";
$sql_update .= "hole9= '" . $_REQUEST['hole9'] . "' ";
$sql_update .= "WHERE (id = " . $_REQUEST['id'] . ")";
/* Passes query to database */

$result = mysql_query($sql_update, $conn);
if (!$result) {
  echo("<p>Error performing query: " . mysql_error() . "</p>");
  exit();
}

/* Prints succes message */

print "<p> Successfully Updated</p>";

/* closes connection */

mysql_close ($conn);

/* Calls get_data() function */

get_data();

}

?>
<?php
include "footer.php";
?>
</body>
</html>
                              <!DOCTYPE html>
<html>
<head>

   <?php
 //authentication for coaches to get to their pages, not for public pages.
session_start();
session_regenerate_id();
if(!isset($_SESSION['email']))
   // if there is no valid session
{
    header("Location:login-system/index.php");
}


include_once("databaseconnect.php");
//include_once("analyticstracking.php");  
 ?> 
 
 
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
$q = intval($_GET['q']);

$sql="SELECT * FROM roster";
$result = mysqli_query($conn,$sql);

echo "<table>
<tr>
<th>Name</th>
<th>PlayerID</th>
<th>Grade</th>
<th>TeamID</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['player_1'] . "</td>";
    echo "<td>" . $row['pid'] . "</td>";
    echo "<td>" . $row['grade'] . "</td>";
    echo "<td>" . $row['tmid'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
</body>
</html>
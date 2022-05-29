<?php session_start();


$servername = "localhost";
$username = "root";
$password = "R45edm!@";
$dbname = "ks_testg";
$conn = new mysqli($servername, $username, $password, $dbname);


      
$output = array();

$query  = "SELECT * FROM roster WHERE tmid = '$_SESSION[tmid]' AND grade < '13'";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) {
        $output[] = $row;
    }
    echo json_encode($output);
}
?> 

 
<?php session_start();

$servername = "localhost";
$username = "root";
$password = "4Chr!5t3|6";
$dbname = "b_2020Main";
$conn = new mysqli($servername, $username, $password, $dbname);


      
$output = array();

$query  = "SELECT * FROM roster WHERE tmid = '$_SESSION[tmid]' AND grade > '2021'
AND active = '2' ORDER by PID desc";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) {
        $output[] = $row;
    }
    echo json_encode($output);
}
?> 



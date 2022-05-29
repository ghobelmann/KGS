<?php session_start();

$servername = "localhost";
$username = "root";
$password = "4Chr!5t3|6";
$dbname = "JrGolf";
$conn = new mysqli($servername, $username, $password, $dbname);


      
$output = array();

$query  = "SELECT * FROM roster WHERE email = '$_SESSION[email]' 
ORDER by active ASC, age DESC";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) {
        $output[] = $row;
    }
    echo json_encode($output);
}
?>

 
<?php

$connection = mysqli_connect("localhost","root","4Chr!5t3|6");
$db = mysqli_select_db($connection, 'b_2020Main');

if(isset($_POST['insertdata']))
{
    $player_1 = $_POST['player_1'];
    $tmid = $_POST['tmid'];
    $grade = $_POST['grade'];
    $password = $_POST['password'];

    $query = "INSERT INTO roster (`player_1`,`tmid`,`grade`,`password`) VALUES ('$player_1','$tmid','$grade','$password')";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        echo '<script> alert("Data Saved"); </script>';
        header('Location: index.php');
    }
    else
    {
        echo '<script> alert("Data Not Saved"); </script>';
    }
}

?>
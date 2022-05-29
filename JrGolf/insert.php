<?php session_start(); 
/* echo "<h3> PHP List All Session Variables</h3>";
    foreach ($_SESSION as $key=>$val)
    echo $key." ".$val."<br/>";
                             */
 if(!isset($_SESSION['email']))
   // if there is no valid session
{
    header("Location:login-system/index.php");
}
echo $_SESSION['email'];
?>





<?php
include_once("databaseconnect.php");
$info = json_decode(file_get_contents("php://input"));
if (count($info) > 0) {
    $player_1     = mysqli_real_escape_string($conn, $info->player_1);
    //echo $player_1;
    $age    = mysqli_real_escape_string($conn, $info->age);
    $gender    = mysqli_real_escape_string($conn, $info->gender);
    //echo $age;
    $password     = mysqli_real_escape_string($conn, $info->password);
    $active    = mysqli_real_escape_string($conn, $info->active);
    echo $password;   
    $btn_name = $info->btnName;
    if ($btn_name == "Insert") {
        $query = "INSERT INTO roster(player_1, age, gender, username,  password, active, email) 
        VALUES 
        ('$player_1', '$age', '$gender',  '$player_1', MD5('$password'), '2', '$_SESSION[email]')";
        if (mysqli_query($conn, $query)) {
            echo "Data Inserted Successfully...";
        } else {
            echo 'Sorry Failed';
        }
    }
    if ($btn_name == 'Update') {
        $pid    = $info->pid;
        $query = "UPDATE roster SET player_1 = '$player_1', age = '$age', gender = '$gender', 
         password = MD5('$password'), active = '$active' WHERE pid = '$pid'";
        if (mysqli_query($conn, $query)) {
            echo 'Data Updated Successfully...';
        } else {
            echo 'Failed';
        }
    }
}
?>





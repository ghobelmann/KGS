<?php
$connection = mysqli_connect("localhost","root","4Chr!5t3|6");
$db = mysqli_select_db($connection, 'b_2020Main');

    if(isset($_POST['updatedata']))
    {   
        $id = $_POST['update_id'];
        
        $player_1 = $_POST['player_1'];
        $tmid = $_POST['tmid'];
        $grade = $_POST['grade'];
        $password = $_POST['password'];

        $query = "UPDATE student SET player_1='$player_1', tmid='$tmid', grade='$grade', password=' $password' WHERE id='$id'  ";
        $query_run = mysqli_query($connection, $query);

        if($query_run)
        {
            echo '<script> alert("Data Updated"); </script>';
            header("Location:index.php");
        }
        else
        {
            echo '<script> alert("Data Not Updated"); </script>';
        }
    }
?>
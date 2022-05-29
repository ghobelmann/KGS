<?php
include_once("databaseconnect.php");
$data    = json_decode(file_get_contents("php://input"));
if (count($data) > 0) {
    $pid    = $data->pid;
    $query = "DELETE FROM roster WHERE pid='$pid'";
    if (mysqli_query($conn, $query)) {
        echo 'Data Deleted Successfully...';
    } else {
        echo 'Failed';
    }
}
?>
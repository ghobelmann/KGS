

<?php
include "../../databaseconnect.php";
 
$userid = '242';
 
$sql = "select * from scores  
INNER JOIN roster on roster.pid = scores.pid
where scores.tid='1236' AND scores.tmid=".$userid;
$result = mysqli_query($conn,$sql);
while( $row = mysqli_fetch_array($result) ){
?>
<table border='0' width='100%'>
<tr>
    <td style="padding:20px;">
    <p style="color:black;">Name : <?php echo $row['player_1']; ?></p>
    <p style="color:black;">Score : <?php echo $row['total']; ?></p>
    <p style="color:black;">RunningScore : <?php echo $row['running_score']; ?></p>

    </td>
</tr>
</table>
 
<?php } ?>
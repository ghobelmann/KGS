

<?php
include "../../databaseconnect.php";
 
$userid = '242';
 
$sql = "select * from scores  
INNER JOIN roster on roster.pid = scores.pid
where scores.tid='1408' AND scores.tmid=".$userid;
$result = mysqli_query($conn,$sql);
while( $row = mysqli_fetch_array($result) ){
?>
<table border='0' width='100%'>
<tr>
    <td style="padding:20px;">
    <h1 style="color:black;">Name : <?php echo $row['player_1']; ?></h1>
    <h1 style="color:black;">Score : <?php echo $row['total']; ?></h1>

    </td>
</tr>
</table>
 
<?php } ?>
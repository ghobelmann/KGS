


<?php session_start(); 



if(!isset($_SESSION['email']))
  // if there is no valid session
{
   header("Location:login-system/index.php");
}
echo ($_SESSION['email']);
$user = ($_SESSION['email']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php include_once("databaseconnect.php"); 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
//include("header.php");

?>
        
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        .wrapper{
            width: 800px;
            margin: 0 auto;
        }
        table tr td:last-child{
            width: 80px;
        }
    </style>
    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
        <h3> To edit a players Divisionclick on their name.</h3>
            <div class="row">
                <div class="col-md-12">
                    <div class="mt-5 mb-3 clearfix">
                        <h2 class="pull-left">Player Details</h2>
                    <a href="index.php"><i class="fa fa-plus"></i>Home</a>
                        <a href="app/appEnterTrny.php" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Register for New Tournament</a>
                    </div>
                    <?php
                    // Include config file
                    //require_once "config.php";

                    // Attempt select query execution
                    $sql = "SELECT  scores.pid, scores.id, roster.tmid, users.email, users.tmid, roster.player_1,
                    tournament.tournament, tournament.date, scores.tid, scores.division, scores.teetime
                    FROM scores 
                    INNER JOIN roster on roster.pid = scores.pid 
                     INNER JOIN users on users.tmid = scores.tmid
                     INNER JOIN tournament on tournament.id = scores.tid
                     LEFT JOIN divisions on scores.division = divisions.id
                     WHERE roster.email = '$_SESSION[email]' GROUP by pid ORDER by date desc, divisions.id ASC, teetime ASC";
                    if($result = mysqli_query($link, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo '<table class="table table-bordered table-striped">';
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>Name</th>";
                                        echo "<th>Tournament</th>";
                                        echo "<th>Division</th>";
                                        echo "<th>TeeTime/Hole #</th>";
                                     
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>";
                                        echo '<a href="edit.php?pid='.$row['pid'].'">'. $row['player_1'] .'</font></a>'; 
                                        echo "<td>" . $row['tournament'] . "</td>";
                                        echo '<td>';
                                        switch($row['division']) {
                                          case "1": 
                                          echo "5-7 4 Holes Boys"; 
                                           break; 
                                    
                                          case "2": 
                                            echo "5-7 9 Holes Boys";
                                           break; 
                                     case "3": 
                                      echo "8-9 Boys";
                                          break; 
                                     case '4': 
                                      echo "10-11 Boys";
                                          break; 
                                     case '5': 
                                      echo "12-13 Boys";
                                          break; 
                                      case '6': 
                                        echo "14-15 Boys";
                                          break; 
                                      case '7': 
                                        echo "16-18 Boys";
                                            break; 
                                            case "11": 
                                                echo "5-7 4 Holes Girls"; 
                                                 break; 
                                          
                                                case "12": 
                                                  echo "5-7 9 Holes Girls";
                                                 break; 
                                           case "13": 
                                            echo "8-9 Girls";
                                                break; 
                                           case '14': 
                                            echo "10-11 Girls";
                                                break; 
                                           case '15': 
                                            echo "12-13 Girls";
                                                break; 
                                            case '16': 
                                              echo "14-15 Girls";
                                                break; 
                                            case '17': 
                                              echo "16-18 Girls";
                                                  break; 
                                        }
                                        echo "<td>" . $row['teetime'] . "</td>";
                                        echo "<td>";
                                            echo '<a href="read.php?id='. $row['id'] .'" class="mr-3" title="View Record" data-toggle="tooltip"><span class="fa fa-eye"></span></a>';
                                            //echo '<a href="update.php?id='. $row['id'] .'" class="mr-3" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
                                            echo '<a href="delete.php?id='. $row['id'] .'" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
                                        echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
                        }
                    } else{
                        echo "Oops! Something went wrong. Please try again later.";
                    }
 
                    // Close connection
                    mysqli_close($link);
                    ?>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>
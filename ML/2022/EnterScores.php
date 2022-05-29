<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$player_1 = $team = $mtch = $hole1 = $hole2 = $hole3 = $hole4 = $hole5 = $hole6 = $hole7 = $hole8 = $hole9 = $date = $points = $a = $b = $c = "";
$player_1_err = $team_err = $mtch_err = $hole1_err = $hole2_err = $hole3_err = $hole4_err = $hole5_err = $hole6_err = $hole7_err = $hole8_err = $hole9_err = $date_err = $points_err = $a_err = $b_err = $c_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate player_1
    if(empty(trim($_POST["player_1"]))){
        $player_1_err = "Please enter a player_1.";
    } else {
        // Prepare a select statement
        $sql = "SELECT id FROM scores WHERE player_1 = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_player_1);
            
            // Set parameters
            $param_player_1 = trim($_POST["player_1"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
               
                   $player_1 = trim($_POST["player_1"]);
                
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Validate team
    if(empty(trim($_POST["team"]))){
        $team_err = "Please enter a team.";     
    } elseif(strlen(trim($_POST["team"])) < 1){
        $team_err = "team must have at least 1 characters.";
    } else{
        $team = trim($_POST["team"]);
    }


  $mtch = trim($_POST["mtch"]);
  $date = trim($_POST["date"]);
  $hole1 = trim($_POST["hole1"]);
  $hole2 = trim($_POST["hole2"]); 
  $hole3 = trim($_POST["hole3"]);
  $hole4 = trim($_POST["hole4"]);
  $hole5 = trim($_POST["hole5"]);
  $hole6 = trim($_POST["hole6"]);
  $hole7 = trim($_POST["hole7"]);
  $hole8 = trim($_POST["hole8"]); 
  $hole9 = trim($_POST["hole9"]);
  $points = trim($_POST["points"]);
  $a = trim($_POST["a"]);
  $b = trim($_POST["b"]);
  $c = trim($_POST["c"]);

    // Check input errors before inserting in database
    if(empty($player_1_err) && empty($team_err) && empty($mtch_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO scores (player_1, team, mtch, hole1, hole2, hole3, hole4, hole5, hole6, hole7, hole8, hole9, total, date, points, a, b, c) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "siiiiiiiiiiiisisss", $param_player_1, $param_team, $param_mtch, $param_hole1, $param_hole2, $param_hole3, $param_hole4, $param_hole5, $param_hole6, $param_hole7, $param_hole8, $param_hole9, $param_total, $param_date, $param_points, $param_a, $param_b, $param_c);
            
            // Set parameters
            $param_player_1 = $player_1;
            $param_team = $team; 
            $param_mtch = $mtch;
            $param_hole1 = $hole1; 
            $param_hole2 = $hole2;
            $param_hole3 = $hole3;
            $param_hole4 = $hole4;
            $param_hole5 = $hole5;
            $param_hole6 = $hole6;
            $param_hole7 = $hole7;
            $param_hole8 = $hole8;
            $param_hole9 = $hole9;
            $param_total = $hole1 + $hole2 + $hole3 + $hole4 + $hole5 + $hole6 + $hole7 + $hole8 + $hole9;
            $param_date = $date;
            $param_points = $points;
            $param_a = $a;
            $param_b = $b;
            $param_c = $c;
           






            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: EnterScores.php");
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Enter Scores</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; }
        .wrapper{ width: 20%; padding: 20px; }
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>Enter Scores</h2>
   
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
     
            <div class="form-group">
            <table><td>
              <label>Player</label>
                <input type="text" name="player_1" class="form-control <?php echo (!empty($player_1_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $player_1; ?>">
                <span class="invalid-feedback"><?php echo $player_1_err; ?></span>
                </td><td>
                <label>Team</label>
                <input type="int" name="team" class="form-control <?php echo (!empty($team_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $team; ?>">
                <span class="invalid-feedback"><?php echo $team_err; ?></span>
                </td><td>
                <label>Match</label>
                <input type="int" name="mtch" class="form-control <?php echo (!empty($mtch_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $mtch; ?>">
                <span class="invalid-feedback"><?php echo $mtch_err; ?></span>
                </td></table>
            </div>
    
            <div class="form-group">
                <label>Holes</label>

                <table><td>
                <input type="int" name="hole1" class="form-control <?php echo (!empty($hole1_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $hole1; ?>">
                </td><td>
                <input type="int" name="hole2" class="form-control <?php echo (!empty($hole2_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $hole2; ?>">
                </td><td>             
                <input type="int" name="hole3" class="form-control <?php echo (!empty($hole3_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $hole3; ?>">
                </td><td>  
                <input type="int" name="hole4" class="form-control <?php echo (!empty($hole4_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $hole4; ?>">
                </td><td>
                <input type="int" name="hole5" class="form-control <?php echo (!empty($hole5_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $hole5; ?>">
                </td><td>
                <input type="int" name="hole6" class="form-control <?php echo (!empty($hole6_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $hole6; ?>">
                </td><td>
                <input type="int" name="hole7" class="form-control <?php echo (!empty($hole7_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $hole7; ?>">
                </td><td>
                <input type="int" name="hole8" class="form-control <?php echo (!empty($hole7_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $hole8; ?>">
                </td><td>
                <input type="int" name="hole9" class="form-control <?php echo (!empty($hole9_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $hole9; ?>">
                </td><td>
</table>
            </div>
           
            <div class="form-group">
                <input type="date" name="date"  class="form-control  <?php echo (!empty($date_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $date; ?>">
               
            </div>
            Points
            <div class="form-group">
                <input type="int" name="points" class="form-control <?php echo (!empty($points_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $points; ?>">
               
            </div>

            <input type="checkbox" name="a" value="yes">
              <label for="a"> A Division </label><br>
              <input type="checkbox" name="b" value="yes">
              <label for="b"> B Division</label><br>
              <input type="checkbox" name="c" value="yes">
              <label for="c"> C Division </label><br>


            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <input type="reset" class="btn btn-secondary ml-2" value="Reset">
            </div>
            <p>Already have an account? <a href="login.php">Login here</a>.</p>
        </form>
    </div>    
</body>
</html>
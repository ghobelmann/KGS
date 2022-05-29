<?php
// Include config file
require_once "databaseconnect.php";
 
// Define variables and initialize with empty values
$pid = $tid = $division = "";
$pid_err = $tid_err = $division_err = "";
 
// Processing form data when form is submitted
if(isset($_POST["id"]) && !empty($_POST["id"])){
    // Get hidden input value
    $id = $_POST["id"];
    
    // Validate name
    $input_pid = trim($_POST["pid"]);
    if(empty($input_pid)){
        $pid_err = "Please enter a Name.";
    } elseif(!filter_var($input_pid, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $pid_err = "Please enter a valid Name.";
    } else{
        $pid = $input_pid;
    }
    
    // Validate address address
    $input_tid = trim($_POST["tid"]);
    if(empty($input_tid)){
        $tid_err = "Please enter an tid.";     
    } else{
        $tid = $input_tid;
    }
    
    // Validate division
    $input_division = trim($_POST["division"]);
    if(empty($input_division)){
        $division_err = "Please enter the Divison.";     
    } else{
        $division = $input_division;
    }
    
    // Check input errors before inserting in database
    if(empty($pid_err) && empty($tid_err) && empty($division_err)){
        // Prepare an update statement
        $sql = "UPDATE scores SET division=? WHERE id=?";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sssi", $param_pid, $param_tid, $param_division, $param_id);
            
            // Set parameters
            $param_pid = $pid;
            $param_tid = $tid;
            $param_division = $division;
            $param_id = $id;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records updated successfully. Redirect to landing page
                header("location: index.php");
                exit();
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
} else{
    // Check existence of id parameter before processing further
    if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
        // Get URL parameter
        $id =  trim($_GET["id"]);
        
        // Prepare a select statement
        $sql = "SELECT * FROM scores WHERE id = ?";
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "i", $param_id);
            
            // Set parameters
            $param_id = $id;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                $result = mysqli_stmt_get_result($stmt);
    
                if(mysqli_num_rows($result) == 1){
                    /* Fetch result row as an associative array. Since the result set
                    contains only one row, we don't need to use while loop */
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    
                    // Retrieve individual field value
                    $pid = $row["pid"];
                    $tid = $row["tid"];
                    $division = $row["division"];
                } else{
                    // URL doesn't contain valid id. Redirect to error page
                    header("location: error.php");
                    exit();
                }
                
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        
        // Close statement
        mysqli_stmt_close($stmt);
        
        // Close connection
        mysqli_close($link);
    }  else{
        // URL doesn't contain id parameter. Redirect to error page
        header("location: error.php");
        exit();
    }
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Record</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mt-5">Update Record</h2>
                    <p>The Only thing you can edit is the division player is playing in.</p>
                    <form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">
                      <!--  <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="pid" class="form-control <?php echo (!empty($pid_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $pid; ?>">
                            <span class="invalid-feedback"><?php echo $pid_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>tid</label>
                            <textarea name="tid" class="form-control <?php echo (!empty($tid_err)) ? 'is-invalid' : ''; ?>"><?php echo $tid; ?></textarea>
                            <span class="invalid-feedback"><?php echo $tid_err;?></span>
                        </div> -->
                        <div class="form-group">
                            <label>division</label>
                            <input type="text" name="division" class="form-control <?php echo (!empty($division_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $division; ?>">
                            <span class="invalid-feedback"><?php echo $division_err;?></span>
                        </div>
                        <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="index.php" class="btn btn-secondary ml-2">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>
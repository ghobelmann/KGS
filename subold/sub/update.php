
<?php
// Include config file
require_once "db.php";

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);      

 
// Define variables and initialize with empty values
$name = $sickdays = $perdays = "";
$name_err = $sickdays_err = $perdays_err = "";
 
// Processing form data when form is submitted
if(isset($_POST["tsick_id"]) && !empty($_POST["tsick_id"])){
    // Get htsick_idden input value
    $tsick_id = $_POST["tsick_id"];
    
    // Validate name
    $input_name = trim($_POST["name"]);
    if(empty($input_name)){
        $name_err = "Please enter a name.";
    } elseif(!filter_var($input_name, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $name_err = "Please enter a valid name.";
    } else{
        $name = $input_name;
    }
    
    // Validate sickdays sickdays
    $input_sickdays = trim($_POST["sickdays"]);
    if(empty($input_sickdays)){
        $email_err = "Please enter the email.";     
    } elseif(preg_match("/^[a-zA-Z-' ]*$/",$input_email)){
        $sickdays_err = "Please enter an sickdays.";     
    } else{
        $sickdays = $input_sickdays;
    }
    
    // Validate perdays
    $input_perdays = trim($_POST["perdays"]);
    if(empty($input_perdays)){
        $perdays_err = "Please enter the perdays amount.";     
    } elseif(!ctype_digit($input_perdays)){
        $perdays_err = "Please enter a positive integer value.";
    } else{
        $perdays = $input_perdays;
    }
    
    // Check input errors before inserting in database
    if(empty($name_err) && empty($sickdays_err) && empty($perdays_err)){
        // Prepare an update statement
        $sql = "UPDATE total_sick SET name=?, sickdays=?, perdays=? WHERE tsick_id=?";
         
        if($stmt = mysqli_prepare($conn, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sssi", $param_name, $param_sickdays, $param_perdays, $param_id);
            
            // Set parameters
            $param_name = $name;
            $param_sickdays = $sickdays;
            $param_perdays = $perdays;
            $param_id = $tsick_id;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records updated successfully. Redirect to landing page
                header("location: createTeacher.php");
                exit();
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
      //  mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($conn);
} else{
    // Check existence of tsick_id parameter before processing further
    if(isset($_GET["tsick_id"]) && !empty(trim($_GET["tsick_id"]))){
        // Get URL parameter
        $tsick_id =  trim($_GET["tsick_id"]);
        
        // Prepare a select statement
        $sql = "SELECT * FROM total_sick WHERE tsick_id = ?";
        if($stmt = mysqli_prepare($conn, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "i", $param_id);
            
            // Set parameters
            $param_id = $tsick_id;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                $result = mysqli_stmt_get_result($stmt);
    
                if(mysqli_num_rows($result) == 1){
                    /* Fetch result row as an associative array. Since the result set
                    contains only one row, we don't need to use while loop */
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    
                    // Retrieve individual field value
                    $name = $row["name"];
                    $sickdays = $row["sickdays"];
                    $perdays = $row["perdays"];
                } else{
                    // URL doesn't contain valid id. Redirect to error page
                    header("location: error.php");
                    exit();
                }
                
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
                    // Close statement
       mysqli_stmt_close($stmt);

        }
              
       // Close connection
       mysqli_close($conn);  

    }  else{
        // URL doesn't contain id parameter. Redirect to error page
        header("location: error.php");
        exit();
    }
}
?>
 
<!DOCTYPE html>
<html lang="en">
      <meta charset="utf-8">
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
                    <p>Please edit the input values and submit to update the employee record.</p>
                    <form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control <?php echo (!empty($name_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $name; ?>">
                            <span class="invalid-feedback"><?php echo $name_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>sickdays</label>
                            <input type="text" name="sickdays" class="form-control <?php echo (!empty($sickdays_err)) ? 'is-invalid' : ''; ?>" value =" <?php echo $sickdays; ?>">
                            <span class="invalid-feedback"><?php echo $sickdays_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>perdays</label>
                            <input type="text" name="perdays" class="form-control <?php echo (!empty($perdays_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $perdays; ?>">
                            <span class="invalid-feedback"><?php echo $perdays_err;?></span>
                        </div>
                        <input type="hidden" name="tsick_id" value="<?php echo $tsick_id; ?>"/>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="index.php" class="btn btn-secondary ml-2">Cancel</a>
                        <a href="createTeacher.php" class="btn btn-primary">Back</a>
                    </form>
                </div>
 
            </div>        
        </div>
        
    </div>
 
</body>
</html>

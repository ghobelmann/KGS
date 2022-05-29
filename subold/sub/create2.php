<?php
// Include config file
require_once "db.php";
 
// Define variables and initialize with empty values
$name = $sickdays = $perdays = "";
$name_err = $sickdays_err = $perdays_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Validate name
    $input_name = trim($_POST["name"]);
    if(empty($input_name)){
        $name_err = "Please enter a name.";
    } elseif(!filter_var($input_name, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $name_err = "Please enter a valid name.";
    } else{
        $name = $input_name;
    }
    
    // Validate sickdays
    $input_sickdays = trim($_POST["sickdays"]);
    if(empty($input_sickdays)){
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
        // Prepare an insert statement
        $sql = "INSERT INTO employees (name, sickdays, perdays) VALUES (:name, :sickdays, :perdays)";
 
        if($stmt = $pdo->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bindParam(":name", $param_name);
            $stmt->bindParam(":sickdays", $param_sickdays);
            $stmt->bindParam(":perdays", $param_perdays);
            
            // Set parameters
            $param_name = $name;
            $param_sickdays = $sickdays;
            $param_perdays = $perdays;
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Records created successfully. Redirect to landing page
                header("location: index.php");
                exit();
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        unset($stmt);
    }
    
    // Close connection
    unset($pdo);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
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
                    <h2 class="mt-5">Create Record</h2>
                    <p>Please fill this form and submit to add employee record to the database.</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control <?php echo (!empty($name_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $name; ?>">
                            <span class="invalid-feedback"><?php echo $name_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>sickdays</label>
                            <textarea name="sickdays" class="form-control <?php echo (!empty($sickdays_err)) ? 'is-invalid' : ''; ?>"><?php echo $sickdays; ?></textarea>
                            <span class="invalid-feedback"><?php echo $sickdays_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>perdays</label>
                            <input type="text" name="perdays" class="form-control <?php echo (!empty($perdays_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $perdays; ?>">
                            <span class="invalid-feedback"><?php echo $perdays_err;?></span>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="index.php" class="btn btn-secondary ml-2">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>
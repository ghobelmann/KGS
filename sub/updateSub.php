<?php
// Include config file
require_once "db.php";
 
// Define variables and initialize with empty values
$sub_name = $phone = $email = "";
$sub_name_err = $phone_err = $email_err = "";
 
// Processing form data when form is submitted
if(isset($_POST["sub_id"]) && !empty($_POST["sub_id"])){
    // Get hsub_idden input value
    $sub_id = $_POST["sub_id"];
    
    // Validate sub_name
    $input_sub_name = trim($_POST["sub_name"]);
    if(empty($input_sub_name)){
        $sub_name_err = "Please enter a sub_name.";
    } elseif(!filter_var($input_sub_name, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $sub_name_err = "Please enter a valid sub_name.";
    } else{
        $sub_name = $input_sub_name;
    }
    
    // Validate phone phone
    $input_phone = trim($_POST["phone"]);
    if(empty($input_phone)){
        $phone_err = "Please enter a phone number.";
    } elseif(!filter_var($input_phone, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $phone_err = "Please enter an phone.";     
    } else{
        $phone = $input_phone;
    }
    
    // Validate email
    $input_email = trim($_POST["email"]);
    if(empty($input_email)){
        $email_err = "Please enter the email amount.";     
    } elseif(!ctype_digit($input_email)){
        $email_err = "Please enter a positive integer value.";
    } else{
        $email = $input_email;
    }
    
    // Check input errors before inserting in database
    if(empty($sub_name_err) && empty($phone_err) && empty($email_err)){
        // Prepare an update statement
        $sql = "UPDATE total_sick SET sub_name=?, phone=?, email=? WHERE sub_id=?";
         
        if($stmt = mysqli_prepare($conn, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sssi", $param_sub_name, $param_phone, $param_email, $param_id);
            
            // Set parameters
            $param_sub_name = $sub_name;
            $param_phone = $phone;
            $param_email = $email;
            $param_id = $sub_id;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records updated successfully. Redirect to landing page
                header("location: createSub.php");
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
    // Check existence of sub_id parameter before processing further
    if(isset($_GET["sub_id"]) && !empty(trim($_GET["sub_id"]))){
        // Get URL parameter
        $sub_id =  trim($_GET["sub_id"]);
        
        // Prepare a select statement
        $sql = "SELECT * FROM personnel WHERE sub_id = ?";
        if($stmt = mysqli_prepare($conn, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "i", $param_id);
            
            // Set parameters
            $param_id = $sub_id;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                $result = mysqli_stmt_get_result($stmt);
    
                if(mysqli_num_rows($result) == 1){
                    /* Fetch result row as an associative array. Since the result set
                    contains only one row, we don't need to use while loop */
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    
                    // Retrieve individual field value
                    $sub_name = $row["sub_name"];
                    $phone = $row["phone"];
                    $email = $row["email"];
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
                            <input type="text" name="sub_name" class="form-control <?php echo (!empty($sub_name_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $sub_name; ?>">
                            <span class="invalid-feedback"><?php echo $sub_name_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>phone</label>
                            <input type="text" name="phone" class="form-control <?php echo (!empty($phone_err)) ? 'is-invalid' : ''; ?>" value =" <?php echo $phone; ?>">
                            <span class="invalid-feedback"><?php echo $phone_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>email</label>
                            <input type="text" name="email" class="form-control <?php echo (!empty($email_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $email; ?>">
                            <span class="invalid-feedback"><?php echo $email_err;?></span>
                        </div>
                        <input type="hidden" name="sub_id" value="<?php echo $sub_id; ?>"/>
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

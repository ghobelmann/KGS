<?php

// Include config file
require_once "db.php";
 
// Define variables and initialize with empty values
$sub_name = $phone = $email = "";
$sub_name_err = $phone_err = $email_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Validate sub_name
    $input_sub_name = trim($_POST["sub_name"]);
    if(empty($input_sub_name)){
        $sub_name_err = "Please enter a sub_name.";
    } elseif(!filter_var($input_sub_name, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $sub_name_err = "Please enter a valid sub_name.";
    } else{
        $sub_name = $input_sub_name;
    }
    
    // Validate phone

    $input_phone = trim($_POST["phone"]);
    if(empty($input_phone)){
        $phone_err = "Please enter the number of sick days .";     
    } elseif(preg_match("/^[0-9]{3}-[0-9]{4}-[0-9]{4}$/", $input_phone)){
        $phone_err = "Please enter a phone number";
    } else{
        $phone = $input_phone;
    }
    
    // Validate email
    $input_email = trim($_POST["email"]);
    if(empty($input_email)){
        $email_err = "Please enter the email.";     
    } elseif(preg_match("/^[a-zA-Z-' ]*$/",$input_email)){
        $email_err = "Please enter an email email.";
    } else{
        $email = $input_email;
    }
    echo $sub_name;
    echo $phone;
    echo $email;
    // Check input errors before inserting in database
    if(empty($sub_name_err) && empty($phone_err) && empty($email_err)){
        // Prepare an insert statement
        $sql = "INSERT INTO personnel (sub_name, phone, email) VALUES (?, ?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sss", $param_sub_name, $param_phone, $param_email);
            
            
            // Set parameters
            $param_sub_name = $sub_name;
            $param_phone = $phone;
            $param_email = $email;

         
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records created successfully. Redirect to landing page
                header("location: index.php");
                exit();
            } else{
                header("location: index.php");
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
                    <h2 class="mt-5">Create New Sub</h2>
                    <p>Please fill this form and submit to add employee record to the database.</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group">
                            <label>sub_name</label>
                            <input type="text" name="sub_name" class="form-control <?php echo (!empty($sub_name_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $sub_name; ?>">
                            <span class="invalid-feedback"><?php echo $sub_name_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>phone</label>
                            <input type="text" name="phone" class="form-control <?php echo (!empty($phone_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $phone; ?>">
                            <span class="invalid-feedback"><?php echo $phone_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>email</label>
                            <input type="text" name="email" class="form-control <?php echo (!empty($email_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $email; ?>">
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
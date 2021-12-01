<?php
ob_start();
// Include config file
require_once "conn.php";
 
// Define variables and initialize with empty values
$firstname = $lastname = $username = $emailid = $password = $confirm_password =  "";
$firstname_err = $lastname_err = $username_err = $emailid_err= $password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate firstname
    if(empty(trim($_POST["firstname"]))){
        $firstname_err = "Please enter a Firstname";
    } 
	else
	{
		$firstname = trim($_POST["firstname"]);
	}

	// Validate lastname
    if(empty(trim($_POST["lastname"]))){
        $lastname_err = "Please enter a Lastname";
    } 
	else
	{
		$lastname = trim($_POST["lastname"]);
	}

	// Validate emailid
	if(empty(trim($_POST["emailid"]))){
		$emailid_err = "Please enter an Emailid ";
		} 
		else
		{
		$emailid = trim($_POST["emailid"]);
		}

	// Validate Username
	if(empty(trim($_POST["username"]))){
	$username_err = "Please enter a Username";
	} 
	else
	{
	$username = trim($_POST["username"]);
	}

	


    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }

	// Check input errors before inserting in database
    if(empty($firstname_err) && empty($lastname_err) && empty($username_err) && empty($emailid_err) && empty($password_err) && empty($confirm_password_err))
	{
	
    $sql = "INSERT INTO users (user_fir+stname, user_lastname, user_email, user_uid, user_password)  VALUES ('$firstname','$lastname','$emailid','$username','$password')";
 
//echo $sql; 

  if ($conn->query($sql) == TRUE) {
		echo "Registered Successfully";
  } 
 else {
   echo "Error Inserting table: " . $conn->error;
  }
	header("location: login.php");
	$conn->close();	
 
}
 
}
ob_end_flush();
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body class="bg-dark">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-5 mx-auto">
                <div class="card">
                    <div class="card-header text-center bg-warning">
                        <h1>Register</h1>
                    </div>
                    <div class="card-body">
                        <p>Please fill this form to create an account.</p>
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                            <div class="form-group">
                                <label>Firstname</label>
                                <input type="text" name="firstname" class="form-control <?php echo (!empty($firstname_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $firstname; ?>">
                                <span class="invalid-feedback"><?php echo $firstname_err; ?></span>
                            </div>    
							<div class="form-group">
                                <label>Lastname</label>
                                <input type="text" name="lastname" class="form-control <?php echo (!empty($lastname_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $lastname; ?>">
                                <span class="invalid-feedback"><?php echo $lastname_err; ?></span>
                            </div> 
							
							<div class="form-group">
                                <label>Email id</label>
                                <input type="text" name="emailid" class="form-control <?php echo (!empty($emailid_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $emailid; ?>">
                                <span class="invalid-feedback"><?php echo $emailid_err; ?></span>
                            </div> 
							
							<div class="form-group">
                                <label>Username</label>
                                <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                                <span class="invalid-feedback"><?php echo $username_err; ?></span>
                            </div> 

							<div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $password; ?>">
                                <span class="invalid-feedback"><?php echo $password_err; ?></span>
                            </div>
                            <div class="form-group">
                                <label>Confirm Password</label>
                                <input type="password" name="confirm_password" class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $confirm_password; ?>">
                                <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Submit">
                            </div>
                            <p>Already have an account? <a href="login.php">Login here</a>.</p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
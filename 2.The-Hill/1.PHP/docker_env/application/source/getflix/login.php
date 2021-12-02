<?php 
ob_start();

session_start();

// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: test.php");
    exit;
        
}

// Include config file
require_once "conn.php";

// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = $login_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
      //  $sql = "SELECT username, password FROM users WHERE username =$username and password=$password";
      $sql = "SELECT `user_uid`, `user_password`,`user_firstname` FROM `users` WHERE user_uid ='$username' and user_password = '$password'"; 
      $result = $conn->query($sql);
        
      echo $sql;
        if ($result->num_rows > 0) 
        {
            session_start();
            $_SESSION["loggedin"] = true;
            $_SESSION["username"] = $username; 
            
            while($row = $result->fetch_assoc()) {
                $userfirstname=$row["user_firstname"];
                //echo  $row["user_firstname"];
            }
        
            $redirectURL="location: test.php?loggedinuser=".$userfirstname;
            //echo $redirectURL;
            header($redirectURL);
            
         } else{
            // Password is not valid, display a generic error message
              $login_err = "Invalid username or password.";
        }

           } 

       
}

$conn->close();
ob_end_flush();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        body{ font: 14px sans-serif; }
        .wrapper{ width: 360px; padding: 20px;
         }
       
    body
    {
        background-image:url("./images/login.jpg");
        background-size: cover;       
    }
    </style>
</head>
<body>
<body class="bg-dark">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-5 mx-auto">
                <div class="card">
                    <div class="card-header text-center bg-danger">
                        <h1>Login</h1>
                    </div>
                    <div class="card-body">
                        
                    

        <?php 
        if(!empty($login_err)){
            echo '<div class="alert alert-danger">' . $login_err . '</div>';
        } 
        
        if (@$_GET['registered'] == 'true')
        {  
        $successmessage= "You have Registered Successfully. Please Login";
            echo '<div class="alert alert-success">' . $successmessage . '</div>';
        }
        ?>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                <span class="invalid-feedback"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>">
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Login">
                <input type="reset" class="btn btn-dark ml-2" value="Reset">  
            </div>
            <br>
            <p>Don't have an account? <a href="signup.php">Sign up now</a></p>
        </form>
    </div>
</body>
</html>
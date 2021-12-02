<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Settings</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="settings.css">
    
</head>
<body>
<nav class="navbar navbar-expand p-0">
        <div class="container-fluid kRed fontWide text-light">
            <ul class="navbar-nav justify-content-between mx-5 py-3 navDesk">
            <img src="./images/logo-small.jpg" alt="" width="80" height="60"> <a href="slideshow.php"> </a>
            </div>
</nav>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-5 mx-auto">
                <div class="card">
                    <div class="card-header text-center bg-danger">
                        <h2>Settings</h2>
                        <p>You can modify your settings here </p>
                    </div>
                    <div class="card-body">
                    
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                     <div class="form-group">
                      <label for ="Privacy Statements" ><a href="privacy statements.php"> Privacy Statements</a> </label><br> <br>
                      <label for ="Plans And Pricing" ><a href="Plans And Pricing.php"> Plans And Pricing</a> </label><br><br>
        
                             
            </div>    
            <div class="form-group">
                <label>Video Quality</label><br>
                
                <br>
                <input type="radio" id="html" name="fav_language" value="HTML">
                <label for="html">High</label><br><br>
                <input type="radio" id="css" name="fav_language" value="CSS">

                <label for="css">Standard</label><br><br>
                <button class="button1" onclick="location.href=''">submit</button>
           
        </form>
    </div>
</body>
</html>
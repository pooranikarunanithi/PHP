<?php
 require_once "conn.php";
 if (isset($_POST["submit"]))
 {
  $str = $_POST["search"];
  $sql = "SELECT id,name,description FROM search where name like '%$str%' or description like '%$str%' or language like '%$str%'";
  $result = $conn->query($sql);
  
  $conn->close();

 }
?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GETFLIX</title>
    <script src="https://kit.fontawesome.com/89bc576fb3.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="reset.css" media="screen"/>
    <link rel="stylesheet" type="text/css" href="style1.css" media="screen"/>
    <script src="flix.js"></script>
</head>
<body>
<header>
    
    <!-- Nav Bar 1  -->
    
    <nav class="navbar navbar-light " style="background-color: #070607;">
        <div class="container1">
          <a class="navbar-brand  mb-0 me-5 ml-5 h1 text-warning" href="#">
            <img src="./images/logo.jpg" alt="" width="75" height="60"> GitFlix </a>
            <form method="post">
           <label>Search</label>
         <input type="text" name="search">
         <input type="submit" name="submit">
         
         <button class="button1" onclick="location.href='login.php'">Login </button>
         <button class="button2" onclick="location.href='register.php'">register </button>
         <button class="button3" onclick="location.href='subscriber.php'">subscription </button>
         <button class="button3" onclick="location.href='settings.php'">settings</button>
         <button class="button3" onclick="location.href='logout.php'">logout</button>
         
       </div>
       
       
       

      </nav>
      
</header>

    <!--Search Results  -->

<?php
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "id: " . $row["id"]. " - name: " . $row["name"]." - description: " . $row["description"]."<br>";
    }
  } else {
    echo "0 results";
  }
?>

</form>
</body>
</html>

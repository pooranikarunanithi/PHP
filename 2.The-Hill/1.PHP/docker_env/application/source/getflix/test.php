<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="test.css">
    <title>Movie App</title>
</head>
<body>

            <header> 
        <form  id="form">
        <label> 
        <?php    
        if (!empty(@$_GET['loggedinuser']))
        {   
        echo "Welcome ".@$_GET['loggedinuser'];
        }
            ?>
         </label>    
        <input type="text" placeholder="Search" id="search" class="search">
        </form>
        <button class="button2" onclick="location.href='logout.php'">logout</button>
        </header>
  

        <div id="tags"></div>
        
        <div id="myNav" class="overlay">

        <!-- Button to close the overlay navigation -->
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

        <!-- Overlay content -->
        <div class="overlay-content" id="overlay-content"></div>

        <a href="javascript:void(0)" class="arrow left-arrow" id="left-arrow">&#8656;</a> 

        <a href="javascript:void(0)" class="arrow right-arrow" id="right-arrow" >&#8658;</a>

      </div>
    <main id="main"></main>
    <div class="pagination">
        <div class="page" id="prev">Previous Page</div>
        <div class="current" id="current">1</div>
        <div class="page" id="next">Next Page</div>

    </div>

    <script src="./test.js"></script>
</body>
</html>


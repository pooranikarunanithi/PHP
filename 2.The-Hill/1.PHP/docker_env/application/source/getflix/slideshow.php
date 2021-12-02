<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous"> <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="slideshow.css">
</head>
<body>
<nav class="navbar navbar-expand p-0">
        <div class="container-fluid kRed fontWide text-light">
            <ul class="navbar-nav justify-content-between mx-5 py-3 navDesk">
            <img src="./images/logo-small.jpg" alt="" width="80" height="60">  </a>
                <li class="nav-item"><a href="signup.php" class="nav-link kRed text-light navLink">Signup</a></li>
                <li class="nav-item"><a href="login.php" class="nav-link kRed text-light navLink">Login</a></li>
                <li class="nav-item"><a href="settings.php" class="nav-link kRed text-light navLink">settings</a></li>
                <li class="nav-item"><a href="about us.php" class="nav-link kRed text-light navLink">contact Us</a></li>
  
            </ul>
    </div>
</nav>
<h2>GETFLIX</h2>
<p>Watch Unlimited Movies and Web-series</p>

<div class="slideshow-container">
<div class="mySlides fade">
  <div class="numbertext"></div>
  <img class="img-fluid" src="./images/encanto.jpg" style="width:1000px; height:500px">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img class="img-fluid" src="./images/bossbaby.jpeg" style="width:1000px; height:500px">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img class="img-fluid" src="./images/sooryavanshi1.jpg" style="width:1000px; height:500px">
  <div class="text"></div>
</div>



<div class="mySlides fade">
  <div class="numbertext"></div>
  <img class="img-fluid" src="./images/spider-man.jpg" style="width:1000px; height:500px">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img class="img-fluid" src="./images/money-haist1.jpg" style="width:1000px; height:500px">
  <div class="text"></div>
</div>


<div class="mySlides fade">
  <div class="numbertext"></div>
  <img class="img-fluid"  src="./images/the-family-man-season-2-.jpg" style="width:1000px; height:500px">
  <div class="text"></div>
</div>
</div>
</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
</div>
<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
<footer>
    Project done by Mitsu, Rajab & Poorani
</footer>
</body>
</html> 

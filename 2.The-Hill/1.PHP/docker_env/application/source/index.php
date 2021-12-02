
<h1>HI</h1>
<?php
if (isset($_GET["connection"])){
    include('./getflix/conn.php');

}
if (isset($_GET["main"])){
    include ('./getflix/index.html');
}

if (isset($_GET["register"])){
    include ('./getflix/index3.php');
}
if (isset($_GET["log"])){
    include ('./getflix/login.php');
}
?>
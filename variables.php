<?php 
// $var_name =  "value"; // 1
// $var_name =  11000;

define("API_URL","https://host.com");
//search for another way to define const variable
echo API_URL."/route";


// super global variables
// $_GET
echo "<br>";
echo "<pre>";
// $_GET query params
// print_r($_GET);
// echo "<br>";
// echo $_GET['kuchbhi'];
// var_dump($_GET);

// $_POST
// $_POST['kuchbhikey'] = 11;
// print_r($_POST); 
// header("Location: intro.php");

// $_REQUEST it accepts both get and post
// print_r($_REQUEST);

// $_SERVER
// print_r($_SERVER);

// $_SESSION
// session_destroy();
// echo session_save_path("/");
// session_start();
// print_r($_SESSION);
// $_SESSION['aevfedv'] = 1;
// header("Location: intro.php");


// $_COOKIE 
// setcookie("firstccccookie","cookievalue",time() + (0),"/"); // 60s * 60m * 24h * 1
// print_r($_COOKIE);

// $_FILES used to upload files from frontend

echo "</pre>";
// echo (@$var_name);


?>
<?php 

print_r($_POST);

if(isset($_POST['rememberMe'])){
    setcookie("username",$_POST['username'],time()+(60*60*24*7),"/");
    setcookie("password",$_POST['password'],time()+(60*60*24*7),"/");
    setcookie("rememberMe",true,time()+(60*60*24*7),"/");
}else{
    setcookie("username",$_POST['username'],time(),"/");
    setcookie("password",$_POST['password'],time(),"/");
    setcookie("rememberMe",true,time(),"/");
}


?>
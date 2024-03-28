<?php 
echo "<pre>";
var_dump($_POST);
if(checkUserLogin($_POST) === true){
    echo "user ok h ";
    session_start();
    $_SESSION['user'] = $_POST['username'];
    $_SESSION['pass'] = $_POST['password'];

    unset($_SESSION['aevfedv']);
    print_r($_SESSION);

    header("Location: dashboard.php");

}
var_dump($_POST);


if(isset($_POST['rememberMe'])){
    setcookie("username",$_POST['username'],time()+(60*60*24*7),"/");
    setcookie("password",$_POST['password'],time()+(60*60*24*7),"/");
    setcookie("rememberMe",true,time()+(60*60*24*7),"/");
}else{
    setcookie("username",$_POST['username'],time(),"/");
    setcookie("password",$_POST['password'],time(),"/");
    setcookie("rememberMe",true,time(),"/");
}


function fnName(){

}

function checkUserLogin($userData){ // call by value
// function checkUserLogin(&$userData){ // call by reference
    // sql 
    // echo "function checkUSerLogin";
    // echo "<pre>";
    // print_r($userData);

    if($userData['username'] == "chetram" && $userData['password'] == "123"){
        $userData['username'] = "cheeku";
       return true;
    }
    return false;
}
?>
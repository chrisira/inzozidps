<?php

session_start();
if(isset($_POST['login'])){
    require_once("includes/loginConfig.php");
    $info = new loginConfig();
    $info->setEmail($_POST['email']);
    $info->setPassword($_POST['password']);

    $login = $info->login();
    if($login){
        header("Location:dashboard.php");
    }
    else{
        echo "<script>alert('invalid email/password');document.location='index.php'</script>";
    }
}


?>
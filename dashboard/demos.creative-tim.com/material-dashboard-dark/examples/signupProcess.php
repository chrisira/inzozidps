<?php
if(isset($_POST['signup'])){
    require_once("includes/signupConfig.php");
    $signup = new signupConfig();
    $signup->setEmail($_POST['email']);
    $signup->setUsername($_POST['username']);
    $signup->setPassword($_POST['password']);



}
if($signup->checkUser($_POST['email'])){
    echo "<script>alert('User exist please login ');document.location='login.php'</script>";
    
}
else{
 $signup->insertData();
 echo "<script>alert('User inserted Successfully ');document.location='dashboard.php'</script>";

}

   

    







?>
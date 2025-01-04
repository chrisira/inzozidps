<? session_start();
$message = "";
    if(isset($_SESSION['username'])){
        
      $message = "Welcome ".$_SESSION['username'];
    
    }
    else{
      header("Location: index.php");
    }

?>

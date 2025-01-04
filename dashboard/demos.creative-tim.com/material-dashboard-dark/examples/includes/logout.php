<?php
session_start();
unset($_SESSION["email"]);
unset($_SESSION["password"]);
echo "<script>alert('logout successful');document.location='../index.php'</script>";

?>
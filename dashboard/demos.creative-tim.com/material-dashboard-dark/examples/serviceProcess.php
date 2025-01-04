<?php

if(isset($_POST['save'])){
    require_once("includes/serviceConfig.php");
// making sc object
    $sc = new services();

    $sc->setserviceName($_POST['service_name']);
    

    echo $sc->insertData();
  echo "<script>alert('Saved Successfully');document.location='services.php'</script>";

    
}
?>
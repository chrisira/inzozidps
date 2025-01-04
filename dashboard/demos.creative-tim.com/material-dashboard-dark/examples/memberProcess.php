<?php

if(isset($_POST['save'])){
   
    require_once("includes/membersConfig.php");
// making sc object
    $sc = new members();
  

    $sc->setnames($_POST['member_name']);
    $sc->setService($_POST['service_name']);
    
    

    echo $sc->insertData();
  echo "<script>alert('Saved Successfully');document.location='members.php'</script>";

    
// }
}
// ?>
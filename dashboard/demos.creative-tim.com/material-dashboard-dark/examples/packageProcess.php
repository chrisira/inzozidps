<?php

if(isset($_POST['save'])){

    require_once("includes/packageConfig.php");
// making sc object

    $sc = new packages();
  
    $sc->setpackageName($_POST['pname']);
    $sc->setPrice($_POST['price']);
    $sc->setAlbum($_POST['album']);
    $sc->setPhotos($_POST['photos']);
    $sc->setCadre($_POST['cadre']);
    $sc->setVideo($_POST['video']);
    $sc->setflashDisk($_POST['usb']);
    $sc->setCrew($_POST['crew']);
    $sc->setDuration($_POST['duration']);
    $sc->setBonus($_POST['bonus']);
    
    

     $sc->insertData();
  echo "<script>alert('Saved Successfully');document.location='packages.php'</script>";

    

}

// ?>
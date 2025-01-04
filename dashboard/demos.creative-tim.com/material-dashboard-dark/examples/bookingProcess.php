<?php

require_once("sms.php");

if(isset($_POST['save'])){
    require_once("includes/bookingConfig.php");
// making sc object
    $sc = new bookings();

    $sc->setCustomer($_POST['customer_name']);
    
    $sc->setPhone($_POST['customer_phone']);
    
    $sc->setService($_POST['service_name']);
    
    $sc->setDetails($_POST['details']);

    

    echo $sc->insertData();
    echo SMSAPI($_POST['customer_name'],$_POST['customer_phone']);
  echo "<script>alert('Booked  Successfully');document.location='book.php'</script>";

    
}
?>
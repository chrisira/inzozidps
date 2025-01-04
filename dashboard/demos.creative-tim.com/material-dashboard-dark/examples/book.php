

<?php

require_once("includes/serviceConfig.php");

$data = new services();
$all = $data->fetchAll();

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="styles/style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>book Now</title>
</head>
<body>
  <div class="row">
    
  <div class="col-md-6 col-lg-4 col-sm-9 center-form">

  
    <div class="form-group">

  

        
            
          
                <div class="head-sterk">
                    <img src="Asset 4.png" class="logo-sterk">
                    <br>
                    <h1 align="center" > Book your space now</h1>
                    <p class="form-text">Please provide the required information</p>
                </div>
               
    <form action="bookingProcess.php" method="POST">
        <div class="form-group">
        <div class="md-3">
          <label for="exampleInputEmail1" class="form-label">Names</label>
          <input type="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="customer_name" placeholder="Enter your Names" required>
          <div class="md-3">
          <label for="exampleInputEmail1" class="form-label">Mobile</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="customer_phone" placeholder="Enter your Phone Number" required>
          <div class="md-3">

          
          <label for="exampleInputEmail1" class="form-label">service</label>
          <select class="form-select id="" name="service_name" >

          <?

foreach($all as $key=>$val){
  ?>

           
            <option value="<?=$val['service_id']?>" name="service_name"><?=$val['service_name']?></option>
            
           
          <?

}?>
</select>

<div class="md-3">
          <label for="exampleInputEmail1" class="form-label">Details</label>
          

  <textarea name="details" class="form-control" rows="4" cols="50" placeholder="Enter the details about the service you need(max 200 characters)"></textarea>
          
          <div class="md-3">

 
        <br>
        
        <button type="submit" class="btn btn-outline-primary" name="save">Book Now</button>
      </form>
    </div>
</div>
</div>
</div>
</body>
</html>
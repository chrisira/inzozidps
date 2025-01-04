<?php

require_once("session.php");
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="styles/style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Add A New Package</title>
</head>
<body>
     

  

        <div class="row">
          <div class="col-md-6 col-lg-4 col-sm-9 center-form">

  
    <div class="form-group">

  

            <div class="col-12">
                <div class="head-sterk">
                    <img src="Asset 4.png" class="logo-sterk">
                    <br>
                    <p class="form-text">Please provide the required information</p>
                </div>
               
    <form action="packageProcess.php" method="POST">
        <div class="md-3">
          <label for="exampleInputEmail1" class="form-label">packages Name</label>
          <input type="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="pname" required>
          
        <label for="exampleInputEmail1" class="form-label">Price</label>
          <input type="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="price" placeholder="Enter the Price"  required>
        <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Album</label>
          <input type="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="album" placeholder="Enter the type of album"  required>
        <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Photos</label>
          <input type="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="photos"   placeholder="Enter the number of photos" required>
        <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Cadre</label>
          <input type="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="cadre"  placeholder="Enter the type of frame" required>
        <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Video</label>
          <input type="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="video"  placeholder="Enter the number of Videos" required>
        <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">USB Flash Disk</label>
          <input type="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="usb"  placeholder="Enter the size  of Flash disk in GB" required>
        <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Production Crew</label>
          <input type="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="crew"  placeholder="Enter the number of crew" required>
        <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Duration</label>
          <input type="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="duration"  placeholder="Enter the Duration" required>
        <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Bonus</label>
          <input type="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="bonus"  placeholder="Enter the Amount of bonus" required>
        <div class="mb-3">
        </div>
        
        <button type="submit" class="btn btn-warning" name="save">Save</button>
      </form>
    </div>
</div>
</div>
</body>
</html>
<?php

require_once("session.php");
?>

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
    <title>Add A New Member</title>
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
               
    <form action="memberProcess.php" method="POST">
        <div class="md-3">
          <label for="exampleInputEmail1" class="form-label">Names</label>
          <input type="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  name="member_name" required>
        <div class="mb-3">

        <label for="exampleInputPassword1" class="form-label">services</label>

            <select class="form-select id="" name="service_name" >
        <?

foreach($all as $key=>$val){
  ?>

           
            <option value="<?=$val['service_id']?>" name="service_name"><?=$val['service_name']?></option>
            
           
          <?php

}?>
 </select>
        </div>
        
        <button type="submit" class="btn btn-warning" name="save" >Save</button>
      </form>
    </div>
</div>
</div>
</body>
</html>
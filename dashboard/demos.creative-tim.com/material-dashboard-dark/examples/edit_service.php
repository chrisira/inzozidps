

<?php

require_once("session.php");
?>




<?php

require_once("session.php");
?>




<?php

require_once("includes/serviceConfig.php");

$data = new services();

$id = $_GET['id'];
$data->setId($id);

if(isset($_POST['update'])){
    $data->setserviceName($_POST['service_name']);
  

    echo $data->update();
  echo "<script>alert('edited Successfully');document.location='services.php'</script>";
}
$record = $data->fetchOne();
$val = $record[0];
?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="styles/style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Edit service</title>
</head>
<body>
    <div class="center-form">

  

        <div class="row">
            <div class="col-12">
                <div class="head-sterk">
                    <img src="Asset 4.png" class="logo-sterk">
                    <br>
                    <p class="form-text">Edit Information</p>
                </div>
               
    <form action="" method="POST">
        <div class="md-3">
          <label for="exampleInputEmail1" class="form-label">Service Name</label>
          <input type="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="service_name" value="<?php echo $val['service_name'];?>" required>
        <br>
        
        <button type="submit" class="btn btn-warning" name="update">Save</button>
      </form>
    </div>
</div>
</div>
</body>
</html>
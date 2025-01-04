

<?php

require_once("session.php");
?>

<?php




require_once("includes/bookingConfig.php");

$data = new bookings();

$bookings = $data->fetchAll();



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="styles/">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Add A New Service</title>
</head>
<body>
    <div>


   
<br>
                        <br>
    
                    <h1 class="">Here is the list of all bookings on sterk</h1>
                
                        <br>
                        <br>
                  <table class="table table-hover table_manager">
                    <thead>
                      <th>ID</th>
                      <th>Customer Name</th>
                      <th>Service</th>
                      <th>Contact</th>
                      <th>Details</th>
                      <th>Action</th>
                    </thead>
                    
                    <tbody class="table_manager">
                      <?

foreach($bookings as $key=>$val){
  ?>
<tr>
  <td><?=$val['booking_id']?></td>
  <td><?=$val['customer']?></td>
  <td><?=$val['service_name']?></td>
  <td><?=$val['mobile']?></td>
  <td><?=$val['details']?></td>
  <td><a href="#" class="btn btn-success"> Reply</td>

 
</tr>
<?
}

?>
                        
                    </tbody>
                  </table>
                  </div>
                </div>
                </div>
               
    
      </form>
    </div>
</div>
</div>
</body>
</html>
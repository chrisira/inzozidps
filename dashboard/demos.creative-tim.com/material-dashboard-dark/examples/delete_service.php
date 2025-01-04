

<?php

require_once("session.php");
?>



<?php

require_once("session.php");
?>

<?php


<?php
require_once("includes/serviceConfig.php");

$record = new services();

if(isset($_GET['id']) && isset($_GET['req'])){
    if($_GET['req'] == 'delete'){
        $record->setId($_GET['id']);
        $record->delete();
       echo "<script>alert('deleted successfully');document.location='services.php'</script>";
    }
}

?>
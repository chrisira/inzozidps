

<?php

require_once("session.php");
?>



<?php

require_once("session.php");
?>

<?php


<?php
require_once("includes/packageConfig.php");

$record = new package();

if(isset($_GET['id']) && isset($_GET['req'])){
    if($_GET['req'] == 'delete'){
        $record->setId($_GET['id']);
        $record->delete();
       echo "<script>alert('deleted successfully');document.location='packages.php'</script>";
    }
}

?>
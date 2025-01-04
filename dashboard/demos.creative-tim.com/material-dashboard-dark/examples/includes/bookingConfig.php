<?php


require_once('dbConnect.php');


class bookings{
//setting up the paramters

private $id;
private $customer;
private $phone;
private $service;
private $details;

protected $dbCnx;


// constructing the variables
public function __construct($id=0,$customer="",$phone="",$service="",$details=""){
    $this->id = $id;
    $this->customer = $customer;
    $this->phone = $phone;
    $this->service = $service;
    $this->details = $details;
 
    //connecting to the database
    $this->dbCnx = new PDO(DB_TYPE.":host=".DB_HOST.";dbname=".DB_NAME, DB_USER,DB_PWD,[ PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);

}

// setting the setters and getters
public function setId($id){
    $this->id = $id;
}
public function getId(){
return this->id;
}

public function setCustomer($customer){
    $this->customer = $customer;
}
public function getCustomer(){
return this->customer;
}
public function setPhone($phone){
    $this->phone = $phone;
}
public function getPhone(){
return this->phone;
}
public function setService($service){
    $this->service = $service;
}
public function getService(){
return this->service;
}

public function setDetails($details){
    $this->details = $details;
}
public function getDetails(){
return this->details;
}



public function insertData(){
    try{
        $stm = $this->dbCnx->prepare("INSERT into bookings(customer,mobile,service_id,details) values(?,?,?,?)");
        $stm->execute([$this->customer,$this->phone,$this->service,$this->details]);
        
    }
    catch(Exception $e){
        return $e->getMessage();
    }
}

public function fetchAll(){
    try{
        $stm = $this->dbCnx->prepare("SELECT booking_id,customer,mobile,service_name,mobile,details FROM bookings join services ON services.service_id = bookings.service_id ORDER BY bookings.booking_id DESC LIMIT 10;");
        $stm->execute();
        return $stm->fetchAll();
    }
    catch(Exception $e){
        return $e->getMessage();
    }
}

public function fetchOne(){
    try{
        $stm = $this->dbCnx->prepare("SELECT * FROM services where service_id=? ");
        $stm->execute([$this->id]);
        return $stm->fetchAll();

    }
    catch(Exception $e){
        return $e->getMessage();    }
}
public function update(){
    try{
        $stm = $this->dbCnx->prepare("UPDATE services SET service_name = ? where service_id =?");
        $stm->execute([$this->serviceName,$this->id]);
    }
    catch(Exception $e){
        return $e->getMessage();
    }

}
public function delete(){
    try{
        $stm = $this->dbCnx->prepare("DELETE FROM services WHERE service_id=?");
        $stm->execute([$this->id]);
         return $stm->fetchAll();
         echo "<script>alert('deleted successfully!);document.location='allData.php'</script>";
       
    }
    catch(Exception $e){
        return $e->getMessage();
    }
}
}
?>
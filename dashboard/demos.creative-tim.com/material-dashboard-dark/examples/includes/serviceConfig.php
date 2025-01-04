<?php


require_once('dbConnect.php');


class services{
//setting up the paramters

private $id;
private $serviceName;

protected $dbCnx;


// constructing the variables
public function __construct($id=0,$serviceName=""){
    $this->id = $id;
    $this->serviceName = $serviceName;
 
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

public function setserviceName($serviceName){
    $this->serviceName = $serviceName;
}
public function getserviceName(){
return this->serviceName;
}


public function insertData(){
    try{
        $stm = $this->dbCnx->prepare("INSERT into services(service_name) values(?)");
        $stm->execute([$this->serviceName]);
        echo "<script>alert('data saved!);document.location='index.html'</script>";
    }
    catch(Exception $e){
        return $e->getMessage();
    }
}

public function fetchAll(){
    try{
        $stm = $this->dbCnx->prepare("SELECT * FROM services");
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
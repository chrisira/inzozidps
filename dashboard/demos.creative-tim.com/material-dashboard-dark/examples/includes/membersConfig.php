<?php


require_once('dbConnect.php');


class members{
//setting up the paramters

private $id;
private $names;
private $service;

protected $dbCnx;


// constructing the variables
public function __construct($id=0,$names="",$service=""){
    $this->id = $id;
    $this->names = $names;
    $this->service = $service;

 
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

public function setnames($names){
    $this->names = $names;
}
public function getnames(){
return this->names;
}

public function setService($service){
    $this->service = $service;
}
public function getService(){
return this->service;
}

public function insertData(){
    try{
        $stm = $this->dbCnx->prepare("INSERT into members(member_name,service_id) values(?,?)");
        $stm->execute([$this->names,$this->service]);
        
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


public function fetchGraphic(){
    try{
        $stm = $this->dbCnx->prepare("SELECT * FROM members where service_id=1");
        $stm->execute();
        return $stm->fetchAll();
    }
    catch(Exception $e){
        return $e->getMessage();
    }
}

public function fetchVideography(){
    try{
        $stm = $this->dbCnx->prepare("SELECT * FROM members where service_id=2");
        $stm->execute();
        return $stm->fetchAll();
    }
    catch(Exception $e){
        return $e->getMessage();
    }
}


public function fetchDigitalMarketing(){
    try{
        $stm = $this->dbCnx->prepare("SELECT * FROM members where service_id=4");
        $stm->execute();
        return $stm->fetchAll();
    }
    catch(Exception $e){
        return $e->getMessage();
    }
}


public function fetcheventManagement(){
    try{
        $stm = $this->dbCnx->prepare("SELECT * FROM members where service_id=3");
        $stm->execute();
        return $stm->fetchAll();
    }
    catch(Exception $e){
        return $e->getMessage();
    }
}



public function fetchOne(){
    try{
        $stm = $this->dbCnx->prepare("SELECT * FROM members where member_id=? ");
        $stm->execute([$this->id]);
        return $stm->fetchAll();

    }
    catch(Exception $e){
        return $e->getMessage();    }
}
public function update(){
    try{
        $stm = $this->dbCnx->prepare("UPDATE users SET member_name = ? where id =?");
        $stm->execute([$this->names,$this->id]);
    }
    catch(Exception $e){
        return $e->getMessage();
    }

}
public function delete(){
    try{
        $stm = $this->dbCnx->prepare("DELETE FROM services WHERE id=?");
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
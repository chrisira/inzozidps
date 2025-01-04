<?php


require_once('dbConnect.php');


class packages {
//setting up the paramters

private $id;
private $packageName;
private $price;
private $album;
private $photos;
private $cadre;
private $video;
private $flashDisk;
private $crew;
private $duration;
private $bonus;

protected $dbCnx;


// constructing the variables
public function __construct($id=0,$packageName="",$price="",$album="",$photos="",$cadre="",$video="",$flashDisk="",$crew="",$duration="",$bonus=""){
    $this->id = $id;
    $this->packageName = $packageName;
    $this->price = $price;
    $this->album = $album;
    $this->photos = $photos;
    $this->cadre = $cadre;
    $this->video = $video;
    $this->flashDisk = $flashDisk;
    $this->crew = $crew;
    $this->duration = $duration;
    $this->bonus = $bonus;

 
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

public function setpackageName($packageName){
    $this->packageName = $packageName;
}
public function getpackageName(){
return this->packageName;
}

public function setPrice($price){
    $this->price = $price;
}
public function getPrice(){
return this->price;
}

public function setAlbum($album){
    $this->album = $album;
}
public function getAlbum(){
return this->album;
}

public function setPhotos($photos){
    $this->photos = $photos;
}
public function getPhotos(){
return this->photos;
}

public function setCadre($cadre){
    $this->cadre = $cadre;
}
public function getCadre(){
return this->cadre;
}

public function setVideo($video){
    $this->video = $video;
}
public function getVideo(){
return this->video;
}


public function setflashDisk($flashDisk){
    $this->flashDisk = $flashDisk;
}
public function getflashDisk(){
return this->flashDisk;
}


public function setCrew($crew){
    $this->crew = $crew;
}
public function getCrew(){
return this->crew;
}


public function setDuration($duration){
    $this->duration = $duration;
}
public function getDuration(){
return this->duration;
}


public function setBonus($bonus){
    $this->bonus = $bonus;
}
public function getBonus(){
return this->bonus;
}


public function insertData(){
    try{
        $stm = $this->dbCnx->prepare("INSERT into packages(package_name,price,album,photos,cadre,video,usbflash_disk,production_crew,duration,bonus) values(?,?,?,?,?,?,?,?,?,?)");
        $stm->execute([$this->packageName,$this->price,$this->album,$this->photos,$this->cadre,$this->video,$this->flashDisk,$this->crew,$this->duration,$this->bonus]);
        
    }
    catch(Exception $e){
        return $e->getMessage();
    }
}

public function fetchAll(){
    try{
        $stm = $this->dbCnx->prepare("SELECT * FROM packages");
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
        $stm = $this->dbCnx->prepare("DELETE FROM packages WHERE package_id=?");
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
<?php
require_once("includes/dbConnect.php");

class loginConfig{

private $id;
private $email;
private $password;
protected $dbCnx;

public function __construct($id=0,$email="",$password=""){
    $this->id = $id;
    $this->email = $email;
    $this->password = $password;

    $this->dbCnx = new PDO(DB_TYPE.":host=".DB_HOST.";dbname=".DB_NAME, DB_USER,DB_PWD,[ PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
}
public function setId($id){
    $this->id = $id;
}

public function getItd(){
    return $this->id;
}
public function setEmail($email){
    $this->email = $email;
}

public function getEmail(){
    return $this->email;
}
public function setPassword($password){
    $this->password = $password;
}

public function getPassword(){
    return $this->password;
}


public function fetchAll(){
    try{
        $stm = $this->dbCnx->prepare("SELECT * FROM usrs");
        $stm->execute();
        return $stm->fetchAll();
    }
    catch(Exception $e){
        return $e->getMessage();
    }
}

public function login(){
    try{
        $stm = $this->dbCnx->prepare("SELECT * FROM users WHERE email=? AND password = ?");

        $stm->execute([$this->email,MD5($this->password)]);
        $user = $stm->fetchAll();
        if(count($user)>0){
            session_start();
            $_SESSION['id'] = $user[0]['id'];
            $_SESSION['email'] = $user[0]['email'];
            $_SESSION['password'] = $user[0]['password'];
            $_SESSION['username'] = $user[0]['username'];
            return true;
        }
        else{
            false;
        }
    }
    catch(Exception $e){
        return $e->getMessage();
    }
}

}




?>
<?php
namespace Admin\Libs;
use Exception;
use PDO;
use PDOException;

class NewsLetter extends Database{
    protected static $db_table="newsletter";
    protected static $db_fields=array('pershkrimi','email');

    protected $id;
    protected $pershkrimi;
    protected $email;


    public function setId($id){
        $this->id=$id;
    }
    public function getId(){
        return $this->id;
    }
    public function getPershkrimi(){
        return $this->pershkrimi;
    }

    public function setPershkrimi($pershkrimi){
        $this->pershkrimi=$pershkrimi;
    }
    
    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email=$email;
    }
}
?>
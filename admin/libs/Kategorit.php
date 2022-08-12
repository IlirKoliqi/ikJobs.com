<?php
namespace Admin\Libs;
use Exception;
use PDO;
use PDOException;


class Kategorit extends Database{
    protected static $db_table="kategorit";
    protected static $db_fields=array("emri");

    protected $id;
    protected $emri;
    

    public function setId($id){
        $this->id=$id;
    }
    public function getId(){
        return $this->id;
    }

    public function setEmri($emri){
        $this->emri=$emri;
    }
    public function getEmri(){
        return $this->emri;
    }
    public function find_EmriById($id){
        $query = "SELECT emri FROM `kategorit` WHERE id = $id";
        $result = $this->prepare($query);
        $result->execute();
        return $result->fetchAll(PDO::FETCH_CLASS,__NAMESPACE__ ."\\{$this->getClassName()}");
    }

    
}

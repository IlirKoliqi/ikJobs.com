<?php
namespace Admin\Libs;
use PDO,PDOException;
use ReflectionClass;



abstract class Database{
    protected static $db_table;
    protected static $db_fields;
    private $host= "localhost";
    private $user="root";
    private $pass="";
    private $dbname="ikjobs";

    public function __construct(){
        $this->connectDB();
    }
    private function connectDB(){
        try{
            $dsn="mysql:host=". $this->host.";dbname=" . $this->dbname;
            $pdo=new PDO($dsn,$this->user,$this->pass);
            $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            return $pdo;
        }catch(PDOException $e){
            echo "Lidhja me DB deshtoi " . $e->getMessage();
        }
    }
    public function prepare($query){
        return $this->connectDB()->prepare($query);
    }

    public function properties(){
        $properties=array();
        foreach(static::$db_fields as $db_field){
            if(property_exists($this,$db_field)){
                $properties[$db_field]=$this->$db_field;
            }
        }
        return $properties;
    }
    public function getClassName(){
        $className=new ReflectionClass($this);
        return $className->getShortName();
    }
    public function find_all(){
        $query = "SELECT * FROM " .  static::$db_table;
        $result = $this->prepare($query);
        $result->execute();
        return $result->fetchAll(PDO::FETCH_CLASS,__NAMESPACE__ ."\\{$this->getClassName()}");
    }
    public function find_id($id){
        $this->id=$id;
        $query = "SELECT * FROM ". static::$db_table;
        $query .=" WHERE id=:id";
        $result = $this->prepare($query);
        $result->bindParam(':id',$this->id);
        $result->execute();
        $result->setFetchMode(PDO::FETCH_CLASS,__NAMESPACE__ ."\\{$this->getClassName()}");
        return $result->fetch();
    }
    public function create(){
        $properties=$this->properties();
        try{
            $query="INSERT INTO " . static::$db_table . "(" . implode(",", array_keys($properties)) . ")";
            $query.="VALUES('" . implode("','",array_values($properties)) . "')";
            $res=$this->prepare($query);
            $res->execute();
            return true;
            //echo $this->getClassName() . " added succesfully";
        }catch(PDOException $e){
            echo "Error in user registration process" . $e->getMessage();
        }
    }
    public function update(){
        $properties=$this->properties();
        try{
            $properties_pair=array();
            foreach($properties as $key=>$value){
                $properties_pair[]="{$key}='{$value}'";
            }
            $query= "UPDATE " . static::$db_table . " SET ";
            $query.=implode(",", $properties_pair);
            $query.=" WHERE id=:id ";
            $res=$this->prepare($query);
            $res->bindParam(':id',$this->id);
            $res->execute();
            return true;
            //echo $this->getClassName() ." modified succesfully";
        }catch(PDOException $e){
            echo "Error in user modification process" . $e->getMessage();
        }
    }
    public function delete(){
        try{
            $query="DELETE FROM " .  static::$db_table ." WHERE id=:id ";
            $res=$this->prepare($query);
            $res->bindParam(':id',$this->id);
            $res->execute();
            return true;
            //echo "User deleted succesfully";
        }catch(PDOException $e){
            echo "Error in user deletion process" . $e->getMessage();
        }
    }
}
?>
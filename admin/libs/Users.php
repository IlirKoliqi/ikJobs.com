<?php

namespace Admin\Libs;

use Exception;
use PDO;
use PDOException;

class Users extends Database{
    protected static $db_table = "users";
    protected static $db_fields = array("emri", "mbiemri", "telefoni", "email", "fjalekalimi");

    protected $id;
    protected $emri;
    protected $mbiemri;
    protected $telefoni;
    protected $email;
    protected $fjalekalimi;


    public function setId($id){
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }

    public function setEmri($emri)
    {
        $this->emri = $emri;
    }
    public function getEmri(){
        return $this->emri;
    }

    public function setMbiemri($mbiemri)
    {
        $this->mbiemri = $mbiemri;
    }
    public function getMbiemri()
    {
        return $this->mbiemri;
    }

    public function setTelefoni($telefoni)
    {
        $this->telefoni = $telefoni;
    }
    public function getTelefoni()
    {
        return $this->telefoni;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function setFjalekalimi($fjalekalimi)
    {
        $this->fjalekalimi = $fjalekalimi;
    }
    public function getFjalekalimi()
    {
        return $this->fjalekalimi;
    }
    public function verifyUser($email, $fjalekalimi)
    {
        $sql = "SELECT * FROM users";
        $sql .= " WHERE email=:email AND fjalekalimi=:fjalekalimi";
        $result = $this->prepare($sql);
        $result->bindParam(':email', $email);
        $result->bindParam(':fjalekalimi', $fjalekalimi);
        $result->execute();
        $result->setFetchMode(PDO::FETCH_CLASS, __NAMESPACE__ . "\\{$this->getClassName()}");
        return $result->fetch();
    }
}
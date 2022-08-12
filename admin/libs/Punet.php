<?php
namespace Admin\Libs;
use Exception;
use PDO;
use PDOException;

class Punet extends Database{
    protected static $db_table="punet";
    protected static $db_fields=array("kid",'kompania','titulli_punes','pershkrimi','paga','komuna','data');

    protected $id;
    protected $kid;
    protected $kompania;
    protected $titulli_punes;
    protected $pershkrimi;
    protected $paga;
    protected $komuna;
    protected $data;
    protected $kategorit_emri;

    public function setId($id){
        $this->id=$id;
    }
    public function getId(){
        return $this->id;
    }

    public function setKategoriaid($kategoriaid){
        $this->kid=$kategoriaid;
    }
    public function getKategoriaid(){
        return $this->kid;
    }

    public function setKompania($kompania){
        $this->kompania=$kompania;
    }
    public function getKompania(){
        return $this->kompania;
    }

    public function setTitulliPunes($titulliPunes){
        $this->titulli_punes=$titulliPunes;
    }
    public function getTitulliPunes(){
        return $this->titulli_punes;
    }

    public function setPershkrimi($pershkrimi){
        $this->pershkrimi=$pershkrimi;
    }
    public function getPershkrimi(){
        return $this->pershkrimi;
    }

    public function setPaga($paga){
        $this->paga=$paga;
    }
    public function getPaga(){
        return $this->paga;
    }

    public function setKomuna($komuna){
        $this->komuna=$komuna;
    }
    public function getKomuna(){
        return $this->komuna;
    }

    public function setData($data){
        $this->data=$data;
    }
    public function getData(){
        return $this->data;
    }
    public function setKategorit_emri($emri){
        $this->kategorit_emri = $emri;
    }
    public function getKategorit_emri(){
        return $this->kategorit_emri;
    }


    public function find_Punet(){
        $query = "SELECT * , punet.id as id , kategorit.emri as kategorit_emri , kategorit.id as kid FROM punet INNER JOIN kategorit ON kategorit.id = punet.kid";
        $result = $this->prepare($query);
        $result->execute();
        return $result->fetchAll(PDO::FETCH_CLASS,__NAMESPACE__ ."\\{$this->getClassName()}");
    }
    public function gjejPunetSipasKategorise($id){
        $query = "SELECT * FROM `punet` WHERE kid = $id;";
        $result = $this->prepare($query);
        $result->execute();
        return $result->fetchAll(PDO::FETCH_CLASS,__NAMESPACE__ ."\\{$this->getClassName()}");
    }
    public function gjejKomunat(){
        $query = "SELECT DISTINCT `komuna` FROM `punet`;";
        $result = $this->prepare($query);
        $result->execute();
        return $result->fetchAll(PDO::FETCH_CLASS,__NAMESPACE__ ."\\{$this->getClassName()}");
    }
    public function gjejPunetSipasKategoriseDheKomunes($kid,$komuna){
        $query = "SELECT * FROM `punet` WHERE kid=$kid AND komuna='$komuna';";
        $result = $this->prepare($query);
        $result->execute();
        return $result->fetchAll(PDO::FETCH_CLASS,__NAMESPACE__ ."\\{$this->getClassName()}");
    }
    
}
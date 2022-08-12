<?php
namespace Admin\Libs;
use Exception;
use PDO;
use PDOException;

class Aplikimet extends Database{
    use UploadCv;
    protected static $db_table="rezervimet";
    protected static $db_fields=array("pid",'emri','mbiemri','email','telefoni','cv');

    protected $id;

    protected $pid;

    protected $emri;

    protected $mbiemri;

    protected $email;

    protected $telefoni;

    protected $cv;

    protected $cvImage;

    protected $punet_emri;

    function setId($id) {
        $this->id = $id; 
       }

function getId() {
    return $this->id; 
   }

function setPid($pid) {
         $this->pid = $pid; 
        }

function getPid() {
     return $this->pid; 
    }

    function setEmriPune($punet_emri) {
        $this->punet_emri = $punet_emri; 
       }

function getEmriPune() {
    return $this->punet_emri; 
   }

function setEmri($emri) { 
    $this->emri = $emri; 
}

function getEmri() {
     return $this->emri; 
    }
function setMbiemri($mbiemri) { 
    $this->mbiemri = $mbiemri; 
}
function getMbiemri() {
     return $this->mbiemri; 
    }
function setEmail($email) {
     $this->email = $email; 
    }
function getEmail() {
     return $this->email; 
    }
function setTelefoni($telefoni) {
     $this->telefoni = $telefoni; 
    }
function getTelefoni() {
     return $this->telefoni; 
    }
function setCv($cv) {
     $this->cv = $cv; 
    }
function getCv() {
     return $this->cv; 
    }
    function setCvImage($cvImage) {
        $this->cvImage = $cvImage; 
       }

function getCvImage() {
    return $this->cvImage; 
   }

    public function create()
    {
        try {
            $this->startupLoad($this->cvImage);
            $this->cv = $this->filename;
            $uploadFile = $this->uploadFile();
            if ($uploadFile) {
                if (parent::create()) {
                    return true;
                }
            } else {
                foreach ($this->errors as $error) {
                    echo $error . "<br>";
                }
            }
        } catch (Exception $e) {
            echo "Rezervimi " . $e->getMessage();
        }
    }
    public function update()
    {
        try {
            if (isset($this->cvImage)) {
                $this->uploadfile = $this->src . $this->cv;
                unlink($this->uploadfile);
                $this->startupLoad($this->cvImage);
                $this->cv = $this->filename;
                $uploadFile = $this->uploadFile();
                if ($uploadFile) {
                    if (parent::update()) {
                        return true;
                    }
                } else {
                    foreach ($this->errors as $error) {
                        echo $error . "<br>";
                    }
                }
            } else {
                if (parent::update()) {
                    return true;
                }
            }
        } catch (Exception $e) {
            echo "Rezervimi " . $e->getMessage();
        }
    }
    public function delete()
    {
        try {
            if (parent::delete()) {
                $this->uploadfile = $this->src . $this->cv;
                unlink($this->uploadfile);
                return true;
            } else {
                return false;
            }
        } catch (Exception $e) {
            echo "Rezervimi " . $e->getMessage();
        }
    }

    public function find_aplikimet(){
        $query = "SELECT * , punet.id as pid , punet.titulli_punes as punet_emri , rezervimet.id as id FROM `rezervimet`
         INNER JOIN punet ON rezervimet.pid = punet.id";
        $result = $this->prepare($query);
        $result->execute();
        return $result->fetchAll(PDO::FETCH_CLASS,__NAMESPACE__ ."\\{$this->getClassName()}");
    }

}



?>
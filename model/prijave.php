<?php 
    class Prijava{
        public $id;
        public $predmet;
        public $katedra;
        public $sala;
        public $datum;


        // Konstruktor
        public function __construct($id, $predmet, $katedra, $sala, $datum){
            $this->id = $id;
            $this->predmet = $predmet;
            $this->katedra = $katedra;
            $this->sala = $sala;
            $this->datum = $datum;

        }

        // mysqli conn veza ka bazi
        public static function getAll(mysqli $conn){
            $q = "SELECT * FROM prijave";
            return $conn->query($q);
        }

        public function addPrijava(mysqli $conn){
            $q = "INSERT INTO prijave (predmet, katedra, sala, datum) VALUES ('$this->predmet', '$this->katedra', $this->sala, '$this->datum')";
            return $conn->query($q);
        
        }

        public static function deletePrijava($id, mysqli $conn){
            $q = "DELETE FROM prijave WHERE id=$id";
            return $conn->query($q);
        }
        
        public static function getById($id, mysqli $conn){
            $q = "SELECT * FROM prijave WHERE id=$id";
            return $conn->query($q);
        }
        
        public static function updatePrijava($id, $predmet, $katedra, $sala, $datum, mysqli $conn){
            $q = "UPDATE prijave SET predmet = '$predmet', 
                                     katedra = '$katedra', 
                                     sala = '$sala', datum = '$datum' 
                  WHERE id=$id";
            
            return $conn->query($q);
        }

    };
?>
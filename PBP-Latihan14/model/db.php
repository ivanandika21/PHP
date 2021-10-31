<?php
    
    class mydb {
        // attribute
        public $host="127.0.0.1";
        public $dbname="dbsiswa";
        public $username="root";
        public $password="";
        public $db;

        public $datasiswa = [];

        // method
        public function __construct(){
            $this->db = new PDO("mysql:
                host={$this->host};
                dbname={$this->dbname}", $this->username, $this->password);
        }

        public function tampilkan_tabel(){
            $query = $this->db->prepare("select * from tbsiswa");
            $query->execute();
            $data = $query->fetchAll();
            $this->datasiswa = $data;
            return $this->datasiswa;
        }

        public function input_data($a, $b){
            $query = $this->db->prepare("insert into tbsiswa(nis,nama) values(:ns,:nm)");
            $query->bindParam(":ns", $a);
            $query->bindParam(":nm", $b);

            if($query->execute()) return true;
            else return false;
        }
    }
?>
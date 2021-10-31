<?php
    class Kst {
        public $pilihan;
        public $datakst = [
            [
                "kode" => "001",
                "hari" => "Senin",
                "jam" => "09.00 - 11.00",
                "matkul" => "PBP",
                "dosen" => "Yeremia"
            ],
            [
                "kode" => "002",
                "hari" => "Selasa",
                "jam" => "15.00 - 17.00",
                "matkul" => "PL",
                "dosen" => "Radius"
            ],
            [
                "kode" => "003",
                "hari" => "Rabu",
                "jam" => "09.00 - 11.00",
                "matkul" => "KD",
                "dosen" => "Ineke"
            ],
            [
                "kode" => "004",
                "hari" => "Kamis",
                "jam" => "07.00 - 09.00",
                "matkul" => "PS",
                "dosen" => "Arny"
            ],
            [
                "kode" => "005",
                "hari" => "Jumat",
                "jam" => "13.00 - 15.00",
                "matkul" => "IMK",
                "dosen" => "Sri"
            ],
        ];

        public function getAllKst(){
            return $this->datakst;
        }

        public function getDetail($pilih) {
            for ($i = 0; $i < count($this->datakst); $i++){
                if ($this->datakst[$i]["kode"] == $pilih){
                    $this->pilihan = [
                        "kode" => $this->datakst[$i]["kode"],
                        "hari" => $this->datakst[$i]["hari"],
                        "jam" => $this->datakst[$i]["jam"],
                        "matkul" => $this->datakst[$i]["matkul"],
                        "dosen" => $this->datakst[$i]["dosen"]
                    ];
                    break;
                }
            }
            return $this->pilihan;
        }
    }
?>
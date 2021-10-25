<?php
    
    class keranjang {
        public $belanjaan = 
        [
            [
                "nama" => "Baygon",
                "harga" => 45000
            ],
            [
                "nama" => "Hit",
                "harga" => 5000
            ]
        ];

        public $total;

        // method
        public function tampilkan_semua() {
            return $this->belanjaan;
        }

        public function tampil_input($nama) {
            foreach ($this->belanjaan as $blj) {
                if ($blj["nama"] == $nama){
                    $belanjaan2 = 
                        [
                            [
                                "nama" => $blj["nama"],
                                "harga" => $blj["harga"]
                            ]
                        ];
                }
            }
            return $belanjaan2;
        }

        public function hitung_total() {
            foreach ($this->belanjaan as $blj){
                $this->total = $this->total + $blj["harga"];
            }
            return $this->total;
        }
    }
?>
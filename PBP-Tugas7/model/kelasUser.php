<?php
    class User {
        public $ceknim;
        public $cekpass;
        public $isLogin;
        
        public $nimlogin;
        public $namalogin;
        public $userlogin;
        
        public $dbuser = [
            [
                "dbnama" => "Ivan Andika Surya",
                "dbnim" => "672019171",
                "dbpass" => "123"
            ],
            [
                "dbnama" => "Admin",
                "dbnim" => "admin",
                "dbpass" => "admin"
            ]
        ];

        public function cekLogin() {
            for ($i = 0; $i < count($this->dbuser); $i++){
                if ($this->ceknim == $this->dbuser[$i]["dbnim"] && $this->cekpass == $this->dbuser[$i]["dbpass"]){
                    return $this->isLogin = true;
                    break;
                }
            }
        }

        public function getNamaNim(){
            for ($i = 0; $i < count($this->dbuser); $i++){
                if ($this->ceknim == $this->dbuser[$i]["dbnim"] && $this->cekpass == $this->dbuser[$i]["dbpass"]){
                    $userlogin = [
                        [
                            "nim" => $this->dbuser[$i]["dbnim"],
                            "nama" => $this->dbuser[$i]["dbnama"]
                        ]
                    ];
                    break;
                }
            }
            return $userlogin;
        }
    }
?>
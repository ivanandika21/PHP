<?php
    $db = [
        [
            "arruser" => "ivanandika",
            "arrpass" => "123"
        ],
        [
            "arruser" => "admin",
            "arrpass" => "admin"
        ]
    ];
    $matakuliah = [
        [
            "kode" => "A001",
            "matkul" => "Pemrograman Web"
        ],
        [
            "kode" => "A002",
            "matkul" => "Pemrograman Service"
        ],
        [
            "kode" => "A003",
            "matkul" => "Desain Interface"
        ],
        [
            "kode" => "A004",
            "matkul" => "Manajemen Database"
        ],
        [
            "kode" => "A005",
            "matkul" => "Keamanan Data"
        ]
    ];

    if (($_POST["user"] != "") && ($_POST["pass"] != "")){
        $user = $_POST["user"];
        $pass = $_POST["pass"];

        for ($i = 0; $i < count($db); $i++){
            if ($user == $db[$i]["arruser"] && 
                $pass == $db[$i]["arrpass"]){
                session_start();
                $_SESSION["sessuser"] = $db[$i]["arruser"];
                $_SESSION["sesspass"] = $db[$i]["arrpass"];
                $_SESSION["sessarrMatkul"] = $matakuliah;

                $returnvalue = "berhasil";
                break;
            } else {
                $returnvalue = "";
            }
        }
        if ($returnvalue == "berhasil"){
            header("Location: page_rmk.php");
        } else {
            header("Location: page_index.php");
        }
    } else {
        header("Location: page_index.php");
    }
?>

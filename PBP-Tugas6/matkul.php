<?php
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
        ]
    ];

    session_start();
    if (!isset($_SESSION["sessuser"])){
        header("Location: index.php");
    } else if (!isset($_POST["pilih"])){
        header("Location: rmk.php");
    } else {
        $tampung = $_POST["pilih"];
        $_SESSION["pilih"] = $tampung;
        header("Location: final.php");
    }
?>
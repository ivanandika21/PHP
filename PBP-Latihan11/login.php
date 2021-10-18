<?php
    // unboxing
    // $un = $_POST["user"];
    // $ps = $_POST["pass"];
    
    // pakai array
    $db = [
        [
            "username" => "ivan",
            "password" => "123"
        ],
        [
            "username" => "andika",
            "password" => "321"
        ]
    ];

    // biasa

    // $dbu = "ivanandika";
    // $dbp = "1234";
    // if ($un == $dbu && $ps == $dbp){
    //     session_start();
    //     $_SESSION["sun"] = $un;
    //     $_SESSION["sps"] = $ps;

    //     header("Location: rmk.php"); // redirect
    // } else {
    //     header("Location: index.php"); // redirect
    // }
    
    // array
    if (($_POST["user"] != "") && ($_POST["pass"] != "")){
        $un = $_POST["user"];
        $ps = $_POST["pass"];

        for ($i = 0; $i < count($db); $i++){
            if ($un == $db[$i]["username"] && $ps == $db[$i]["password"]){
                session_start();
                $_SESSION["sun"] = $db[$i]["username"];
                $_SESSION["sps"] = $db[$i]["password"];

                $returnvalue = "berhasil";
                break;
            } else {
                $returnvalue = "gagal";
            }
        }
        if ($returnvalue == "berhasil"){
            header("Location: rmk.php"); // redirect
        } else {
            header("Location: index.php"); // redirect
        }
    } else {
        header("Location: index.php"); // redirect
    }
?>
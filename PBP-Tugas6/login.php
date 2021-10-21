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

    if (($_POST["user"] != "") && ($_POST["pass"] != "")){
        $user = $_POST["user"];
        $pass = $_POST["pass"];

        for ($i = 0; $i < count($db); $i++){
            if ($user == $db[$i]["arruser"] && $pass == $db[$i]["arrpass"]){
                session_start();
                $_SESSION["sessuser"] = $db[$i]["arruser"];
                $_SESSION["sesspass"] = $db[$i]["arrpass"];

                $returnvalue = "berhasil";
                break;
            } else {
                $returnvalue = "";
            }
        }
        if ($returnvalue == "berhasil"){
            header("Location: rmk.php");
        } else {
            header("Location: index.php");
        }
    } else {
        header("Location: index.php");
    }
?>
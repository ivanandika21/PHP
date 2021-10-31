<?php
    include '../model/kelasUser.php';
    include '../model/kelasKst.php';

    session_start();
    
    $login = new User();
    $login->ceknim = $_POST["ceknim"];
    $login->cekpass = $_POST["cekpass"];
    $_SESSION["data"] = $login->getNamaNim();

    $tempkst = new Kst();
    $_SESSION["kst"] = $tempkst->getAllKst();

    echo "Keterangan = ".$login->cekLogin();
    if ($login->cekLogin() == true) {
        header("Location: ../view/page_kst.php");
    } else {
        header("Location: ../view/page_login.php");
    }
?>
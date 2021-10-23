<?php
    session_start();
    if (!isset($_POST["pilih"])){
        header("Location: page_rmk.php");
    } else {
        $arrPilihan = $_POST["pilih"];
        $_SESSION["sesspilih"] = $arrPilihan;
        header("Location: page_check.php");
    }
?>

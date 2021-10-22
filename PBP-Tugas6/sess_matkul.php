<?php
    session_start();
    if (!isset($_POST["pilih"])){
        header("Location: page_rmk.php");
    } else {
        $matkul = $_POST["pilih"];
        $_SESSION["sesspilih"] = $matkul;
        header("Location: page_check.php");
    }
?>
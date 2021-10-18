<?php
    session_start();
    $nama = $_SESSION["sun"];
    $pass = $_SESSION["sps"];

    echo "<h1>Selamat datang ".$nama." di halaman Transkrip</h1>".$pass;
?>
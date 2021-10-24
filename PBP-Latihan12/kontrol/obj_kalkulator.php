<?php
    include '../kelas/kelasKalkulator.php';

    // membuat objek
    $K = new kalkulator();
    $K->nilai1 = $_POST["nil1"];
    $K->nilai2 = $_POST["nil2"];

    echo "Hasil tambah = ".$K->tambah();
    echo "<br>Keterangan = ".$K->cek_bilangan();
?>
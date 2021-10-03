<?php
    $nama = $_POST["nama"];
    $nim = $_POST["nim"];
    $alamat = $_POST["alamat"];
    $jk = $_POST["jk"];
    $kerja = $_POST["pekerjaan"];

    echo "<style>body { font-family: Tahoma, sans-serif; padding: 0 10px; margin: 10px; }</style>";
    echo "<h2>"."Data Diri Pendaftar"."</h2>";
    echo "<h4>"."Nama : ".$nama."<br>"."NIM : ".$nim."<br>"."Alamat : ".$alamat."<br>"."Jenis Kelamin : ".$jk."<br>"."Pekerjaan : ".$kerja."</h4>";
?>


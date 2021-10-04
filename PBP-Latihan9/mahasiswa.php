<?php
    $nama = "Ivan Andika Surya";
    $nim = "672019171";
    $jk = "pria";
    
    echo "Selamat datang ".$nama."<br>";
    echo "Anda adalah seorang ";
    if($jk == "pria") echo "mahasiswa<br>";
    else "mahasiswi";
    
    $progdi = substr($nim, 0, 2);
    echo "Prodi ";
    if ($progdi == "67") echo "Teknik Informatika"."<br>";
    else if ($progdi == "68") echo "Desain Komunikasi Visual"."<br>";

    $angkatan = substr($nim, 2, 4);
    echo "Angkatan ".$angkatan;
?>
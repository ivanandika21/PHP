<?php
    include '../model/kelasKeranjang.php';

    $Kj = new keranjang();
    $belanja = $Kj->tampil_input("Hit");
    $total = $Kj->hitung_total();

    foreach ($belanja as $b){
        echo $b["nama"]." - ".$b["harga"]."<br>";
    }
?>
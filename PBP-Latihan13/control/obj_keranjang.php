<?php
    include '../model/kelasKeranjang.php';

    $Kj = new keranjang();
    $belanja = $Kj->tampilkan_semua();
    $total = $Kj->hitung_total();

    foreach ($belanja as $b){
        echo $b["nama"]." - ".$b["harga"]."<br>";
    }
    echo "Total bayar = Rp ".$total;
?>
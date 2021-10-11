<?php
    $buah1 = "jeruk";
    $buah2 = "Apel";
    $buah3 = "Jambu";

    $buah = ["jeruk", "apel", "jambu"];

    echo $buah[0]."<br>";
    echo "<br>";

    for ($i = 0; $i < count($buah); $i++){
        echo $buah[$i]."<br>";
    }
    echo "<br>";

    foreach ($buah as $cetak){
        echo $cetak."<br>";
    }
    echo "<br>";
?>
<?php
    $bil = $_POST["bil"];
    if ($bil % 2 == 0){
        echo "Bilangan genap";
    } else if ($bil % 2 != 0){
        echo "Bilangan ganjil";
    } else {
        echo "Salah input";
    }
?>
<?php
    $buku = [
        [
            "judul" => "Belajar PHP",
            "penulis" => "Ivan Andika",
            "harga" => 20000
        ],
        [
            "judul" => "Belajar PHP V2",
            "penulis" => "Surya",
            "harga" => 21000
        ]
    ];

    // echo $buku["judul"];
    
    // echo "Judul buku : ".$buku["judul"]."<br>";
    // echo "Penulis : ".$buku["penulis"]."<br>";
    // echo "Harga : ".$buku["harga"]."<br>";
    // echo "<br>";

    echo "Judul buku : ".$buku[0]["judul"]."<br>";
    echo "Penulis : ".$buku[0]["penulis"]."<br>";
    echo "Harga : ".$buku[0]["harga"]."<br>";
    echo "<br>";

    // foreach ($buku as $kotakpensil){
    //     echo $kotakpensil."<br>";
    // }
    // echo "<br>";

    foreach ($buku as $kotakpensil){
        echo $kotakpensil["judul"]."<br>";
        echo $kotakpensil["penulis"]."<br>";
        echo $kotakpensil["harga"]."<br>";
        echo "<br>";
    }
    echo "<br>";
?>
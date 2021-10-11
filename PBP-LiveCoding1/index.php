<?php
    $A = [
        [1, 2],
        [3, 4]
    ];
    $B = [
        [5, 6],
        [7, 8]
    ];

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

    $mahasiswa = [
        [
            "nim" => 672019171,
            "nama" => "Ivan Andika Surya",
            "ipk" => 4
        ]
    ];

    for($i = 0; $i < count($A); $i++){
        for($j = 0; $j < count($A); $j++){
            echo $A[$i][$j] + $B[$i][$j];
            echo "<br>";
        }
    }
    echo "<br>";

    foreach ($A as $kotakpensil){
        foreach ($kotakpensil as $pensil){
            echo $pensil."<br>";
        }
    }
    echo "<br>";

    foreach ($B as $kotakpensil){
        foreach ($kotakpensil as $pensil){
            echo $pensil."<br>";
        }
    }
    echo "<br>";

    foreach ($buku as $kotakpensil){
        echo $kotakpensil["judul"]."<br>";
        echo $kotakpensil["penulis"]."<br>";
        echo $kotakpensil["harga"]."<br>";
        echo "<br>";
    }
    echo "<br>";

    foreach ($mahasiswa as $mhs){
        echo $mhs["nim"]."<br>";
        echo $mhs["nama"]."<br>";
        echo $mhs["ipk"]."<br>";
        echo "<br>";
    }
    echo "<br>";
?>
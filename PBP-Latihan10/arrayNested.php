<?php
    $buah = [
        [1, 2, 3],
        [4, 5, 6],
        [7, 8, 9]    
    ];

    echo $buah[0][0]."<br>"; // 1
    echo $buah[0][2]."<br>"; // 3
    echo $buah[1][1]."<br>"; // 5
    echo $buah[2][0]."<br>"; // 7
    echo "<br>";
    
    for($x = 0; $x < count($buah); $x++){
        for($y = 0; $y < count($buah); $y++){
            echo $buah[$x][$y]."&nbsp;";
        }
        echo "<br>";
    }
    echo "<br>";

    foreach ($buah as $kotakpensil){
        foreach ($kotakpensil as $pensil){
            echo $pensil."<br>";
        }
    }
?>
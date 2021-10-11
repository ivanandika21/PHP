<?php
    $mahasiswa = [
        [
            "nim" => "672019171",
            "nama" => "Ivan",
            "ipk" => 4
        ],
        [
            "nim" => "672019701",
            "nama" => "Andika",
            "ipk" => 3.9
        ],
        [
            "nim" => "692019702",
            "nama" => "Surya",
            "ipk" => 3.85
        ],
        [
            "nim" => "682019703",
            "nama" => "Dika",
            "ipk" => 4
        ],
        [
            "nim" => "672019704",
            "nama" => "Vanan",
            "ipk" => 3.9
        ]
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tugas5 672019171</title>
    <style>
        table {
            width: 50vw;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="child-con">
            <form action="">
                <h2>Tugas5</h2>
                <table>
                <?php
                    foreach ($mahasiswa as $mhs){
                        echo "<tr>";
                            echo "<td>".$mhs["nim"]."</td>";
                            echo "<td>".$mhs["nama"]."</td>";
                            echo "<td>".$mhs["ipk"]."</td>";
                        echo "</tr>";
                    }
                ?>
                </table>
            </form>
        </div>
    </div>
</body>
</html>
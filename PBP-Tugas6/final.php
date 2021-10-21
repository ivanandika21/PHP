<?php
    session_start();
    if (isset($_SESSION["pilih"])){
        $nama = $_SESSION["sessuser"];
        $matkul = $_SESSION["pilih"];
    }

    $matakuliah = [
        [
            "kode" => "A001",
            "matkul" => "Pemrograman Web"
        ],
        [
            "kode" => "A002",
            "matkul" => "Pemrograman Service"
        ],
        [
            "kode" => "A003",
            "matkul" => "Desain Interface"
        ],
        [
            "kode" => "A004",
            "matkul" => "Manajemen Database"
        ]
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>RMK</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="con">
            <div>
                <h2>Selamat datang, <?= $nama ?></h2><br>
                <a class="btn" href="logout.php">Logout</a>
            </div>
            <div class="tabel">
                <form action="matkul.php" method="post">
                    <table class="styled">
                        <tr class="h-color">
                            <td>Kode</td>
                            <td>Mata Kuliah</td>
                        </tr>
                        <?php 
                            for ($j = 0; $j < count($matkul); $j++){
                                for ($i = 0; $i < count($matakuliah); $i++){
                                    if ($matkul[$j] == $matakuliah[$i]["kode"]){
                                        echo "<tr>";
                                            echo "<td>".$matakuliah[$i]["kode"]."</td>";
                                            echo "<td>".$matakuliah[$i]["matkul"]."</td>";
                                        echo "</tr>";
                                    }
                                }
                            }
                        ?>
                    </table>
                    <input type="submit" class="btn" value="Submit">
                </form>
            </div>
        </div>
    </div>
</body>
</html>

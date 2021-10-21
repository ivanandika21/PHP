<?php
    session_start();
    $nama = $_SESSION["sessuser"];
    $matkul = $_SESSION["sesspilih"];

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
        ],
        [
            "kode" => "A005",
            "matkul" => "Keamanan Data"
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
                <a class="btn" href="sess_logout.php">Logout</a>
            </div>
            <div class="tabel">
                <form action="sess_unset.php" method="post">
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
                    <input type="submit" class="btn" value="Back" name="submit">
                </form>
            </div>
        </div>
    </div>
</body>
</html>

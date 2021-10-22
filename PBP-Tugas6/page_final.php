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
    <title>Tugas6_672019171</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="con">
        <div class="flex">
                <div>
                    <h2>Selamat datang, <?= $nama ?>.</h2>
                    <p>Mata kuliah yang dipilih:</p>
                </div>
                <div><br><br><a class="btn not" href="sess_logout.php">Logout</a></div>
            </div>
            <div class="tabel">
                <form action="sess_logout.php" method="post">
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
                    <input type="submit" class="btn" value="Done" name="submit">
                </form>
            </div>
        </div>
    </div>
</body>
</html>

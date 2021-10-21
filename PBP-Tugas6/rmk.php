<?php
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

    session_start();
    if (!isset($_SESSION["sessuser"])){
        header("Location: index.php");
    }
    $nama = $_SESSION["sessuser"];
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
                            <td>Input</td>
                        </tr>
                        <?php for ($i = 1; $i <= count($matakuliah); $i++) {?>
                        <tr>
                            <td><?= $matakuliah[$i-1]["kode"]; ?></td>
                            <td><?= $matakuliah[$i-1]["matkul"]; ?></td>
                            <td><input type="checkbox" name="pilih[]" value="A00<?= $i; ?>"></td>
                        </tr>
                        <?php } ?>
                    </table>
                    <input type="submit" class="btn" value="Submit">
                </form>
            </div>
        </div>
    </div>
</body>
</html>

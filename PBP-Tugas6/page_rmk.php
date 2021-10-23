<?php
    session_start();
    if (!isset($_SESSION["sessuser"])){
        header("Location: index.php");
    } else {
        $nama = $_SESSION["sessuser"]; 
        $arrMatkul = $_SESSION["sessarrMatkul"];
    }
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
                    <p>Silakan pilih mata kuliah:</p>
                </div>
                <div>
                    <br><br>
                    <a class="btn not" href="sess_logout.php">Logout</a>
                </div>
            </div>
            <div class="tabel">
                <form action="sess_matkul.php" method="post">
                    <table class="styled">
                        <tr class="h-color">
                            <td>Kode</td>
                            <td>Mata Kuliah</td>
                            <td>Pilih</td>
                        </tr>
                  <?php for ($i = 1; $i <= count($arrMatkul); $i++) { ?>
                        <tr>
                            <td><?= $arrMatkul[$i-1]["kode"]; ?></td>
                            <td><?= $arrMatkul[$i-1]["matkul"]; ?></td>
                            <td><input type="checkbox" name="pilih[]" 
                                 value="A00<?= $i; ?>"></td>
                        </tr>
                        <?php } ?>
                    </table>
                    <input type="submit" class="btn" value="Next">
                </form>
            </div>
        </div>
    </div>
</body>
</html>

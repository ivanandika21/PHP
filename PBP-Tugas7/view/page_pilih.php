<?php
    session_start();
    $sessdata = $_SESSION["data"];
    $sesspilih = $_SESSION["sesspilih"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tugas7_672019171</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="con">
            <div class="flex">
                <div>
                    <h2>Kartu Studi Tetap</h2>
                    <?php
                    foreach ($sessdata as $sd){
                        echo $sd["nama"]." ".$sd["nim"]."<br><br>";
                    }
                    ?>
                </div>
                <div class=""><br><br><a class="btn not" href="../view/page_kst.php">Kembali</a></div>
            </div>

            <table class="styled">
                <tr>
                    <td>Kode</td>
                    <td><?= $sesspilih["kode"]; ?></td>
                </tr>
                <tr>
                    <td>Hari</td>
                    <td><?= $sesspilih["hari"]; ?></td>
                </tr>
                <tr>
                    <td>Jam</td>
                    <td><?= $sesspilih["jam"]; ?></td>
                </tr>
                <tr>
                    <td>Mata Kuliah</td>
                    <td><?= $sesspilih["matkul"]; ?></td>
                </tr>
                <tr>
                    <td>Dosen</td>
                    <td><?= $sesspilih["dosen"]; ?></td>
                </tr>
            </table>
        </div>
    </div>
</body>

</html>
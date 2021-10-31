<?php
    session_start();
    $sessdata = $_SESSION["data"];
    $sesskst = $_SESSION["kst"];
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
                <div class=""><br><br><a class="btn not" href="../control/sess_logout.php">Logout</a></div>
            </div>

            <table class="styled">
                <tr class="h-color">
                    <td>Kode</td>
                    <td>Hari</td>
                    <td>Jam</td>
                    <td>Matakuliah</td>
                    <td>Dosen</td>
                    <td>Detail</td>
                </tr>
                <?php for ($i = 0; $i < count($sesskst); $i++) { ?>
                <tr>
                    <td><?= $sesskst[$i]["kode"]; ?></td>
                    <td><?= $sesskst[$i]["hari"]; ?></td>
                    <td><?= $sesskst[$i]["jam"]; ?></td>
                    <td><?= $sesskst[$i]["matkul"]; ?></td>
                    <td><?= $sesskst[$i]["dosen"]; ?></td>
                    <td><a href="../control/obj_kst.php?pilih=00<?= $i+1; ?>">Detail</a></td>
                </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</body>

</html>
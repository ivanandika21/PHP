<?php
    include("../model/db.php");
    
    $dtku = new mydb();
    $datasiswa = $dtku->tampilkan_tabel();
    $no = 1;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="con">
            <h2>Pendataan Database</h2>
            <table class="styled">

                <a class="btn blue" href="../view/form_input.php">Input</a>
                <tr class="h-color">
                    <td>No.</td>
                    <td>ID DB</td>
                    <td>NIS</td>
                    <td>Nama Siswa</td>
                    <td>Sunting</td>
                </tr>
                <?php foreach ($datasiswa as $key){ ?>
                <tr>
                    <td><?= $no; ?></td>
                    <td><?= $key["no"]; ?></td>
                    <td><?= $key["nis"]; ?></td>
                    <td><?= $key["nama"]; ?></td>
                    <td>
                        <a class="btn blue" href="../view/form_update.php?id_upd=<?= $key["no"]; ?>">Update</a>
                        <a class="btn red" href="../control/prosesdelete.php?id_del=<?= $key["no"]; ?>">Delete</a>
                    </td>
                    <?php $no++; ?>
                </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</body>

</html>
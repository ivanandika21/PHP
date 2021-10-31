<?php
    include("../model/db.php");
    
    $dtku = new mydb();
    $datasiswa = $dtku->tampilkan_tabel();
    $no = 1;
?>

<table border="1">
    <tr>
        <td>No.</td>
        <td>NIS</td>
        <td>Nama Siswa</td>
    </tr>
    <?php foreach ($datasiswa as $key){ ?>
    <tr>
        <td><?= $no; ?></td>
        <td><?= $key["nis"]; ?></td>
        <td><?= $key["nama"]; ?></td>
        <?php $no++; ?>
    </tr>
    <?php } ?>
</table>
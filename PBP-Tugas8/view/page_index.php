<?php
    include("../model/db.php");
    
    $dtku = new mydb();
    $datasiswa = $dtku->tampilkan_tabel();
    $no = 1;
?>

<table border="1">
    <a href="../view/form_input.php">Input</a>
    <tr>
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
            <a href="../view/form_update.php?id_upd=<?= $key["no"]; ?>">Update</a>
            <a href="../control/prosesdelete.php?id_del=<?= $key["no"]; ?>">Delete</a>
        </td>
        <?php $no++; ?>
    </tr>
    <?php } ?>
</table>
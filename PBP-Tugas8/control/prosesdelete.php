<?php
    include("../model/db.php");

    $dtku = new mydb();
    $delet = $dtku->delete_data($_GET["id_del"]);

    if($delet == true){
        echo "Data berhasil di delete<br>";
        echo "<a href='../view/page_index.php'>Kembali</a>";
    } else {
        echo "Data gagal di delete<br>";
        echo "<a href='../view/page_index.php'>Kembali</a>";
    }
?>
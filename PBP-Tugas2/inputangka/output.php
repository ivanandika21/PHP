<?php
    if (isset($_POST['awal'])) {
        $awal = $_POST['awal'];
    } else {
        $awal = 1;
    }

    $akhir = $_POST["akhir"];

    if ($_POST["submit"] == "For"){
        for ($i = $awal; $i <= $akhir; $i++){
            if ($i % 2 == 0){
                echo "<a style='font-weight: 900; color: red;'>".$i."</a><br>";
            } else {
                echo $i."<br>";
            }
        }
    } else if ($_POST["submit"] == "While"){
        $i = $awal;
        while ($i <= $akhir){
            
            if ($i % 2 != 0){
                echo "<a style='font-weight: 900; color: blue;'>".$i."</a><br>";
            } else {
                echo $i."<br>";
            }
            $i++;
        }
    }
?>
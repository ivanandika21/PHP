<?php
    echo '<form method="post" action="">';
    echo '<input type="number" name="tahun" placeholder="Input tahun">';
    echo '<input type="submit" value="submit">';
    echo '</form>';

    if (isset($_POST["tahun"])){
        $tahun = $_POST["tahun"];
        echo "<p style='color: red;'>";
            if ($tahun % 4 == 0){
                echo "Tahun ".$tahun." adalah tahun Kabisat";
            } else {
                echo "Bukan tahun Kabisat";
            }
        echo "</p>";
    }
?>


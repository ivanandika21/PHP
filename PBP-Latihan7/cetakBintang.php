<?php
    if (isset($_POST["input"])){
        $input = $_POST['input'];
        for ($i = 0; $i < $input; $i++){
            for ($j = 0; $j <= $i; $j++){
                echo "*";
            }
            echo "<br>";
        }
    }
?>
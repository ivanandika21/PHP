<?php
    $mahasiswa = [
        [
            "nim" => "672019171",
            "nama" => "Ivan",
            "ipk" => 4
        ],
        [
            "nim" => "672019701",
            "nama" => "Andika",
            "ipk" => 3.9
        ],
        [
            "nim" => "692019702",
            "nama" => "Surya",
            "ipk" => 3.85
        ],
        [
            "nim" => "682019703",
            "nama" => "Vanvan",
            "ipk" => 4
        ],
        [
            "nim" => "672019704",
            "nama" => "Sursur",
            "ipk" => 3.9
        ]
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tugas5_672019171</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="child-con">
            <div>
                <form action="" method="post">
                    <h2>Data Mahasiswa</h2>
                    <div class="con-input">
                        <input type="text" name="search" autocomplete="off">
                        <input type="radio" name="radio" value="scnim" id="scnim" checked="checked">
                        <label for="scnim">NIM</label>
                        <input type="radio" name="radio" value="scnama" id="scnama">
                        <label for="scnama">Nama</label><br><br>
                        <input type="submit" value="Submit" name="submit" class="btn">
                    </div>
                </form>
                <table>
                    <?php
                    if(isset($_POST["submit"])){
                        $vsearch = $_POST["search"];
                        $vradio = $_POST["radio"];
                        echo "<tr>";
                        echo "<td class='b'>NIM</td>";
                        echo "<td class='b'>Nama Mahasiswa</td>";
                        echo "<td class='b'>IPK</td>";
                        echo "</tr>";
                        if(isset($_POST["submit"])){
                            if(isset($vsearch) && ($vsearch == "")){
                                foreach ($mahasiswa as $mhs){
                                    echo "<tr>";
                                    echo "<td>".$mhs["nim"]."</td>";
                                    echo "<td>".$mhs["nama"]."</td>";
                                    echo "<td>".$mhs["ipk"]."</td>";
                                    echo "</tr>";
                                }
                            } else if($vsearch != "") {
                                if ($vradio == "scnim"){
                                    for ($i = 0; $i < count($mahasiswa); $i++){
                                        if($vsearch == $mahasiswa[$i]["nim"]){
                                            echo "Data Ditemukan";
                                            echo "<tr>";
                                            echo "<td>".$mahasiswa[$i]["nim"]."</td>";
                                            echo "<td>".$mahasiswa[$i]["nama"]."</td>";
                                            echo "<td>".$mahasiswa[$i]["ipk"]."</td>";
                                            echo "</tr>";
                                        } 
                                    }
                                } else if ($vradio == "scnama"){
                                    for ($i = 0; $i < count($mahasiswa); $i++){
                                        if($vsearch == $mahasiswa[$i]["nama"]){
                                            echo "Data Ditemukan";
                                            echo "<tr>";
                                            echo "<td>".$mahasiswa[$i]["nim"]."</td>";
                                            echo "<td>".$mahasiswa[$i]["nama"]."</td>";
                                            echo "<td>".$mahasiswa[$i]["ipk"]."</td>";
                                            echo "</tr>";
                                        } 
                                    }
                                }
                            }
                        }
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
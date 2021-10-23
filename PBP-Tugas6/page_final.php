<?php    
    session_start();
    $nama = $_SESSION["sessuser"];
    $arrPilihan = $_SESSION["sesspilih"];
    $arrMatkul = $_SESSION["sessarrMatkul"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tugas6_672019171</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="con">
        <div class="flex">
                <div>
                    <h2>Selamat datang, <?= $nama ?>.</h2>
                    <p>Mata kuliah yang dipilih:</p>
                </div>
                <div>
                    <br><br>
                    <a class="btn not" href="sess_logout.php">Logout</a>
                </div>
            </div>
            <div class="tabel">
                <form action="sess_logout.php" method="post">
                    <table class="styled">
                        <tr class="h-color">
                            <td>Kode</td>
                            <td>Mata Kuliah</td>
                        </tr>
                        <?php 
                          for ($j = 0; $j < count($arrPilihan); $j++){
                            for ($i = 0; $i < count($arrMatkul); $i++){
                       if ($arrPilihan[$j] == $arrMatkul[$i]["kode"]){
                           echo "<tr>";
                           echo "<td>".$arrMatkul[$i]["kode"]."</td>";
                           echo "<td>".$arrMatkul[$i]["matkul"]."</td>";
                           echo "</tr>";
                        }
                            }
                          }
                        ?>
                    </table>
                    <input type="submit" class="btn" value="Done">
                </form>
            </div>
        </div>
    </div>
</body>
</html>

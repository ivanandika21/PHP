<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tugas4_672019171</title>
    <link rel="stylesheet" href="style.css">
</head>
    <body>
        <div class="container">
            <div class="daftar-con">
                <form method="post" action="">
                <h2>Daftar Barang</h2><br>
                    <table>
                        <tr class="styled">
                            <th>No</th>
                            <th>Nama Barang</th>
                            <th>Harga</th>
                            <th>Keranjang</th>
                        </tr>
                        <tr>
                            <td>1.</td>
                            <td>Keyboard</td>
                            <td>80.000</td>
                            <td class="tengah"><input type="checkbox" name="item[]" value="Keyboard"></td>
                        </tr>
                        <tr>
                            <td>2.</td>
                            <td>Mouse</td>
                            <td>100.000</td>
                            <td class="tengah"><input type="checkbox" name="item[]" value="Mouse"></td>
                        </tr>
                        <tr>
                            <td>3.</td>
                            <td>Monitor</td>
                            <td>600.000</td>
                            <td class="tengah"><input type="checkbox" name="item[]" value="Monitor"></td>
                        </tr>
                        <tr>
                            <td>4.</td>
                            <td>Printer</td>
                            <td>1.000.000</td>
                            <td class="tengah"><input type="checkbox" name="item[]" value="Printer"></td>
                        </tr>
                        <tr>
                            <td>5.</td>
                            <td>Speaker</td>
                            <td>300.000</td>
                            <td class="tengah"><input type="checkbox" name="item[]" value="Speaker"></td>
                        </tr>
                    </table>
                    <div class="submit-con">
                        <input type="submit" value="Submit" class="btn"></input>
                        <button name="clear" class="btn">Clear</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="container">
            <?php
                if(isset($_POST["item"])){
                    $tampung = $_POST["item"];
                    $harga = 0;
                    $hargaakhir = 0;
                    
                    echo "<div class='hasil-con'>";
                    echo "<table>";
                    echo "<tr class='styled'>";
                    echo "<th>No</th>";
                    echo "<th>Nama Barang</th>";
                    echo "<th>Harga</th>";
                    echo "</tr>";
                    for ($i = 1; $i <= count($tampung); $i++){
                        if ($tampung[$i-1] == "Keyboard"){
                            $harga = 80000;
                            echo "<tr>";
                            echo "<td>".$i."</td>";
                            echo "<td>".$tampung[$i-1]."</td>";
                            echo "<td>".$harga."</td>";
                            echo "</tr>";
                        } else if ($tampung[$i-1] == "Mouse"){
                            $harga = 100000;
                            echo "<tr>";
                            echo "<td>".$i."</td>";
                            echo "<td>".$tampung[$i-1]."</td>";
                            echo "<td>".$harga."</td>";
                            echo "</tr>";
                        } else if ($tampung[$i-1] == "Monitor"){
                            $harga = 600000;
                            echo "<tr>";
                            echo "<td>".$i."</td>";
                            echo "<td>".$tampung[$i-1]."</td>";
                            echo "<td>".$harga."</td>";
                            echo "</tr>";
                        } else if ($tampung[$i-1] == "Printer"){
                            $harga = 1000000;
                            echo "<tr>";
                            echo "<td>".$i."</td>";
                            echo "<td>".$tampung[$i-1]."</td>";
                            echo "<td>".$harga."</td>";
                            echo "</tr>";
                        } else if ($tampung[$i-1] == "Speaker"){
                            $harga = 300000;
                            echo "<tr>";
                            echo "<td>".$i."</td>";
                            echo "<td>".$tampung[$i-1]."</td>";
                            echo "<td>".$harga."</td>";
                            echo "</tr>";
                        }
                        $hargaakhir += $harga;
                    }
                }
                echo "<tr>";
                    if(isset($hargaakhir)){
                    echo "<td colspan='2'>Total</td>";
                    echo "<td>".$hargaakhir."</td>";
                    }
                echo "</tr>";
                echo "</table>";
                echo "</div>";
            ?>
        </div>

        <?php
            if(isset($_POST["clear"])){
                header("Refresh:1");
            }
        ?>  
    </body>
</html>
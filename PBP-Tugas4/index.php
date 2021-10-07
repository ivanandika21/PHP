<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
    <body>
        <div class="container">
            <div class="rounded">
                <form method="post" action="">
                    <table class="styled">
                            <tr>
                                <th>No</th>
                                <th>Nama Barang</th>
                                <th>Harga</th>
                                <th>Keranjang</th>
                            </tr>
                            <tr>
                                <td>1.</td>
                                <td>Keyboard</td>
                                <td>80.000</td>
                                <td><input type="checkbox" name="item[]" value="Keyboard"></td>
                            </tr>
                            <tr>
                                <td>2.</td>
                                <td>Mouse</td>
                                <td>100.000</td>
                                <td><input type="checkbox" name="item[]" value="Mouse"></td>
                            </tr>
                            <tr>
                                <td>3.</td>
                                <td>Monitor</td>
                                <td>600.000</td>
                                <td><input type="checkbox" name="item[]" value="Monitor"></td>
                            </tr>
                            <tr>
                                <td>4.</td>
                                <td>Printer</td>
                                <td>1.000.000</td>
                                <td><input type="checkbox" name="item[]" value="Printer"></td>
                            </tr>
                            <tr>
                                <td>5.</td>
                                <td>Speaker</td>
                                <td>300.000</td>
                                <td><input type="checkbox" name="item[]" value="Speaker"></td>
                            </tr>
                        </table>
                        <div class="submit-con">
                            <input type="submit" value="Submit"></input>
                            <button name="clrBtn">Clear</button>
                        </div>
                </form>
            </div>
        </div>           

        <div class="hasil">
            <?php
                if(isset($_POST["item"])){
                    $tampung = $_POST["item"];
                    $harga = 0;
                    $hargaakhir = 0;
                    echo "<table>";
                    echo "<tr>";
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
                    echo "<td></td>";
                    echo "<td>Total</td>";
                    echo "<td>".$hargaakhir."</td>";
                    }
                echo "</tr>";
                echo "</table>";
            ?>
            <?php
                if(isset($_POST["clrBtn"])){
                    header("Refresh:1");
                }
            ?>
        </div>
    </body>
</html>
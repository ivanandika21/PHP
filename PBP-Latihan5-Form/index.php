<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous" />
        <link rel="stylesheet" href="style.css" />
        <title>Latihan 5 - Form</title>
    </head>
    <body>
        <div class="container py-5">
            <form method="post" action="halaman2.php">
                <table class="table table-bordered">
                        <tr>
                            <h3 class="py-2">Form Pendaftaran</h3>
                        </tr>
                        <tr>
                            <th scope="row">Nama</th>
                            <td><input class="w-100" type="text" name="nama" class="wi"></td>
                        </tr>
                        <tr>
                            <th scope="row">Alamat</th>
                            <td><input class="w-100" type="text" name="alamat"></td>
                        </tr>
                        <tr>
                            <th scope="row">Jenis Kelamin</th>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" value="Perempuan" type="radio" name="jk" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Perempuan
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" value="Laki-laki" type="radio" name="jk" id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        Laki-laki
                                    </label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Pekerjaan</th>
                            <td>
                                <select name="pekerjaan" id="#" class="form-select" >
                                    <option value="" selected disabled hidden>Pilih salah satu</option>    
                                    <option value="Pelajar">Pelajar</option>
                                    <option value="Mahasiswa">Mahasiswa</option>
                                    <option value="Pegawai">Pegawai</option>
                                    <option value="Wiraswasta">Wiraswasta</option>
                                </select>
                            </td>
                        </tr>
                </table>
                <input type="submit" class="btn btn-primary" value="Gass Submit"></input>
            </form>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    </body>
</html>

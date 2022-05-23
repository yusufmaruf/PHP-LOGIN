<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM KONTAK</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <form action="simpan_kontak.php" method="post">

                <h2 class="alert alert-primary text-center mt-3">Simpan Kontak</h2>

                <!-- nama -->
                <div class="form-group row">
                    <div class="col-md-3">
                        <label for="nama" class="col-form-label "> Nama</label>
                    </div>
                    <div class="col-md-9">

                    <input type="text" name="nama" id="nama" 
                    class="form-control " 
                    maxlength="40"  placeholder="Masukan nama Anda">
                    </div>
                </div><br>

                <!-- jenis kelamin  -->
                <div class="form-group row">
                    <div class="col-md-3">
                        <label for="jeniskelamin" class="col-form-label"> Jenis Pendaftaran</label>
                    </div>
                    <div class="col-md-9">
                        <div class="form-check-inline">
                            <input type="radio" name="jkelamin" id="jkelamin" class="form-check-input" value="Laki-Laki">
                            <label for="jkelamin">Laki-Laki</label>
                        </div>
                        <div class="form-check-inline">
                            <input type="radio" name="jkelamin" id="jkelamin" class="form-check-input" value="Perempuan">
                            <label for="jkelamin">Perempuan</label>
                        </div>
                    </div>
                </div><br>

                <!-- email -->
                <div class="form-group row">
                    <div class="col-md-3">
                        <label for="mail" class="col-form-label "> E-mail</label>
                    </div>
                    <div class="col-md-9">

                    <input type="text" name="mail" id="mail" 
                    class="form-control " 
                    maxlength="40"  placeholder="Masukan e-mail Anda">
                    </div>
                </div><br>
                <!-- alamat -->
                <div class="form-group row">
                    <div class="col-md-3">
                        <label for="alamat" class="col-form-label "> Alamat</label>
                    </div>
                    <div class="col-md-9">

                    <input type="text" name="alamat" id="alamat" 
                    class="form-control " 
                    maxlength="40"  placeholder="Masukan Alamat Anda">
                    </div>
                </div><br>
                 <!-- kota -->
                 <div class="form-group row">
                    <div class="col-md-3">
                        <label for="kota" class="col-form-label "> Kota</label>
                    </div>
                    <div class="col-md-9">

                    <input type="text" name="kota" id="kota" 
                    class="form-control " 
                    maxlength="40"  placeholder="Masukan Kota Anda">
                    </div>
                </div><br>
                 <!-- pesan -->
                 <div class="form-group row">
                    <div class="col-md-3">
                        <label for="pesan" class="col-form-label "> Pesan </label>
                    </div>
                    <div class="col-md-9">
                        <textarea name="pesan" id="pesan" cols="30" rows="5" class="form-control" placeholder="masukan pesan"></textarea>
                    </div>
                </div><br>
                <!-- tombol -->
                <div class="form-group row ">
                    <button class="btn btn-primary" type="submit">Simpan</button>
                </div>      
                

            </form>
        </div>
    </div>
    
</body>
</html>
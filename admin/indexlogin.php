<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM KONTAK</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style type="text/css">
        .warning{
            color: red;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <form action="login.php" method="post">

                <h2 class="alert alert-primary text-center mt-3">Simpan Kontak</h2>

                <!-- nama -->
                <div class="form-group row">
                    <div class="col-md-3">
                        <label for="nama" class="col-form-label "> Nama</label>
                    </div>
                    <div class="col-md-9">

                    <input type="text" name="username" id="username" 
                    class="form-control " 
                    maxlength="40"  placeholder="Masukan username Anda" required>
                    </div>
                </div><br>
                <!-- email -->
                <div class="form-group row">
                    <div class="col-md-3">
                        <label for="pw" class="col-form-label "> Password </label>
                    </div>
                    <div class="col-md-9">

                    <input type="password" name="pw" id="pw" 
                    class="form-control " 
                    maxlength="40"  placeholder="Masukan password Anda" required>
                    </div>
                </div><br>
                <!-- tombol -->
                <div class="form-group row ">
                    <button class="btn btn-primary" type="submit">Login</button>
                </div>
                <?php if(isset($_GET['pesan'])) { ?>
                    <div class=".warning">
                        <label><?php echo $_GET['pesan']; ?></label> 
                    </div>
                <?php } ?>      
                

            </form>
        </div>
    </div>
    
</body>
</html>
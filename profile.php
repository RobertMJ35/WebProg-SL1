<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Pengelola Keuangan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        body{
            margin: 0%;
            width: 100%;
            height: 100%;
            /* background-color: #CAD1FF; */
            background-color: #F2E7FE;
        }
    </style>
</head>
<body>
    <div class="nav nav-pills justify-content-end" style="background-color: #3700B3;
                                                            /* background-color: #F9FFCA; */
                                                            padding: 5pt; align-items: center; color: white">
        <div class="nav-item" style="margin-right: 58%">
            <a class="nav-link text-reset fs-4" style="font-weight:500">Aplikasi Pengelola Keuangan</a>
        </div>
        <div class="nav-item" style="align-items: center">
            <a class="nav-link text-reset fs-5" href="home.php" style="font-weight:500">Home</a>
        </div>
        <div class="nav-item">
            <a class="nav-link active fs-5" aria-current="page" href="profile.php" style="font-weight:500; background-color: #F2E7FE; color: black">Profile</a>
        </div>
        <div class="nav-item" style="align-items: center">
            <a class="nav-link text-reset fs-5" href="logOut.php" style="font-weight:500">Logout</a>
        </div>
    </div>
    <div class="container-fluid">
        <h2 class="text-center" style="margin: 3% 0% 5% 0%; font-weight: 700">Profil Pribadi</h2>
        <div class="row">
            <div class="col" style="margin-left: 4%">
                <div class="row" style="margin-bottom: 25pt; align-items: center">
                    <div class="col-4">
                        <label style="font-weight: 500">Nama Depan</label>    
                    </div>
                    <div class="col-8" style="font-size: 16pt; font-weight: 700">
                        <?php echo $_SESSION["namaDepan"]; ?>
                    </div>
                </div>
                <div class="row" style="margin-bottom: 25pt; align-items: center">
                    <div class="col-4">
                        <label style="font-weight: 500">Tempat Lahir</label>    
                    </div>
                    <div class="col-8" style="font-size: 16pt; font-weight: 700">
                        <?php echo $_SESSION["tempatLahir"]; ?>
                    </div>
                </div>
                <div class="row" style="margin-bottom: 25pt; align-items: center">
                    <div class="col-4">
                        <label style="font-weight: 500">Warga Negara</label>    
                    </div>
                    <div class="col-8" style="font-size: 16pt; font-weight: 700">
                        <?php echo $_SESSION["wargaNegara"]; ?>
                    </div>
                </div>
                <div class="row" style="margin-bottom: 25pt; align-items: center">
                    <div class="col-4">
                        <label style="font-weight: 500">Alamat</label>    
                    </div>
                    <div class="col-8" style="font-size: 16pt; font-weight: 700">
                        <?php echo $_SESSION["alamat"]; ?>
                    </div>
                </div>
            </div>
            
            <div class="col" style="margin: 0% 2% 0% 2%">
                <div class="row" style="margin-bottom: 25pt; align-items: center">
                    <div class="col-4">
                        <label style="font-weight: 500">Nama Tengah</label>    
                    </div>
                    <div class="col-8" style="font-size: 16pt; font-weight: 700">
                        <?php echo $_SESSION["namaTengah"]; ?>
                    </div>
                </div>
                <div class="row" style="margin-bottom: 25pt; align-items: center">
                    <div class="col-4">
                        <label style="font-weight: 500">Tgl Lahir</label>    
                    </div>
                    <div class="col-8" style="font-size: 16pt; font-weight: 700">
                        <?php echo $_SESSION["tglLahir"]; ?>
                    </div>
                </div>
                <div class="row" style="margin-bottom: 25pt; align-items: center">
                    <div class="col-4">
                        <label style="font-weight: 500">Email</label>    
                    </div>
                    <div class="col-8" style="font-size: 16pt; font-weight: 700">
                        <?php echo $_SESSION["email"]; ?>
                    </div>
                </div>
                <div class="row" style="margin-bottom: 90pt; align-items: center">
                    <div class="col-4">
                        <label style="font-weight: 500">Kode Pos</label>    
                    </div>
                    <div class="col-8" style="font-size: 16pt; font-weight: 700">
                        <?php echo $_SESSION["kodePos"]; ?>
                    </div>
                </div>
            </div>

            <div class="col" style="margin-right: 2%">
                <div class="row" style="margin-bottom: 25pt; align-items: center">
                    <div class="col-4">
                        <label style="font-weight: 500">Nama Belakang</label>    
                    </div>
                    <div class="col-8" style="font-size: 16pt; font-weight: 700">
                        <?php echo $_SESSION["namaBelakang"]; ?>
                    </div>
                </div>
                <div class="row" style="margin-bottom: 25pt; align-items: center">
                    <div class="col-4">
                        <label style="font-weight: 500">NIK</label> 
                    </div>
                    <div class="col-8" style="font-size: 16pt; font-weight: 700">
                        <?php echo $_SESSION["nik"]; ?>
                    </div>
                </div>
                <div class="row" style="margin-bottom: 25pt; align-items: center">
                    <div class="col-4">
                        <label style="font-weight: 500">No HP</label>    
                    </div>
                    <div class="col-8" style="font-size: 16pt; font-weight: 700">
                        <?php echo $_SESSION["noHP"]; ?>
                    </div>
                </div>
                <div class="row" style="margin-bottom: 90pt; align-items: center">
                    <div class="col-4">
                        <label style="font-weight: 500">Foto Profil</label>
                    </div>
                    <div class="col-8">
                        <img src="<?php echo "fotoProfil/" . $_SESSION["fotoProfil"] ?>" alt="" style="width: 60%; height: auto">
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
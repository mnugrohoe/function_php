<?php // Luas Segitiga
function luasSegitiga($alas, $tinggi) {
    echo round($alas * $tinggi / 2, 2);
}if(!empty($_POST['alasS3']) && !empty($_POST['tinggiS3'])){$alasS3 = $_POST['alasS3'];$tinggiS3 = $_POST['tinggiS3'];}

// Luas Persegi
function luasPersegi($sisi) {
    echo round(($sisi ** 2), 2);
}if(!empty($_POST['sisiPersegi'])){$sisiPersegi = $_POST['sisiPersegi'];}

// Luas persegi panjang
function luasPersegiPanjang($panjang, $lebar) {
    echo round(($panjang * $lebar), 2);
}if(!empty($_POST['panjangPP']) && !empty($_POST['lebarPP'])){$panjangPP = $_POST['panjangPP'];$lebarPP = $_POST['lebarPP'];}

// Luas lingkaran
function luasLingkaran($radius) {
    echo round(3.14 * ($radius ** 2), 2);
}if(!empty($_POST['rLingkaran'])){$rLingkaran = $_POST['rLingkaran'];}

// Luas layang layang
function luasLayang($d1, $d2) {
    echo round($d1 * $d2 / 2, 2);
}if(!empty($_POST['d1']) && !empty($_POST['d2'])){$d1 = $_POST['d1'];$d2 = $_POST['d2'];}

// Volume Balok
function volumeBalok($panjang, $lebar, $tinggi) {
    echo round($panjang * $lebar * $tinggi, 2);
} if(!empty($_POST['panjangBalok']) && !empty($_POST['lebarBalok']) && !empty($_POST['tinggiBalok'])){$panjangBalok = $_POST['panjangBalok'];$lebarBalok = $_POST['lebarBalok'];$tinggiBalok = $_POST['tinggiBalok'];}
// Volume Kubus
function volumeKubus($sisi) {
    echo round($sisi ** 3, 2);
}if(!empty($_POST['sisiKubus'])){$sisiKubus = $_POST['sisiKubus'];}

// Volume Tabung
function volumeTabung($radius, $tinggi) {
    echo round((3.14 * ($radius ** 2) * $tinggi), 2);
}if(!empty($_POST['rTabung']) && !empty($_POST['tTabung'])){$rTabung = $_POST['rTabung'];$tTabung = $_POST['tTabung'];}
?>
<html lang="en">

<head>
    <title>Tugas Fungsi PHP</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">
    <!-- css -->
    <style>
        body {
            background-color: #ddd;
        }
        
        .card-img-top {
            height: 100px;
            margin-top: 15px;
        }
        
        .col {
            max-width: 350px;
            margin: 10px 5px;
        }
        
        .card {
            min-width: 400px;
            margin: 10px;
            border-radius: 10px;
        }
        
        .content {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding-top: 3.5rem;
        }
        
        .card-body {
            /* height: 300px; */
            display: flex;
            justify-content: center;
            flex-direction: column;
            /* border: 1px solid red; */
        }
        
        .input-group-text {
            font-family: "Comic Sans MS", "Comic Sans", cursive;
        }
        
        .footer {
            background-color: #F8F9FA;
            margin-top: 10px;
            padding: 5px;
            text-align: center;
        }
    </style>
    <title>Tugas Function PHP</title>
</head>

<body>

    <head>
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Kalkulator Luas dan Volume</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#persegi">Persegi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#persegi_panjang"> Persegi Panjang</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#lingkaran">Lingkaran</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#layang">Layang Layang</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#segitiga">Segitiga</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#kubus">Kubus</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#tabung">Tabung</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#balok">Balok</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </head>
    <main>
        <div class="container-fluid content">
            <!-- <div class="row row-cols-1 row-cols-md-3 g-0 justify-content-evenly"> -->
            <div class="card-group">
                <!-- <div class="col"> -->
                <div class="card" id="persegi"><img src="img/persegi.svg" class="card-img-top" alt="persegi">
                    <div class="card-body">
                        <h5 class="card-title">Persegi</h5>
                        <form action="" class="mt-auto" method="POST">
                            <div class="input-group mb-3"><span class="input-group-text">s</span><input type="number" step="any" min="0" class="form-control" placeholder="<?php if(!empty($sisiPersegi)){echo $sisiPersegi;}?>" name="sisiPersegi"></div><button type="submit" class="btn btn-primary">Hitung</button></form>
                        <?php if(!empty($sisiPersegi)){
                            echo "<h6>Luas Persegi = ",luasPersegi($sisiPersegi),"</h6>";
                            }?>
                    </div>
                </div>
                <!-- </div> -->
                <!-- <div class="col"> -->
                <div class="card" id="persegi_panjang"><img src="img/persegi_panjang.svg" class="card-img-top" alt="persegi panjang">
                    <div class="card-body">
                        <h5 class="card-title">Persegi Panjang</h5>
                        <form action="" class="mt-auto" method="POST">
                            <div class="input-group mb-3">
                                <span class="input-group-text">p</span>
                                <input type="number" step="any" min="0" class="form-control" placeholder="<?php if(!empty($panjangPP)){echo $panjangPP;}?>" name="panjangPP" required>
                                <span class="input-group-text">l</span>
                                <input type="number" step="any" min="0" class="form-control" placeholder="<?php if(!empty($lebarPP)){echo $lebarPP;}?>" name="lebarPP" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Hitung</button></form>
                        <?php if(!empty($_POST['panjangPP']) && !empty($_POST['lebarPP'])){
                            echo "<h6>Luas Persegi Panjang = ",luasPersegiPanjang($panjangPP,$lebarPP),"</h6>";
                            }?>
                    </div>
                </div>
                <!-- </div> -->
                <!-- <div class="col"> -->
                <div class="card" id="lingkaran"><img src="img/lingkaran.svg" class="card-img-top" alt="lingkaran">
                    <div class="card-body">
                        <h5 class="card-title">Lingkaran</h5>
                        <form action="" class="mt-auto" method="POST">
                            <div class="input-group mb-3"><span class="input-group-text">r</span><input type="number" step="any" min="0" class="form-control" placeholder="<?php if(!empty($rLingkaran)){echo $rLingkaran;}?>" name="rLingkaran"></div><button type="submit" class="btn btn-primary">Hitung</button></form>
                        <?php if(!empty($_POST['rLingkaran'])){
                            echo "<h6>Luas Lingkaran = ",luasLingkaran($rLingkaran),"</h6>";
                            }?>
                    </div>
                </div>
            </div>
            <div class="card-group">
                <!-- </div> -->
                <!-- <div class="col"> -->
                <div class="card" id="layang"><img src="img/layang.svg" class="card-img-top" alt="layang layang">
                    <div class="card-body">
                        <h5 class="card-title">Layang layang</h5>
                        <form action="" class="mt-auto" method="POST">
                            <div class="input-group mb-3">
                                <span class="input-group-text">d1</span><input type="number" step="any" min="0" class="form-control" placeholder="<?php if(!empty($d1)){echo $d1;}?>" name="d1" required>
                                <span class="input-group-text">d2</span><input type="number" step="any" min="0" class="form-control" placeholder="<?php if(!empty($d2)){echo $d2;}?>" name="d2" required></div>
                            <button type="submit" class="btn btn-primary">Hitung</button></form>
                        <?php if(!empty($_POST['d1']) && !empty($_POST['d2'])){
                            echo "<h6>Luas Layang layang = ",luasLayang($d1,$d2),"</h6>";
                            }?>
                    </div>
                </div>
                <!-- </div> -->
                <!-- <div class="col"> -->
                <div class="card" id="segitiga"><img src="img/segitiga.svg" class="card-img-top" alt="segitiga">
                    <div class="card-body">
                        <h5 class="card-title">Segitiga</h5>
                        <form action="" class="mt-auto" method="POST">
                            <div class="input-group mb-3">
                                <span class="input-group-text">a</span><input type="number" step="any" min="0" class="form-control" placeholder="<?php if(!empty($alasS3)){echo $alasS3;}?>" name="alasS3" required>
                                <span class="input-group-text">t</span><input type="number" step="any" min="0" class="form-control" placeholder="<?php if(!empty($tinggiS3)){echo $tinggiS3;}?>" name="tinggiS3" required></div>
                            <button type="submit" class="btn btn-primary">Hitung</button></form>
                        <?php if(!empty($_POST['alasS3']) && !empty($_POST['tinggiS3'])){
                            echo "<h6>Luas Segitiga = ",luasSegitiga($alasS3,$tinggiS3),"</h6>";
                            }?>
                    </div>
                </div>
                <!-- </div> -->
                <!-- <div class="col"> -->
                <div class="card" id="kubus"><img src="img/kubus.svg" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Kubus</h5>
                        <form action="" class="mt-auto" method="POST">
                            <div class="input-group mb-3"><span class="input-group-text">s</span><input type="number" step="any" min="0" class="form-control" placeholder="<?php if(!empty($sisiKubus)){echo $sisiKubus;}?>" name="sisiKubus"></div><button type="submit" class="btn btn-primary">Hitung</button></form>
                        <?php if(!empty($sisiKubus)){
                            echo "<h6>Volume Kubus = ",volumeKubus($sisiKubus),"</h6>";
                            }?>
                    </div>
                </div>
            </div>
            <div class="card-group">
                <!-- </div> -->
                <!-- <div class="col"> -->
                <div class="card" id="tabung"><img src="img/tabung.svg" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Tabung</h5>
                        <form action="" class="mt-auto" method="POST">
                            <div class="input-group mb-3">
                                <span class="input-group-text">r</span><input type="number" step="any" min="0" class="form-control" placeholder="<?php if(!empty($rTabung)){echo $rTabung;}?>" name="rTabung" required>
                                <span class="input-group-text">t</span><input type="number" step="any" min="0" class="form-control" placeholder="<?php if(!empty($tTabung)){echo $tTabung;}?>" name="tTabung" required></div>
                            <button type="submit" class="btn btn-primary">Hitung</button></form>
                        <?php if(!empty($_POST['rTabung']) && !empty($_POST['tTabung'])){
                            echo "<h6>Volume Tabung = ",volumeTabung($rTabung,$tTabung),"</h6>";
                            }?>
                    </div>
                </div>
                <!-- </div> -->
                <!-- <div class="col"> -->
                <div class="card" id="balok"><img src="img/balok.svg" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Persegi</h5>
                        <form action="" class="mt-auto" method="POST">
                            <div class="input-group mb-3">
                                <span class="input-group-text">p</span><input type="number" step="any" min="0" class="form-control" placeholder="<?php if(!empty($panjangBalok)){echo $panjangBalok;}?>" name="panjangBalok" required>
                                <span class="input-group-text">l</span><input type="number" step="any" min="0" class="form-control" placeholder="<?php if(!empty($lebarBalok)){echo $lebarBalok;}?>" name="lebarBalok" required>
                                <span class="input-group-text">t</span><input type="number" step="any" min="0" class="form-control" placeholder="<?php if(!empty($tinggiBalok)){echo $tinggiBalok;}?>" name="tinggiBalok" required></div>
                            <button type="submit" class="btn btn-primary">Hitung</button></form>
                        <?php if(!empty($_POST['panjangBalok']) && !empty($_POST['lebarBalok']) && !empty($_POST['tinggiBalok'])){
                            echo "<h6>Volume Balok = ",volumeBalok($panjangBalok,$lebarBalok,$tinggiBalok),"</h6>";
                            }?>
                    </div>
                </div>
                <!-- </div> -->
            </div>
        </div>
    </main>
    <footer class="footer">
        <div>Eko Saputro ©2022</div>
    </footer>
</body>

</html>
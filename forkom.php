<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum Komunikasi Mahasiswa Manajemen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .navbar-custom {
            background-color: #003366;
            justify-content: center;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
        }
        .navbar-custom .nav-link {
            color: #000;
        } 
        .navbar-custom .nav-link:hover {
            color: #ffffff;
        }
        .navbar-wrapper {
            background-color: #ffd700;
            display: flex;
            justify-content: center;
            padding: 0.5rem 1rem;
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
        }

        .navbar-spacer {
            background-color: #005BB5;
            height: 5px;
        }
        .container-garis {
          margin: 110px 100px 200px 100px;
        }
        .navbar-custom .navbar-brand img {
            height: 47px;
            border: 1px solid #ffd700; /* Tambahkan border sesuai kebutuhan */
            border-radius: 50%; /* Membuat gambar menjadi lingkaran */
            padding: 3px; /* Jarak antara border dan gambar */
        }
        .form-container {
            padding: 20px;
            border: 1px solid #000;
            border-radius: 5px;
        }
        .form-title {
            text-align: center;
            margin-bottom: 20px;
        }
        .submit-btn {
            display: flex;
            justify-content: center;
        }
        .garis-tengah {
            margin: auto;
            margin-bottom: 15px;
            width: 85vw;
            background-color: #005BB5;
            height: 5px;
        }
        .garis-tengah-2 {
            margin: auto;
            margin-top: 120px;
            width: 85vw;
            background-color: #000000;
            height: 1px;
        }
        .garis-tengah-3 {
            margin: auto;
            margin-top: 200px;
            margin-bottom: 15px;
            width: 85vw;
            background-color: #005BB5;
            height: 5px;
        }
        .div-pertama {
            width: 170px;
        }
        .div-kedua {
            width: 90px;
        }
        .div-ketiga, .div-keempat, .div-kelima {
            width: 25px;
        }
        .div-ketiga, .div-keempat, .div-kelima {
            display: flex;
            align-items: center;
            margin-left: 100px;
            padding-bottom: 7px;
        }
        .div-tujuh {
            margin-top: 15px;
        }
        .teks-footer {
            margin-left: 5px;
        }
        
        a:hover {
            color: #69f3ff; /* Warna link ketika mouse berada di atasnya */
        }
        a:active {
            color: #147ab9; /* Warna link ketika sedang diklik */
        }
        .last-footer {
            padding-top: 50px;
            padding-left: 95px;
            padding-bottom: 15px;
        }
        .navbar-brand {
            padding-left: 60px;
        }
        .background-image img {
            width: 100%;
            height: auto;
            display: block;
            margin: auto;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="logo/himaje.jpg" alt="" height="45" class="rounded-circle">
        </a>
        <div class="navbar-wrapper">
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="home.php">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="home.php">DEPARTEMEN</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="forkom.php">FORKOM</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="home.php">ARTIKEL</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="home.php">INFORMASI MAHASISWA</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="navbar-spacer"></div>
</div>

<div class="container-garis">
    <div class="form-container">
        <h2 class="form-title">Forum Komunikasi Mahasiswa Manajemen</h2>


        <main>
        <form action="submit_comment.php" method="post">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama:</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="masukkan nama anda" required>
            </div>
            <div class="mb-3">
                <label for="prodi" class="form-label">Prodi:</label>
                <input type="text" class="form-control" id="prodi" name="prodi" placeholder="masukkan prodi anda" required>
            </div>
            <div class="mb-3">
                <label for="kritikSaran" class="form-label">Kritik dan Saran:</label>
                <textarea class="form-control" id="kritik" name="kritik" rows="5" placeholder="masukkan kritik dan saran" required></textarea>
            </div>
            <div class="submit-btn">
                <button type="submit" class="btn btn-success" name="submit">kirim <i class="bi bi-send"></i></button>
            </div>
        </form>
    </div>
</div>
    </main>


<div class="garis-tengah"></div>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="mb-2 div-pertama">
                <img src="logo/uaa.png" class="img-fluid" alt="Gambar Persegi Panjang">
            </div>
            <div>
                <span>Universitas Alma Ata Yogyakarta</span><br>
                <small>Jl. Brawijaya No.99, Jadan, Tamantirto,
                    Kec. Kasihan, Kabupaten Bantul
                    Daerah Istimewa Yogyakarta 55183</small>
            </div>
        </div>
        <div class="col-md-4">
            <div class="d-flex">
                <div class="me-2">
                    <img src="logo/logo himaje uaa.png" class="div-kedua img-fluid" alt="Gambar Persegi Kecil">
                </div>
                <div>
                <small class="centered-text div-kedua-kedua">Himpunan Mahasiswa Prodi Manajemen
                    Universitas Alma Ata Yogyakarta</small>
                </div>
            </div>
        </div>
        <div class="col-md-4 div-tujuh" >
            <div class="mb-2 div-ketiga">
                <img src="logo/instagram.png" class="img-fluid float-start" alt="Gambar 1">
                <small class="teks-footer"> <a href="https://www.instagram.com/himaje_almaata?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank" >@himaje_almaata</a></small>
            </div>
            <div class="mb-2 div-keempat">
                <img src="logo/tiktok.png" class="img-fluid float-start" alt="Gambar 2">
                <small class="teks-footer"> <a href="https://www.tiktok.com/@himajeuaa?_t=8nPz945wX7S&_r=1" target="_blank">himajeuaa</a></small>
            </div>
            <div class="mb-2 div-kelima">
                <img src="logo/gmail.png" class="img-fluid float-start" alt="Gambar 3">
                <small class="teks-footer"> <a href="mailto:almaata@himaje.gmail.com" target="_blank">almaata@himaje.gmail.com</a></small>
            </div>
        </div>
    </div>
</div>
<div class="garis-tengah-2"></div>
<div>
<div class="garis-tengah-3"></div>
<div><small class="last-footer">© himaje uaa | kabinet mahalayati 2024/2025</small></div>
</div>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>

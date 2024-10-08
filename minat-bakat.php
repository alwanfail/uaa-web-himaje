<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Minat, Bakat, dan Olahraga HIMAJE</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* CSS yang sudah diperbarui */
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
    .navbar-custom .navbar-brand img {
      height: 47px;
      border: 1px solid #ffd700;
      border-radius: 50%;
      padding: 3px;
    }
    .navbar-brand {
      padding-left: 60px;
    }
    .title {
      background-color: #005BB5;
      color: white;
      text-align: center;
      padding: 3px 0;
      margin-bottom: 20px;
      margin-top: 100px;
    }
    .subtitle {
      text-align: center;
      margin-bottom: 30px;
    }





    .profile-container {
      display: flex;
      align-items: center;
      margin-bottom: 20px;
    }
    .profile-img {
      
      width: 220px;
      height: 250px;
      margin-right: 20px;
      border: 2px solid #FFD700;
      border-radius: 20px;
    }
    .profile-info {
      text-align: left;
    }
    .profile-name {
      font-weight: 500;
    }
    .profile-role {
      font-weight: 600;
    }
    .personal-card {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 50px;
    }
    .garis-tengah-10 {
      width: 1px;
      height: 200px; /* Sesuaikan dengan tinggi kartu personal */
      background-color: #005BB5;
      margin: 0 20px;
    }
    .container-personal {
      width: 85vw;
      margin: 0 auto;
    }






    .garis-tengah {
      margin: auto;
      margin-top: 150px;
      margin-bottom: 15px;
      width: 85vw;
      background-color: #005BB5;
      height: 5px;
    }
    .container {
      margin: 0 auto;
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
    .last-footer {
      padding-top: 50px;
      padding-left: 95px;
      padding-bottom: 15px;
    }
    .div-pertama {
      width: 170px;
    }
    .div-kedua {
      width: 90px;
    }
    .div-tujuh {
      margin-top: 15px;
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
.teks-yo {
  margin-bottom: 70px;
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
                        <a class="nav-link" href="home.html">ARTIKEL</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="home.html">INFORMASI MAHASISWA</a>
                    </li>
                </ul>
            </div>
        </div>
  </div>
</nav>

<div class="title">
  <h2>MINAT, BAKAT, DAN OLAHRAGA</h2>
</div>

<div class="container">
  <div class="subtitle">
    <p class="teks-yo"> Sebagai wadah  sharing bagi mahasiswa manajemen yang memiliki  minat di bidang kewirausahaan dan juga mencari peluang dari event - event yang ada  pada prodi manajemen yang ada di internal ataupun eksternal</p>
  </div>
  
  <div class="container-personal">
    <div class="personal-card">
      <div class="col-md-5">
        <div class="profile-container">
          <img src="pict minat/JAUHAR KOOR MBO(1).png" alt="Halimatusadiah" class="profile-img">
          <div class="profile-info">
            <h4 class="profile-role">KOOR</h4>
            <h5 class="profile-name">JAUHAR</h5><br>
            <small>"Anda tidak harus hebat untuk memulai, tapi Anda harus memulai untuk menjadi orang hebat"</small>
          </div>
        </div>
      </div>
      <div class="garis-tengah-10"></div>
      <div class="col-md-5">
        <div class="profile-container">
          <img src="pict minat/PUPUT LIDYA STAFF MBO(1).png" alt="Heny Fitriani" class="profile-img">
          <div class="profile-info">
            <h4 class="profile-role">ANGGOTA</h4>
            <h5 class="profile-name">PUPUT LIDYA</h5><br>
            <small>"Lebih baik memperbaiki keadaan yang ada daripada mencela keadaan yang ada"</small>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="container-personal">
    <div class="personal-card">
      <div class="col-md-5">
        <div class="profile-container">
          <img src="pict minat/ATTORIQ STAFF MBO(1).png" alt="Halimatusadiah" class="profile-img">
          <div class="profile-info">
            <h4 class="profile-role">ANGGOTA</h4>
            <h5 class="profile-name">ATTORIQ</h5><br>
            <small>"Kamu tidak pernah bisa merencanakan masa depan dengan masa lalu" <br> - Edmund Burke</small>
          </div>
        </div>
      </div>
      <div class="garis-tengah-10"></div>
      <div class="col-md-5">
        <div class="profile-container">
          <img src="pict minat/MUSTHOFA STAFF MBO(1).png" alt="Heny Fitriani" class="profile-img">
          <div class="profile-info">
            <h4 class="profile-role">ANGGOTA</h4>
            <h5 class="profile-name">HILMI AULIA</h5><br>
            <small>"Jangan berkecil hati jika jawaban doamu tidak segera datang. Pelajarilah, renungkan, dan tetap berdoa, memiliki iman yang tulus, dan menjalankan perintah-perintah-Nya" <br> - Joseph B. Wirthlin</small>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="container-personal">
    <div class="personal-card">
      <div class="col-md-5">
        <div class="profile-container">
          <img src="pict minat/ANGGUN DIVA STAFF MBO(1).png" alt="Halimatusadiah" class="profile-img">
          <div class="profile-info">
            <h4 class="profile-role">ANGGOTA</h4>
            <h5 class="profile-name">ANGGUN DIVA</h5><br>
            <small>"Jangan malu dengan kegagalanmu, belajarlah darinya dan mulai lagi"</small>
          </div>
        </div>
      </div>
    </div>
  </div>







  <div class="garis-tengah"></div>

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
    <div class="col-md-4 div-tujuh">
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

  <div class="garis-tengah-2"></div>
</div>

<div class="garis-tengah-3"></div>
<div><small class="last-footer">© himaje uaa | kabinet mahalayati 2024/2025</small></div>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>

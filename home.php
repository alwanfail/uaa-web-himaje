<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum Komunikasi Mahasiswa Manajemen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">
    <link rel="stylesheet" href="style/style.css" type="text/css">
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
          margin: 40px 100px 200px 100px;
        }
        .navbar-custom .navbar-brand img {
            height: 47px;
            border: 1px solid #ffd700; /* Tambahkan border sesuai kebutuhan */
            border-radius: 50%; /* Membuat gambar menjadi lingkaran */
            padding: 3px; /* Jarak antara border dan gambar */
        }
        .foto-bersama{
            position: relative; /* Perlu untuk positioning overlay */
            width: 100%;
            max-width: 100%; /* Menjaga lebar maksimal */
        }
        .garis-tengah {
            margin: auto;
            margin-top: 150px;
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
        .garis-tengah-4 {
            margin: auto;
            width: 85vw;
            background-color: #005BB5;
            height: 5px;
        }
        .garis-tengah-5 {
            margin: auto;
            width: 85vw;
            background-color: #005BB5;
            height: 5px;
        }
        .garis-tengah-6 {
            margin: auto;
            width: 85vw;
            background-color: #005BB5;
            height: 5px;
        }

        .garis-tengah-7 {
            margin: 0 auto;
            width: 85vw;
            background-color: #005BB5;
            height: 5px;
            margin-top: 150px;
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
            background-color: #00000022;
        }
        .overlay-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: #ffffff;
            padding: 20px;
            border-radius: 10px;
        }

        .text-center {
    font-family: 'Roboto', sans-serif;
    font-weight: 700; /* Gunakan 700 untuk gaya tebal */
    font-size: 35px; /* Ukuran font yang disesuaikan */
    color: white; /* Warna teks sesuai dengan kebutuhan desain */
    padding-top: 10px;
        }
        .tentang-kami {
            margin-top: 85px;
            margin-bottom: 85px;
        }
        .card-1 {
            background-color: #FDE473;
            margin: auto;
        width: 1161px;
        height: 370px;
        padding: 20px;
        border: 1px solid #333; /* Garis persegi panjang */
        box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.1); /* Bayangan tipis */
        text-align: center;
        font-family: Arial, Helvetica, sans-serif;
  }
        .card-2 {
            background-color: #f4f4f4;
            margin: auto;
        width: 1161px;
        height: 350px;
        padding: 20px;
        text-align: center;
        font-family: Arial, Helvetica, sans-serif;
  }
        .card-3 {
            background-color: #f4f4f4;
            margin: auto;
            font-weight: 600;
        width: 1161px;
        text-align: center;
        font-family: Arial, Helvetica, sans-serif;
  }
  .tk-teks {
    padding-top: 20px;
    font-weight: 600;
    font-family: Arial, Helvetica, sans-serif;
  }
  .card-text {
    padding: 40px 50px;
  }
  body {
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}
.container {
    margin: 0 auto;
}


.container-visimisi {
    margin: 0 auto;
    width: 80%;
    padding: 40px;
}

.header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 20px;
}
.logo-kabinet {
    width: 250px;
    display: flex;
}
.logo-garuda {
    width: 60px;
}

.color-meaning {
    width: 400px;
    height: 200px;
    border: 1px solid #000;
    padding-left: 30px;
    padding-top: 20px;
    align-content: center;
}

.color-meaning h3 {
    margin-bottom: 10px;
}

.color-meaning ul {
    list-style: none;
    padding: 0;
}

.color-meaning li {
    display: flex;
    align-content: center;
    align-items: center;
    margin-bottom: 5px;
}

.color-box {
    width: 20px;
    height: 20px;
    display: inline-block;
    margin-right: 10px;
}
.makna-w {
    padding-top: 20px;
}

.red { background-color: red; border: 1px solid #000;}
.yellow { background-color: yellow;border: 1px solid #000; }
.white { background-color: white; border: 1px solid #000; }

.vision-mission {
    display: flex;
    justify-content: space-between;
    margin-bottom: 20px;
    margin-top: 50px;
}

.vision, .mission {
    width: 45%;
    padding: 10px;
    border: 1px solid #ddd;
    background-color: #fafafa;
}

.vision h3, .mission h3 {
    text-align: center;
}

.leaders {
    display: flex;
    justify-content: space-around;
    margin-top: 40px;
}

.leader {
    text-align: center;
}

.leader img {
    width: 260px;
    height: 300px;
    margin-bottom: 10px;
    border: 2px solid #FFD700;
    border-radius: 20px;
}
.ketua-waka {
    margin-top: 15px;
    margin-bottom: 30px;
}
.tx-ketua, .tx-waka{
    margin-top: 20px;
}
.p-ketum, .p-waka {
    font-weight: 500;
}
.judul-departemen {
    text-align: center;
    margin-top: 20px;
    margin-bottom: 30px;
}
.card-container {
    width: 300px;
    height: 200px;
    position: relative;
}
.osas {
    font-weight: 400;
}
.olaole {
    text-align: center;
}

.container-artikel {
    margin-top: 30px;
}
.kartu-depar {
    width: 100%;
    height: 100%; /* Fill the height of the container */
    object-fit: cover; /* This will crop the image */
    object-position: center; /* Center the image within the container */
    border-radius: 10px;
    overflow: hidden;
    transition: transform 0.3s;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Menambahkan bayangan */
}


.overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    color: white; /* Warna teks */
    background: rgba(0, 0, 0, 0.5); /* Warna background dengan transparansi */
    z-index: 1;
}
.ronaldo {
    margin-bottom: 20px;
}



.container-info {
    display: flex;
    justify-content: space-around;
    width: 85vw;
    margin-right: auto;
    margin-left: auto;
}
.row-info {
    display: flex;
    justify-content: space-around;
    padding-top: 70px;
}
.messi {
    flex: 1;
    padding: 10px;
}

.tsubasa {
    width: 100%;
    height: 100%; /* Fill the height of the container */
    object-fit: cover; /* This will crop the image */
    object-position: center; /* Center the image within the container */
    border-radius: 10px;
    overflow: hidden;
    transition: transform 0.3s;}
    
.card-container-info {
    width: 140px;
    height: 140px;
    position: relative;
}

.tx-info {
    text-align: center;
    font-family: Arial, sans-serif;
    font-weight: 600;
}

.pangkat {
    font-weight: 600;
}
.carousel {
            max-width: 400px; /* Set max-width for the carousel */
            margin: auto; /* Center align the carousel */
            max-height: 400px;
        }
.carousel-item img {
            width: auto; /* Ensure images fill the carousel item */
            height: 250px; /* Maintain aspect ratio */
            object-fit: cover;
        }
.tx-dokumentasi {
    text-align: center;
}
.carousel-caption h5 {
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            background-color: rgba(0, 0, 0, 0.5); /* Black background with 50% opacity */
            padding: 5px 10px;
            border-radius: 5px;
            display: inline-block;
        }
        
        .overlay-black {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5); /* Warna hitam transparan */
            display: flex;
            justify-content: center;
            align-items: center;
            color: #ffffff;
            text-align: center;
        }

    </style>
</head>
<body>



    <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="logo/himaje.jpg" alt="" height="45" class="rounded-circle logo-atas">
        </a>
        <div class="navbar-wrapper">
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#home">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#departemen">DEPARTEMEN</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="forkom.php">FORKOM</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#dokumentasi">ARTIKEL</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#info-mhs">INFORMASI MAHASISWA</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="navbar-spacer"></div>
</nav>

<section id="home"></section><br><br>
<div class="background-image foto-bersama">
    <img src="logo/bg-all.jpg" alt="" class="gambar-bersama">
    <div class="overlay-black">
    <div class="overlay-text">
        <h2 class="text-center">HIMPUNAN MAHASISWA MANAJEMEN <br>
            KABINET MAHALAYATI <br>
            2024/2025
        </h2>
    </div>
</div>
</div>


<div class="tentang-kami">
<div class="garis-tengah-4"></div>
<div class="card-1">
    <h5 class="tk-teks">Sejarah</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Autem, laborum minima deleniti amet modi et quia, eius alias velit praesentium enim quas laboriosam perferendis? Doloribus inventore similique accusantium atque sit.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet voluptatibus asperiores, nisi dignissimos tenetur nesciunt maxime, accusamus, maiores neque voluptate cum totam expedita in vel odio fugit quidem illo? Quisquam!
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quas quaerat harum dignissimos explicabo, dolorum iusto sunt consequatur libero animi suscipit eius accusantium. Similique, ipsum expedita. Ad molestias architecto minus quaerat.
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veritatis quibusdam alias consequuntur, non dolore minus delectus enim nobis fuga tempore dolorum odio quae hic commodi neque corrupti numquam. Illum, molestiae.
      </p>
</div>
</div>

<div class="judul-kabinet">
<div class="garis-tengah-5"></div>
<div class="card-2">
    <h2 class="tk-teks">KABINET MAHALAYATI</h2>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Autem, laborum minima deleniti amet modi et quia, eius alias velit praesentium enim quas laboriosam perferendis? Doloribus inventore similique accusantium atque sit.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet voluptatibus asperiores, nisi dignissimos tenetur nesciunt maxime, accusamus, maiores neque voluptate cum totam expedita in vel odio fugit quidem illo? Quisquam!
      </p>
</div>
</div>
<h2 class="card-3">Logo Kabinet</h2>




<div class="container-visimisi">
    <div class="header">
        <img src="logo/kabinet-l.png" alt="Logo" class="logo-kabinet">
        <div class="color-meaning">
            <div class=""><span class="isi-tx-logo-garuda">Burung Garuda Merupakan lambang negara yang di dalamnya tertanam nilai-nilai Pancasila dan Semboyan Bangsa.</span></div>
            <ul>
                <li><span class="color-box red isi-tx-logo"></span> Merah: Melambangkan keberanian</li>
                <li><span class="color-box yellow isi-tx-logo"></span> Kuning: Melambangkan kejayaan</li>
                <li><span class="color-box white isi-tx-logo"></span> Putih: Melambangkan kesucian</li>
            </ul>
        </div>
    </div>
    <div class="vision-mission">
        <div class="vision">
            <h3>VISI</h3>
            <p>Menjadikan Himpunan Mahasiswa Manajemen sebagai wadah pembentukan karakter mahasiswa yang mampu berfikir rasional, kritis, dan dinamis serta produktif, yang memiliki rasa solidaritas tinggi dan menjunjung tinggi kekeluargaan dan berintegritas dalam segala hal.</p>
        </div>
        <div class="mission">
            <h3>MISI</h3>
            <ol>
                <li>Menjadikan seluruh mahasiswa manajemen sebagai keluarga yang solid.</li>
                <li>Menanamkan nilai-nilai yang berorientasi kepada etika dan religius dalam mengelola organisasi HMM.</li>
                <li>Mampu menjadi wadah penyaluran aspirasi, minat, dan bakat mahasiswa.</li>
                <li>Membangun program yang inovatif serta bermanfaat bagi internal dan eksternal.</li>
            </ol>
        </div>
    </div>
</div>




<section id="departemen"></section><br><br><br><br>
<div class="garis-tengah-6"></div>
<div class="ketua-waka">
    <h2 class="tk-teks olaole">Ketua dan Wakil</h2>
    <div class="leaders">
        <div class="leader">
            <img src="logo/YUNITA NURAENI KETUA.png" alt="Ketua" class="garis-img">
            <h4 class="tx-ketua pangkat">Ketua</h4>
            <h5 class="p-ketum">YUNITA NURAINI</h5><br>
            <span class="osas">” Hiduplah Seperti Larry “</span>
        </div>
        <div class="leader">
            <img src="logo/M.RAIHAN WAKIL KETUA.png" alt="Wakil Ketua" class="garis-img">
            <h4 class="tx-waka pangkat">Wakil Ketua</h4>
            <h5 class="p-waka">MUHAMMAD RAJHAN</h5><br>
            <span class="osas">"Disiplin diri adalah sebenar-benarnya wujud <br>kebebasan yang hakiki"</span>
        </div>
    </div>
</div>



<div class="garis-tengah-6"></div>
<div class="judul-departemen"><h2 class="tk-teks">Departemen</h2></div>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card-container ronaldo">
                <img src="pict bendahara/BENDAHARA.png" alt="Image 1" class="kartu-depar">
                <div class="overlay">
                    <h5>BENDAHARA</h5>
                    <a href="bendahara.php"><h5 class="sub-title">See more</h5></a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card-container ronaldo">
                <img src="pict sekretaris/SEKRETARIS.png" alt="Image 2" class="kartu-depar">
                <div class="overlay">
                    <h5>SEKRETARIS</h5>
                    <a href="sekretaris.php"><h5 class="sub-title">See more</h5></a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card-container ronaldo">
                <img src="pict humas/HUMAS.png" alt="Image 3" class="kartu-depar">
                <div class="overlay">
                    <h5>HUMAS</h5>
                    <a href="humas.php"><h5 class="sub-title">See more</h5></a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card-container ronaldo">
                <img src="pict keagamaan/KEAGAMAAN.png" alt="Image 1" class="kartu-depar">
                <div class="overlay">
                    <h5>KEAGAMAAN</h5>
                    <a href="keagamaan.php"><h5 class="sub-title">See more</h5></a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card-container ronaldo">
                <img src="pict kewirausahaan/KEWRAUSAHAAN.png" alt="Image 2" class="kartu-depar">
                <div class="overlay">
                    <h5>KEWIRAUSAHAAN</h5>
                    <a href="kewirausahaan.php"><h5 class="sub-title">See more</h5></a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card-container rondaldo">
                <img src="pict kominfo/KOMINFO.png" alt="Image 3" class="kartu-depar">
                <div class="overlay">
                    <h5>KOMINFO</h5>
                    <a href="kominfo.php"><h5 class="sub-title">See more</h5></a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card-container">
                <img src="pict penalaran/PENALARAN DAN KEILMUAN.png" alt="Image 1" class="kartu-depar">
                <div class="overlay">
                    <h5>PENALARAN DAN KEILMUAN</h5>
                    <a href="penalaran.php"><h5 class="sub-title">See more</h5></a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card-container">
                <img src="pict psdm/PSDM.png" alt="Image 2" class="kartu-depar">
                <div class="overlay">
                    <h5>PSDM</h5>
                    <a href="psdm.php"><h5 class="sub-title">See more</h5></a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card-container">
                <img src="pict minat/MINAT, BAKAT, DAN OLAHRAGA.png" alt="Image 3" class="kartu-depar">
                <div class="overlay">
                    <h5>MBO</h5>
                    <a href="minat-bakat.php"><h5 class="sub-title">See more</h5></a>
                </div>
            </div>
        </div>
    </div>
</div>



<section id="info-mhs"></section><br><br>
<div class="garis-tengah-7"></div>
<div class="container-info">
    <div class="row row-info">
        <div class="col-md-4 messi"><div class="card-container-info">
                <img src="logo/logo-lomba.jpg" alt="Image 3" class="tsubasa">
                <div class="">
                    <h5 class="tx-info">Info Lomba</h5>
                </div>
            </div></div>
    </div>
    <div class="row row-info">
        <div class="col-md-4 messi"><div class="card-container-info">
                <img src="logo/logo-even.jpg" alt="Image 3" class="tsubasa">
                <div class="">
                    <h5 class="tx-info">Info Event</h5>
                </div>
            </div></div>
    </div>
    <div class="row row-info">
        <div class="col-md-4 messi"><div class="card-container-info">
                <img src="logo/logo-magang.jpg" alt="Image 3" class="tsubasa">
                <div class="">
                    <h5 class="tx-info">Info Magang</h5>
                </div>
            </div></div>
    </div>
    <div class="row row-info">
        <div class="col-md-4 messi"><div class="card-container-info">
                <img src="logo/logo-prestasi.jpg" alt="Image 3" class="tsubasa">
                <div class="">
                    <h5 class="tx-info">MBO</h5>
                </div>
            </div></div>
    </div>
</div>




<section id="dokumentasi"></section>

<div class="garis-tengah"></div>
<h2 class="tk-teks tx-dokumentasi">Dokumentasi Kegiatan HIMAJE</h2>
<div class="container-artikel">
    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-inner">
          <div class="carousel-item">
            <img src="img/hima-berbagi1.jpeg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5 class="tk-teks">Himaje X Himaksi Berbagi</h5>
                  
                </div>
              </div>
              <div class="carousel-item">
                <img src="img/hima-berbagi2.jpeg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5 class="tk-teks">Himaje X Himaksi Berbagi</h5>
                  
                </div>
              </div>
              <div class="carousel-item">
                <img src="img/hima-berbagi3.jpeg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5 class="tk-teks">Himaje X Himaksi Berbagi</h5>
                  
                </div>
              </div>
              <div class="carousel-item">
                <img src="img/hima-berbagi4.jpeg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5 class="tk-teks">Himaje X Himaksi Berbagi</h5>
                  
                </div>
              </div>
              <div class="carousel-item active">
                  <img src="img/openhouse.jpg" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <h5 class="tk-teks">Open House Sekre</h5>
                      
                  </div>
              </div>
              <div class="carousel-item">
                  <img src="img/pelantikan-himaje.jpg" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <h5 class="tk-teks">Pelantikan</h5>
                      
                  </div>
              </div>
              <div class="carousel-item">
                  <img src="img/bukber.jpg" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <h5 class="tk-teks">Bukber Manajemen</h5>
                      
                  </div>
              </div>
            <!-- Add more carousel items as needed -->
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

</div>



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

    <!-- Bootstrap JavaScript (Bundle version for all components) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>

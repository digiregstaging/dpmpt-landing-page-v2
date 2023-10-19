<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>DPMPTSP</title>
        <link rel="stylesheet" href="css/investasi.css">
        <link rel="stylesheet" href="css/swiper-bundle.min.css">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link rel="shortcut icon" type="image/png" href="assets/logo.png">
    </head>
<body>
    <header class="header">
        <img src="assets/logo.png" alt="Logo DPMPTS Balikpapan" style="height: 40px;" onclick="window.location.href='https://investasi.balikpapan.go.id/';"> 
        <a href="index.php" class="logo">
            DPMPTSP Balikpapan
          </a>
        <input type="checkbox" id="check">
        <label for="check" class="icons">
            <i class="bx bx-menu" id="menu-icon"></i>
            <i class="bx bx-x" id="close-icon"></i>
        </label>
        <nav class="navbar">
            <a href="index.php" style="--i:0">Beranda</a>
            <a href="profil.php" style="--i:1">Profil&nbsp;Daerah</a>
            <a href="infrastruktur.php" style="--i:2">Infrastruktur</a>
            <a href="investasi.php" style="--i:3">Profil&nbsp;Investasi</a>
            <a href="peluang.php" style="--i:4">Peluang&nbsp;Investasi</a>
            <a href="izin.php" style="--i:5">Perizinan</a>
            <a href="gis.php" style="--i:5">Web GIS</a>
            <a style="--i:6">
                <div style="display: none; " id="google_translate_element"></div>
					<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
					<button id="translateToIndonesianButton" style="background-color: transparent; border: transparent;" class="image-button" onclick="translateToIndonesian()"><img src="assets/id.png"></button> 
					<button id="translateToOriginalLanguageButton" style="background-color: transparent; border: transparent;" class="image-button" onclick="translateToOriginalLanguage()"><img src="assets/en.png"></button>
            </a>
        </nav>
    </header>
    <div class="center-content">
        <h1 class="pariwisata-title">Profil Investasi</h1>
        <div class="logos">
            <div class="logo-container">
                <div class="logo-circle">
                    <img class="logo-image" src="assets/travel.png" alt="Logo 1">
                </div>
                <p class="logo-name">Pariwisata</p>
                <div class="popup-card">
                    <h3>Sektor Pariwisata</h3>
                    <div class="tab-panel">
                        <button class="tab-button" data-tab="alami">Alam</button>
                        <button class="tab-button" data-tab="buatan">Buatan</button>
                        <button class="tab-button" data-tab="religi">Religi</button>
                        <button class="tab-button" data-tab="sejarah">Sejarah</button>
                        <button class="tab-button" data-tab="bahari">Bahari</button>
                        <button class="tab-button" data-tab="belanja">Belanja</button>
                        <button class="tab-button" data-tab="kuliner">Kuliner</button>
                    </div>
                </div>
                </div>
            <div class="logos">
              <div class="logo-container-perikanan logo-container">
                <div class="logo-container">
                    <div class="logo-circle">
                        <img class="logo-image" src="assets/fishing.png" alt="Logo 2">
                    </div>
                    <p class="logo-name">Perikanan</p>                    
                </div>
              </div>
              <div class="logo-container-industri logo-container">
            <div class="logo-container">
                <div class="logo-circle">
                    <img class="logo-image" src="assets/industri.png" alt="Logo 3">
            </div>
                <p class="logo-name">Industri</p>
            </div>
          </div>
          <div class="logo-container-transportasi logo-container">
            <div class="logo-container" id="transportasi-logo">
                <div class="logo-circle">
                    <img class="logo-image" src="assets//transportation.png" alt="Logo Transportasi">
            </div>
                <p class="logo-name">Transportasi</p>
                <div class="popup-card" id="transportasi-popup">
                  <h3>Sektor Transportasi</h3>
                  <div class="tab-buttons">
                      <button class="tab-button" data-tab="darat">Darat</button>
                      <button class="tab-button" data-tab="laut">Laut</button>
                      <button class="tab-button" data-tab="udara">Udara</button>
                  </div>
              </div>
            </div>
          </div>
        </div>
    </div> 
    </div>
    <div style="text-align: center;">
        <div class="slide-container swiper" id="alami">
          <br><h1>SEKTOR PARIWISATA</h1>
          <br><h2><b>Wisata Alam</b></h2>
            <div class="slide-content">
                <div class="card-wrapper swiper-wrapper">
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="assets/wisata/hlsw.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Hutan Lindung Sungai Wain (HLSW)</h2>
                            <p class="description">
                                <br>Pengelola: Pemerintah</br>
                                <br>Alamat: Jl. Soekarno Hatta Km 15 Kel. Karang Joang Balikpapan Utara</br> 
                                
                                <br>Hutan Lindung Sungai Wain (HLSW) merupakan salah satu objek wisata alam yang berada di Kecamatan Balikpapan Utara, Kota Balikpapan. Objek wisata HLSW memberikan perpaduan wisata hutan serta sungai. Hiking atau lintas alam menembus hutan dapat menjadi pilihan dalam menikmati HLSW yang terdiri dari hutan primer dan hutan sekunder selain itu wisatawan juga dapat menikmati pemandangan hutan dengan menempuh perjalanan menyusuri sungai.</br> </p>

                             
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="assets/wisata/kwplh.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Kawasan Wisata Pendidikan Lingkungan Hidup (KWPLH)</h2>
                            <p class="description">
                                <br>Pengelola: Pemerintah</br>
                                <br>Alamat: Jl. Soekarno Hatta Km 23 Kel. Karang Joang Balikpapan Utara</br>
                                <br>Kawasan Wisata Pendidikan Lingkungan Hidup didesain sebagai kawasan konservasi Helarctos Malayanus atau dikenal dengan Beruang Madu. Area KWPLH  mencakup 1,3 ha yang dihuni oleh 5 Beruang Madu. Pengunjung  juga dapat mengenal lebih jauh dan memperoleh infromasi terkait dengan Beruang Madu di Pusat Pendidikan yang tersedia di KWPLH.</br>
                            </p>

                             
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="assets/wisata/krb.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Kebun Raya Balikpapan (KRB)</h2>
                            <p class="description">
                                <br>Pengelola: Pemerintah</br>
                                <br>Alamat: Jl. Soekarna Hatta Km 15 Kel. Karang Joang Balikpapan Utara</br>
                                <br>Kebun Raya Balikpapan merupakan wisata edukasi yang memberikan pengalaman terkait dengan pelestarian tumbuhan dan hewan  untuk tujuan penelitian dan pendidikan. Kebun Raya memiliki koleksi tumbuhan di alam terbuka dan di dalam rumah kaca serta berbagai serta fasilitas wisata lingkungan lainnya.</br>
                            </p>
                             
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="assets/wisata/mcgi.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Mangrove Centre Graha Indah</h2>
                            <p class="description">
                                <br>Pengelola: Masyarakat</br>
                                <br>Pengelola: Masyarakat</br>
                                <br>Mangrove Center di Graha Indah merupakan tempat wisata mangrove terluas di Kota Balikpapan yang mencapai 150 ha yang dikelola swadaya dan swakarsa oleh (Kelompok Masyarakat Pengawas) POKMASWAS-Sonneratia. Suasana menyusuri ketudahan kanopi hutan mangrovemenjadi salah satu pengalaman wisata yang menakjubkan.</br>
                            </p>
                             
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="assets/wisata/mmm.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Mangrove Margo Mulyo</h2>
                            <p class="description">
                                <br>Pengelola: Pemerintah</br>
                                <br>Alamat: Kel. Margo Mulyo Kec. Balikpapan Barat</br>
                                <br>Mangrove Margo Mulyo dikenal sebagai hutan kota dengan panjang jembatan kayu sebesar 800 meter dan menara intai yang memungkinkan pengunjung untuk berjalan dan melihat-lihat pemandangan melintasi mangrove. Hutan ini merupakan rumah bagi satwa jenis langka "Bekantan".</br>
                            </p>
                             
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="assets/wisata/wm.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Wisata Meranti</h2>
                            <p class="description">
                                <br>Pengelola: Masyarakat</br>
                                <br>Alamat: Jl. Soekarno Hatta Km 15 Kelurahan Karang Joang Kecamatan Balikpapan Utara</br>
                                <br>Destinasi ini akan lebih menonjolkan pohon Meranti yang ada di area wisata. Selain pohon Meranti yang dijadikan unggulan, wisata ini nantinya akan menyediakan hasil dari pelaku UMKM di sektor perikanan dan madu kelulut. Tersedia sejumlah gazebo, spot pemancingan, sepeda air dan sejumlah wahana lainnya.</br>
                            </p>
                             
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="assets/wisata/wbw.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Wisata Bamboe Wanadesa</h2>
                            <p class="description">
                                <br>Pengelola: Masyarakat</br>
                                <br>Alamat: Jl. Soekarno Hatta Km 15 Kel. Karang Joang Kec. Bpp Utara</br>
                                <br>Wisata Bamboe Wanadesa berada jauh dari hiruk pikuk perkotaan sehingga sangatlah cocok untuk membuang kepenatan dan menikmati keindahan alam jenis rumput terbesar dengan nama latin bambusoideae terhampar di lahan seluas 80 ha yang langsung berbatasan dengan waduk manggar km 12.</br>
                            </p>
                             
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next swiper-navBtn"></div>
            <div class="swiper-button-prev swiper-navBtn"></div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
    
    <div style="text-align: center;"><h2><b>Wisata Buatan</b></h2>
        <div class="slide-container swiper" id="buatan">
            <div class="slide-content1">
                <div class="card-wrapper swiper-wrapper">
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="assets/buatan/bsb.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Pantai BSB</h2>
                            <p class="description">
                                <br>Pengelola: Swasta</br>
                                <br>Alamat: Jalan Jend Sudirman Nomor 47 Balikpapan Superblock Rt 019</br> 
                                
                                <br>Pantai BSB merupakan wisata baru yang berada di area Balikpapan Superblock. Pantai ini diapit oleh 2 mall besar yaitu Ewalk DAN Pentacity Mall. Pantai BSB menawarkan outdoor mall experience.</br> </p>

                             
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="assets/buatan/aw.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Aquaboom Waterpark</h2>
                            <p class="description">
                                <br>Pengelola: Swasta</br>
                                <br>Alamat: Jl. Jend. Sudirman Komp. Balikpapan Super Blok</br> 
                                
                                <br>Aquaboom Waterpark BSB dibangun tepat diatas gedung bertingkat. Letak waterpark tersebut tepat di lantai 7 Nicopolis South
                                Tower Astara.</br> </p>

                             
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="assets/buatan/ciwr.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Caribbean Island Waterpark Regency</h2>
                            <p class="description">
                                <br>Pengelola: Swasta</br>
                                <br>Alamat: Jl. Kol. Syarifuddin Yoes Kec. Balikpapan Selatan</br> 
                                
                                <br>Terletak di dalam Komplek Perumahan Regency. Ditata dengan cantik dengan menggunakan beberapa karakter kartun. Tempat
                                ini menawarkan para penghujung banyak jenis hiburan permainan air.</br> </p>

                             
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="assets/buatan/pbt.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Penangkaran Buaya Teritip
                            </h2>
                            <p class="description">
                                <br>Pengelola: Swasta</br>
                                <br>Alamat:  Jl. Mulawarman Kel. Teritip, Kec. Balikpapan Timur</br> 
                                
                                <br>Terletak di daerah Teritip, sekitar 26 km sebelah timur kota Balikpapan. Menempati area seluas 1000 meter persegi dan memiliki
                                buaya sekitar 1500 ekor. Terdapat jenis buaya yang dipelihara untuk tujuan pelestarian alam yatiu buaya air tawar dan buaya
                                supit.</br> </p>

                             
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="assets/buatan/tb.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Taman Bekapai</h2>
                            <p class="description">
                                <br>Pengelola: Pemerintah</br>
                                <br>Alamat: Jl. Jend. Sudirman Kel. Klandasan Ulu Kec. Balikpapan Kota</br> 
                                
                                <br>Taman Bekapai adalah teman yang berada di pusat kota yang dikelilingi oleh hotel dan pertokoan. Sebuah air mancur yang indah
                                berada ditengah taman ini, sehingga membuat taman ini menjadi taman terbaik di Balikpapan</br> </p>

                             
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="assets/buatan/ttg.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Taman Tiga Generasi</h2>
                            <p class="description">
                                <br>Pengelola: Pemerintah</br>
                                <br>Alamat: Jl. Jamrud I, Kel. Sepinggan, Kec. Balikpapan Selatan</br> 
                                
                                <br>Tidak hanya suasana teduh dan asri menarik pengunjung untuk melepas penat dan bersantai sejenak dari rutinitas kota.
                                Pengunjung juga dapat menemukan pengobatan dan rekreasi sambil memberikan makan Burung Merpati di Taman Tiga
                                Generasi. Taman tiga Generasi yang merupakan taman dan ruang terbuka menjadi salah satu simbol slogan Kota Balikpapan
                                "BERIMAN (Bersih, Indah dan Nyaman).</br> </p>

                             
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="assets/buatan/kaam.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Kampung Atas Air Margasari</h2>
                            <p class="description">
                                <br>Pengelola: Masyarakat</br>
                                <br>Alamat: Kel. Margasari Kec. Balikpapan Barat</br> 
                                
                                <br>Kota Balikpapan menerima penghargaan Inovasi Manajemen Perkotaan (IMP) Award tahun 2013 berkat Kampung Atas Air
                                Margasari. Dahulu Kampung Atas Air Margasari merupakan kawasan kumuh namun disulap menjadi kawasan yang tertata rapi,
                                bersih dan tersedianya Ruang Terbuka Hijau (RTH) yang menyejukkan. Menuju kampung sangat mudah dengan melalui Jalan
                                Sepaku, Kecamatan Balikpapan Barat.</br> </p>

                             
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="assets/buatan/t1000.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Teluk 1000</h2>
                            <p class="description">
                                <br>Pengelola: Masyarakat</br>
                                <br>Alamat: Jl. Mulawarman Kel. Manggar Baru Kec. Balikpapan Timur</br> 
                                
                                <br>Wisata Rumah Warna-Warni dan Teluk 1000 berpusat pada gang kecil yang penuh dengan lukisan dan dermaga beserta
                                pemandangan kesibukan kapal-kapal yang melintas menjadi daya tarik wisatawan untuk berkunjung di salah satu kampung atas
                                air di Kota Balikpapan.</br> </p>

                             
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="assets/buatan/wm.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Waduk Manggar</h2>
                            <p class="description">
                                <br>Pengelola: Pemerintah</br>
                                <br>Alamat: Jl. Soekarno Hatta Km 12 Kel. Karang Joang Balikpapan Utara</br> 
                                
                                <br>Waduk Manggar merupakan danau buatan dengan keindahan alam yang menakjubkan. Waduk berdekatan dengan kawasan
                                hutan dan pada tepi waduk dipenuhi dengan berbagai pepohonan rindang yang mampu menghipnotis pengunjung dan menjadi
                                tujuan wisata untuk menghabiskan akhir pekan.</br> </p>

                             
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="assets/buatan/kp.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name"> Kampung Phinisi</h2>
                            <p class="description">
                                <br>Pengelola: Masyarakat</br>
                                <br>Alamat: Jl. Jend. Sudirman Kel. Klandasan Ilir Kec. Balikpapan Kota</br> 
                                
                                <br>Kampung Pinisi memilki daya tarik utama Anjungan Kapal Pinisi yang dibentuk menyerupai kapal terkenal tersebut serta memiliki
                                tema unik berupa mural dan lukisan di dinding maupun jalan. Beberapa sudut kampung menjadi tempat favorit pengunjung
                                untuk sekedar mengabadikan momen dengan berfoto atau hanya sekedar menghabiskan waktu.</br> </p>

                             
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="assets/buatan/wekb.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name"> Wisata Edukasi Kang Bejo
                            </h2>
                            <p class="description">
                                <br>Pengelola: Masyarakat</br>
                                <br>Alamat: Kel. Sumber Rejo Kec. Balikpapan Tengah
                            </br> 
                                
                                <br>Wisata Edukasi Kangkung Sumber Rejo atau dikenal wisata Kang Bejo tidak hanya menawarkan wisata kebun kangkung namun
                                terdapat wisata edukasi dan kuliner hasil olahan kangkung yang menggugah selera. Pada area kebun terdapat sudut sudut
                                menarik untuk mengambil gambar atau berswafoto. Kampung wisata ini dikelola oleh Pokdarwis Kang Bejo sejak Tahun 2020.
                                </br> </p>

                             
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="assets/buatan/gg.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Gifta Garden
                            </h2>
                            <p class="description">
                                <br>Pengelola: Swasta</br>
                                <br>Alamat: Jl. Soekarno Hatta Km 23 Kel. Karang Joang Balikpapan Utara</br> 
                                
                                <br>Gifta Garden adalah salah satu destinasi wisata baru dengan konsep Agrowisata. Selain pusat pengembangbiakan tanaman
                                hidroponik, Gifta Garden juga menyediakan fasilitas antara lain restoran, pemancingan umum, villa dan wahana taman bermain
                                untuk anak.</br> </p>

                             
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="assets/buatan/dwt.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Desa Wisata Teritip</h2>
                            <p class="description">
                                <br>Pengelola: Masyarakat</br>
                                <br>Alamat: Jl. Mulawarman Kelurahan Teritip Kec. Balikpapan Timur</br> 
                                
                                <br>Tidak hanya pantai namun di Kecamatan Balikpapan Timur terdapat Desa Wisata Teritip yang menawarkan wisata lahan
                                pertanian dan kebun buah yang beragam. Pengunjung yang ingin menginap dapat menggunakan rumah sekitar lokasi wisata
                                yang telah disediakan oleh penduduk setempat.</br> </p>

                             
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="assets/buatan/lm.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Lapangan Merdeka</h2>
                            <p class="description">
                                <br>Pengelola: Swasta</br>
                                <br>Alamat: Jl. Jend. Sudirman Kel. Prapatan Kec. Balikpapan Kota</br> 
                                
                                <br>Lapangan Merdeka menjadi salah satu destinasi wisata yang tidak hanya berupa hamparan lapangan rumput hijau namun lokasi
                                yang strategis dengan landscape yang indah juga menjadi daya tarik utamanya. Lapangan ini juga menyediakan jogging track
                                yang tidak hanya digunakan oleh pengunjung namun juga PKL.
                                </br> </p>

                             
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="assets/buatan/kwb.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Kampung Wisata Bekantan</h2>
                            <p class="description">
                                <br>Pengelola: Pemerintah</br>
                                <br>Alamat: Perum. Graha Indah, Kel. Batu Ampar, Kec. Balikpapan Utara</br> 
                                
                                <br>Kampung Wisata Bekantan adalah tempat bagi para pengunjung untuk dapat melihat salah satu hewan endemik Kalimantan
                                yaitu kera hidung panjang (bekantan), selain itu objek wisata ini juga tersedia taman dan budidaya tanaman. Secara etimologi,
                                kata Bekantan merupakan akronim dari BErsih, Kreatif, Aman, Natural, Teduh, Asri dan Nyaman yang merupakan slogan destinasi
                                wisata ini.</br> </p>

                             
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="assets/buatan/wre.png" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name"> Wisata Rakit Ecobar</h2>
                            <p class="description">
                                <br>Pengelola: Masyarakat</br>
                                <br>Alamat: Kel. Margo Mulyo, Kec. Balikpapan Barat</br> 
                                
                                <br>Wisata Rakit Ecobar adalah wisata jelajah perairan mangrove yang menggunakan bahan ecobrick sebagai material rakit/perahu.
                                Ecobrick adalah botol plastik yang diisi padat dengan limbah non biological untuk membuat blok bangunan yang dapat
                                digunakan kembali.</br> </p>

                             
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next1 swiper-navBtn"></div>
            <div class="swiper-button-prev1 swiper-navBtn"></div>
            <div class="swiper-pagination"></div>
        </div>
    </div>

    <div style="text-align: center;"><h2><b>Wisata Religi</b></h2>
        <div class="slide-container swiper" id="religi">
            <div class="slide-content2">
                <div class="card-wrapper swiper-wrapper">
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="assets/religi/mbm.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Mahavihara Buddha Manggala</h2>
                            <p class="description">
                                <br>Pengelola: Swasta</br>
                                <br>Alamat: Jl. Mt. Haryono Kel. Damai Kec. Balikpapan Selatan</br> 
                                
                                <br>Mahavihara Buddha Manggala adalah vihara dengan luas lahan 2,5 ha yang terletak di jantung Kota Balikpapan. Bangunan ini
                                digunakan sebagai tempat ibadat umat Buddha Theravada. Terdapat banyak arsitektural yang menarik seperti patung Buddha
                                tidur (reclining Buddha) yang berada di bangunan utama, patung Kinara Kinari dan Stupa seperti di Candi Borobudur.</br> </p>

                             
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="assets/religi/mmiic.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Masjid Madinatul Iman Islamic Center
                            </h2>
                            <p class="description">
                                <br>Pengelola: Pemerintah</br>
                                <br>Alamat: : Jl. Belibis Kel. Gunung Bahagia, Kec. Balikpapan Selatan</br>
                                <br>Salah satu bangunan ikonik di Kota Balikpapan adalah Masjid Madinatul Iman. Nama tersebut diambil dari visi Kota Balikpapan
                                yakni "menuju kota yang damai dan sejahtera untuk seluruh umat manusia". Arsitektural masjid ini berkiblat pada Masjid
                                Nabawi di Maddinah dengan elemen-elemen yang dibuat semirip mungkin.</br>
                            </p>

                             
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="assets/religi/bdk.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name"> Bukit Doa Kalimantan
                            </h2>
                            <p class="description">
                                <br>Pengelola: Swasta</br>
                                <br>Alamat: Jl. Syarifudin Yoes, Kelurahan Sepinggan Kec Balikpapan Selatan</br>
                                <br>Bukit Doa Kalimantan merupakan wisata rohani bagi kaum nasrani yang dibangun oleh Yayasan Bethany Kalimantan dengan
                                tujuan agar dapat menjadi Rumah Doa Bagi Segala Bangsa. Fasilitas yang disediakan berupa Gua Doa yang di desain untuk
                                keluarga dan perorangan. Bukit Doa secara arsitektural memiliki konsep seperti miniatur Yerussalem sehingga menjadi daya tarik
                                khusus bagi pengunjung baik kaum nasrani maupun kaum lainnya.</br>
                            </p>
                             
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next2 swiper-navBtn"></div>
            <div class="swiper-button-prev2 swiper-navBtn"></div>
            <div class="swiper-pagination"></div>
        </div>
    </div>

    <div style="text-align: center;"><h2><b>Wisata Sejarah</b></h2>
        <div class="slide-container swiper" id="sejarah">
            <div class="slide-content3">
                <div class="card-wrapper swiper-wrapper">
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="assets/sejarah/mkvim.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Museum Kodam VI Mulawarman</h2>
                            <p class="description">
                                <br>Pengelola: Pemerintah</br>
                                <br>Alamat:  Jl. Lentjen Suprapto Kel. Baru Tengah Kec. Balikpapan Barat</br> 
                                
                                <br>Museum Kodam VI diresmikan pada tanggal 16 September 2008 yang terletak di daerah Kampung Baru. Meseum ini syarat akan
                                nilai historis dan nasionalisme seperti senjata dan peralatan yang digunakan dalam pertempuran (perlatan komunikasi,
                                kesehatan dan alat musik untuk upacara militer), kendaraan tempur, buku perjuangan, lambang satuan tempur dan pakaian
                                tempur.</br> </p>

                             
                        </div>
                    </div>

                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="assets/sejarah/tmj.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Tugu Makam Jepang</h2>
                            <p class="description">
                                <br>Pengelola: Pemerintah</br>
                                <br>Alamat: Jl. Mulawarman Kel. Lamaru Kec. Balikpapan Timur</br> 
                                
                                <br>Tugu Makam Jepang merupakan tugu peringatan yang melambangkan perjuangan dan kegigihan pasukan Jepang yang gugur
                                dalam pertempuran melawan sekutu di masa perang dunia ke-2. Makam ini dikelilingi oleh taman dengan latar belakang pasir
                                putih.</br> </p>

                             
                        </div>
                    </div>

                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="assets/sejarah/rdh.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Rumah Dahor Heritage</h2>
                            <p class="description">
                                <br>Pengelola: Swasta</br>
                                <br>Alamat: Jl. Dahor Kel. Baru Ilir Kec. Balikpapan Barat</br> 
                                
                                <br>Dahor Heritage adalah rumah panggung yang menjadi salah satu cagar budaya di Kota Balikpapan. Rumah ini menjadi bagian
                                dari kompleks perumahan Pertamina karena menjadi saksi bisu cerita para pekerja kilang minyak pada masa kolonial Belanda.
                                Dimana, kemudian rumah antik ini dijadikan sebagai museum ataupun perpustakaan. Menjadi salah satu wisata edukasi yang
                                menarik, rumah ini ramai dikunjungi oleh wisatawan.</br> </p>

                             
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next3 swiper-navBtn"></div>
            <div class="swiper-button-prev3 swiper-navBtn"></div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
        
    <div style="text-align: center;"><h2><b>Wisata Bahari</b></h2>
        <div class="slide-container swiper" id="bahari">
            <div class="slide-content4">
                <div class="card-wrapper swiper-wrapper">
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="assets/bahari/pl.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Pantai Lamaru</h2>
                            <p class="description">
                                <br>Pengelola: Swasta</br>
                                <br>Alamat: Jl. Mulawarman Kel. Lamaru Kec. Balikpapan Timur</br> 
                                
                                <br>Terletak 5 km sebelah timur Pantai Manggar Segara Sari. Pantai ini menawarkan banyak kelebihan sehingga menjadi daya tarik
                                dan primadona bagi wisatawan bahari diantaranya kelandaian pantainya, pasir putih yang dangkal hingga beberapa puluh meter
                                dan dominasi pohon cemara pantai yang rindang.</br> </p>

                             
                        </div>
                    </div>                    
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="assets/bahari/pms.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Pantai Manggar Sagarasari</h2>
                            <p class="description">
                                <br>Pengelola: Pemerintah</br>
                                <br>Alamat: Jl. Mulawarman Kel. Manggar Baru Kec. Balikpapan Timur</br> 
                                
                                <br>Pantai berpasir putih ini terletak sekitar 22 km sebelah timur kota. Pengunjung dapat menikmati kuliner lokal, panggung
                                hiburan, arena bermain anak dan berbagai jenis olahraga air serta aktifitas pantai lainnya.</br> </p>

                             
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="assets/bahari/pk.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Pantai Kemala</h2>
                            <p class="description">
                                <br>Pengelola: Pemerintah</br>
                                <br>Alamat: Jl. Jend. Sudirman Kel. Prapatan Kec. Balikpapan Kota</br> 
                                
                                <br>Pantai Kemala Balikpapan terletak di Desa Klandasan Ulu, Kecamatan Balikpapan Kota, Kota Balikpapan, Kalimantan Timur.
                                Pantai Kemala Balikpapan memiliki pemandangan laut dan kapal-kapal tangker besar yang tengah berlalu lalang membawa
                                muatan. Pemandangan tersebut menjadi satu keistimewaan karena tidak dimiliki pantai lainnya.</br> </p>

                             
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="assets/bahari/pm.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Pantai Monpera</h2>
                            <p class="description">
                                <br>Pengelola: Pemerintah</br>
                                <br>Alamat: Jl. Jend. Sudirman Kel. Prapatan Kec. Balikpapan Kota</br> 
                                
                                <br>Pantai Monpera adalah salah satu destinasi wisata yang populer di Kota Balikpapan. Walaupun pantai ini tidak terlalu luas
                                namun garis pantainya terlihat jelas membentang. Selain itu fasilitas yang disediakan di pantai ini antara lain kamar mandi dan
                                toilet, warung makan dan mushola.</br> </p>

                             
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="assets/bahari/pbp.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Pantai Benua Patra</h2>
                            <p class="description">
                                <br>Pengelola: Swasta</br>
                                <br>Alamat: Jl. Jend. Sudirman Kel. Prapatan Kec. Balikpapan Kota</br> 
                                
                                <br>Pantai Benua Patra dulunya disebut Batu-batu karena wilayahnya yang dipenuhi dengan bebatuan alam tersusun sampai
                                membentuk pulau dipinggir pantai. Meskipun kurang populer dikalangan wisatawan bahari, pantai ini mendapat perhatian
                                khusus bagi para pemancing disebabkan banyaknya jenis ikan yang berkumpul di sekitar pantai ini.</br> </p>

                             
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="assets/bahari/pkm.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Pantai Kilang Mandiri</h2>
                            <p class="description">
                                <br>Pengelola: Pemerintah</br>
                                <br>Alamat: Jl. Jend. Sudirman Kel. Prapatan Kec. Balikpapan Kota</br> 
                                
                                <br>Pantai Kilang Mandiri berlokasi di pinggiran tengah Kota Balikpapan. Selain panorama yang eksotik, wisatawan juga dapat
                                menunggu momen hadirnya sunset sembari beraktivitas di pantai seperti berenang, bermain pasir, atau sekedar menikmati
                                sajian kuliner di restoran outdoor</br> </p>

                             
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="assets/bahari/ps.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Pantai Seraya</h2>
                            <p class="description">
                                <br>Pengelola: Masyarakat</br>
                                <br>Alamat: Jl. Marsma Iswahyudi Kel. Sepinggan Raya Kec. Balikpapan Selatan</br> 
                                
                                <br>Pantai Seraya merupakan salah satu destinasi wisata yang terletak di Balikpapan Selatan. Salah satu kelebihan pantai ini adalah
                                dapat menyaksikan pemandangan pesawat yang sedang landing/take off dari jarak yang cukup dekat, karena posisi pantai ini
                                persis berada di dekat landasan pesawat bandara Balikpapan.</br> </p>

                             
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="assets/bahari/psy.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Pantai Smacly
                            </h2>
                            <p class="description">
                                <br>Pengelola: Masyarakat</br>
                                <br>Alamat: Jl. Mulawarman Kel. Lamaru Kec. Balikpapan Timur</br> 
                                
                                <br>Pantai Smacly yang lokasinya berada di belakang SMKN 5 dan berada di Kelurahan Lamaru. Saat ini Pantai Smacly sudah
                                mempunyai cukup banyak fasilitas yang dapat dinikmati pengunjung, yaitu fasilitas Villa, Gazebo, Kamar Mandi, Musolla, Spot
                                Foto dan lainnya. Pengunjung juga dapat bercamping di pantai ini yang tendanya bisa di sewa atau dengan membawa sendiri.</br> </p>

                             
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="assets/bahari/pn.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Pantai Nelayan</h2>
                            <p class="description">
                                <br>Pengelola: Masyarakat</br>
                                <br>Alamat: Jl. Mulawarman Kelurahan Manggar Baru Kec. Balikpapan Timur</br> 
                                
                                <br>Pantai Nelayan menrupakan pantai yang terletak dikampung nelayan daerah manggar Balikpapan Timur. Pantai ini dilengkapi
                                dengan gazebo dan villa, selain itu wisatawan dapat melakukan aktifitas camping dengan tenda.</br> </p>

                             
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="assets/bahari/pc.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Pantai Cemara</h2>
                            <p class="description">
                                <br>Pengelola: Masyarakat</br>
                                <br>Alamat: Kel. Manggar Baru, Kec. Balikpapan Timur</br> 
                                
                                <br>Nama Pantai Cemara berasal dari karakteristik daerahnya yang ditumbuhi banyak pohon cemara. Fasilitas yang tersedia di pantai
                                ini masih minim, untuk kamar mandi dan tempat ganti baju hanya tersedia empat bilik saja. Selain itu masih terlihat sampah
                                berserakan di pesisir pantai namun tetap dinikmati warga sekitar maupun wisatawan.</br> </p>

                             
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="assets/bahari/ptb.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Pantai Tanjung Bayur</h2>
                            <p class="description">
                                <br>Pengelola: Masyarakat</br>
                                <br>Alamat: Jl. Mulawarman Kelurahan Teritip Kec. Balikpapan Timur</br> 
                                
                                <br>Pantai Tanjung Bayur memiliki bibir pantai yang luas serta terkenal dengan sunrisenya, sehingga banyak pengunjung yang ingin
                                menginap dipantai tersebut. Pantai ini memiliki fasilitas villa dan untuk yang ingin camping dapat menggunakan tenda disana.
                                Pantai Tanjung Bayur menyediakan berbagai macam wahana seperti wahana perahu, ATV, banana boat dan standing paddle.</br> </p>

                             
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="assets/bahari/stbkmp.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Susur Teluk Balikpapan Kapal Mahligai Phinisi</h2>
                            <p class="description">
                                <br>Pengelola: Swasta</br>
                                <br>Alamat: Jl. Pangeran Suryanata, Batu Ampar, Balikpapan Utara, Balikpapan City, East Kalimantan 76136</br> 
                                
                                <br>Pemerintah Kota Balikpapan telah memperkenalkan wisata bahari baru yang bisa jadi alternatif wisatawan yaitu wisata
                                menyusuri teluk balikpapan menggunakan kapal phinisi. Selain menyaksikan pemandangan indah selama 3 jam, wisatawan juga
                                akan dihibur dengan live music dan menikmati makanan yang disediakan.
                                </br> </p>

                             
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="assets/bahari/jssb.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Jet Ski Safari Balikpapan
                            </h2>
                            <p class="description">
                                <br>Pengelola: Swasta</br>
                                <br>Alamat: Jl. Jend. Sudirman, Kel. Klandasan Ilir, Kec. Balikpapan Kota</br> 
                                
                                <br>Wahana ini menyediakan beberapa paket safari mulai dari paket pemula (didampingi oleh tour guide dengan area jelajah di
                                sekitar borneo bay), kemudian paket lintas laut untuk merasakan sensasi melompati ombak hingga pulau gusung, selain itu
                                tersedia paket menuju gerbang IKN dan area mangrove.</br> </p>

                             
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next4 swiper-navBtn"></div>
            <div class="swiper-button-prev4 swiper-navBtn"></div>
            <div class="swiper-pagination"></div>
        </div>
    </div>

    <div style="text-align: center;"><h2><b>Wisata Belanja</b></h2>
        <div class="slide-container swiper" id="belanja">
            <div class="slide-content5">
                <div class="card-wrapper swiper-wrapper">
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="assets/belanja/piks.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Pasar Inpres Kebun Sayur</h2>
                            <p class="description">
                                <br>Pengelola: Pemerintah</br>
                                <br>Alamat: Pasar Inpres Kel. Marga Sari Kec. Balikpapan Barat</br> 
                                
                                <br>Pasar Inpres Kebun Sayur menyediakan banyak kerajinan dan souvenir yang kebanyakan terbuat dari manik-manik, terdapat pula
                                batik yang memiliki corak khusus Kalimantan Timur yang dikenal dengan nama "ampiek", kerajinan tradisional Dayak dan
                                aksesoris wanita, dan produk lainnya yang terbuat dari batu permata.
                                </br> </p>

                             
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="assets/belanja/psb.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Pasar Segar Balikpapan
                            </h2>
                            <p class="description">
                                <br>Pengelola: Swasta</br>
                                <br>Alamat: Jl. Komp. Balikpapan Baru Kel. Gunung Samarinda Kec. Balikpapan Utara</br> 
                                
                                <br>Mangadopsi konsep sebagai pasar modern, Pasar Segar tidak hanya menjual keperluan sehari-hari seperti sayuran segar, ikan,
                                alat dapur tapi juga menyediakan kafe dan restoran. Selain itu hiburan seperti live music juga tersedia sampai larut malam,
                                memeriahkan suasana di cafe dan restoran yang ramai oleh pengunjung anak muda dan pekerja.</br> </p>

                             
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="assets/belanja/krb.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Komplek Ruko Bandar
                            </h2>
                            <p class="description">
                                <br>Pengelola: Swasta</br>
                                <br>Alamat: Jl. Jend. Sudirman Kel. Klandasan Ilir Kec. Balikpapan Kota</br> 
                                
                                <br>Terletak di pusat kota, kawasan ini penuh dengan restoran dan kafe eksklusif yang menawarkan menu beragam. Sebagian besar
                                tempat berkumpul berada di pinggir pantai sehingga pengunjungdapat melihat pemandangan yang indah dari teluk Balikpapan</br> </p>

                             
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="assets/belanja/gj.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Gulung Janebora</h2>
                            <p class="description">
                                <br>Pengelola: Swasta</br>
                                <br>Alamat: Jl. Jend. Sudirman, Kel. Damai, Kec. Balikpapan Kota</br> 
                                
                                <br>Gulung Jenebora merupakan toko yang menyediakan ragam oleh oleh Balikpapan yang enak, sehat, serta bervariasi. Tersedia
                                banyak produk olahan UMKM di outlet ini yang dapat menjadi pilihan untuk wisatawan bawa.</br> </p>

                             
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next5 swiper-navBtn"></div>
            <div class="swiper-button-prev5 swiper-navBtn"></div>
            <div class="swiper-pagination"></div>
        </div>
    </div>

    <div style="text-align: center;"><h2><b>Wisata Kuliner</b></h2>
        <div class="slide-container swiper" id="kuliner">
            <div class="slide-content6">
                <div class="card-wrapper swiper-wrapper">
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="assets/kuliner/m.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Melawai</h2>
                            <p class="description">
                                <br>Pengelola: Swasta</br>
                                <br>Alamat: Jl. Jend. Sudirman Kel. Prapatan Kec. Balikpapan Kota</br> 
                                
                                <br>Terletak di pusat kota menjadikan tempat ini menjadi pilihan alternatif untuk menghabiskan sisa harimu dengan menyaksikan
                                matahari terbenam. Ditempat ini, pengunjung bisa memilih beberapa makanan lokal dengan harga terjangkau.</br> </p>

                             
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="assets/kuliner/gcfc.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Grand City Food Center</h2>
                            <p class="description">
                                <br>Pengelola: Swasta</br>
                                <br>Alamat: Komp Grand City Kelurahan Batu Ampar Kecamatan Balikpapan Utara</br> 
                                
                                <br>Grand City Food Center merupakan tempat wisata kuliner baru bagi warga Balikpapan. Dibangun diatas lahan seluas 1 ha, sudah
                                terdapat 58 tentant yang terdiri dari 30 kios dan 28 food stall. Nantinya, pusat kuliner ini akan terkoneksi dengan danau buatan
                                seluas 6 ha di kawasan Grand City dengan kedalaman 4 meter yang dilengkapi dengan fasilitas area parkir untuk menampung
                                ratusan kendaraan pengunjung</br> </p>

                             
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="assets/kuliner/rd.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name"> Restoran Dandito</h2>
                            <p class="description">
                                <br>Pengelola: Swasta</br>
                                <br>Alamat: : Jl. Marsma Iswahyudi Kel. Sungai Nangka</br> 
                                
                                <br>Restoran Dandito merupakan tempat makan seafood yang terkenal di Balikpapan. Restoran ini terkenal dengan menu olahan
                                kepiting khususnya kepiting saos dandito yang menjadi menu paling populer oleh wisatawan.</br> </p>

                             
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="assets/kuliner/rkk.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Restoran Kepiting Kenari</h2>
                            <p class="description">
                                <br>Pengelola: Swasta</br>
                                <br>Alamat: Jl. Marsma Iswahyudi Kel. Sungai Nangka</br> 
                                
                                <br>Restoran Kepiting Kenari menyediakan varian menu olehan kepiting yaitu Kepiting Saus Tiram, Kepiting Tanco, Kepiting Rebus,
                                Kepiting Goreng, Kepiting Kenari dan menu seafood lainnya.</br> </p>

                             
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="assets/kuliner/rmt.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Rumah Makan Torani
                            </h2>
                            <p class="description">
                                <br>Pengelola: Swasta</br>
                                <br>Alamat: Jl. Jend. Sudirman, Kel. Gn. Bahagia, Kec. Balikpapan Selatan</br> 
                                
                                <br>Rumah Makan Torani adalah rumah makan dengan menu seafood yang cocok untuk keluarga dan teman dengan harga cukup
                                terjangkau. Rumah makan ini memiliki berbagai macam menu seafood dengan menu khas atau yang paling populer adalah ikan
                                bandeng tanpa tulang.
                                </br> </p>

                             
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next6 swiper-navBtn"></div>
            <div class="swiper-button-prev6 swiper-navBtn"></div>
            <div class="swiper-pagination"></div>
        </div>
    </div> 
    
    <div style="text-align: center;">
      <div class="slide-container swiper" id="ikan">
        <br><h1>SEKTOR PERIKANAN</h1>
          <div class="slide-content7">
              <div class="card-wrapper swiper-wrapper">
                  <div class="card swiper-slide">
                      <div class="image-content">
                          <span class="overlay"></span>

                          <div class="card-image">
                              <img src="assets/ikan/laut.jpg" alt="" class="card-img">
                          </div>
                      </div>

                      <div class="card-content">
                          <h2 class="name">Budidaya air laut</h2>
                          <p class="description">
                              <br>Potensi Lahan: 200 ha</br>
                              <br>Lahan produktif: 89,4 ha</br> 
                              <br>Komoditas: Rumput laut (Eucheuma cottonii)</br>
                              <br>Pembudidaya: 16 orang (KUSUKA)</br>
                              <br>Pembudidaya: 30 orang</br>
                              <br>Pembudidaya Ikan: 4 kelompok (Nestapa, Sumber Laut Berjaya, Sinar Jaya dan Mina Barokah Teritip)</br>
                              <br>Produksi Perikanan Budidaya Air Laut tahun 2022: 325,40 Ton</br>
                          </p>
                      </div>
                  </div>
                  <div class="card swiper-slide">
                      <div class="image-content">
                          <span class="overlay"></span>

                          <div class="card-image">
                              <img src="assets/ikan/payau.jpg" alt="" class="card-img">
                          </div>
                      </div>

                      <div class="card-content">
                        <h2 class="name">Budidaya air payau</h2>
                        <p class="description">
                            <br>Potensi Lahan: 905 ha</br>
                            <br>Lahan produktif: 206,25 ha</br> 
                            <br>Komoditas: Ikan Bandeng, Udang Windu, Udang Vaname dan Kepiting Soka</br>
                            <br>Pembudidaya: 74 orang (KUSUKA)</br>
                            <br>Pembudidaya Ikan: 9 kelompok, 190 pembudidaya (Mohodon Jaya, Tani Tambak Mandiri, Tunas Harapan, Slok Lay Sejahtera, Wisata
                            Mina Bahari, Wisata Madani, Soka Teritip Kaltim, Soka Teritip Mandiri dan Soka Teritip Sejahtera)
                            </br>
                            <br>Produksi Perikanan Budidaya Air Laut tahun 2022: 79,54 Ton</br>
                        </p>
                    </div>
                  </div>
                  <div class="card swiper-slide">
                      <div class="image-content">
                          <span class="overlay"></span>

                          <div class="card-image">
                              <img src="assets/ikan/tawar.jpg" alt="" class="card-img">
                          </div>
                      </div>

                      <div class="card-content">
                        <h2 class="name">Budidaya air tawar</h2>
                        <p class="description">
                            <br>Potensi Lahan: 100 ha</br>
                            <br>Lahan produktif: 51,4 ha</br> 
                            <br>Komoditas: Ikan Lele, Ikan Nila, Ikan Gurame</br>
                            <br>Pembudidaya: 82 orang (KUSUKA)</br>
                            <br>Pembudidaya: 30 orang</br>
                            <br>Pembudidaya Ikan: 8 kelompok (Karya Mandiri, Gurame Mandiri, Karya Sejahtera, Lele Batakan, Clarias Sp. Suri Tani Makmur)</br>
                            <br>Produksi Perikanan Budidaya Air Laut tahun 2022: 143,39 Ton</br>
                        </p>
                    </div>
                  </div>
              </div>
          </div>
          <div class="swiper-button-next7 swiper-navBtn"></div>
            <div class="swiper-button-prev7 swiper-navBtn"></div>
          <div class="swiper-pagination"></div>
      </div>
  </div>

  <div style="text-align: center;">
    <div class="slide-container swiper" id="industri">
      <br><h1>SEKTOR INDUSTRI</h1>
        <div class="slide-content8">
            <div class="card-wrapper swiper-wrapper">
                <div class="card swiper-slide">
                    <div class="image-content">
                        <span class="overlay"></span>

                        <div class="card-image">
                            <img src="assets/industri/besar.jpg" alt="" class="card-img">
                        </div>
                    </div>

                    <div class="card-content">
                        <h2 class="name">Industri besar</h2>
                        <p class="description">
                            <br>Kawasan Industri ini dilengkapi dengan kawasan kilang, pelabuhan, perkantoran dan perumahan karyawan. Kawasan industri ini
                            terletak di wilayah Kecamatan Balikpapan Selatan, Balikpapan Barat dan Balikpapan Tengah. Refinery Unit (RU) V Balikpapan
                            merupakan salah satu Unit Bisnis Direktorat Pengolahan Pertamina yang produknya disalurkan ke kawasan Indonesia bagian Timur
                            yang merupakan 2/3 dari NKRI dan beberapa produk disalurkan ke Indonesia bagian Barat dan diekspor. Sejak pertama kali dibangun
                            RU V telah mengalami beberapa kali perbaikan guna meningkatkan margin & kapasitas produksi. Produk-produk yang sesuai dengan
                            Service Level Agreement (SLA) yaitu meliputi Bahan Bakar Minyak/BBM (Premium, Kero, Solar, Pertadex & Pertamax), Non Bahan
                            Bakar Minyak/NBBM (Smooth Fluid 05), dan LPG. Seluruh produk yang dihasilkan digunakan untuk memasok kebutuhan dalam
                            negeri khususnya wilayah Indonesia Bagian Timur.</br>
                            <br>Refinery Unit V memiliki kapasitas pengolahan minyak mentah 260 MBSD setara 25 %dari kapasitas intake nasional dan market
                            share BBM 15,6 % skala nasional. Kapasitas kilang RU V ditargetkan untuk dikembangkan menjadi 360 MBSD melalui Program RDMP
                            yang mentransformasi kilang Pertamina dalam empat aspek: Crude Flexibility, Profitability,Energy Security, dan Product Quality.
                            Hasilnya, RU V tak hanya berhasil mencapai target kuantitas produksi, namun juga dari segi kualitas.
                            </br> 
                        </p>
                    </div>
                </div>
                <div class="card swiper-slide">
                    <div class="image-content">
                        <span class="overlay"></span>

                        <div class="card-image">
                            <img src="assets/industri/menegah.jpg" alt="" class="card-img">
                        </div>
                    </div>

                    <div class="card-content">
                      <h2 class="name">Industri Menengah</h2>
                      <p class="description">
                          <br><b>a) Kawasan Industri Batakan Ringan-Sedang (Non Polutif)</b></br>
                          <br>Sebagian dari rencana kawasan industri ini merupakan pengembangan kawasan industri yang sudah ada. Kawasan industri
                          ini khusus dimanfaatkan untuk usaha berupa penyewaan kantor, pergudangan, workshop dan sebagian murni kegiatan
                          industri. Kawasan industri ini tidak bersifat mencemari lingkungan/non polutif</br> 
                          <br>• Lokasi : Kelurahan Sepinggan, Kecamatan Balikpapan Selatan dan Kelurahan Manggar, Kecamatan Balikpapan Timur
                          <br>• Luas : 329,01 Ha
                          <br>• Jenis fungsi : Industri/pabrik, pergudangan, workshop, perkantoran dan perumahan
                          <br>• Kategori : Industri Ringan – Sedang (Non Polutif) </br>

                          <br><b>b) Kawasan Industri Perkebunan/KIBUN (Non Polutif)</b></br>

                          <br>Kawasan industri ini merupakan kawasan industri pengolahan hasil pertanian dan perkebunan untuk mengantisipasi
                          mempersiapkan implementasi pengembangan Kota Balikpapan sebagai kota jasa dan industri di masa mendatang.</br>
                          <br>• Lokasi : Kelurahan Lamaru dan Kelurahan Teritip Kecamatan Balikpapan Timur
                          <br>• Luas : 2.387,13 Ha
                          <br>• Jenis fungsi : Industri/pabrik, pergudangan, workshop, perkantoran dan perumahan.
                          <br>• Kategori : Industri Ringan – Sedang (Non Polutif)                          
                      </p>
                  </div>
                </div>
                <div class="card swiper-slide">
                  <div class="image-content">
                      <span class="overlay"></span>

                      <div class="card-image">
                          <img src="assets/industri/menegah.jpg" alt="" class="card-img">
                      </div>
                  </div>

                  <div class="card-content">
                    <h2 class="name">Industri Terpadu</h2>
                    <p class="description">
                        <br>Kawasan ini untuk memenuhi kebutuhan akan kawasan industri Kota Balikpapan dalam menyongsong Balikpapan sebagai kota
                        Industri dan jasa. Kawasan industri ini merupakan kawasan industri berat – polutif yang menampung berbagai jenis industri.
                        Kawasan ini dipusatkan di Kariangau Kecamatan Balikpapan Barat yang mempunyai akses langsung ke pelabuhan dan laut.</br> 
                        <br>• Lokasi : Kelurahan Kariangau, Kecamatan Balikpapan Barat
                        <br>• Luas : 1.155,94 Ha
                        <br>• Jenis fungsi : Industri/pabrik, pergudangan, workshop, perkantoran dan perumahan.
                        <br>• Kategori : Industri Berat (Polutif)
                        
                    </p>
                </div>
              </div>
              <div class="card swiper-slide">
                <div class="image-content">
                    <span class="overlay"></span>

                    <div class="card-image">
                        <img src="assets/industri/kecil.jpg" alt="" class="card-img">
                    </div>
                </div>

                <div class="card-content">
                  <h2 class="name">Industri Kecil</h2>
                  <p class="description">
                      <br>Sentra industri kecil di Kota Balikpapan sebagian besar merupakan industri rumah tangga seperti pembuatan batu bata dan batako
                      serta industri pembuatan tahu tempe. Terdapat 2 (dua) sentra industri kecil yaitu Sentra Industri Kecil Somber (SIKS) dan Sentra
                      Industri Kecil Teritip (SIKT). Sentra industri kecil pembuatan tahu tempe atau Sentra Industri Kecil Somber (SIKS) terletak di daerah
                      Somber, Kelurahan Muara Rapak Kecamatan Balikpapan Utara. Sedangkan sentra industri kecil pembuatan batako berada di
                      Kelurahan Karang Joang Kecamatan Balikpapan Utara.</br> 
                      <br>Pembangunan sektor industri di Sentra Industri Teritip diarahkan untuk mendorong terciptanya struktur ekonomi yang seimbang dan
                      kokoh yang pada saatnya nanti akan menjadi landasan yang kuat untuk tumbuh dan berkembang dengan kekuatan sendiri. Kegiatan
                      yang akan berada di dalamnya dapat digolongkan menjadi 3 klaster yaitu industri kecil, industri mikro dan kerajinan. Beberapa
                      kegiatan non industri yang akan dikembangkan adalah fasilitas akomodasi untuk pengunjung kawasan industri, kegiatan komersial
                      dan jasa, perkantoran, Bangunan galeri dan pusat inovasi serta kegiatan penunjang lainnya yang diharapkan dapat mendukung
                      kegiatan industri yang ada di Sentra Industri Teritip.</br>
                      
                  </p>
              </div>
            </div>
            </div>
        </div>
        <div class="swiper-button-next8 swiper-navBtn"></div>
            <div class="swiper-button-prev8 swiper-navBtn"></div>
        <div class="swiper-pagination"></div>
    </div>
</div>

<div style="text-align: center;">
  <div class="slide-container swiper" id="darat">
    <br><h1>SEKTOR TRANSPORTASI</h1>
    <br><h2><b>Darat</b></h2>
      <div class="slide-content9">
          <div class="card-wrapper swiper-wrapper">
              <div class="card swiper-slide">
                  <div class="image-content">
                      <span class="overlay"></span>

                      <div class="card-image">
                          <img src="assets/transportasi/terminal1.png" alt="" class="card-img">
                      </div>
                  </div>

                  <div class="card-content">
                      <h2 class="name">Terminal Tipe A & C</h2>
                      <p class="description">
                        <br>Terminal Tipe A (Terminal Batu Ampar) dan Terminal Tipe C (Terminal Batu Ampar), berada di Kelurahan Batu Ampar Kecamatan
                        Balikpapan Utara.
                  </div>
              </div>
              <div class="card swiper-slide">
                  <div class="image-content">
                      <span class="overlay"></span>

                      <div class="card-image">
                          <img src="assets/transportasi/terminal2.png" alt="" class="card-img">
                      </div>
                  </div>

                  <div class="card-content">
                      <h2 class="name"><br>Terminal Balikpapan Permai
                        <br>(BP/Damai)</h2>
                      <p class="description">
                          <br>Terminal Balikpapan Permai (BP/ Damai) ini bukan terminal yang diizinkan oleh
                          pemerintah, tempat ini hanya tempat pertemuan 4 angkutan kota (trayek 2A, trayek 5, trayek 6, dan trayek 7). Namun terminal
                          tersebut tidak resmi dari pemerintah, tetapi terdapat pos jaga (Dinas Perhubungan) untuk memantau angkutan kota yang masuk
                          ke dalam terminal tersebut.</br>
                          </p>

                       
                  </div>
              </div>
              <div class="card swiper-slide">
                <div class="image-content">
                    <span class="overlay"></span>

                    <div class="card-image">
                        <img src="assets/transportasi/terminal3.png" alt="" class="card-img">
                    </div>
                </div>

                <div class="card-content">
                    <h2 class="name"><br>Terminal Kampung Baru (Putaran Angkot Kampung Baru)</h2>
                    <p class="description">
                        <br>Terminal Kampun Baru (Putaran Angkot Kampung Baru) terletak di depan pintu masuk Pelabuhan Klotok Kampung Baru.
                        Terminal ini hanya untuk putaran angkot di Pelabuhan Klotok Kampung Baru dan tempat pertemuan 3 angkutan kota (trayek 1,
                        trayek 5, dan trayek 6).</br>
                        </p>                     
                </div>
            </div>
          </div>
      </div>
      <div class="swiper-button-next9 swiper-navBtn"></div>
            <div class="swiper-button-prev9 swiper-navBtn"></div>
      <div class="swiper-pagination"></div>
  </div>
</div>

<div style="text-align: center;">
  <div class="slide-container swiper" id="laut">
    <br><h2><b>Laut</b></h2>
    <p><h4>1. Angkutan penyeberangan Balikpapan - Penajam Paser Utara, dengan didukung oleh sejumlah kapal yaitu :</h4>
      Kapal Ferry, Kapal Long Boat (Itchi), Kapal Klotok, Speed Boat</p>
      <p><h4>2. Angkutan penyeberangan Balikpapan – Mamuju</h4></p>
      <div class="slide-content10">
          <div class="card-wrapper swiper-wrapper">
              <div class="card swiper-slide">
                  <div class="image-content">
                      <span class="overlay"></span>

                      <div class="card-image">
                          <img src="assets/transportasi/laut1.png" alt="" class="card-img">
                      </div>
                  </div>

                  <div class="card-content">
                      <h2 class="name">Pelabuhan Kampung Baru</h2>
                      <p class="description">
                        <br>Pelabuhan Kampung Baru berada di Jl 21 Januari, Baru Tengah, Kec. Balikpapan Barat, Kota Balikpapan. Pelabuhan ini adalah
                        pelabuhan yang digunakan untuk menyebrang ke Kabupaten Penajam Paser Utara. Di pelabuhan ini terdapat 4 (empat)
                        dermaga, tiga diantaranya diperuntukkan kapal besar atau kapal klotok dan 1 (satu) dermaga untuk berlabuhnya speedboat.
                        Pelabuhan kampung baru jika di bandingkan dengan Pelabuhan Semayang, pelabuhan ini terlihat lebih kecil dan lebih kuno
                        dikarenakan bangunannya menggunakan kayu. Jalan menuju dermaga melewati samping Pasar Terapung Kampung Baru Tengah.
                        Diaera jalan menuju dermaga belum tersedia jalan untuk pejalan kaki dan kendaraan bermotor dan didermaganya pun tidak ada
                        jalan khusus untuk menaik turunkan penumpang.
                  </div>
              </div>
              <div class="card swiper-slide">
                <div class="image-content">
                    <span class="overlay"></span>

                    <div class="card-image">
                        <img src="assets/transportasi/laut2.jpg" alt="" class="card-img">
                    </div>
                </div>

                <div class="card-content">
                    <h2 class="name">Pelabuhan Ferry Kariangau/ Pelabuhan Penyeberangan Kariangau</h2>
                    <p class="description">
                      <br>Pelabuhan Ferry Kariangau adalah pelabuhan yang terletak di Jl Sultan Hasanuddin, Kariangau, Balikpapan. Pelabuhan ini dimiliki
                      oleh Ditjen Hubdat – Kementrian Perhubungan, dan dikelola oleh UPT. Pelabuhan Penyebrangan Kariangau Balikpapan.
                      Pelabuhan ini melayani penyeberangan ke arah Penajam, Palu, dan Mamuju.
                </div>
            </div>
            <div class="card swiper-slide">
              <div class="image-content">
                  <span class="overlay"></span>

                  <div class="card-image">
                      <img src="assets/transportasi/laut3.jpg" alt="" class="card-img">
                  </div>
              </div>

              <div class="card-content">
                  <h2 class="name">Pelabuhan Somber</h2>
                  <p class="description">
                    <br>Pelabuhan Somber ini dikenal sebagai Pelabuhan Eks Somber sudah berhenti beroperasi sejak tahun 2004 dikarenakan sengketa
                    lahan. Pelabuhan Somber ini terletak di Jl Suryanata, Batu Ampar, Balikpapan Utara yang tidak jauh dari pusat Kota Balikpapan,
                    sehingga bila pelabuhan ini jika beroberasi kembali perekonomian Kota Balikpapan akan bertumbuh. Pelabuhan ini dianggap
                    masih layak oleh pemerintah untuk beroperasi kembali dan akan berfungsi sebagai pelabuhan ferry jurusan Balikpapan –
                    Mamuju Sulawesi Barat sekaligus pelabuhan untuk bongkar muat sembako.
              </div>
          </div>
          <div class="card swiper-slide">
            <div class="image-content">
                <span class="overlay"></span>

                <div class="card-image">
                    <img src="assets/transportasi/laut4.jpg" alt="" class="card-img">
                </div>
            </div>

            <div class="card-content">
                <h2 class="name">Pelabuhan Internasioal Semayang di Kel. Prapatan</h2>
                <p class="description">
                  <br>Pelabuhan Semayang adalah pelabuhan umum untuk kedatangan dan keberangkatan kapal laut di Kota Balikpapan. Pelabuhan
                  Semayang terletak di Jl. Yos Sudarso No. 30, Kelurahan Prapatan, Kecamatan Balikpapan Selatan, Kota Balikpapan. Pelabuhan ini
                  dapat dijangkau menggunakan angkutan umum dari Terminal BP/ Damai. Pelabuhan tersebut adalah pelabuhan yang paling
                  sibuk di Balikpapan karena merupakan pelabuhan barang dan penumpang ke kota-kota bagian barat Indonesia.Pada kondisi eksisting di Pelabuhan Semayang belum mempunyai area pergudangan dan lapangan penumpukan kurang luas
                  apabila digunakan sebagai pelabuhan logistik selama masa konstruksi di IKN. Begitu pula dengan jarak antara pelabuhan dengan
                  IKN yang melalui jalan Nasional Exixting kondisi saat ini sudah padat, karena akan adanya pertambahan pergerakan lalu lintas
                  maka akan menambah beban lalu lintas. Beban lalu lintas bertambah dikarenakan bertambahnya pergerakan truk untuk
                  mobilisasi peralatan dan material konstruksi selama masa pembangunan IKN. Maka dari itu, harus membangun jalan baru
                  sepanjang 31,5km dan jembatan dengan bentang 180m dan 100m.      
            </div>
        </div>
        <div class="card swiper-slide">
          <div class="image-content">
              <span class="overlay"></span>

              <div class="card-image">
                  <img src="assets/transportasi/laut5.jpg" alt="" class="card-img">
              </div>
          </div>

          <div class="card-content">
              <h2 class="name">Pelabuhan Peti Kemas Kariangau (PT. Kaltim Kariangau Terminal)</h2>
              <p class="description">
                <br>Pelabuhan Peti Kemas Kariangau (PT. Kaltim Kariangau Terminal) merupakan pelabuhan kapal angkutan barang yang terletak
                dibagian barat Kota Balikpapan, serta keluar masuk komoditi perdagangan serta gerbang masuk material proyek infrastruktur
                Kalimantan Timur, secara administratif merupakan bagian dari Kota Balikpapan. Alur pelayaran domestik dan internasional
                cukup panjang dengan jarak > 300 Km dari pelabuhan barang domestik. Waktu pelayanan Pelabuhan Peti Kemas Kariangau
                adalah 24jam/ 7hari. Komoditi hinterland yang menonjol berasal dari sektor pertanian dengan berbagai jenis produksi antara
                lain hasil perkebunan, kehutanan dan tanaman pangan. Pengembangan hinterlandnya mengarah ke sektor industri dan perkebunan kelapa sawit. Namun demikian bila ditinjau dari lokasinya, pengembangan pelabuhan yang terletak di tepi Kota
                Balikpapan ini akan memungkinkan dilakukan karena kendala lahan yang jauh dari pusat kegiatan masyarakat . Secara umum
                pelabuhan ini melayani rute konektivitas TPK domestik dan internasional, yang mana dalam menjalankan kegiatannya tersebar
                dalam beberapa lokasi yaitu kategori umum yaitu Pelabuhan Komoditas barang yang ada di Pelabuhan PT kaltim Kariangau
                didominasi oleh barang-barang antar pulau yang terdiri dari pertambangan , perkebunan , pertanian , serta komoditas pangan
                lainnya.
          </div>
      </div>
          </div>
      </div>

      <div class="swiper-button-next10 swiper-navBtn"></div>
            <div class="swiper-button-prev10 swiper-navBtn"></div>
      <div class="swiper-pagination"></div>
  </div>
</div>

<div style="text-align: center; margin-top: -350px;">
    <div class="slide-container swiper" id="udara">
      <br><h2><b>Udara</b></h2>
        <div class="slide-content11">
            <div class="card-wrapper swiper-wrapper">
                <div class="card swiper-slide">
                    <div class="image-content">
                        <span class="overlay"></span>
  
                        <div class="card-image">
                            <img src="assets/transportasi/bandara1.jpg" alt="" class="card-img">
                        </div>
                    </div>
  
                    <div class="card-content">
                        <h2 class="name">Bandara SAM Sepinggan</h2>
                        <p class="description">
                          <br>Bandara SAM Sepinggan (Sepinggan International Airport) adalah bandara domestik dan internasional untuk Balikpapan, Kalimantan Timur.Bandara ini dioperasikan oleh PT. Angkasa Pura I dan dibuka pada tanggal 6 Agustus 1997. Bandara ini memiliki luas 300 hektar dan merupakan bandar udara ke-4 terbesar dari 13 bandara yang dikelola PT. Angkasa Pura I. Untuk mendukung keselamatan operasi penerbangan maka pembangunan infrastruktur di Kota Balikpapan supaya mempertimbangkan wilayah KKOP (Kawasan Keselamatan Operasi Penerbangan).
                    </div>
                </div>
                <div class="card swiper-slide">
                  <div class="image-content">
                      <span class="overlay"></span>
  
                      <div class="card-image">
                          <img src="assets/transportasi/bandara2.jpg" alt="" class="card-img">
                      </div>
                  </div>
  
                  <div class="card-content">
                      <h2 class="name">Bandara</h2>
                      <p class="description">
                        <br>Jakarta adalah terbesar yang dilayani dari BPN, diikuti oleh Surabaya dan Tarakan di Kalimantan Utara. Secara umum karena posisinya sebagai pusat ekonomi dan bisnis di tengah Kalimantan Timur, BPN memiliki jaringan domestik yang kuat dan terkoneksi ke
                        pusat bisnis utama di negara ini. Tidak ada layanan untuk ke Sumatera. Wisatawan ke Medan misalnya, perlu terhubung Soekarno-Hatta untuk mencapai tujuan akhir mereka Selain rute domestik, BPN juga melayani sejumlah rute internasional yaitu Singapura serta Jeddah ("JED") dan Madinah ("MED") di Arab Saudi yang melayani permintaan lalu lintas Umroh. Sebelum pandemi Covid19 direncanakan akan dibuka penerbangan ke Kuala Lumpur pada tahun 2020.                        
                  </div>
              </div>
            </div>
        </div>
  
        <div class="swiper-button-next11 swiper-navBtn"></div>
        <div class="swiper-button-prev11 swiper-navBtn"></div>
        <div class="swiper-pagination"></div>
    </div>
  </div>
<footer id="footer">
</footer>
<div id="scrollToTopBtn" class="scroll-to-top-button">
    <i class="bx bx-up-arrow-alt"></i>
  </div>
        <script>
            const pariwisataLogo = document.querySelector(".logo-container");
            const perikananLogo = document.querySelector(".logo-container-perikanan");
            const industriLogo = document.querySelector(".logo-container-industri");

            const transportasiLogo = document.querySelector("#transportasi-logo");
            const transportasiPopup = transportasiLogo.querySelector("#transportasi-popup");
            const transportasiTabButtons = transportasiPopup.querySelectorAll(".tab-button");

            const popupCard = pariwisataLogo.querySelector(".popup-card");
            const tabButtons = popupCard.querySelectorAll(".tab-button");
            const slideContainer = document.querySelector(".slide-container");

            // Show/hide popup card on hover
            pariwisataLogo.addEventListener("mouseenter", () => {
                popupCard.style.display = "block";
                slideContainer.classList.add("open-popup");
            });

            pariwisataLogo.addEventListener("mouseleave", () => {
                popupCard.style.display = "none";
                slideContainer.classList.remove("open-popup");
            });

            perikananLogo.addEventListener("click", () => {
                const targetSection = document.getElementById("ikan");
                
                if (targetSection) {
                    const offset = targetSection.getBoundingClientRect().top + window.scrollY;
                    window.scrollTo({
                        top: offset - -50,
                        behavior: "smooth"
                    });
                }
            });

            industriLogo.addEventListener("click", () => {
                const targetSection = document.getElementById("industri");
                
                if (targetSection) {
                    const offset = targetSection.getBoundingClientRect().top + window.scrollY;
                    window.scrollTo({
                        top: offset - -50,
                        behavior: "smooth"
                    });
                }
            });

            // Handle tab button clicks
            tabButtons.forEach(button => {
                button.addEventListener("click", () => {
                    const targetTab = button.getAttribute("data-tab");
                    const targetSection = document.getElementById(targetTab);
                    
                    if (targetSection) {
                        const offset = targetSection.getBoundingClientRect().top + window.scrollY;
                        window.scrollTo({
                            top: offset - 80,
                            behavior: "smooth"
                        });
                        popupCard.style.display = "none";

                        slideContainer.style.marginTop = "20px"; 
                        setTimeout(() => {
                            slideContainer.style.marginTop = "0"; 
                        }, 300);
                    }
                });
            });    
            
            transportasiLogo.addEventListener("mouseenter", () => {
            transportasiPopup.style.display = "block";
            slideContainer.classList.add("open-popup");
        });

        transportasiLogo.addEventListener("mouseleave", () => {
            transportasiPopup.style.display = "none";
            slideContainer.classList.remove("open-popup");
        });

        // Handle tab button clicks for Transportasi
        transportasiTabButtons.forEach(button => {
            button.addEventListener("click", () => {
                const targetTab = button.getAttribute("data-tab");
                const targetSection = document.getElementById(targetTab);

                if (targetSection) {
                    const offset = targetSection.getBoundingClientRect().top + window.scrollY;
                    window.scrollTo({
                        top: offset - -50,
                        behavior: "smooth"
                    });

                    transportasiPopup.style.display = "none";
                }
            });
        });
        </script>
        
    </body>

    <script src="js/swiper-bundle.min.js"></script>

    <script src="js/script.js"></script>

    <script type="text/javascript">
        var currentLanguage = 'id'; 
    
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: currentLanguage,
                autoDisplay: false,
            }, 'google_translate_element');
        }
    
        function translateToIndonesian() {
            var select = document.querySelector('.goog-te-combo');
            select.value = 'id'; 
            currentLanguage = 'id';
            select.dispatchEvent(new Event('change')); 
        }
    
        function translateToOriginalLanguage() {
            var select = document.querySelector('.goog-te-combo');
            select.value = 'en';
            currentLanguage = 'en';
            select.dispatchEvent(new Event('change')); 
        }
    
        googleTranslateElementInit();
    </script>
    <script>
        window.addEventListener("scroll", function() {
        var scrollToTopButton = document.getElementById("scrollToTopBtn");

        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            scrollToTopButton.style.display = "block";
        } else {
            scrollToTopButton.style.display = "none";
        }
        });

        function scrollToTop() {
        var currentScroll = document.documentElement.scrollTop || document.body.scrollTop;

        if (currentScroll > 0) {
            window.requestAnimationFrame(scrollToTop);
            window.scrollTo(0, currentScroll - currentScroll / 40);
        }
        }

        document.getElementById("scrollToTopBtn").addEventListener("click", scrollToTop);
    </script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>DPMPTSP</title>
        <link rel="stylesheet" href="css/izin.css">
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
            <a href="investasi.php" style="--i:3">Potensi&nbsp;Investasi</a>
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
    <div class="izin">
        <div class="box-container">
            <div class="box1">
                <img src="assets/oss.png" alt="Logo" class="logo1">
                <a href="https://oss.go.id/" target="_blank" class="visit-button">Kunjungi >></a>
                <div class="box-content">
                    <p class="box-title">Perizinan Online(OSS)</p>
                    <p class="box-description">Sistem perizinan berusaha terintegrasi secara elektronik yang dikelola oleh Lembaga OSS(BKPM)</p>
                </div>
            </div>
            <div class="box2">
                <img src="assets/asda-removebg-preview.png" alt="Logo" class="logo1">
                <a href="http://investasi.balikpapan.go.id/perijinan" target="_blank" class="visit-button">Kunjungi >></a>
                <div class="box-content">
                    <p class="box-title">Informasi Perizinan</p>
                    <p class="box-description">Informasi Persyaratan, Download Form, Standar Pelayanan</p>
                </div>
            </div>
            <div class="box3">
                <img src="assets/asda-removebg-preview.png" alt="Logo" class="logo1">
                <a href="http://investasi.balikpapan.go.id/lacak" target="_blank" class="visit-button">Kunjungi >></a>
                <div class="box-content">
                    <p class="box-title">Lacak Perizinan</p>
                    <p class="box-description">Pencarian Status Perizinan Online</p>
                </div>
            </div>
            <div class="box4">
                <img src="assets/spontan-removebg-preview.png" alt="Logo" class="logo2">
                <a href="http://perijinan.balikpapan.go.id/backoffice/pendaftaranakun/web/loginonline" target="_blank" class="visit-button">Kunjungi >></a>
                <div class="box-content">
                    <p class="box-title">SPONTAN</p>
                    <p class="box-description">Sistem Pendaftaran Online Tanpa Antrian</p>
                </div>
            </div>
        </div>
    </div>

    <div class="blue-background">
        <button class="publikasi-button">Publikasi</button>
        <div class="line-and-text">
            <div class="white-line"></div>
            <div class="klbi-section">
                <p class="klbi-text">KBLI 2020</p>
                <a href="https://staticwebdigireg.sgp1.digitaloceanspaces.com/dpmpt_files/publikasi/1_KBLI-2020.PDF" class="download-logo"><img src="assets/download.png" alt="Download"></a>
            </div>
        </div>
        <div class="line-and-text">
            <div class="white-line"></div>
            <div class="klbi-section">
                <p class="klbi-text">ASSESSMENT KLINIK</p>
                <a href="https://staticwebdigireg.sgp1.digitaloceanspaces.com/dpmpt_files/publikasi/2_Assessment_klinik.XLSX" class="download-logo"><img src="assets/download.png" alt="Download"></a>
            </div>
        </div>
        <div class="line-and-text">
            <div class="white-line"></div>
            <div class="klbi-section">
                <p class="klbi-text">USER MANUAL SURAT IZIN PRAKTEK VIA SPONTAN </p>
                <a href="https://staticwebdigireg.sgp1.digitaloceanspaces.com/dpmpt_files/publikasi/3_user_manual_SPONTAN_SIP.PDF" class="download-logo"><img src="assets/download.png" alt="Download"></a>
            </div>
        </div>
        <div class="line-and-text">
            <div class="white-line"></div>
            <div class="klbi-section">
                <p class="klbi-text">FORM PENGHAPUSAN KBLI </p>
                <a href="https://staticwebdigireg.sgp1.digitaloceanspaces.com/dpmpt_files/publikasi/4_Surat_Pernyataan_Permohonan_Penghapusan_KBLI.DOCX" class="download-logo"><img src="assets/download.png" alt="Download"></a>
            </div>
        </div>
        <div class="line-and-text">
            <div class="white-line"></div>
            <div class="klbi-section">
                <p class="klbi-text">FORM PENCABUTAN NIB </p>
                <a href="https://staticwebdigireg.sgp1.digitaloceanspaces.com/dpmpt_files/publikasi/5_Surat_Pernyataan_Permohonan_Pencabutan_NIB.DOCX" class="download-logo"><img src="assets/download.png" alt="Download"></a>
            </div>
        </div>
        <div class="line-and-text">
            <div class="white-line"></div>
            <div class="klbi-section">
                <p class="klbi-text">FORM PENGISIAN OSS </p>
                <a href="https://staticwebdigireg.sgp1.digitaloceanspaces.com/dpmpt_files/publikasi/6_FORM_OSS.PDF" class="download-logo"><img src="assets/download.png" alt="Download"></a>
            </div>
        </div>
        <div class="line-and-text">
            <div class="white-line"></div>
            <div class="klbi-section">
                <p class="klbi-text">FORM PERUBAHAN DATA </p>
                <a href="https://staticwebdigireg.sgp1.digitaloceanspaces.com/dpmpt_files/publikasi/7_Surat_Perubahan_Data_OSS1.DOCX" class="download-logo"><img src="assets/download.png" alt="Download"></a>
            </div>
        </div>
        <div class="line-and-text">
            <div class="white-line"></div>
            <div class="klbi-section">
                <p class="klbi-text">FORM HAPUS AKUN EMAIL REGISTRASI </p>
                <a href="https://staticwebdigireg.sgp1.digitaloceanspaces.com/dpmpt_files/publikasi/8_Surat_Ubah_Registrasi_OSS1.DOCX" class="download-logo"><img src="assets/download.png" alt="Download"></a>
            </div>
        </div>
        <div class="line-and-text">
            <div class="white-line"></div>
            <div class="klbi-section">
                <p class="klbi-text">KBLI 2017 TERPADU </p>
                <a href="https://staticwebdigireg.sgp1.digitaloceanspaces.com/dpmpt_files/publikasi/9_KBLI-2017-terbaru.PDF" class="download-logo"><img src="assets/download.png" alt="Download"></a>
            </div>
        </div>
        <div class="line-and-text">
            <div class="white-line"></div>
            <div class="klbi-section">
                <p class="klbi-text">PENGADUAN REGISTRASI ONLINE </p>
                <a href="https://staticwebdigireg.sgp1.digitaloceanspaces.com/dpmpt_files/publikasi/10_Registrasi_OSS1.PDF" class="download-logo"><img src="assets/download.png" alt="Download"></a>
            </div>
        </div>
        <div class="line-and-text">
            <div class="white-line"></div>
            <div class="klbi-section">
                <p class="klbi-text">PERATURAN PRESIDEN NO. 97 TAHUN 2014 - TENTANG PENYELENGGARAAN PELAYANAN TERPADU SATU PINTU </p>
                <a href="https://staticwebdigireg.sgp1.digitaloceanspaces.com/dpmpt_files/publikasi/11_PERPRES_97_2014.PDF" class="download-logo"><img src="assets/download.png" alt="Download"></a>
            </div>
        </div>
        <div class="line-and-text1">
            <div class="white-line1"></div>
            <br>
            <br>

            <br>
            <br>
            </div>
        </div>
        <div id="scrollToTopBtn" class="scroll-to-top-button">
            <i class="bx bx-up-arrow-alt"></i>
          </div>

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
            window.scrollTo(0, currentScroll - currentScroll / 20);
        }
        }

        document.getElementById("scrollToTopBtn").addEventListener("click", scrollToTop);
    </script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>DPMPTSP</title>
        <link rel="stylesheet" href="css/peluang.css">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link rel="shortcut icon" type="image/png" href="assets/logo.png">
        <style>
            table {
                border-collapse: collapse;
                width: 100%;
            }

            .kanan th{
                padding: 1px;
                text-align: left;
                vertical-align: top;
                line-height: 0  ;
            }
            .kanan td {
                padding: 1px;
                text-align: left;
                vertical-align: top;
            }
        
            th, td {
                padding: 10px;
                text-align: left;
                vertical-align: top;
            }
        </style>
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

    <div class="container">
        <div class="section" id="coastalRoad">
            <h1 style="color: rgb(255, 92, 0);">Coastal Road</h1>
            <div class="bisnis" style="color: rgb(255, 92, 0);">
                <h1>kawasan bisnis</h1>
            </div>
        </div>
        <div class="section">
            <p id="informasiTambahan">Kawasan sepanjang jalan Jendral Sudirman ini, di prediksi akan menjadi kawasan bisnis yang paling menjanjikan dalam lima tahun ke depan. Balikpapan tengah bersiap menjadi waterfront city pertama di Kalimantan. <i style="color: rgb(255, 92, 0);">#Infrastruktur</i></p>
            <button class="selengkapnya-button">Selengkapnya</button>
        </div>
        <div class="section ">
            <div class="section" id="coastalTabel">
                <table class="kanan" style="width: 385px; margin-bottom: 30px;" border="0">
                    <tr>
                        <th><img src="assets/peluang/next.png" alt="1" width="30px" height="auto"></th>
                        <td>Lokasi</td>
                    </tr>
                     <tr>
                        <th></th>
                        <td>Kawasan di sepanjang Jalan Jendral Sudirman</td>
                    </tr>
                    <tr>
                        <th><img src="assets/peluang/next.png" alt="1" width="30px" height="30px"></th>
                        <td>Luas Lahan</td>
                    </tr>
                     <tr>
                        <th></th>
                        <td>323,9 Ha</td>
                    </tr>
                    <tr>
                    <tr>
                        <th><img src="assets/peluang/next.png" alt="1" width="30px" height="30px"></th>
                        <td>Estimasi Nilai Investasi</td>
                    </tr>
                     <tr>
                        <th></th>
                        <td>Rp. 4.957 Triliun</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>    
    <img class="full-width-image" src="assets/peluang/Capture1.PNG" alt="Capture Image">
    <div class="container">
        <div class="section">
            <h1 style="color: rgb(255, 92, 0);">Pembangunan</h1>
            <div class="bisnis" style="color: rgb(255, 92, 0);">
                <h1>Jaringan KA</h1>
            </div>
        </div>
        <div class="section">
            <p id="informasiTambahan2">Pembangunan Jaringan Kereta Api Balikpapan - Samarinda - Bontang -
                Sangata di provinsi Kalimantan Timur diharapkan menjadi tulang punggung
                angkutan barang dan penumpang perkotaan, sehingga dapat menjadi salah
                satu aspek pendorong utama perekonomian di Provinsi Kalimantan Timur. <i style="color: rgb(255, 92, 0);">#Infrastruktur</i></p>
            <button class="selengkapnya-button2">Selengkapnya</button>
        </div>
        <div class="section ">
            <div class="section" id="coastalTabel">
                <table class="kanan style="width: 385px; margin-bottom: 30px;" border="0">
                    <tr>
                        <th><img src="assets/peluang/next.png" alt="1" width="30px" height="30px"></th>
                        <td>Lokasi</td>
                    </tr>
                     <tr>
                        <th></th>
                        <td>Sangata-Bontang-SamarindaBalikpapan</td>
                    </tr>
                    <tr>
                        <th><img src="assets/peluang/next.png" alt="1" width="30px" height="30px"></th>
                        <td>Luas Lahan</td>
                    </tr>
                     <tr>
                        <th></th>
                        <td>203,439 Ha</td>
                    </tr>
                    <tr>
                    <tr>
                        <th><img src="assets/peluang/next.png" alt="1" width="30px" height="30px"></th>
                        <td>Estimasi Nilai Investasi</td>
                    </tr>
                     <tr>
                        <th></th>
                        <td>Rp. 1.185.730.060.890.000</td>
                    </tr>
                    <tr>
                </table>
            </div>
        </div>
    </div>    
    <br>
    <br>
    <img class="full-width-image" src="assets/peluang/Capture2.PNG" alt="Capture Image">
    <div class="container">
        <div class="section">
            <h1 style="color: rgb(240,151,6);">Waste Energy</h1>
            <div class="bisnis" style="color: rgb(240,151,6);">
                <h1>TPA Manggar</h1>
            </div>
        </div>
        <div class="section">
            <p id="informasiTambahan3">Produksi sampah di Balikpapan mencapai 450 ton/hari diman 85%nya dibuang ke TPA Sampah Manggar. Kota Balikpapan diusulkan menjadi model kota waste to energy di luar 12 kota di Indonesia dengan skema KPBU unsolicited sehingga dapat memperlancar urusan jual beli listrik kepada PLN. <i style="color: rgb(240,151,6);">#Industri</i></p>
            <button class="selengkapnya-button3">Selengkapnya</button>
        </div>
        <div class="section ">
            <div class="section" id="coastalTabel">
                <table class="kanan style="width: 385px; margin-bottom: 30px;" border="0">
                    <tr>
                        <th><img src="assets/peluang/next2.png" alt="1" width="30px" height="30px"></th>
                        <td>Lokasi</td>
                    </tr>
                     <tr>
                        <th></th>
                        <td>Kelurahan Manggar,Kecamatan Balikpapan Timur</td>
                    </tr>
                    <tr>
                        <th><img src="assets/peluang/next2.png" alt="1" width="30px" height="30px"></th>
                        <td>Luas Lahan</td>
                    </tr>
                     <tr>
                        <th></th>
                        <td>9,1 Ha</td>
                    </tr>
                    <tr>
                    <tr>
                        <th><img src="assets/peluang/next2.png" alt="1" width="30px" height="30px"></th>
                        <td>Instalasi Pengolahan Lindi</td>
                    </tr>
                     <tr>
                        <th></th>
                        <td>1,5 liter/detik</td>
                    </tr>
                    <tr>
                </table>
            </div>
        </div>
    </div>    
    <br>
    <br>
    <img class="full-width-image" src="assets/peluang/Capture3.PNG" alt="Capture Image">
    <div class="container">
        <div class="section">
            <h1 style="color: rgb(240,151,6);">Kawasan Industri</h1>
            <div class="bisnis" style="color: rgb(240,151,6);">
                <h1>Kariangau</h1>
            </div>
        </div>
        <div class="section">
            <p id="informasiTambahan4">Kawasan Industri Kariangau dibangun untuk mengakomodir pembangunan industri kimia, batubara, pengolahan kayu, pengeboran minyak, pupuk dan aneka industri lainnya. Hingga saat ini tercatat ada sekitar 20 pabrik yang sudah mengantongi izin membuat pabrik, dimana 13 diantaranya sudah beroperasi menyerap sekitar 4.000 tenaga kerja. <i style="color: rgb(240,151,6);">#Industri</i></p>
            <button class="selengkapnya-button4">Selengkapnya</button>
        </div>
        <div class="section ">
            <div class="section" id="coastalTabel">
                <table class="kanan style="width: 385px; margin-bottom: 30px;" border="0">
                    <tr>
                        <th><img src="assets/peluang/next2.png" alt="1" width="30px" height="30px"></th>
                        <td>Lokasi</td>
                    </tr>
                     <tr>
                        <th></th>
                        <td>Kelurahan Kariangau, Kecamatan Balikpapan Barat</td>
                    </tr>
                    <tr>
                        <th><img src="assets/peluang/next2.png" alt="1" width="30px" height="30px"></th>
                        <td>Luas Lahan</td>
                    </tr>
                     <tr>
                        <th></th>
                        <td>3.565 Ha</td>
                    </tr>
                    <tr>
                    <tr>
                        <th><img src="assets/peluang/next2.png" alt="1" width="30px" height="30px"></th>
                        <td>Estimasi Nilai Investasi</td>
                    </tr>
                     <tr>
                        <th></th>
                        <td>peti kemas - Rp. 713 Miliar</td>
                    </tr>
                    <tr>
                </table>
            </div>
        </div>
    </div>   
    <br>
    <br> 
    <img class="full-width-image" src="assets/peluang/Capture4.PNG" alt="Capture Image">
    <div class="container">
        <div class="section">
            <h1 style="color: rgb(240,151,6);">Pembangunan</h1>
            <div class="bisnis" style="color: rgb(240,151,6);">
                <h1>Kontainer Depo</h1>
            </div>
        </div>
        <div class="section">
            <p id="informasiTambahan5">Konstruksi dan pengolaan Depo Kontainer mendukung pengoperasian terminal kontainer di Pelabuhan Laut. Paket proyek ini mencakup pembangunan jalan sepanjang 1 Km yang menghubungkan Depo dengan Pelabuhan. <i style="color: rgb(240,151,6);">#Industri</i></p>
            <button class="selengkapnya-button5">Selengkapnya</button>
        </div>
        <div class="section ">
            <div class="section" id="coastalTabel">
                <table class="kanan style="width: 385px; margin-bottom: 30px;" border="0">
                    <tr>
                        <th><img src="assets/peluang/next2.png" alt="1" width="30px" height="30px"></th>
                        <td>Lokasi</td>
                    </tr>
                     <tr>
                        <th></th>
                        <td>Kawasan Industri Kariangau(KIK)</td>
                    </tr>
                    <tr>
                        <th><img src="assets/peluang/next2.png" alt="1" width="30px" height="30px"></th>
                        <td>Luas Lahan</td>
                    </tr>
                     <tr>
                        <th></th>
                        <td>4 Ha</td>
                    </tr>
                    <tr>
                    <tr>
                        <th><img src="assets/peluang/next2.png" alt="1" width="30px" height="30px"></th>
                        <td>Estimasi Nilai Investasi</td>
                    </tr>
                     <tr>
                        <th></th>
                        <td>Rp. 254 Miliar</td>
                    </tr>
                    <tr>
                </table>
            </div>
        </div>
    </div>  
    <br>
    <br>  
    <img class="full-width-image" src="assets/peluang/Capture5.PNG" alt="Capture Image">
    <div class="container">
        <div class="section">
            <h1 style="color: rgb(40,117,4);">Wisata</h1>
            <div class="bisnis" style="color: rgb(40,117,4);">
                <h1>Pantai Manggar</h1>
            </div>
        </div>
        <div class="section">
            <p id="informasiTambahan6">Pantai manggar memiliki karateristik yang berbeda dengan pantai – pantai di pulau jawa atau bali. Perbedaaan manggar paling mencolok adalah keberadaaan pohon cemara di sepanjang pesisir. Manggar tidak hanya di kunjungi warga di kota ini , Masyarakat dari kabupaten dan kota – kota sekitar. <i style="color: rgb(40,117,4);">#Pariwisata</i></p>
            <button class="selengkapnya-button6">Selengkapnya</button>
        </div>
        <div class="section ">
            <div class="section" id="coastalTabel">
                <table class="kanan style="width: 385px; margin-bottom: 30px;" border="0">
                    <tr>
                        <th><img src="assets/peluang/next3.png" alt="1" width="30px" height="30px"></th>
                        <td>Lokasi</td>
                    </tr>
                     <tr>
                        <th></th>
                        <td>Kelurahan Manggar dan Teritip</td>
                    </tr>
                    <tr>
                        <th><img src="assets/peluang/next3.png" alt="1" width="30px" height="30px"></th>
                        <td>Sarana</td>
                    </tr>
                     <tr>
                        <th></th>
                        <td>Jaringan Listrik dan air bersih</td>
                    </tr>
                    <tr>
                    <tr>
                        <th><img src="assets/peluang/next3.png" alt="1" width="30px" height="30px"></th>
                        <td>Aksesibilitas</td>
                    </tr>
                     <tr>
                        <th></th>
                        <td>9 km dari Bandara Sepinggan</td>
                    </tr>
                    <tr>
                </table>
            </div>
        </div>
    </div>   
    <br>
    <br> 
    <img class="full-width-image" src="assets/peluang/Capture6.PNG" alt="Capture Image">

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
    <script type="text/javascript">
        var tombolStatus = "Selengkapnya";

        function gantiTeksSelengkapnya() {
            var elemenInformasi = document.getElementById("informasiTambahan");
            var tombolSelengkapnya = document.querySelector(".selengkapnya-button");

            if (tombolStatus === "Selengkapnya") {
                elemenInformasi.innerHTML = `
                    Pada tahun 2012, pemerintah telah membentuk badan Percepatan Pembangunan dan Pengelolahan Coastal Road. Kawasan sepanjang jalan Jendral Sudirman ini, diprediksi akan menjadi kawasan bisnis yang paling menjanjikan dalam lima tahun ke depan. Balikpapan tengah bersiap menjadi waterfront city pertama di Kalimantan.
                    Kawasan pesisir pantai ini mempunyai potensi dengan konsep waterfront, yakni ;
                    <br>
                    <br>
                    <table border="0">
                        <tr>
                            <th>1</th>
                            <td>Mengembangkan pulau – pulau buatan bertemakan water theme park dan delta sungai kelandasan besar sebagai Club House.</td>
                        </tr>
                        <tr>
                            <th>2</th>
                            <td>Orientasi bangunan dan view kawasan di tepian ke arah laut.</td>
                        </tr>
                        <tr>
                            <th>3</th>
                            <td>Penyediaan ruang dan kegiatan yang dimanfaatkan potensi dan daya tarik lautan, seperti seafood center, dermaga kapal wisata. Sebagai downtown, di mana kawasan ini dilengkapi dengan fungsi baru, yang mendukung seperti, shopping mall, hotel, retail modern, apartemen, dan civic center.</td>
                        </tr>
                    </table>
                    <br>
                    <table border="0">
                        <tr>
                            <th><b>Lokasi :</b></th>
                            <td>Kawasan di sepanjang Jalan Jendral Sudirman</td>
                        </tr>
                        <tr>
                            <th><b>Luas lahan :</b></th>
                            <td>323,9 Ha</td
                        </tr>
                        <tr>
                            <th><b>Estimasi Nilai Investasi :</b> </th>
                            <td>Rp. 4.957 Triliun</td
                        </tr>
                        <tr>
                            <th><b>Dukungan Pemerintah :</b> </th>
                            <td>Bandara Sultan Aji Muhammad Sulaiman, Pelabuhan Semayang</td
                        </tr>
                        <tr>
                            <th><b>Batas Waktu Proyek :</b> </th>
                            <td>2014-2015: Lelang Investasi 29 Sep</td
                        </tr>
                        <tr>
                            <th><b>Skema Bisnis</b></th>
                            <td></td
                        </tr>
                        <tr>
                            <th><b>Segmen I : </b></th>
                            <td>PT. Sugico Graha</td
                        </tr>
                        <tr>
                            <th><b>Segmen II : </b></th>
                            <td>Pemkot Balikpapan</td
                        </tr>
                        <tr>
                            <th><b>Segmen III : </b></th>
                            <td>PT. Pandega Citra Niaga</td
                        </tr>
                        <tr>
                            <th><b>Segmen IV : </b></th>
                            <td>PT. Helindo Bangun Raya</td
                        </tr>
                        </table>
                        
                `;
                tombolSelengkapnya.textContent = "Close";
                tombolStatus = "Close";
            } else {
                elemenInformasi.innerHTML = `Kawasan sepanjang jalan Jendral Sudirman ini, di prediksi akan menjadi kawasan bisnis yang paling menjanjikan dalam lima tahun ke depan. Balikpapan tengah bersiap menjadi waterfront city pertama di Kalimantan.#Infrastruktur`;
                tombolSelengkapnya.textContent = "Selengkapnya";
                tombolStatus = "Selengkapnya";
            }
        }

        var tombolSelengkapnya = document.querySelector(".selengkapnya-button");
        tombolSelengkapnya.addEventListener("click", gantiTeksSelengkapnya);
    </script>

    <script>
        function moveText() {
            var coastalRoadHeading = document.getElementById("coastalRoad");
            var informasiTambahan = document.getElementById("informasiTambahan");

            if (coastalRoadHeading.style.marginTop === "-50px") {
                coastalRoadHeading.style.marginTop = "0";
            } else {
                coastalRoadHeading.style.marginTop = "-750px";
            }

            var tabelcoastalTabel = document.querySelector("#coastalTabel table");
            if (tabelcoastalTabel.style.marginTop === "-550px") {
                tabelcoastalTabel.style.marginTop = "150px";
            } else {    
                tabelcoastalTabel.style.marginTop = "-500px";
            }

            gantiTeksSelengkapnya();
        }
    </script>
    

    <script type="text/javascript">
        var tombolStatus = "Selengkapnya";

        function gantiTeksSelengkapnya() {
            var elemenInformasi = document.getElementById("informasiTambahan2");
            var tombolSelengkapnya = document.querySelector(".selengkapnya-button2");

            if (tombolStatus === "Selengkapnya") {
                elemenInformasi.innerHTML = `
                Pembangunan Jaringan Kereta Api Balikpapan - Samarinda - Bontang - Sangata di provinsi Kalimantan Timur diharapkan menjadi tulang punggung angkutan barang dan penumpang perkotaan, sehingga dapat menjadi salah satu aspek pendorong utama perekonomian di Provinsi Kalimantan Timur. Pengoperasian Balikpapan - Samarinda - Bontang - Sangata yang terintegrasi
                dengan moda transportasi kereta api lainnya juga diharapkan dapat meningkatkan efisiensi perencanaan infrastruktur di Provinsi Kalimantan Timur. Oleh karena itu, implementasi jaringan
                kereta api Balikpapan - Samarinda - Bontang - Sangata harus dapat menjadi bagian penting dalam struktur ekonomi di Provinsi Kalimantan Timur.
                <br>
                <br>    
                <table border="0">
                        <tr>
                            <th><b>Lokasi :</b></th>
                            <td>Sangata-Bontang-Samarinda-Balikpapan</td>
                        </tr>
                        <tr>
                            <th><b>Panjang Ruas :</b></th>
                            <td>203,439 km</td
                        </tr>
                        <tr>
                            <th><b>Estimasi Nilai Investasi :</b> </th>
                            <td>Rp. 1.185.730.060.890.000</td
                        </tr>
                        <tr>
                            <th><b>Status Proyek :</b> </th>
                            <td>Pra Studi Kelayakan Pengembangan Jaringan Kereta Api 2015</td
                        </tr>
                        <tr>
                            <th><b>Batas Waktu Proyek :</b> </th>
                            <td>Total rel yang dibangun 3.556,5 km</td
                        </tr>
                        <tr>
                            <th><b>Skema Bisnis</b></th>
                            <td>Alternatif yang memungkinkan dimasukkannya dana swasta adalah melalui mekanisme pembagian biaya.
                    Biaya investasi infrastruktur akan dibagi antara Pemerintah dan sektor swasta</td
                        </table>
                `;
                tombolSelengkapnya.textContent = "Close";
                tombolStatus = "Close";
            } else {
                elemenInformasi.innerHTML = `Kawasan sepanjang jalan Jendral Sudirman ini, di prediksi akan menjadi kawasan bisnis yang paling menjanjikan dalam lima tahun ke depan. Balikpapan tengah bersiap menjadi waterfront city pertama di Kalimantan.#Infrastruktur`;
                tombolSelengkapnya.textContent = "Selengkapnya";
                tombolStatus = "Selengkapnya";
            }
        }
        var tombolSelengkapnya = document.querySelector(".selengkapnya-button2");
        tombolSelengkapnya.addEventListener("click", gantiTeksSelengkapnya);
    </script>

    <script type="text/javascript">
        var tombolStatus = "Selengkapnya";

        function gantiTeksSelengkapnya() {
            var elemenInformasi = document.getElementById("informasiTambahan3");
            var tombolSelengkapnya = document.querySelector(".selengkapnya-button3");

            if (tombolStatus === "Selengkapnya") {
                elemenInformasi.innerHTML = `
                Produksi sampah di Balikpapan mencapai 450 ton/hari diman 85%nya dibuang ke TPA Sampah Manggar. Kota Balikpapan diusulkan menjadi model kota waste to energy di luar 12 kota di Indonesia dengan skema KPBU unsolicited sehingga dapat memperlancar urusan jual beli listrik kepada PLN. Saat ini telah disusun studi pendahuluan dengan hasil layak KPBU dengan skema unsolicited (pemrakarsa swasta) yang dilakukan pendampingan Kementerian PUPR. Proses peminatan calon pemrakarsa sedang dilakukan. 
                Pelaksanaan pengelolaan sampah akhir ke pihak swasta di Manggar Kota Balikpapan telah mendapat lampu hijau dari Kementerian Pekerjaan Umum Republik Indonesia. Pemerintah pusat mendukung, bahkan akan menjadi pilot project bagi kami untuk di daerah lainnya di Indonesia.

                <br>
                <br>
                <table border="0">
                        <tr>
                            <th><b>Lokasi :</b></th>
                            <td>Kelurahan Manggar, Kecamatan Balikpapan Timur</td>
                        </tr>
                        <tr>
                            <th><b>Luas Lahan :</b></th>
                            <td>9,1 Ha</td
                        </tr>
                        <tr>
                            <th><b>Instalasi Pengolahan Lindi :</b> </th>
                            <td>1,5 liter/detik</td
                        </tr>
                        <tr>
                            <th><b>SKapasitas :</b> </th>
                            <td>hingga 720.000 ton MSW5</td
                        </tr>
                        <tr>
                            <th><b>Batas Waktu Proyek :</b> </th>
                            <td>Total rel yang dibangun 3.556,5 km</td
                        </tr>
                        <tr>
                            <th><b>Pencapaian</b></th>
                            <td>7 Tempat Pengelolaan MSW ini mengelola sekitar 200-400 rumah tangga dalam satu proses. Sampah diolah dengan cara dipilah dan sampah organik diubah menjadi kompos sedangkan sisanya dibuang ke TPA Manggar.</td
                        </table>
                `;
                tombolSelengkapnya.textContent = "Close";
                tombolStatus = "Close";
            } else {
                elemenInformasi.innerHTML = `Kawasan sepanjang jalan Jendral Sudirman ini, di prediksi akan menjadi kawasan bisnis yang paling menjanjikan dalam lima tahun ke depan. Balikpapan tengah bersiap menjadi waterfront city pertama di Kalimantan.#Infrastruktur`;
                tombolSelengkapnya.textContent = "Selengkapnya";
                tombolStatus = "Selengkapnya";
            }
        }

        var tombolSelengkapnya = document.querySelector(".selengkapnya-button3");
        tombolSelengkapnya.addEventListener("click", gantiTeksSelengkapnya);
    </script>

    <script type="text/javascript">
        var tombolStatus = "Selengkapnya";

        function gantiTeksSelengkapnya() {
            var elemenInformasi = document.getElementById("informasiTambahan4");
            var tombolSelengkapnya = document.querySelector(".selengkapnya-button4");

            if (tombolStatus === "Selengkapnya") {
                elemenInformasi.innerHTML = `
                KIK berlokasi di Kelurahan Kariangau, Kecamatan Balikpapan Barat dengan menempati area seluas 3.565 ha yang selanjutnya akan dikembangkan hingga ke Pulau Balang. KIK memiliki letak strategis karena berada di teluk Balikpapan yang berhadapan langsung dengan selat Makassar yang merupakan bagian dari Alur Laut Kepulauan Indonesia (ALKI II), posisi strategis tersebut memudahkan dalam mobilisasi barang untuk tujuan domestik maupun mancanegara (ekspor-impor). Hal ini ditunjang dengan kedalaman laut Teluk Balikpapan yang dapat dilalui dengan kapal berkapasitas 50.000 ton.
                Kawasan Industri Kariangau dibangun untuk mengakomodir pembangunan industri kimia, batubara, pengolahan kayu, pengeboran minyak, pupuk dan aneka industri lainnya. Hingga saat ini tercatat ada sekitar 20 pabrik yang sudah mengantongi izin membuat pabrik, dimana 13 diantaranya sudah beroperasi menyerap sekitar 4.000 tenaga kerja. Perusahaan yang sudah beroperasi antara lain bergerak dalam pengolahan CPO (Crude Palm Oil), pertambangan, batubara, dan migas, industri perKepalan, industri logam, tekstil perkayuan, serta pergudangan. Dalam menjalankan fungsinya, Kawasan Industri Kariangau didukung oleh infrastruktur terminal peti kemas, pembangkit tenaga listrik, jalan akses, jembatan dan jalan tol.
                
                <br>
                <br>
                <p><b>Utilitas dan Infrastruktur Rencana : </b></p>
                    <br>
                    <table border="0">
                        <tr>
                            <th>1</th>
                            <td>Pasokan listrik dengan kapasitas 350 Megawatt dari PT .PLN dan PT Kaiangau  Power.</td>
                        </tr>
                        <tr>
                            <th>2</th>
                            <td>Jalur telepon langsung dari PT. Telkom , STO KIK di bangun dua jalur.</td>
                        </tr>
                        <tr>
                            <th>3</th>
                            <td>Air bersih  di salurkan dari waduk Sungai wain ke reservior KIK dengan kapasitas 35.000 m3/ hari , dengan tekanan air 1-2 bar.</td>
                        </tr>
                        <tr>
                            <th>4</th>
                            <td>Hidaran pemadam kebakaran di tempatkan pada tempat tertentu.</td>
                        </tr>
                        <tr>
                            <th>5</th>
                            <td>Instalasi pengolahan limbah dengan kapasitas yang di rencanakan sebesar 18.000m3/ hari.</td>
                        </tr>
                        <tr>
                            <th>6</th>
                            <td>Perlindungan terhadap petir menggunakan sisterm eletronik.</td>
                        </tr>
                    </table>
                    <br>

                    <table border="0">
                        <tr>
                            <th><b>Lokasi :</b></th>
                            <td>Kelurahan Kariangau, Kecamatan Balikpapan Barat</td>
                        </tr>
                        <tr>
                            <th><b>Luas Lahan :</b></th>
                            <td>3.565 Ha</td
                        </tr>
                        <tr>
                            <th><b>Estimasi Nilai Investasi :</b> </th>
                            <td>peti kemas - Rp. 713 Miliark</td
                        </tr></table>
                    
                `;
                tombolSelengkapnya.textContent = "Close";
                tombolStatus = "Close";
            } else {
                elemenInformasi.innerHTML = `Kawasan sepanjang jalan Jendral Sudirman ini, di prediksi akan menjadi kawasan bisnis yang paling menjanjikan dalam lima tahun ke depan. Balikpapan tengah bersiap menjadi waterfront city pertama di Kalimantan.#Infrastruktur`;
                tombolSelengkapnya.textContent = "Selengkapnya";
                tombolStatus = "Selengkapnya";
            }
        }

        var tombolSelengkapnya = document.querySelector(".selengkapnya-button4");
        tombolSelengkapnya.addEventListener("click", gantiTeksSelengkapnya);
    </script>

    <script type="text/javascript">
        var tombolStatus = "Selengkapnya";
        function gantiTeksSelengkapnya() {
            var elemenInformasi = document.getElementById("informasiTambahan5");
            var tombolSelengkapnya = document.querySelector(".selengkapnya-button5");

            if (tombolStatus === "Selengkapnya") {
                elemenInformasi.innerHTML = `
                Kawasan industri Kariangau (KIK) adalah zona industri 133 Ha sehingga membuatnya menjadi daerah industri terbesar di Kalimantan Timur. Hal ini menawarkan keunggulan kompetitif bisnis seperti Fasilitas KLIK, harga kompetitif dan lokasinya yang strategis. Saar ini ada 17 perusahaan besar yang beroperasi di KIK. KIK dilengkapi dengan KLIK (Fasilitas Layanan Perizinan 3 Jam) yang memungkinkan Investor untuk segera memulai konstruksi sementara secara bersamaan juga mempersiapkan surat izin.
                Konstruksi dan pengolaan Depo Kontainer mendukung pengoperasian terminal kontainer di Pelabuhan Laut. Paket proyek ini mencakup pembangunan jalan sepanjang 1 Km yang menghubungkan Depo dengan Pelabuhan.

                <br>
                <br>
                <table border="0">
                        <tr>
                            <th><b>Lokasi :</b></th>
                            <td>Kawasan Industri Kariangau (KIK)</td>
                        </tr>
                        <tr>
                            <th><b>Luas Lahan :</b></th>
                            <td>4 Ha</td
                        </tr>
                        <tr>
                            <th><b>Estimasi Nilai Investasi :</b> </th>
                            <td>Rp. 254 Miliar</td
                        </tr>
                        <tr>
                            <th><b>Dukungan Pemerintah :</b> </th>
                            <td>Ijin Prinsip No. N6503.05/224/BPMP2T diperoleh pada 25 Agustus 2016. Area industri fasilitas kemudahan investasi bernama KLIK (Kemudahan Investasi Langsung Konstruksi)</td
                        </tr>
                        <tr>
                            <th><b>Pemilik Proyek :</b> </th>
                            <td>Perusda Kota Balikpapan</td
                        </tr>
                        <tr>
                            <th><b>Skema Bisnis</b></th>
                            <td>Joint Venture, Investor Partnership</td
                        </table>
                `;
                tombolSelengkapnya.textContent = "Close";
                tombolStatus = "Close";
            } else {
                elemenInformasi.innerHTML = `Kawasan sepanjang jalan Jendral Sudirman ini, di prediksi akan menjadi kawasan bisnis yang paling menjanjikan dalam lima tahun ke depan. Balikpapan tengah bersiap menjadi waterfront city pertama di Kalimantan.#Infrastruktur`;
                tombolSelengkapnya.textContent = "Selengkapnya";
                tombolStatus = "Selengkapnya";
            }
        }

        var tombolSelengkapnya = document.querySelector(".selengkapnya-button5");
        tombolSelengkapnya.addEventListener("click", gantiTeksSelengkapnya);
    </script>

<script type="text/javascript">
    var tombolStatus = "Selengkapnya";

    function gantiTeksSelengkapnya() {
        var elemenInformasi = document.getElementById("informasiTambahan6");
        var tombolSelengkapnya = document.querySelector(".selengkapnya-button6");

        if (tombolStatus === "Selengkapnya") {
            elemenInformasi.innerHTML = `
            Kawasan wisata yang paling terkenal di Balikpapan ini berada di kelurahan manggar dan Teritip , Kecamatan Balikpapan Timur . Pantai manggar memiliki karateristik yang berbeda dengan pantai – pantai  di pulau jawa atau bali.  Perbedaaan manggar paling mencolok adalah keberadaaan pohon cemara di sepanjang pesisir . Pantai manggar memilki  luas kawasan 13.000 m², berada di jalur selat makasaar . Pengunjung  bisa bersantai di pantai ini setiap hari mulai pukul 06.00- 18 .00 Wita. Manggar  tidak hanya di kunjungi warga di kota ini , Masyarakat dari kabupaten dan kota – kota sekitar . Data unit pelaksanaan Teknis Dinas (UPTD) Dinas parawisata pantai manggar mencatat jumlah kunjungan rata – rata 3.000 hingga 5.000 orang tiap pekan . Investasi yang di tawarkan  di pantai manggar adalah sebagai objek wisata ini, bekerja sama dengan Pemerintah Kota Balikpapan.
            <br>
                <br>    
                <table border="0">
                        <tr>
                            <th><b>Lokasi :</b></th>
                            <td>Kelurahan Manggar dan Teritip</td>
                        </tr>
                        <tr>
                            <th><b>Aksesibilitas :</b></th>
                            <td>9 km dari Bandara Sepinggan</td
                        </tr>
                        <tr>
                            <th><b>Lebar Pantai :</b> </th>
                            <td>50 meter</td
                        </tr>
                        <tr>
                            <th><b>Komposisi Pantai :</b> </th>
                            <td>Pesisir Putih-Kecoklatan</td
                        </tr>
                        <tr>
                            <th><b>Karakteristik Pantai :</b> </th>
                            <td>Pantai manggar ideal di kembangkan sebagai kawasan wisata . Hal ini karena luas wilayah belakang pantai dengan kontur landai. Kondisi ini berpotensi dilakukan pengembangan lanjut.</td
                        </tr>
                        </table>
            `;
            tombolSelengkapnya.textContent = "Close";
            tombolStatus = "Close";
        } else {
            elemenInformasi.innerHTML = `Kawasan sepanjang jalan Jendral Sudirman ini, di prediksi akan menjadi kawasan bisnis yang paling menjanjikan dalam lima tahun ke depan. Balikpapan tengah bersiap menjadi waterfront city pertama di Kalimantan.#Infrastruktur`;
            tombolSelengkapnya.textContent = "Selengkapnya";
            tombolStatus = "Selengkapnya";
        }
    }

    var tombolSelengkapnya = document.querySelector(".selengkapnya-button6");
    tombolSelengkapnya.addEventListener("click", gantiTeksSelengkapnya);
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
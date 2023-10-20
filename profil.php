<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>DPMPTSP</title>
        <link rel="stylesheet" href="css/profil.css">
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

    <br>
    <br>
    <br>  
    <iframe src="https://www.google.com/maps/d/u/6/embed?mid=1GNMpWd0j8z6YThyNJdXgjIb2uIxyUKo&ehbc=2E312F&noprof=1" 
    width="100%" 
    height="480">
    </iframe>
    <div class="centered-text3" style=" color: rgb(0, 0, 0);">
        <p>Kota Balikpapan merupakan pintu gerbang bisnis dan industri di wilayah Kalimantan Timur. Tidak hanya strategis dari sisi geografi, Balikpapan juga memiliki banyak potensi ekonomi yang berdaya saing unggul baik dalam negeri maupun luar negeri.</p>
    </div>

    <div class="icon-container">
        <div class="icon" data-image="assets/daerah/infrastruktur/infrastruktur1.jpg" data-judul="INFRASTRUKTUR" data-description="Balikpapan sebagai pintu gerbang Kalimantan Timur memerlukan jalan sebagai prasarana penunjang
        pengangkutan yang penting untuk memperlancar kegiatan perekonomian. Meningkatnya pembangunan
        umumnya harus disertai dengan peningkatan pembangunan jalan guna memudahkan mobilitas penduduk dan
        memperlancar lalu lintas barang dari satu daerah ke daerah lain. Panjang jalan negara di Kota Balikpapan pada
        tahun 2022 mencapai 35,35 km, jalan provinsi 31,61 km, dan jalan yang dikuasai pemerintah kota 518,418 km.
        <br>
        <br>
        <p><b>Panjang Jalan Kota : 518.648 km</b></p>
        <p><b>Kondisi Jalan Baik : 322.279 km</b></p>
        <p><b>Kondisi Jalan Sedang : 169.129 km</b></p>
        <p><b>Kondisi Jalan Rusak : 27.240 km</b></p>
        "
        
        data-additional-text="<h4>2022</h4> | <h4>Jaringan Jalan</h4> | <h5>Sumber Data: Badan Pusat Statistik</h5>">
            <img src="assets/profil/commercial-plane-photoaidcom-cropped.png" alt="Infrastruktur" class="icon">
            <span class="icon-label">Infrastruktur</span>
        </div>

        <div class="icon" data-image="assets/daerah/penduduk/penduduk1.jpg" data-description="a. Kependudukan
        Kota Balikpapan merupakan kota di Kalimantan Timur dengan jumlah penduduk terbesar ketiga setelah Kota Samarinda dan Kabupaten
        Kutai Kartanegara. Jumlah penduduk Kota Balikpapan berdasarkan proyeksi penduduk tahun 2022 sebanyak 703.611 jiwa. Dari jumlah
        tersebut, 359.563 jiwa berjenis kelamin laki-laki dan 344.048 jiwa berjenis kelamin perempuan. Kecamatan Balikpapan Utara memiliki
        jumlah penduduk terbesar. Yakni sebanyak 175.440 jiwa. kemudian diikuti oleh Kecamatan Balikpapan Selatan sebanyak 148.650 jiwa
        dan Kecamatan Balikpapan Tengah sebanyak 107.155 jiwa. Selanjutnya Kecamatan Balikpapan Barat dan Kecamatan Balikpapan Timur
        dengan masing-masing 94.302 jiwa dan 95.064 jiwa. Dan yang terakhir adalah Kecamatan Balikpapan Kota dengan jumlah penduduk
        sebesar 83.000 jiwa.
        Kepadatan penduduk di Kota Balikpapan pada tahun 2022 mencapai 1.377 jiwa per km2. Kecamatan Balikpapan Tengah menjadi
        Kecamatan yang terpadat dihuni dengan kepadatan penduduk 9.894 jiwa per km2. Cukup timpang apabila dibandingkan dengan
        Kecamatan Balikpapan Barat yang memiliki kepadatan penduduk terendah di Kota Balikpapan dengan kepadatan penduduk hanya 489
        jiwa per km2.
        <br>
        <br>
        b. Ketenagakerjaan
        Jumlah Pencari Kerja Terdaftar di Kota Balikpapan berdasarkan data Dinas Ketenagakerjaan Kota Balikpapan pada tahun 2022 yang belum
        ditempatkan ada sebanyak 796 orang. Bila dirinci berdasarkan jenis kelamin 736 orang tercatat berjenis kelamin laki-laki dan 60 orang
        yang berjenis kelamin perempuan. Jumlah ini meningkat dari tahun 2021, dimana jumlah pencari kerja yang terdaftar di Dinas
        ketenagakerjaan Kota Balikpapan tercatat sebanyak 506 orang yang terdiri dari 370 orang laki-laki dan 136 orang perempuan. Proporsi
        terbesar dari pencari kerja terdaftar ini adalah mereka yang berpendidikan SLTA sebanyak 73,17 %. atau sebanyak 2.424 orang. Urutan
        nomor dua pencari kerja terdaftar terbesar adalah dari kalangan yang berpendidikan strata-1 (S1) dengan proporsi 13,07 % atau
        sebanyak 433 orang. Kedua kelompok ini mendominasi jumlah pencari kerja terdaftar dengan proporsi 86,24 %. atau lebih dari tiga
        perempat dari jumlah pencari kerja terdaftar." data-additional-text="<h4>2022</h4>| <h5>Sumber Data: Badan Pusat Statistik</h5>">
            <img src="assets/profil/construction-photoaidcom-cropped.png" alt="Penduduk & Ketenagakerjaan" class="icon">
            <span class="icon-label">Penduduk&Ketenagakerjaan</span>
        </div>

        <div class="icon" data-image="assets/daerah/kesehatan/kesehatan1.png" align="justify" data-description="Tersedianya fasilitas kesehatan yang baik, murah, dan terjangkau oleh semua kalangan adalah salah satu tolak ukur keberhasilan pembangunan di
        bidang kesehatan. Lebih jauh, hal ini menjadi prasyarat tercapainya masyarakat yang sejahtera. Untuk mencapai hal tersebut pemerintah kota
        terus berusaha meningkatkan kualitas pelayanan kesehatan. Keberadaan rumah sakit di Kota Balikpapan terus ditopang dengan sarana kesehatan
        yang sudah lazim dikenal masyarakat, yaitu puskesmas dan puskesmas pembantu. Tercatat pada tahun 2022, di Kota Balikpapan terdapat 11
        rumah sakit umum, 3 rumah sakit bersalin, 1 rumah sakit khusus mata dan 75 Klinik Pratama Kesehatan yang ditunjang dengan 34 posyandu dan
        27 puskesmas yang terdiri dari 7 puskesmas rawat inap dan 20 puskesmas non rawat inap yang tersebar di tiap kecamatan" data-additional-text="<h4>2022</h4>| <h5>Sumber Data: Badan Pusat Statistik</h5>">
            <img src="assets/profil/hospital-photoaidcom-cropped.png" alt="Kesehatan" class="icon">
            <span class="icon-label">Kesehatan</span>
        </div>

        <div class="icon" data-image="assets/daerah/pendidikan/pendidikan1.jpg" data-description="Salah satu faktor yang menentukan keberhasilan pembangunan adalah tersedianya sumber daya manusia (SDM) yang berkualitas. Ketersediaan
        sarana dan prasarana pendidikan dapat menjadi salah satu tolak ukur dalam melihat kesungguhan pemerintah dalam upaya peningkatan SDM.
        Kota Balikpapan, pada tahun 2022, tercatat telah memiliki 153 Sekolah Taman Kanak-Kanak 182 sekolah dasar sederajat, 77 sekolah menengah
        pertama sederajat, 28 sekolah menengah atas sederajat dan 32 Sekolah Menengah Kejuruan. Hal ini menunjukkan tidak ada peningkatan jumlah
        sekolah dari tahun 2021. Selain itu untuk sekolah Madrasah di Kota Balikpapan pada tahun 2022, tercatat telah memiliki 28 Sekolah Raudatul
        Athfal, 26 sekolah Madrasah Ibtidaiyah, 15 sekolah Madrasah Tsanawiyah, dan 8 Sekolah Madrasah Aliyah. Hal ini menunjukkan adanya
        peningkatan jumlah sekolah Madrasah dari tahun 2022." data-additional-text="<h4>2022</h4> | <h5>Sumber Data: Badan Pusat Statistik</h5>">
            <img src="assets/profil/school-photoaidcom-cropped.png" alt="Pendidikan" class="icon">
            <span class="icon-label">Pendidikan</span>
        </div>

        <div class="icon" data-image="assets/daerah/pariwisata/pariwisata1.jpg" data-description="Kota Balikpapan sebagai kota yang dikelilingi laut memiliki pariwisata yang didominasi oleh pantai. Beberapa pantai yang terkenal diantaranya
        adalah Pantai Manggar, Pantai Lemaru, Pantai Kemala, dan Pantai Melawai. Di daerah pesisir yang ditumbuhi tanaman bakau juga terdapat
        wisata mangrove, seperti Mangrove Center di Graha Indah, Hutan Mangrove di Margo Mulyo, dan Jembatan Ulin di Kariangau. Bagi yang
        menginginkan wisata berbasis fauna, bisa mengunjungi Penangkaran Buaya di Teritip dan Agro Wisata KM 23 (Beruang Madu).
        <br>
        <br>
        a. Wisata Bahari
        Wisata Bahari adalah seluruh kegiatan yang bersifat rekreasi yang aktifitasnya dilakukan pada media kelautan atau bahari dan meliputi
        daemh pantai, pulaupulau sekitamya, serta kawasan lautan dalam pengertian pada permukaannya; dalamnya, ataupun pada dasarnya
        termasuk didatamnya taman laut.
        <br>
        <br>
        b. Wisata Buatan
        Wisata buatan adalah kegiatan rekreasi dan pariwisata yang memanfaatkan objek wisata yang sangat dipengaruhi oleh upaya dan
        aktivitas manusia.
        <br>
        <br>
        c. Wisata Budaya
        Wisata Budaya adalah kegiatan perjalanan yang dilakukan oleh seseorang atau kelompok dengan mengunjungi tempat tertentu untuk
        tujuan rekreasi, pengembangan pribadi, atau mempelajari daya tarik budaya dengan memanfaatkan potensi budaya dari tempat yang
        dikunjungi tersebut. Beberapa contoh Wisata Budaya adalah: wisata religi, wisata edukasi, wisata sejarah, wisata kota dan lain-lain" data-additional-text="<h4>2022</h4>| <h5>Sumber Data: Badan Pusat Statistik</h5>">
            <img src="assets/profil/vacations-photoaidcom-cropped.png" alt="Pariwisata" class="icon">
            <span class="icon-label">Pariwisata</span>
        </div>
    </div>
    <div class="content-container" >
        <div class="content-image">
            <img src="/assets/Capture.PNG" alt=" " id="content-image">
        </div>
        <div class="content-text" id="content-text">
        </div>
    </div>

    <div class="sector-container">
        <div class="sector-title">
            <p>SEKTOR UNGGULAN</p>
        </div>
        <div class="sector-content">
            <div class="description">
                <div class="description-title" style="color: black; font-weight: bold;">
                    <img id="icon-image" src="" alt="">
                    <p id="icon-title"></p>
                </div>
                <div class="description-content" id="description-content">
                </div>
            </div>
            <div class="icons2">
                <div class="icon2 description-icon" data-image="assets/3/infrastructure.png" data-judul="INDUSTRI PENGOLAHAN" data-keterangan="Kategori Industri Pengolahan meliputi kegiatan ekonomi di bidang perubahan secara kimia atau fisik dari bahan, unsur atau komponen
                menjadi produk baru. Bahan baku industri pengolahan berasal dari produk pertanian, kehutanan, perikanan, pertambangan atau
                penggalian seperti produk dari kegiatan industri pengolahan lainnya Perubahan, pembaharuan atau rekonstruksi yang pokok dari barang
                secara umum diperlakukan sebagai industri pengolahan. Lapangan usaha Industri Pengolahan merupakan lapangan usaha dominan di
                dalam aktivitas perekonomian Kota Balikpapan. Hal itu terkait dengan adanya kilang minyak Pertamina RU V yang beroperasi di kota ini.
                Meskipun dominan, kontribusi industri pengolahan terus berkurang setiap tahunnya.</br>
                <h5>Kontribusi sektor terhadap PDB 2022 : 47,20%</h5>
                <h5>Nilai tambah sektor 2022 : 60,10 triliun</h5>
                <h5>Laju pertumbuhan sektor 2022 : 4,69%</h5>
                " onclick="tampilkanDeskripsi(this)">
                    <img src="assets/infrastructure.png" alt="Industri Pengolahan" class="icon2-img">
                    <p class="icon2-text">INDUSTRI PENGOLAHAN</p>
                </div>
                <div class="icon2 description-icon" data-image="assets/3/info.png" data-judul="INFORMASI DAN KOMUNIKASI" data-keterangan="Kategori Informasi dan Komunikasi mencakup produksi dan distribusi informasi dan produk kebudayaan, persediaan alat untuk
                mengirimkan atau mendistribusikan produk-produk ini dan juga data atau kegiatan komunikasi, informasi, teknologi informasi dan
                pengolahan data serta kegiatan jasa informasi lainnya. Kategori terdiri dari beberapa industri yaitu Penerbitan, Produksi Gambar
                Bergerak, Video, Perekaman Suara dan Penerbitan Musik, Penyiaran dan Pemograman (Radio dan Televisi), Telekomunikasi,
                Pemograman, Konsultasi Komputer dan Teknologi Informasi. Lapangan usaha Informasi dan Komunikasi memiliki peranan sebagai
                penunjang aktivitas di setiap bidang ekonomi. Dalam era globalisasi, peranan kategori ini sangat vital dan menjadi indikator kemajuan
                suatu bangsa, terutama jasa telekomunikasi.</br>
                <h5>Kontribusi sektor terhadap PDB 2022 : 3%</h5>
                <h5>Laju pertumbuhan sektor 2022 :  7,93%</h5>
                " onclick="tampilkanDeskripsi(this)">
                    <img src="assets/info.png" alt="Informasi dan Komunikasi" class="icon2-img">
                    <p class="icon2-text">INFORMASI DAN KOMUNIKASI</p>
                </div>
                <div class="icon2 description-icon" data-image="assets/3/salary.png" data-judul="JASA KEUANGAN" data-keterangan="Kategori Jasa Keuangan mencakup jasa perantara keuangan, asuransi dan pensiun, jasa keuangan lainnya serta jasa penunjang keuangan.
                Kategori ini juga mencakup kegiatan pemegang asset, seperti kegiatan perusahaan holding dan kegiatan dari lembaga penjaminan atau
                pendanaan dan lembaga keuangan sejenis. Berkembangnya ragam kegiatan ekonomi dan cara transaksi yang tidak lagi selalu
                menggunakan cara konvensional (transaksi langsung) turut mendorong meningkatnya aktivitas lapangan usaha Jasa Keuangan dan
                Asuransi.</br>
                <h5>Kontribusi sektor terhadap PDB 2022 : 3,90%</h5>
                <h5>Nilai tambah sektor 2022 : 4,96 triliun</h5>
                <h5>Laju pertumbuhan sektor 2022 : 8,91%</h5>
                " onclick="tampilkanDeskripsi(this)">
                    <img src="assets/salary.png" alt="Jasa Keuangan" class="icon2-img">
                    <p class="icon2-text">JASA KEUANGAN</p>
                </div>
            </div>
        </div>
    </div>

    <div class="economy-container">
        <div class="economy-title">
            <p>EKONOMI REGIONAL</p>
        </div>
        <div class='tableauPlaceholder' id='viz1693799474997' style='position: relative'>
            <noscript><a href='#'><img alt='Story 1 ' src='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Dr&#47;Draft_Statistik_DPMPTSP&#47;Story1&#47;1_rss.png' style='border: none' /></a></noscript>
            <object class='tableauViz'  style='display:none;'>
                <param name='host_url' value='https%3A%2F%2Fpublic.tableau.com%2F' /> 
                <param name='embed_code_version' value='3' /> 
                <param name='site_root' value='' /><param name='name' value='Draft_Statistik_DPMPTSP&#47;Story1' />
                <param name='tabs' value='no' /><param name='toolbar' value='yes' />
                <param name='static_image' value='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Dr&#47;Draft_Statistik_DPMPTSP&#47;Story1&#47;1.png' /> 
                <param name='animate_transition' value='yes' />
                <param name='display_static_image' value='yes' />
                <param name='display_spinner' value='yes' />
                <param name='display_overlay' value='yes' />
                <param name='display_count' value='yes' />
                <param name='language' value='en-US' />
                <param name='filter' value='publish=yes' />
            </object>
        </div>
    </div>
    <div id="scrollToTopBtn" class="scroll-to-top-button">
        <i class="bx bx-up-arrow-alt"></i>
      </div>
    
    <script type='text/javascript'>
        var divElement = document.getElementById('viz1693799474997');                    
        var vizElement = divElement.getElementsByTagName('object')[0];                    
        vizElement.style.width='100%';vizElement.style.height=(divElement.offsetWidth*0.75)+'px';                    
        var scriptElement = document.createElement('script');                    
        scriptElement.src = 'https://public.tableau.com/javascripts/api/viz_v1.js';                    
        vizElement.parentNode.insertBefore(scriptElement, vizElement);                
    </script>
    <script>
        const icons = document.querySelectorAll(".icon");
        const contentImage = document.getElementById("content-image");
        const contentText = document.getElementById("content-text");

        const industriIcon = document.querySelector('[data-judul="INDUSTRI PENGOLAHAN"]');
        industriIcon.click();      

        const descriptionDiv = document.createElement("div");
        descriptionDiv.classList.add("description-container");
        const descriptionTitle = document.createElement("h3");
        descriptionTitle.textContent = "Deskripsi";
        const descriptionText = document.createElement("p");
        descriptionText.classList.add("description-text");
        descriptionDiv.appendChild(descriptionTitle);
        descriptionDiv.appendChild(descriptionText);
        contentText.appendChild(descriptionDiv);
    
        icons.forEach(icon => {
            icon.addEventListener("click", function() {
                const imageSrc = icon.getAttribute("data-image");
                const labelText = icon.querySelector(".icon-label").textContent;
                const description = icon.getAttribute("data-description");
                const additionalText = icon.getAttribute("data-additional-text");

                descriptionText.textContent = description;
    
                const additionalTextParagraphs = additionalText.split('|').map(text => `<p>${text}</p>`).join('');
    
                contentImage.src = imageSrc;
    
                const textContent = `
                    <h2>${labelText}</h2>
                    ${additionalTextParagraphs}
                    <p>${description}</p>
                    
                `;
    
                contentText.innerHTML = textContent;
            });
        });

        function tampilkanDeskripsi(ikon) {
          const judulIkon = ikon.getAttribute('data-judul');
          const deskripsi = ikon.getAttribute('data-keterangan');
      
          const descriptionContent = document.getElementById('description-content');

          const descriptionTitle = document.querySelector('.description-title');
      
          descriptionContent.innerHTML = `<p>${deskripsi}</p>`;

          descriptionTitle.innerHTML = `<p>${judulIkon}</p>`;
        }

        function showContent(menu) {
            const content = document.getElementById('content');
            content.innerHTML = `<h2>${menu}</h2>`;
        }
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
        const infrastrukturIcon = document.querySelector('[data-judul="INFRASTRUKTUR"]');
        infrastrukturIcon.click();
    });
    </script>

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

    <script>
        const imageContainer = document.querySelector(".content-image");
        
        const infrastrukturImages = [
            "assets/daerah/infrastruktur/infrastruktur1.jpg",
            "assets/daerah/infrastruktur/infrastruktur2.jpg",
            "assets/daerah/infrastruktur/infrastruktur3.jpg",
            "assets/daerah/infrastruktur/infrastruktur4.jpg"
        ];

        const pendudukImages = [
            "assets/daerah/penduduk/penduduk1.jpg",
            "assets/daerah/penduduk/penduduk2.jpeg",
            "assets/daerah/penduduk/penduduk3.jpg",
            "assets/daerah/penduduk/penduduk4.jpg",
            "assets/daerah/penduduk/penduduk5.jpg",
            "assets/daerah/penduduk/penduduk6.jpeg"
        ];

        const kesehatanImages = [
            "assets/daerah/kesehatan/kesehatan1.png",
            "assets/daerah/kesehatan/kesehatan2.jpg",
            "assets/daerah/kesehatan/kesehatan3.jpg",
            "assets/daerah/kesehatan/kesehatan4.jpg"
        ];

        const pendidikanImages = [
            "assets/daerah/pendidikan/pendidikan1.jpg",
            "assets/daerah/pendidikan/pendidikan2.jpg",
            "assets/daerah/pendidikan/pendidikan3.jpg",
            "assets/daerah/pendidikan/pendidikan4.jpg"
        ];

        const pariwisataImages = [
            "assets/daerah/pariwisata/pariwisata1.jpg",
            "assets/daerah/pariwisata/pariwisata2.jpg",
            "assets/daerah/pariwisata/pariwisata3.jpeg",
            "assets/daerah/pariwisata/pariwisata4.jpg"
        ];

        let currentImages = infrastrukturImages; // Default to infrastruktur images
        let currentIndex = 0;

        function changeImage() {
            currentIndex = (currentIndex + 1) % currentImages.length;
            const imageUrl = currentImages[currentIndex];
            contentImage.src = imageUrl;
        }

        const imageChangeInterval = setInterval(changeImage, 3000);

        contentImage.addEventListener("click", () => {
            clearInterval(imageChangeInterval);
        });

        const pendudukIcon = document.querySelector('[alt="Penduduk & Ketenagakerjaan"]');
        pendudukIcon.addEventListener("click", () => {
            currentImages = pendudukImages; // Change to penduduk images
            currentIndex = 0; // Reset the index
            const imageUrl = currentImages[currentIndex];
            contentImage.src = imageUrl;
        });

        const kesehatanIcon = document.querySelector('[alt="Kesehatan"]');
        kesehatanIcon.addEventListener("click", () => {
            currentImages = kesehatanImages; // Change to penduduk images
            currentIndex = 0; // Reset the index
            const imageUrl = currentImages[currentIndex];
            contentImage.src = imageUrl;
        });

        const pendidikanIcon = document.querySelector('[alt="Pendidikan"]');
        pendidikanIcon.addEventListener("click", () => {
            currentImages = pendidikanImages; // Change to penduduk images
            currentIndex = 0; // Reset the index
            const imageUrl = currentImages[currentIndex];
            contentImage.src = imageUrl;
        });

        const pariwisataIcon = document.querySelector('[alt="Pariwisata"]');
        pariwisataIcon.addEventListener("click", () => {
            currentImages = pariwisataImages; // Change to penduduk images
            currentIndex = 0; // Reset the index
            const imageUrl = currentImages[currentIndex];
            contentImage.src = imageUrl;
        });
    </script>
</body>
</html>
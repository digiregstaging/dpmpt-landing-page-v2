<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>DPMPTSP</title>
        <link rel="stylesheet" href="css/style.css">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link rel="shortcut icon" type="image/png" href="assets/logo.png">
        <style>
			@import url(https://fonts.googleapis.com/css?family=Lumanosimo);
			@import url(https://fonts.googleapis.com/css?family=Kaushan+Script);        
		</style>
    </head>
<body style="background:url(assets/balikpapan.jpg); background-repeat:no-repeat; background-size:100% 700px">
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
            <a class="visitor-box1 visitor-text1">Visitor : 
            <span>
                <?php
                $filename = 'counter.txt';

                function counter(){		
                    global $filename;	
                    if(file_exists($filename)){$value = file_get_contents($filename);}else{$value = 0;}
                    file_put_contents($filename, ++$value);
                }
                counter();	

                echo '  '.file_get_contents($filename).' ';	
                ?>

                </span>
            </a>
        </nav>
    </header>

    <main>
        <section id="hero">
            <h1>Skuy Nginvest</h1>
            <p class="ikn">Di Beranda IKN</p>
            <div class="visitor-box">
            <p class="visitor-text">
            </p>
            </div>
        </section>          
    </main>
    <div class="blue-background">
        <p class="blue-text1">'Terwujudnya Kota Tujuan Investasi dengan Pelayanan Prima<br>menuju Kota Balikpapan yang Nyaman dihuni dan Berkelanjutan menuju Madinatul Iman'</p>
    </div>
    <div class="image-row">
        <div class="image-box">
            <a href="https://www.bkpm.go.id/id/home" target="_blank">
                <img src="assets/bkpm.png" alt="Image 1">
            </a>            
        </div>
        <div class="image-box">
            <a href="http://investasi.balikpapan.go.id/main" target="_blank">
                <img src="assets/dpmpt.png" alt="Image 2">
            </a>            
        </div>
    </div>
    <div class="image-row">
        <div class="image-box">
            <a href="https://geoportal.onemap.id/portal/apps/webappviewer/index.html?id=7c35b9ceb1cf4ba1a763e0f5b6c2be0f" target="_blank">
                <img src="assets/one.png" alt="Image 3">
            </a>            
        </div>
        <div class="image-box">
            <a href="https://oss.go.id/" target="_blank">
                <img src="assets/oss.png" alt="Image 4">
            </a>            
        </div>
    </div>
    <div class="centered-text">
        <p>PROFIL KOTA BALIKPAPAN</p>
    </div>
    <div class="video-container">
        <iframe width="1000" height="415" src="https://www.youtube.com/embed/_PWpJ4btLwk" frameborder="0" allowfullscreen></iframe>
    </div>
    <div class="map-container">
    <div class="map-background">
        <iframe width="100%" height="300px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.8796128828367!2d116.89242131471634!3d-1.2428957990934444!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df145d9b0716dfd%3A0xe7aa867936db72c7!2sDPMPT+(+DINAS+PENANAMAN+MODAL+DAN+PERIZINAN+TERPADU+)!5e0!3m2!1sen!2sid!4v1532476461519" gesturehandling="none">
        </iframe>
    </div>
    <div class="map-content">
        <p class="map-heading">PETA INVESTASI</p>
        <p class="map-subheading">Peta sebaran potensi dan peluang investasi</p>
            <p class="map-subheading">Kota Balikpapan</p>
        <a href="gis.php" class="red-button" target="_blank">menuju</a>
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
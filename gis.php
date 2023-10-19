<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>DPMPTSP</title>
        <link rel="stylesheet" href="css/infrastruktur.css">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link rel="shortcut icon" type="image/png" href="assets/logo.png">
        <style>
        /* Set the iframe to fill the entire page */
        iframe {
            position: absolute;
            top: calc(6% + 1.3rem); /* Tinggi header + padding header */
            left: 0;
            width: 100%;
            height: calc(100% - (50px + 1rem)); /* Sisanya tinggi viewport */
            border: none; /* Hapus border iframe */
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
    
    <div class="gis">
    <iframe src="https://experience.arcgis.com/experience/80b6fdfe09cb49b8a8bcae708931060c/"></iframe>
        </div>

        <script type='text/javascript'>                    
            var divElement = document.getElementById('viz1693884408123');                    
            var vizElement = divElement.getElementsByTagName('object')[0];                    
            if ( divElement.offsetWidth > 800 ) { vizElement.style.width='100%';vizElement.style.height=(divElement.offsetWidth*0.75)+'px';
                } else if ( divElement.offsetWidth > 500 ) { vizElement.style.width='100%';vizElement.style.height=(divElement.offsetWidth*0.75)+'px';
                    } else { vizElement.style.width='100%';vizElement.style.height='1427px';}                     
                    var scriptElement = document.createElement('script');                    
                    scriptElement.src = 'https://public.tableau.com/javascripts/api/viz_v1.js';                    
                    vizElement.parentNode.insertBefore(scriptElement, vizElement);                
        </script>
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
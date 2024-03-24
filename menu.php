<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/menu.css">
    <title>Kávový Raj - Menu</title>
</head>
<body>
    <!-- Navigácia  -->
    <div class="navbar">
        <span class="menu-icon" onclick="toggleMenu()">☰</span>
        <div class="navbar-logo">
          <h1>Kávový raj</h1>
        </div>
        <div class="navbar-ul">
          <li><a href="index.html">Domov</a></li>
          <li><a href="onas.html">O nás</a></li>
          <li><a href="galeria.html">Galéria</a></li>
          <li><a href="menu.html">Menu</a></li>
        </div>
      </div>

    <!-- Menu obrázok -->
    <section class="menu">
        <img src="img/menu.jpg" alt="naše menu" width="707" height="1000">
    </section>

    <!-- Footer -->
    <footer>
        <div class="footer-wrapper">
            <div class="footer-onas">
                <h4>Kto sme</h4>
                <p>Naša kaviareň je miesto kde vytvárame spoločenstvo milovníkov kávy a dobrých chvíľ. Sme tím vášnivých baristov a ochotný personál, ktorí s radosťou zdieľajú svoju lásku k výnimočnej káve a pohostinnosti.</p>
                <div class="footer-tvorca">
                </div>
            </div>
            <div class="footer-kontakt">
                <h4>Kontaktujte nás</h4>
                <ul>
                    <li><p><i class="fa-solid fa-location-dot" style="color: #ffffff;"></i> Tr. A. Hlinku 1, 949 01 Nitra</p></li>
                    <li><a href="mailto:kavovy.raj@mail.com"><i class="fa-solid fa-envelope" style="color: #ffffff;" ></i> kavovy.raj@mail.com</a></li>
                    <li><a href="tel:+421-0912-222-333"><i class="fa-solid fa-phone" style="color: #ffffff;"></i> +421-0912-222-333</a></li>
                </ul>
            </div>
            <div class="footer-odkazy">
                <h4>Rýchle odkazy</h4>
                <ul>
                    <li><a href="index.html">Domov</a></li>
                    <li><a href="onas.html">O nás</a></li>
                    <li><a href="galeria.html">Galéria</a></li>
                    <li><a href="menu.html">Menu</a></li>
                </ul>
            </div>
            <div class="footer-najdetenas">
                <h4>Nájdete nás</h4>
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10614.839764656655!2d18.0910518!3d48.3084298!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xba2bad032d96b960!2sFakulta%20pr%C3%ADrodn%C3%BDch%20vied%20a%20informatiky!5e0!3m2!1ssk!2ssk!4v1669307792855!5m2!1ssk!2ssk" width="300" height="150" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> 
            </div>
        </div>
        <div class="copyright">
            <p>&copy; Copyright 2023 by Martin Rosík</p>
        </div>
    </footer>
    <script src="js/app.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="css/index.css">
    <title>Kávový Raj</title>
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
    
    <!-- Zaciatok -->
    <section class="zaciatok">
        <div class="zaciatok-wrapper">
            <div class="zaciatok-obr">
                <img src="img/zaciatok.jpg" alt="priestory kaviarne">
            </div>
            <div class="zaciatok-text">
                <h1>Kávový raj</h1>
                <p>Je čas sa zastaviť pre chutnú kávu.</p>
                <p class="zac-text2">Rozpustite sa v atmosfére jedinečnej chuti a pohody. Užívajte si kúzlo čerstvo pripravenej kávy v našej kaviarni, kde sa spája jedinečný štýl s lahodnými zážitkami.</p>
                <a href="onas.html" class="button">O nás</a>
            </div>
        </div>
    </section>

    <!-- Sekcia Naše Zručnosti -->
    <section class="zrucnosti">
        <div class="zrucnosti-wrapper">
            <div class="zrucnosti-text">
                <h4>Naše zručnosti</h4>
                <h2>Pre milovníkov kávy pripravujeme lahodnú kávu.</h2>
                <p>Vitajte v našej kaviarni, mi sme viac než len miesto s vynikajúcou kávou - sme centrom radosti, oddychu a skvelých zážitkov. Naša vášeň pre kvalitu a lásku k detailom nás robí jedinečnými.</p>
            </div>
            <div class="zrucnosti-obr">
                <img src="img/kaviaren4.jpg" alt="pohár kávy" height="600">
            </div>
        </div>
    </section>

    <!-- Sekcia Výroba Kávy -->
    <section class="vyroba">
        <div class="vyroba-wrapper">
            <div class="vyroba-obr">
                <img src="img/vyroba-obr.jpg" alt="stroj na výrobu kávy" width="580">
            </div>
            <div class="vyroba-text">
                <h2>Proces robenia kávy v našej kaviarni:</h2>
                <ul>
                    <li>Barista vyberá vhodné kávové zrná na základe objednávky a použitéj metódy prípravy.</li>
                    <li>Zrná sa mlia v kávovom mlyne podľa požadovanej hrubosti.</li>
                    <li>Pre espresso barista použije presne odmerané množstvo mletej kávy, ktorú následne extrahuje pod vysokým tlakom.</li>
                    <li>Pre nápoje s mliekom, barista páli mlieko na parnom vačku, vytvárajúc tak kvalitnú mliečnu penu.</li>
                    <li>Barista skomponuje espresso, filtrovanú kávu alebo iný nápoj podľa objednávky a pridá prípadne ďalšie ingrediencie.</li>
                    <li>Káva je ďalej zdobená podľa kreativity baristy, možno s cappuccinovým vzorom, kakaovým práškom alebo inými dekoráciami.</li>
                    <li>Hotový nápoj je podávaný zákazníkovi na štýlovom podnose alebo v originálnej šálke.</li>
                    <li>Baristi pravidelne udržiavajú čistotu vybavenia, čistia kávovary a starajú sa o čistotu v kaviarni.</li>
                </ul>
                <a href="https://simplecoffee.eu/pestovanie-zber-spracovanie-kavy/" class="vyroba-button" target="_blank">Viac informáci nájdete tu.</a>
            </div>
            
        </div>
    </section>

    <!-- Sekcia Otváracie Hodiny -->
    <section class="otvaracie-hodiny">
        <div class="otvaracie-hodiny-wrapper">
            <div class="ot-text-l">
                <h2>Otváracie hodiny a rezervácie.</h2>
                <p>Vitajte v našej kaviarni! Očarujte svoje chuťové bunky v našom útulnom prostredí plnom vôňe čerstvo zomletej kávy a lahodných dezertov. Tešíme sa na vás každý deň!</p>
            </div>
            <div class="ot-img-s">
                <img src="img/otvaracie-hod.png" alt="šálka kávy">
            </div>
            <div class="ot-text-p">
                <h4>Otváracie hodiny:</h4>
                <p>Pondelok až piatok od <strong>08:00 - 18:00</strong></p>
                <p>Sobota od <strong>08:00 - 16:00</strong></p>
                <p>Nedeľa - <strong>ZATVORENÉ</strong></p>
                <h4>Číslo pre rezerváciu:</h4>
                <div class="tel-cislo">
                    <a href="tel:0912-222-333"><i class="fa-solid fa-phone" style="color: #000000;"></i> +421-0912-222-333</a>
                </div>
            </div>
        </div>
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
<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="css/onas.css">
    <title>Kávový Raj - O nás</title>
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

    <!-- Akordeón -->
    <section class="akordeon">
        <h3>Často kladené otázky:</h3>
        <button class="accordion">Kedy je kaviareň otvorená?</button>
        <div class="panel">
            <table class="otvaracie hodiny">
                <tr>
                    <th>Deň</th>
                    <th>Čas</th>
                </tr>
                <tr>
                    <td>Pondelok až Piatok</td>
                    <td>od 08:00 do 18:00</td>
                </tr>
                <tr>
                    <td>Sobota</td>
                    <td>od 08:00 do 16:00</td>
                </tr>
                <tr>
                    <td>Nedeľa</td>
                    <td>ZATVORENÉ</td>
                </tr>
            </table>
        </div>

        <button class="accordion">Je možné rezervovať stôl vopred?</button>
        <div class="panel">
            <p>V Kávovom raji chceme, aby ste mali vždy miesto pre seba. Teraz môžete rezervovať svoj stôl a užiť si pokojné chvíle v našej kaviarni. Či už plánujete rande, stretnutie s priateľmi alebo jednoducho oddychujete s knihou, rezervácia stola vám zabezpečí príjemný zážitok. Stačí nám len zavolať.</p>
        </div>

        <button class="accordion">Akceptujete platby kartou?</button>
        <div class="panel">
            <p> S radosťou oznamujeme, že prijímame platby kartou. Nemusíte sa starať o hotovosť, len jednoducho zaplatíte kartou a budete mať viac času na užívanie si chvíľ v našej kaviarni. </p>
        </div>
        <button class="accordion">Wi-Fi dostupné?</button>
        <div class="panel">
            <p>V Kávovom raji chceme, aby ste sa cítili ako doma. Preto sme pre vás pripravili pohodlné a bezstarostné pripojenie na Wi-Fi. Či ste tu na pracovnej schôdzke, relaxujete s obľúbeným románom alebo zdieľate zážitky s priateľmi, naša rýchla a spoľahlivá Wi-Fi vám umožní byť stále online. Pripojte sa, oddýchnite si a užívajte si svoj čas v Kávovom raji!</p>
        </div>
        <button class="accordion">Aké boli naše začiatky ?</button>
        <div class="panel">
            <p>Kávový raj vznikol v malom kúte mesta s jediným cieľom - priniesť do komunity výnimočnú kávu a teplé miesto, kde si ľudia môžu oddýchnuť a podeliť sa o radostný okamih. Prvý šálek kávy bol vyslúžený s úsmevom a radosťou, a to bola počiatočná iskra, ktorá nám dala impulz na cestu, na ktorej sme dodnes.</p>
        </div>
    </section>

    <!-- Formulár -->
    <section class="formular">
        <form>
            <h2>Kontaktujte nás</h2>
            <label for="meno">Vaše meno:</label>
            <input type="text" id="meno" name="meno" required>

            <label for="email">Váš e-mail:</label>
            <input type="email" id="email" name="email" required>

            <label for="poznamka">Vaša poznámka:</label>
            <textarea name="message" rows="10" cols="50">Tu napíšte Vašu poznámku:</textarea>

            <div class="suhlas">
                <input type="checkbox" id="suhlas" name="suhlas" value="suhlas" required>
                <label for="suhlas">Súhlasím so spracovaním osobných údajov.</label>
            </div>

            <input class="button" type="submit" value="Odoslať">
        </form>
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
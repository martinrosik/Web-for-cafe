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
    <title>O nás</title>
</head>
 <!-- Navigácia  -->
    <?php
        include('partials/header.php');
    ?>   
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
            <form action="_inc/classes/Formular.php" method="post">
            <h2>Kontaktujte nás</h2>
            <label for="meno">Vaše meno:</label>
            <input type="text" id="meno" name="meno" placeholder= "Vaše meno" required>

            <label for="email">Váš e-mail:</label>
            <input type="email" id="email" name="email" placeholder= "Váš email" required>

            <label for="poznamka">Vaša poznámka:</label>
            <textarea id="poznamka" name="message" rows="10" cols="50" placeholder= "Tu napíšte Vašu poznámku:"></textarea>

            <div class="suhlas">
                <input type="checkbox" id="suhlas" name="suhlas" value="suhlas" required>
                <label for="suhlas">Súhlasím so spracovaním osobných údajov.</label>
            </div>

            <input class="button" type="submit" value="Odoslať">
        </form>
    </section>

    <!-- Footer -->
    <?php
        include_once('partials/footer.php');
    ?> 
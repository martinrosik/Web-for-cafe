<?php

class Accordion {
    private $items;

    public function __construct($items) {
        $this->items = $items;
    }

    public function render() {
        $output = '<section class="akordeon">';
        foreach ($this->items as $item) {
            $output .= '<button class="accordion">' . htmlspecialchars($item['question']) . '</button>';
            $output .= '<div class="panel">' . $item['answer'] . '</div>';
        }
        $output .= '</section>';
        return $output;
    }
}

$accordionItems = [
    [
        'question' => 'Kedy je kaviareň otvorená?',
        'answer' => '
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
            </table>'
    ],
    [
        'question' => 'Je možné rezervovať stôl vopred?',
        'answer' => 'V Kávovom raji chceme, aby ste mali vždy miesto pre seba. Teraz môžete rezervovať svoj stôl a užiť si pokojné chvíle v našej kaviarni. Či už plánujete rande, stretnutie s priateľmi alebo jednoducho oddychujete s knihou, rezervácia stola vám zabezpečí príjemný zážitok. Stačí nám len zavolať.'
    ],
    [
        'question' => 'Akceptujete platby kartou?',
        'answer' => 'S radosťou oznamujeme, že prijímame platby kartou. Nemusíte sa starať o hotovosť, len jednoducho zaplatíte kartou a budete mať viac času na užívanie si chvíľ v našej kaviarni.'
    ],
    [
        'question' => 'Wi-Fi dostupné?',
        'answer' => 'V Kávovom raji chceme, aby ste sa cítili ako doma. Preto sme pre vás pripravili pohodlné a bezstarostné pripojenie na Wi-Fi. Či ste tu na pracovnej schôdzke, relaxujete s obľúbeným románom alebo zdieľate zážitky s priateľmi, naša rýchla a spoľahlivá Wi-Fi vám umožní byť stále online. Pripojte sa, oddýchnite si a užívajte si svoj čas v Kávovom raji!'
    ],
    [
        'question' => 'Aké boli naše začiatky ?',
        'answer' => 'Kávový raj vznikol v malom kúte mesta s jediným cieľom - priniesť do komunity výnimočnú kávu a teplé miesto, kde si ľudia môžu oddýchnuť a podeliť sa o radostný okamih. Prvý šálek kávy bol vyslúžený s úsmevom a radosťou, a to bola počiatočná iskra, ktorá nám dala impulz na cestu, na ktorej sme dodnes.'
    ]
];

$accordion = new Accordion($accordionItems);
echo $accordion->render();

?>

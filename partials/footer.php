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
                    <?php
                        include_once('_inc/classes/Menu.php'); 
                        $pages = array(
                            'Domov' => 'index.php',
                            'O nás' => 'onas.php',
                            'Galéria' => 'galeria.php',
                            'Menu' => 'menu.php'
                        );
                        $navbar = new Menu($pages);
                        echo $navbar->generate_menu();
                    ?>
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
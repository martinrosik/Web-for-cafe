<div class="navbar">
    <div class="navbar-logo">
        <h1>Kávový raj</h1>
    </div>
    <div class="navbar-ul">
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

        session_start();
        if(isset($_SESSION['user'])) {
            echo '<a href="logout.php">Odhlásiť sa</a>';
        } else {
            echo '<a href="login.php">Prihlásiť sa</a>';
            echo '<a href="register.php">Registrovať sa</a>';
        }
        ?>
    </div>
</div>

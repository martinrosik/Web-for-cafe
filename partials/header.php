<div class="navbar">
    <div class="navbar-logo">
        <h1>Kávový raj</h1>
    </div>
    <div class="navbar-ul">
        <?php
        include('_inc/classes/Menu.php');
        session_start();
        
        $pages = array(
            'Domov' => 'index.php',
            'O nás' => 'onas.php',
            'Galéria' => 'galeria.php',
            'Menu' => 'menu.php'
        );
        $navbar = new Menu($pages);
        echo $navbar->generate_menu();

        
        if(isset($_SESSION['user'])) {
            echo '<li><a href="logout.php">Odhlásiť sa</a></li>';
        } else {
            echo '<li><a href="login.php">Prihlásiť sa</a></li>';
            echo '<li><a href="register.php">Registrovať sa</a></li>';
        }
        ?>
    </div>
</div>

<div class="navbar">
    <div class="navbar-logo">
        <h1>Kávový raj</h1>
    </div>
    <div class="navbar-ul">
        <?php
        include('_inc/classes/Menu.php'); 
        $pages = array(
            'Domov' => 'index.php',
            'O nás' => 'onas.php',
            'Galéria' => 'galeria.php',
            'Menu' => 'menu.php',
        );
        if(isset($_SESSION['auth']) && $_SESSION['auth'] == true){
            $pages['Odhlásiť sa'] = 'Logout.php';
            if(isset($_SESSION['auth_role']) && $_SESSION['auth_role'] == 1){
                $pages['Admin panel'] = 'Admin.php';
            }
        } else {
            $pages['Prihlásiť sa'] = 'login.php';
            $pages['Registrácia'] = 'register.php';
        }
        
        $navbar = new Menu($pages);
        echo $navbar->generate_menu();
        ?>
    </div>
</div>

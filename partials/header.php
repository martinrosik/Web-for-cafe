<div class="navbar">
        <span class="menu-icon" onclick="toggleMenu()">☰</span>
        <div class="navbar-logo">
          <h1>Kávový raj</h1>
        </div>
        <div class="navbar-ul">
          <?php
            $pages = array('Domov'=>'index.php',
                            'O nás'=>'onas.php',
                            'Galéria'=>'galeria.php',
                            'Menu' => 'menu.php'  
                        );
            echo(generate_menu($pages));
          ?> 
        </div>
</div>
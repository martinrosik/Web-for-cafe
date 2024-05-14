<?php
    session_start();
    if(isset($_SESSION['auth']) && $_SESSION['auth'] == true) {
        unset($_SESSION['auth']);
        unset($_SESSION['auth_role']);
        unset($_SESSION['auth_user']);
        
        $_SESSION['message'] = "Ste úspešne odhlásený";
        header("Location: login.php");
        exit();
    }
?>
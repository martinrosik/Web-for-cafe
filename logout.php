<?php
session_start();

class LogoutHandler {
    public function __construct() {
    }

    public function logout() {
        if(isset($_SESSION['auth']) && $_SESSION['auth'] == true) {
            $this->clearSession();
            $_SESSION['message'] = "Ste úspešne odhlásený!";
            $this->redirect('login.php');
        }
    }

    private function clearSession() {
        unset($_SESSION['auth']);
        unset($_SESSION['auth_role']);
        unset($_SESSION['auth_user']);
    }

    private function redirect($location) {
        header("Location: $location");
        exit();
    }
}

$logoutHandler = new LogoutHandler();
$logoutHandler->logout();
?>

<?php
include('_inc/classes/Connect.php');

class Auth {
    private $authRole;
    private $auth;

    public function __construct() {
        $this->auth = isset($_SESSION['auth']) ? $_SESSION['auth'] : null;
        $this->authRole = isset($_SESSION['auth_role']) ? $_SESSION['auth_role'] : null;
    }

    public function checkAuth() {
        if (!$this->auth) {
            $this->setMessageAndRedirect("Pre prístup do admin rozhrania je nutné prihlásenie!", 'login.php');
        }
    }

    public function checkAdmin() {
        if ($this->authRole != '1') {
            $this->setMessageAndRedirect("Nemáte prístup do Admin rozhrania!", 'login.php');
        }
    }

    private function setMessageAndRedirect($message, $location) {
        $_SESSION['message'] = $message;
        header("Location: $location");
        exit();
    }
}

$auth = new Auth();
$auth->checkAuth();
$auth->checkAdmin();
?>

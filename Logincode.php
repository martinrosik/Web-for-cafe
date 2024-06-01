<?php
session_start();

class LoginHandler {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function handleLogin() {
        if(isset($_POST['loginbutton'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];
            
            $login_query = "SELECT * FROM users WHERE email=? AND password=? LIMIT 1";
            $stmt = $this->conn->prepare($login_query);
            $stmt->bind_param("ss", $email, $password);
            $stmt->execute();
            $result = $stmt->get_result();

            if($result->num_rows > 0) {
                $data = $result->fetch_assoc();
                $user_id = $data['id'];
                $user_email = $data['email'];
                $role = $data['role'];

                $_SESSION['auth'] = true;
                $_SESSION['auth_role'] = $role;
                $_SESSION['auth_user'] = [
                    'user_id' => $user_id,
                    'user_email' => $user_email
                ];

                $this->redirectUser($role);
            } else {
                $_SESSION['message'] = "Nesprávny email alebo heslo!";
                $this->redirect('login.php');
            }
        } else {
            $_SESSION['message'] = "Nie je možný prístup!";
            $this->redirect('login.php');
        }
    }

    private function redirectUser($role) {
        if($role == '1') {
            $_SESSION['message'] = "Vitajte v admin panely!";
            $this->redirect('admin.php');
        } elseif($role == '0') {
            $_SESSION['message'] = "Ste prihlásený!";
            $this->redirect('index.php');
        }
    }

    private function redirect($location) {
        header("Location: $location");
        exit();
    }
}

include('_inc/classes/Connect.php'); 
$db = new Database();
$conn = $db->getConnection();
$loginHandler = new LoginHandler($conn); 
$loginHandler->handleLogin();
?>

<?php
session_start();

class RegistrationHandler {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function processRegistration() {
        if(isset($_POST['user_register'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $confirm_password = $_POST['confirm_password'];

            if($password == $confirm_password) {
                $checkemail = "SELECT email FROM users WHERE email = ?";
                $stmt = $this->conn->prepare($checkemail);
                $stmt->bind_param("s", $email);
                $stmt->execute();
                $result = $stmt->get_result();

                if($result->num_rows > 0) {
                    $_SESSION['message'] = "Tento email nie je možné použiť!";
                } else {
                    $userquery = "INSERT INTO users (email, password) VALUES (?, ?)";
                    $stmt = $this->conn->prepare($userquery);
                    $stmt->bind_param("ss", $email, $password);
                    $stmt->execute();

                    if($stmt->affected_rows > 0) {
                        $_SESSION['message'] = "Registrácia úspešná!";
                        $this->redirect('login.php');
                    } else {
                        $_SESSION['message'] = "Registrácia neúspešná!";
                    }
                }
            } else {
                $_SESSION['message'] = "Heslá sa nezhodujú!";
            }
        }
        $this->redirect('register.php');
    }

    private function redirect($location) {
        header("Location: $location");
        exit();
    }
}

include('_inc/classes/Connect.php'); 
$db = new Database();
$conn = $db->getConnection();
$registrationHandler = new RegistrationHandler($conn); 
$registrationHandler->processRegistration();
?>

<?php
session_start();

class ContactForm {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function processForm() {
        if(isset($_POST['kontakt_submitted'])) {
            $meno = $_POST['meno'];
            $email = $_POST['email'];
            $poznamka = $_POST['poznamka'];
            $acceptance = $_POST['suhlas'];

            $checkemail = "SELECT email FROM kontakt WHERE email = '$email'";
            $checkemail_run = mysqli_query($this->conn, $checkemail);
            if(mysqli_num_rows($checkemail_run) > 0) {
                $_SESSION['message'] = "Tento email nie je možné použiť";
                $this->redirect('onas.php');
            } else {
                $kontaktquery = "INSERT INTO kontakt (meno, email, poznamka, acceptance) VALUES ('$meno', '$email', '$poznamka', '$acceptance')";
                $kontakt_run = mysqli_query($this->conn, $kontaktquery);  

                if($kontakt_run) {
                    $_SESSION['message'] = "Formulár bol úspešne odoslaný";
                } else {
                    $_SESSION['message'] = "Nastala chyba skúste to znova";
                }
                $this->redirect('onas.php');
            }
        } else {
            $this->redirect('onas.php');
        }
    }

    private function redirect($location) {
        header("Location: $location");
        exit();
    }
}

include('_inc/classes/Connect.php'); 
$contactForm = new ContactForm($conn); 
$contactForm->processForm();
?>

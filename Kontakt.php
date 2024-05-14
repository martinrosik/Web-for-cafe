<?php 
    session_start();
    include('_inc/classes/Connect.php');

    if(isset($_POST['kontakt_submitted'])) {
        $meno = $_POST['meno'];
        $email = $_POST['email'];
        $poznamka = $_POST['poznamka'];
        $acceptance = $_POST['suhlas'];

        $checkemail = "SELECT email FROM kontakt WHERE email = '$email'";
        $checkemail_run = mysqli_query($conn, $checkemail);
        if(mysqli_num_rows($checkemail_run) > 0) {
            $_SESSION['message'] = "Tento email nie je možné použiť";
            header('Location: onas.php');
            exit();
        } else {
            $kontaktquery = "INSERT INTO kontakt (meno, email, poznamka, acceptance) VALUES ('$meno', '$email', '$poznamka', '$acceptance')";
            $kontakt_run = mysqli_query($conn, $kontaktquery);  

            if($kontakt_run) {
                $_SESSION['message'] = "Formulár bol úspešne odoslaný";
                header('Location: onas.php');
                exit();
            } else {
                $_SESSION['message'] = "Nastala chyba skúste to znova";
                header('Location: onas.php');
                exit();
            }
        }
    } else {
        header('Location: onas.php');
        exit();
    }
?>
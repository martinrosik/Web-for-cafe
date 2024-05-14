<?php
    session_start();
    include('_inc/classes/Connect.php');

    if(isset($_POST['user_register'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];

        if($password == $confirm_password) {
            $checkemail = "SELECT email FROM users WHERE email = '$email'";
            $checkemail_run = mysqli_query($conn, $checkemail);

            if(mysqli_num_rows($checkemail_run) > 0) {
                $_SESSION['message'] = "Tento email nie je možné použiť";
                header('Location: register.php');
                exit();
            } else {
                $userquery = "INSERT INTO users (email, password) VALUES ('$email', '$password')";
                $userquery_run = mysqli_query($conn, $userquery);  

                if($userquery_run) {
                    $_SESSION['message'] = "Registrácia úspešná";
                    header('Location: login.php');
                    exit();
                } else {
                    $_SESSION['message'] = "Registrácia neúspešná";
                    header('Location: register.php');
                    exit();
                }
            }
        } else {
            $_SESSION['message'] = "Heslá sa nezhodujú";
            header('Location: register.php');
            exit();
        }
    } else {
        header('Location: register.php');
        exit();
    }
?>

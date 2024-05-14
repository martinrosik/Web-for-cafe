<?php 
    session_start();
    include('_inc/classes/Connect.php');

    if(isset($_POST['loginbutton'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $login_query = "SELECT * FROM users WHERE email='$email' AND password='$password' LIMIT 1";
        $login_query_run = mysqli_query($conn, $login_query);

        if(mysqli_num_rows($login_query_run) > 0) {

            foreach($login_query_run as $data) {
                $user_id = $data['id'];
                $user_email = $data['email'];
                $role = $data['role'];
            }

            $_SESSION['auth'] = true;
            $_SESSION['auth_role'] = "$role"; 
            $_SESSION['auth_user'] = [
                'user_id' => $user_id,
                'user_email' => $user_email
            ];

            if($_SESSION['auth_role'] == '1') { 
                $_SESSION['message'] = "Vitajte v admin panely!";
                header('Location: admin.php');
                exit(); 
            } elseif($_SESSION['auth_role'] == '0') { 
                $_SESSION['message'] = "Ste prihlásený!";
                header('Location: index.php');
                exit(); 
            }

        } else {
            $_SESSION['message'] = "Nesprávny email alebo heslo!";
            header('Location: login.php');
            exit(); 
        }
    } else {
        $_SESSION['message'] = "Nie je možný prístup!";
        header('Location: login.php');
        exit();
    }
?>
<?php 
    include('_inc/classes/Connect.php');

    if(!isset($_SESSION['auth'])) {
        $_SESSION['message'] = "Prihlásenie pre prístup do Admin rozhrania";
        header('Location: login.php');
        exit();
    } else {
        if($_SESSION['auth_role'] != '1') {
            $_SESSION['message'] = "Nemáte prístup do Admin rozhrania";
            header('Location: login.php');
            exit();
        }
    }   
?> 
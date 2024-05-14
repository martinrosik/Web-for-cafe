<?php 
    include('_inc/classes/Connect.php');

    if(isset($_POST['user_delete'])) {
        $userid = $_POST['user_delete'];

        $query = "DELETE FROM users WHERE id='$userid'";
        $query_run = mysqli_query($conn, $query);

        if($query_run) {
            $_SESSION['message'] = "User vymazaný úspešne!";
            header('Location: Admin.php');
            exit();
        } else {
            $_SESSION['message'] = "Mazanie neúspešné!";
            header('Location: Admin.php');
            exit();
        }
    }

    if(isset($_POST['user_uprava'])) {
        $userid = $_POST['id'];
        $useremail = $_POST['email'];
        $userpassword = $_POST['heslo'];
        $userrole = $_POST['role'];

        $query = "UPDATE users SET id='$userid', email='$useremail', password='$userpassword', role='$userrole' WHERE id='$userid' ";
        $query_run = mysqli_query($conn, $query);

        if($query_run) {
            $_SESSION['message'] = "Úprava úspešná!";
            header('Location: Admin.php');
            exit();
        } else {
            $_SESSION['message'] = "Úprava neúspešná!";
            header('Location: Admin.php');
            exit();
        }
    }
?>
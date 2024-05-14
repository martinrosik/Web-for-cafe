<?php 
    include('_inc/classes/Connect.php');

    if(isset($_POST['kontakt_delete'])) {
        $user_id = $_POST['kontakt_delete'];

        $query = "DELETE FROM kontakt WHERE id='$user_id'";
        $query_run = mysqli_query($conn, $query);

        if($query_run) {
            $_SESSION['message'] = "Kontakt vymazaný úspešne";
            header('Location: Admin.php');
            exit();
        } else {
            $_SESSION['message'] = "Mazanie neúspešná";
            header('Location: Admin.php');
            exit();
        }
    }

    if(isset($_POST['kontakt_uprava'])) {
        $user_id = $_POST['id'];
        $user_name = $_POST['meno'];
        $user_email = $_POST['email'];
        $user_text = $_POST['poznamka'];

        $query = "UPDATE kontakt SET meno='$user_name', email='$user_email', poznamka='$user_text' WHERE id='$user_id' ";
        $query_run = mysqli_query($conn, $query);

        if($query_run) {
            $_SESSION['message'] = "Úprava úspešná";
            header('Location: Admin.php');
            exit();
        } else {
            $_SESSION['message'] = "Úprava neúspešná";
            header('Location: Admin.php');
            exit();
        }
    }
?>
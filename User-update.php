<?php 
session_start();
include('_inc/classes/Connect.php');

class UserHandler extends Database {
    
    public function deleteUser($userid) {
        $query = "DELETE FROM users WHERE id=?";
        $stmt = $this->getConnection()->prepare($query);
        $stmt->bind_param("i", $userid);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            $_SESSION['message'] = "User vymazaný úspešne!";
        } else {
            $_SESSION['message'] = "Mazanie neúspešné!";
        }
        header('Location: Admin.php');
        exit();
    }

    public function updateUser($userid, $useremail, $userpassword, $userrole) {
        $query = "UPDATE users SET email=?, password=?, role=? WHERE id=?";
        $stmt = $this->getConnection()->prepare($query);
        $stmt->bind_param("sssi", $useremail, $userpassword, $userrole, $userid);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            $_SESSION['message'] = "Úprava úspešná!";
        } else {
            $_SESSION['message'] = "Úprava neúspešná!";
        }
        header('Location: Admin.php');
        exit();
    }
}

$userHandler = new UserHandler();
if(isset($_POST['user_delete'])) {
    $userid = $_POST['user_delete'];
    $userHandler->deleteUser($userid);
}

if(isset($_POST['user_uprava'])) {
    $userid = $_POST['id'];
    $useremail = $_POST['email'];
    $userpassword = $_POST['heslo'];
    $userrole = $_POST['role'];

    $userHandler->updateUser($userid, $useremail, $userpassword, $userrole);
}
?>

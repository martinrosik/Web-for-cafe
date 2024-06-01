<?php
include('_inc/classes/Connect.php');
session_start();

class Kontakt {
    private $conn;

    public function __construct($db) {
        $this->conn = $db->getConnection();
    }

    public function deleteKontakt($user_id) {
        $query = "DELETE FROM kontakt WHERE id=?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("i", $user_id);
        $result = $stmt->execute();
        return $result;
    }

    public function updateKontakt($user_id, $user_name, $user_email, $user_text) {
        $query = "UPDATE kontakt SET meno=?, email=?, poznamka=? WHERE id=?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("sssi", $user_name, $user_email, $user_text, $user_id);
        $result = $stmt->execute();
        return $result;
    }
}
$db = new Database();
$kontakt = new Kontakt($db);

if (isset($_POST['kontakt_delete'])) {
    $user_id = $_POST['kontakt_delete'];

    if ($kontakt->deleteKontakt($user_id)) {
        $_SESSION['message'] = "Kontakt vymazaný úspešne!";
    } else {
        $_SESSION['message'] = "Mazanie neúspešné!";
    }
    header('Location: Admin.php');
    exit();
}

if (isset($_POST['kontakt_uprava'])) {
    $user_id = $_POST['id'];
    $user_name = $_POST['meno'];
    $user_email = $_POST['email'];
    $user_text = $_POST['poznamka'];

    if ($kontakt->updateKontakt($user_id, $user_name, $user_email, $user_text)) {
        $_SESSION['message'] = "Úprava úspešná!";
    } else {
        $_SESSION['message'] = "Úprava neúspešná!";
    }
    header('Location: Admin.php');
    exit();
}
?>

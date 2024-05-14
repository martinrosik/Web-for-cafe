<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/admin.css">
    <title>Úprava kontakov</title>
</head>
<?php 
    session_start();
    include('partials/header.php');
    include('_inc/classes/Connect.php');
?>
<div class="textadmin">
<h1 class= "Admintext">Úprava kontakov:</h1>  
</div>
<div class="card-body">
    <?php
        if(isset($_GET['id'])) {
            $user_id = $_GET['id'];
            $users = "SELECT * FROM kontakt WHERE id='$user_id'";
            $user_run = mysqli_query($conn, $users);
            
            if(mysqli_num_rows($user_run) > 0) {
                foreach($user_run as $user) {
                    ?>
                        <form action="Update.php" method="POST">
                            <div class="row">
                                <div class="col-md-12 mb-4">
                                    <input type="hidden" name="id" value="<?= $user['id'];?>" class="form-control">
                                </div>
                                <div class="col-md-12 mb-4">
                                    <label for="">Meno:</label>
                                    <input type="text" name="meno" value="<?= $user['meno'];?>" class="form-control">
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="">Email:</label>
                                    <input type="text" name="email" value="<?= $user['email'];?>" class="form-control">
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="">Poznamka:</label>
                                    <input type="text" name="poznamka" value="<?= $user['poznamka'];?>" class="form-control">
                                </div>
                                <div class="col-md-12 mb-3">
                                    <button type="submit" name="kontakt_uprava" class="btn btn-success    ">Upraviť kontakt</button>
                                </div>
                            </div>
                        </form>
                    <?php
                }
            } else {
                ?>
                    <h4>Nenašli sa žiadne dáta</h4>
                <?php
            }
        }
    ?>
</div>
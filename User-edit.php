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
<h1 class= "Admintext">Úprava používateľov:</h1>  
</div>
<div class="card-body">
    <?php
        if(isset($_GET['id'])) {
            $userid = $_GET['id'];
            $user = "SELECT * FROM users WHERE id='$userid'";
            $userrun = mysqli_query($conn, $user);
            
            if(mysqli_num_rows($userrun) > 0) {
                foreach($userrun as $userr) {
                    ?>
                        <form action="User-update.php" method="POST">
                            <div class="row">
                                <div class="col-md-12 mb-4">
                                    <label for="">User ID:</label>
                                    <input type="text" name="id" value="<?= $userr['id'];?>" class="form-control">
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="">Email:</label>
                                    <input type="text" name="email" value="<?= $userr['email'];?>" class="form-control">
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="">Password:</label>
                                    <input type="text" name="heslo" value="<?= $userr['password'];?>" class="form-control">
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="">Role:</label>
                                    <input type="text" name="role" value="<?= $userr['role'];?>" class="form-control">
                                </div>
                                <div class="col-md-12 mb-3">
                                    <button type="submit" name="user_uprava" class="btn btn-success">Upraviť požívateľa</button>
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
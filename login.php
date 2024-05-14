<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="css/login.css">
    <title>Prihlásenie</title>
</head>
<body>
    
</body>
</html>
<?php
    session_start();
    include('partials/header.php');
?>
<section class="formular">
        <form action="Logincode.php" method="post">
            <h2>Prihlásiť sa</h2>
            <?php 
                include('Message.php'); 
            ?>
            <label for="email">Váš e-mail:</label>
            <input type="email" id="email" name="email" placeholder= "Váš email" required>
            <label for="heslo">Vaše heslo:</label>
            <input type="password" id="password" name="password" placeholder="Vaše heslo">
            <input class="button" type="submit" name= "loginbutton" value="Prihlásiť sa">
        </form>
</section> 

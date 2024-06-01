<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="assets/css/onas.css">
    <title>O nás</title>
</head>
 <!-- Navigácia  -->
    <?php
        session_start();
        include('templates/partials/header.php');
    ?>   
    <!-- Akordeón -->
    <?php 
        include_once('_inc/classes/Accordion.php');
    ?>
    <!-- Formulár -->
    <section class="formular">
            <form action="Kontakt.php" method="post">
            <h2>Kontaktujte nás</h2>
            <?php 
                include('Message.php');
            ?>
            <label for="meno">Vaše meno:</label>
            <input type="text" id="meno" name="meno" placeholder= "Vaše meno" required>

            <label for="email">Váš e-mail:</label>
            <input type="email" id="email" name="email" placeholder= "Váš email" required>

            <label for="poznamka">Vaša poznámka:</label>
            <textarea id="poznamka" name="poznamka" rows="10" cols="50" placeholder= "Tu napíšte Vašu poznámku:"></textarea>

            <div class="suhlas">
                <input type="checkbox" id="suhlas" name="suhlas" value="suhlas" required>
                <label for="suhlas">Súhlasím so spracovaním osobných údajov.</label>
            </div>

            <input class="button" name = "kontakt_submitted" type="submit" value="Odoslať">
        </form>
    </section>

    <!-- Footer -->
    <?php
        include_once('templates/partials/footer.php');
    ?> 
<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="css/menu.css">
    <title>Menu</title>
</head>
<!-- Navigácia  -->
    <?php
        session_start();
        include('partials/header.php');
    ?>   

    <!-- Menu obrázok -->
    <section class="menu">
        <img src="img/menu.jpg" alt="naše menu" width="707" height="1000">
    </section>

    <!-- Footer -->
    <?php
        include_once('partials/footer.php');
    ?> 
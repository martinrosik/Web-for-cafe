<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="css/galeria.css">
    <title>Kávový Raj</title>
</head>
    <!-- Navigácia  -->
    <?php
        include_once('partials/header.php');
    ?>   
      
    <!-- Galéria -->
    <section class="slideshow">
        <h1>Prezrite si naše priestory:</h1>
        <div class="slideshow-container fade">
            <div class="Containers">
                <img src="img/kaviaren-galeria1.jpg" width="900" height="600" alt="kaviareň priestor">
            </div>
        
            <div class="Containers">
                <img src="img/kaviaren-galeria2.jpg" width="900" height="600" alt="kaviareň priestor na sedenie pri okne">
            </div>
        
            <div class="Containers">
                <img src="img/kaviaren-galeria3.jpg" width="900" height="600" alt="kaviareň barový priestor">
            </div>
        
            <a class="Back" onclick="plusSlides(-1)">&#10094;</a>
            <a class="forward" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <br>
        
        <div style="text-align:center">
            <span class="dots" onclick="currentSlide(1)"></span>
            <span class="dots" onclick="currentSlide(2)"></span>
            <span class="dots" onclick="currentSlide(3)"></span>
        </div>  
      </section>
    
    <!-- Footer -->
    <?php
        include_once('partials/footer.php');
    ?>  
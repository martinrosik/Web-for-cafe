<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="css/login.css">
    <title>Prihlásenie</title>
</head>
<body>
    
</body>
</html>
<?php
    include('partials/header.php');
    if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true){
        header('Location: admin.php');
    }
?>
<section class="formular">
        <form action="" method="post">
            <h2>Prihlásiť sa</h2>
            <label for="email">Váš e-mail:</label>
            <input type="email" id="email" name="email" placeholder= "Váš email" required>
            <label for="heslo">Vaše heslo:</label>
            <input type="text" id="password" name="password" placeholder="Vaše heslo">
            <input class="button" type="submit" value="Prihlásiť sa">
        </form>
                <?php
            
                    if(isset($_POST['user_login'])){
                        $email = $_POST['email'];
                        $password = $_POST['password'];
                        $user = new User();

                        $login_success = $user->login($email,$password);
                        if($login_success == true){
                            header('Location: admin.php');
                            exit;
                        }else{
                            echo 'Nesprávne meno alebo heslo';
                        }
                    }
                
                ?>
</section> 
<?php
    include_once('partials/footer.php');
?>

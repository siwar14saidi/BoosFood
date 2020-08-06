<?php
session_start();

if (isset($_SESSION['email']) && !empty($_SESSION['email'])) {
    if (isset($_SESSION['is_admin']) && !empty($_SESSION['is_admin']) && $_SESSION['is_admin'] == 1)
        header('location:../admins/index.php');
    else
        header('location:../html/home.php');
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <link rel="stylesheet" type="text/php" href="../controle/usercontrole.php">
        <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Baloo+Chettan+2&family=Dosis&family=Epilogue:ital,wght@0,100;1,600&family=Grenze+Gotisch&family=Josefin+Sans:ital,wght@0,400;1,300&family=Lemonada:wght@500&family=M+PLUS+1p&family=Niconne&family=Permanent+Marker&family=Ropa+Sans&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Baloo+Chettan+2&family=Dosis&family=Epilogue:ital,wght@0,100;1,600&family=Grenze+Gotisch&family=Josefin+Sans:ital,wght@0,400;1,300&family=Lemonada:wght@500&family=M+PLUS+1p&family=Niconne&family=Permanent+Marker&family=Ropa+Sans:ital@0;1&display=swap" rel="stylesheet"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>


<img class="wave" src="../images/bg.png">
<div class="container">
    <div class="img">
        <img src="../images/hi.png">
    </div>
    <div class="login-content">

        <form action="../controle/usercontrole.php?event=login"  method="POST"  onsubmit="result()">
 
            <?php
            if (isset($_GET['error']) && !empty($_GET['error'])) {
                if ($_GET['error'] == 'true') {
                    echo "<div class='form-row'>
                        <div class='col'>
                            <div class='alert alert-danger'>Email Ou mot de passe ghaltin !</div>
                        </div>
                    </div>";
                } else if ($_GET['error'] == 'notallowed') {
                    echo "<div class='form-row'>
                    <div class='col'>
                        <div class='alert alert-danger'>Connecti yehdik w yarhem bouk !</div>
                    </div>
                </div>";
                } else if ($_GET['error'] == 'false') {
                    echo "<div class='form-row'>
                    <div class='col'>
                        <div class='alert alert-info'>Bye bye !</div>
                    </div>
                </div>";
                }
            } ?>

            <img class="avatar" src="../images/avatar.svg">
            <h2 class="font2 title">Welcome</h2>
            <div class="input-div one">
                <div class="i">
                    <i class="fas fa-user"></i>
                </div>
                <div class="div">

                    <input type="text" name="email" class="input" placeholder="email" value=""
                           >
                </div>
            </div>
            <div class="input-div pass">
                <div class="i">
                    <i class="fas fa-lock"></i>
                </div>
                <div class="div">

                    <input type="password" name="password" class="input" placeholder="password" value=""
                           >
                </div>
            </div>
            <a href="singUp.html" class="font2" style="color: #fff;">signe up</a>
            <input type="submit" class="btn" value="Login" name="submit">

        </form>
    </div>
</div>
  
        <script src="./js/resultat.js"></script>
</body>

</html>
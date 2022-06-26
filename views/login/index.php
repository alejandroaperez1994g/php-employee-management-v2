<?php
// if (!isset($_SESSION)) {
//   session_start();
// }

// $message = 'Click Login to enter';
// if (isset($_SESSION['error_message'])) {
//   $message = $_SESSION['error_message'];
// }
// if (isset($_SESSION['login'])) {
//   if ($_SESSION['login'] == true) {
//     header('Location:./src/dashboard.php');
//   }
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/assets/css/login.css">
    <title>Login</title>
</head>

<body>
    <main class="login">
        <div class="login-content">
            <div class="login-content__title">
                <h1>LOGIN</h1>
                <p>Welcome back! Please enter your details</p>
            </div>
            <form class="login-content__form" action="./main/auth" method="POST">
                <label class="login-content__label" for="">
                    <span class="login-content__span"> 📧 Email :</span>
                    <input class="login-content__input" type="email" name="email" required>
                </label>
                <label class="login-content__label" for="">
                    <span class="login-content__span">🔑 Password :</span>
                    <input class="login-content__input" type="password" name="password" required></label>
                <div class="login-content__btn">
                    <button type="submit" name="login" class="primary-btn">Login</button>
                </div>
                <div><?php if (isset($message)) echo $message ?></div>
            </form>
        </div>
        <div class="login-img">
            <div class="login-backgorund"></div>
        </div>
    </main>
</body>

</html>
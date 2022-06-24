<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
</head>

<body>
    <header>
        <nav>
            <!-- NAV LOGO/TITLE -->
            <div class="nav__logo">
                <img src="../assets/img/profile.png" alt="" />
                <h3>HELLO 👋, ADMIN!</h3>
            </div>
            <!-- NAV MENU -->
            <div class="nav__menu">
                <a class="nav-link" href="<?php echo BASE_URL . 'board/consult'?>">🏠 Dashboard</a>
                <a class="nav-link" href="<?php echo BASE_URL . 'form'?>">👥 Employee</a>
            </div>
            <!-- NAV LOGOUT -->
            <div class="nav__logout">
                <a class="navbar-brand nav-link" href="<?php echo BASE_URL?>"><button
                        class="nav__logout-btn primary-btn">Logout</button></a>
            </div>
        </nav>
    </header>
</body>

</html>
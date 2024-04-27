<? session_start();
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GrungeGuitar</title>
</head>
<link rel="stylesheet" href="css/style.css">

<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="logo">
                    <a href="index.php"><img src="media/logo.png" width="130px" height="130px" alt="Логотип"></a>
                </div>
                <div class="menu">
                    <a href="constructor.php">Констуктор</a>
                    <a href="catalog.php">Каталог</a>
                    <a href="contacts.php">Контакты</a>
                    <?php
                    if (!$_SESSION['user']) {
                        echo "<a href='login.php'>Вход в аккаунт</a>";
                    } else {
                        echo "<a href='profile.php'> Профиль</a>";
                    }
                    ;
                    ?>
                </div>
            </div>
        </div>
    </header>
    <div class="mainHeader">Регистрация</div>
    <div class="registration">
        <form action="vendor/signup.php" method="post" class="form">
            <input type="text" name="login" placeholder="Логин">
            <input type="text" name="email" placeholder="Email">
            <input type="">
        </form>
    </div>
</body>

</html>
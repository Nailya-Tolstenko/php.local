<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="./css/style.css"/>

</head>
<body>

    <!--- Форма регистрации -->

    <form action="inc/singup.php" method="post" enctype="multipart/form-data">

        <label>ФИО</label>
        <input type="text" name="full_name" placeholder="Введите своё полное имя">
        <label>Логин</label>
        <input type="text" name="login" placeholder="Введите свой логин">
        <label>Почта</label>
        <input type="email" name="email" placeholder="Введите свою почту">
        <label>Изображение профиля</label>
        <input type="file" name="avatar">
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Введите пароль">
        <label>подтвердите Пароль</label>
        <input type="password" name="password_confirm" placeholder="подтвердите пароль">
        <button type="submit">Войти</button>
        <p>
            У вас уже есть аккаунт? - <a href="/">Авторизируйтесь!</a>
        </p>

        <p class="msg">       
           <?= $_SESSION['message']; ?>
        </p>

    </form>

</body>
</html>
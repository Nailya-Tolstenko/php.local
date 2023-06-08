

<?php
session_start();

//файл отвечает за регистрацию

//Подключаемся к базе через файл connect.php
//Подключаемся к базе через файл connect.php
require ('./connect.php');

$full_name = $POST['full_name'];
$login = $POST['login'];
$email = $POST['email'];
$password = $POST['password'];
$password_confirm = $POST['password_confirm'];

if (password === $password_confirm) {

} else {
    $_SESSION['message'] = 'Пароли не совпадают';
    header(string:'Location: ../reg.php');
}

?>
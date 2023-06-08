<?php
session_start();

//файл отвечает за регистрацию

//Подключаемся к базе через файл connect.php
//Подключаемся к базе через файл connect.php
require ('./connect.php');

$full_name = $_POST['full_name'];
$login = $_POST['login'];
$email = $_POST['email'];
$password = $_POST['password'];
$password_confirm = $_POST['password_confirm'];

if (password === $password_confirm) {

} else {
    $_SESSION['message'] = 'Пароли не совпадают';
    header(string:'Location: ../reg.php');
}

?>
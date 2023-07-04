<?php

error_reporting(E_ALL | E_STRICT);
ini_set('display_startup_errors', 0);
ini_set('display_errors', 'On');

$user = 'root';
$password = 'root';
$host = 'localhost';
$db = 'registration1';

//Блок try catch проверяет подключение к базе
try {
  //Если норм то работаем дальше
  //$pdo - это наша ссылка на подключение к БАЗЕ
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $password);
} catch(PDOException $e) {
  //Иначе выводим ошибку
    echo $e->getMessage();
}

function getNews () {
  global $mysqli;
  connectDB();
  $result = $mysqli->query("SELECT * FROM 'news' ORDER BY 'id' DESC LIMIT $limit");
  closeDB();
  return resultArray($result);
}

function resultToArray ($result) {
  $array = array ();
  while (($row = $result->fetch_assoc()) != false)
    $array[] = $row;
  return $array;
}

?>
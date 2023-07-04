<?php

error_reporting(E_ALL | E_STRICT);
ini_set('display_startup_errors', 0);
ini_set('display_errors', 'On');

$GLOBALS['mysqli'] = null;

/**
 *  Подключение к БАЗЕ
 * 
 */
function connectDB(){

  $user = 'root';
  $password = 'root';
  $host = 'localhost';
  $db = 'registration1';

  //Блок try catch проверяет подключение к базе
  try {
    //Если норм то работаем дальше
    //$GLOBALS['mysqli'] - это наша ссылка на подключение к БАЗЕ
      $GLOBALS['mysqli'] = new PDO("mysql:host=$host;dbname=$db", $user, $password);
  } catch(PDOException $e) {
    //Иначе выводим ошибку
      die($e->getMessage());
  }

}
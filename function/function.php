<?php

require_once($_SERVER['DOCUMENT_ROOT'].'function/connect.php');

/**
 *  Функиця закрытия соеденения с базой данных
 *  Запускается после запроса или лучше в конце скрипта
 * 
 */
function closeDB() {
  $GLOBALS['mysqli'] = null;
}

/**
 *  Функция возвращает массив новостей из базы
 * 
 */
function getNews($limit) {

  connectDB();
  $result = $GLOBALS['mysqli']->query("SELECT * FROM news ORDER BY id DESC LIMIT $limit");
  closeDB();

  return resultToArray($result);

}

/**
 *  Функция конвертирует данные из запроса в нужный нам массив
 * 
 */
function resultToArray ($result) {
  $array = array ();
  while (($row = $result->fetch()) != false)
    $array[] = $row;
  return $array;
}

?>
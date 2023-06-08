<?php

//Включаем вывод ошибок
error_reporting(E_ALL | E_STRICT);
ini_set('display_startup_errors', 0);
ini_set('display_errors', 'On');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Авторизация и Регистрация</title>
    <link rel="stylesheet" href="./css/style.css">

 <!--Форма авторизации -->

 <form action="" method="">

 	<label>Логин</label>
	<input type ="text" placeholder="Ведите свой логин">
	<label>Пароль</label>
	<input type ="password" placeholder="Ведите свой пароль">
	<button>Войти</button>
	<p>
		У вас нет аккаунта? - <a href="reg.php">Зарегистрируйтесь</a>!
	</p>
</form>

</body>
</html>
</body>
</html>
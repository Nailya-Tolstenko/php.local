<?php

//Включаем вывод ошибок
error_reporting(E_ALL | E_STRICT);
ini_set('display_startup_errors', 0);
ini_set('display_errors', 'On');

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<?php 
	$title = "Обратная связь";
		require_once($_SERVER['DOCUMENT_ROOT'].'blocks/head.php'); 
	?>
	<script src="http://ajax.googleleapis.com/ajax/libs/jquery/2.03/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $("#done").click(function () {
                $('#messageShow').hide ();
                var name = $("#name").val();
                var email = $("#email").val();
                var subject = $("#subject").val();
                var message = $("#message").val();
                var fail = "";
                if (name.length < 3) {
                    fail = "Имя не меньше 3 символов";
                    }
                    else if (email.split('@').length - 1 == 0 || email.split('.').length - 1 == 0) {

                            fail = "Вы ввели неккоректный email";
                    }

                    else if
                        (subject.length < 5) {

                        fail = "Тема сообщения не менее 5 символов";
                    }

                    else if
                        (subject.length < 20) {

                        fail = "Сообщение не менее 20 символов";
                    }

                    if (fail !="") {

                        $('#messageShow').html (fail + "<div class='claer'><br></div>");
                        $('#messageShow').show ();
                        return false;
                    }

                    $.ajax ({
                        
                        url: '/ajax/feedback.php',
                        type: 'POST',
                        cache: false,
                        data: {'name': name, 'email': email, 'subject': subject, 'message': message}
                        dataType: 'html',
                        success: function (data) {
                                $('#messageShow').html (data + "<div class='clear'><br></br>");
                                $('#messageShow').show ();    

                    }
                });
            });
        });
    </script>
</head>
<body>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'blocks/header.php'); ?>
	<div id="wrapper">
		<div id="leftCol">
			<input type="text" placeholder="Имя" id="name" name="name"><br/>
            <input type="text" placeholder="Email" id="email" name="email"><br/>
            <input type="text" placeholder="Тема сообщения" id="subqect" name="subqect"><br/>
            <textarea name="message" id="message" placeholder="Введите сюда ваше сообщение"></textarea><br/>
            <div id="messageShow"></div>
            <input type="button" name="done" id="done" value="Отправить">
		</div>
		<?php require_once($_SERVER['DOCUMENT_ROOT'].'blocks/rightCol.php'); ?>
	
	</div>

	<?php require_once($_SERVER['DOCUMENT_ROOT'].'blocks/footer.php'); ?>

</body>
</html>
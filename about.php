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
	$title = "Информация о нас";
		require_once($_SERVER['DOCUMENT_ROOT'].'blocks/head.php'); 
	?>
	
</head>
<body>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'blocks/header.php'); ?>
	<div id="wrapper">
		<div id="leftCol">
			<div id="ubout_us">
                <p>
                    Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. 
                    Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. 
                    В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, 
                    используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил 
                    без заметных изменений пять веков, но и перешагнул в электронный дизайн. 
                    Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и,
                    в более недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.
                </p>
            </div> 
		</div>

		<?php require_once($_SERVER['DOCUMENT_ROOT'].'blocks/rightCol.php'); ?>
	
	</div>

	<?php require_once($_SERVER['DOCUMENT_ROOT'].'blocks/footer.php'); ?>

</body>
</html>
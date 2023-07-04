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
		$title = "Новости обо всем";
		require_once($_SERVER['DOCUMENT_ROOT'].'blocks/head.php'); 
		$news = getNews(3);
	?>
	
</head>
<body>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'blocks/header.php'); ?>
	<div id="wrapper">
		<div id="leftCol">

			<?php

				for($i = 0; $i < count($news); $i++) {

					if($i == 0) {
						echo '<div id="bigArticle">';
					} else {
						echo '<div class="article">';
					}

					echo '<img src="/img/articles/'.$news[$i]['id'].'.jpg" alt="Статья #'.$news[$i]['id'].'">				
						<h2>'.$news[$i]['title'].'</h2>
						<p>'.$news[$i]['intro_text'].'</p>
						<a href="/article.php">
							<div class="more">Далее</div>
						</a>

					</div>';

					if($i == 0) {
						echo '<div class="clear"></div>';
					}
					
				}

			?>

		</div>

		<?php require_once($_SERVER['DOCUMENT_ROOT'].'blocks/rightCol.php'); ?>
	
	</div>

	<?php require_once($_SERVER['DOCUMENT_ROOT'].'blocks/footer.php'); ?>

</body>
</html>
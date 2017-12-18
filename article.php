<html>
	<head>
		<?php
			require_once "functions/functions.php";

			$news=getNews(1, $_GET["id"]);
			$title=$news["title"];
			require_once "blocks/head.php";
		?>
		
	</head>
	<body>

		
		<?php require_once "blocks/header.php" ?>
    	<div id="wrapper">
    		<div id="leftCol">

    			<?php
    				
    					echo '<div id="BigArticle">
    					
    						<h1>'.$news["title"].'</h1>
    						<p>'.$news["full_text"].'</p>
    					</div>
    					';	

    					
    			?>
    			<form name="comment" action="comment.php" method="post">
  <p>
    <label>Имя:</label>
    <input type="text" name="name" />
  </p>
  <p>
    <label>Комментарий:</label>
    <br />
    <textarea name="text_comment" cols="30" rows="50"></textarea>
  </p>
  <p>
    <input type="hidden" name="page_id" value="5" />
    <input type="submit" value="Отправить" />
  </p>
</form>
<?php require_once "comment.php" ?>
<?php
/*  $page_id = 150;// Уникальный идентификатор страницы (статьи или поста)
  $mysqli = new mysqli("localhost", "root", "", "newsBase");// Подключается к базе данных
  $result_set = $mysqli->query("SELECT * FROM `comments` WHERE `page_id`='$page_id'"); //Вытаскиваем все комментарии для данной страницы
  while ($row = $result_set->fetch_assoc()) {
    print_r($row); //Вывод комментариев
    echo "<br />";
  }*/
  echo '<h3>'.$comments["name"].'</h3><p>'.$comments["text_comment"].'</p>';
?>
    		</div>
    		
    		
    	</div>		
		
		<?php require_once "blocks/rightCol.php";	?>		
	</body>
<?php require_once "blocks/footer.php"; ?>	
</html>

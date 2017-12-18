<header>
	
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

	<div id="menu">
		<table>
			<td class="main">
				<a class="link" href="/">Главная</a>
			</td>
			<?php
				echo '<td class=\"profile\"><a class="link" href="/auto.php">Профиль</a></td>';
				echo '<td class=\"conf\"><a class="link" href="conf.php">Конференции</a></td>';
				
			
				
				echo '<td class=\"nedv\"><a class="link" href="/nedvij.php">Недвижимость</a></td>';
				echo '<td class=\"inter\"><a class="link" href="inteview.php">Интервью</a></td>';
				
			?>		
		</table>
		
	</div><div class="reg">
			<?php require_once "auto.php"; ?>
		</div>
</header>



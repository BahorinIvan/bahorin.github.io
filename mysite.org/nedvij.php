<html>
	<head>
		<?php
		
			$title="Недвижимость";
			require_once "blocks/head.php";
		?>
							
		
	</head>
	<body>
		<?php require_once "blocks/header.php";  ?>
		<div id="wrapper">
    		<div id="leftCol">
		<?php
			 
			$mysqli = false;
			function connectDB (){
				global $mysqli;
				$mysqli = new mysqli("localhost","root","","newsBase");
				$mysqli->query("SET NAMES 'utf-8'");
			}
			function closeDB(){
				global $mysqli;
				$mysqli->close();

			}

			

			function getNews($limit,$id){
				global $mysqli;
				connectDB();
				if($id)
					$where="WHERE `id` =".$id;
				$result = $mysqli->query("SELECT * FROM `nedvij` $where ORDER BY `id` DESC LIMIT $limit");
				closeDB();
				if(!$id)
					return resultToArray($result);
				else
					return $result->fetch_assoc();
			}
			function resultToArray($result){
				$array=array();
				
				while(($row=$result->fetch_assoc()) != false)
					$array[]=$row;
				return $array;
			}

			
			

               $news=getNews(100,$id);
                    for($i=0;$i<count($news);$i++){
                       
                        echo "<div class=\"article\" >";
                        echo '
                        		<h2>'.$news[$i]["name"].' </h2> 
                        		
                        		
                        		<p>'.$news[$i]["pre_text"].'</p>
                        
                        		
                        	
                        </div>  ';
                if($i==0)
                    echo '<div class=\"clear\"><br></div>';


                    }
			  
	    ?>
	</div>
	    <?php require_once "blocks/rightCol.php" ?>
	</div>
	</body>
	<?php require_once "blocks/footer.php"; ?> 
</html>
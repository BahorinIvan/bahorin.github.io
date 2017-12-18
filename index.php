<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php
            require_once "functions/functions.php";
            $title="Главная";
            require_once "blocks/head.php";
            $news=getNews(100,$id);

        ?>
                            
        
    </head>
    <body>

        
        <?php require_once "blocks/header.php" ?>
     

        <div id="wrapper">
            
             
          <?php require_once "blocks/rightCol.php" ?>
            <div id="leftCol">

                <?php
                /*'.$news[$i]["title"].'*/
                    for($i=0;$i<count($news);$i++){
                        if($i==0)
                            echo "<div id=\"bigArticle\">";
                        else
                            echo "<div class=\"article\">";
                        echo '<a href="/article.php?id='.$news[$i]["id"].'"><img src="/img/article/'.$news[$i]["id"].'.jpg" alt="Статья'.$news[$i]["id"].'" title="Статья'.$news[$i]["id"].'">
                        <h2>'.$news[$i]["title"].' </h2>   </a>
                        <p>'.$news[$i]["intro_text"].'</p>
                        
                           <a href="/article.php?id='.$news[$i]["id"].'"> <div class="more">Подробнее</div></a>
                     
                        </div>  ';
                if($i==0)
                    echo '<div class=\"clear\"><br></div>';

                
                    }
                ?>
            </div>    
             
            
        </div> 
        <?php require_once "blocks/footer.php"; ?>   
    </body>
     
   
</html>

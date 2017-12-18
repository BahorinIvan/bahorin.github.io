<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php
            require_once "functions/functions.php";
            $title="Профиль";
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
                   require_once "auto.php";
                ?>
            </div>    
             
            
        </div> 
        <?php require_once "blocks/footer.php"; ?>   
    </body>
     
   
</html>
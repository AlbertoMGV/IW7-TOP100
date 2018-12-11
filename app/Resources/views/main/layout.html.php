<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title><?php echo $title ?></title>

        <link rel="icon" type="image/x-icon" href="favicon.ico" />
        <link href='main.css' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <script type="text/javascript" src="js/script.js"></script>
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        
    </head>
    <body>

        <?php
            //$xxx = $songs;            
            $xxx = array("perro", "gato", "cebra");
        ?>

        <header class="header-search">

            <div class="header-limiter">

                <h1><a href="/">TOP<span>100</span></a></h1>

                <nav>
                    <a href="/">Home</a>
                    <a href="/songs">Songs</a>
                    <a href="/artists">Artists</a>
                    <a href="/genres">All Genres</a>
                </nav>

                <div class="searchBox">
                    
                    <div class="ui-widget">
                      <input id="tags">
                    </div>
                </div>



            </div>

        </header>
        </br>
        </br>
        
        <script>
            $( function() {
                window.alert();
                var availableTags = [];
                
               <?php foreach ($xxx as $x) : ?>

                    availableTags.push("<?php echo $x?>");
               <?php endforeach; ?>
            
                $( "#tags" ).autocomplete({
                  source: availableTags
                });
              } );
           

        </script>
        <!--Here goes the body <3 -->
        <?php echo $content ?> 

        <!---->

        
    </body>
</html>

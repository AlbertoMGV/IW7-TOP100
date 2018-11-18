<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title><?php echo $title ?></title>

        <link rel="icon" type="image/x-icon" href="favicon.ico" />
        <link href='main.css' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>
        
    </head>
    <body>
        <!--Here goes the header which is going to be the same for every pagess <3 -->

        <header class="header-search">

            <div class="header-limiter">

                <h1><a href="/">TOP<span>100</span></a></h1>

                <nav>
                    <a href="/">Home</a>
                    <a href="/songs">Songs</a>
                    <a href="/artists">Artists</a>
                    <a href="/genres">All Genres</a>
                </nav>

                <form method="get" action="#">
                    <input type="search" placeholder="Search!" name="search">
                </form>

            </div>

        </header>
        </br>
        </br>
        
        <script>

            $(document).ready(function() {

                $('.header-search form').on('click', function(e) {

                    // If the form (which is turned into the search button) was
                    // clicked directly, toggle the visibility of the search box.

                    if(e.target == this) {
                        $(this).find('input').toggle();
                    }

                });
            });

        </script>
        <!--Here goes the body <3 -->
        <?php echo $content ?> 

        <!---->

        
    </body>
</html>

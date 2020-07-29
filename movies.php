<!DOCTYPE html>
<html>
    <head>
        <title>CarSystem » Movies</title>
        <meta charset="utf-8" />

        <link rel="stylesheet" href="./assets/css/main.css" />
        <link rel="stylesheet" href="./assets/css/normalize.css" />
        <link rel="stylesheet" href="./assets/css/skeleton.css" />

    </head>

    <body>
        <div class="container">
            <div class="heading">
                <h1><a href="index.htm">CarSystem</a> » Filme</h1>
                <p>Das schlimme am Leben: Wenn es brenzlig wird setzt keine Gefahrenmusik ein.</p>
            </div>

            <div class="movies">
                <?php require './assets/php/getMovies.php'; ?>
            </div>
            
        </div>

    </body>

</html>
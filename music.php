<!DOCTYPE html>
<html>
    <head>
        <title>CarSystem » Home</title>
        <meta charset="utf-8" />

        <link rel="stylesheet" href="./assets/css/main.css" />
        <link rel="stylesheet" href="./assets/css/normalize.css" />
        <link rel="stylesheet" href="./assets/css/skeleton.css" />

    </head>

    <body>
        <div class="container">
            <div class="heading">
                <h1><a href="index.htm">CarSystem</a> » Music</h1>
                <p>Es ist nicht wichtig Musik zu analysieren, es ist wichtig sie zu genießen.</p>
            </div>

            <div class="music">
                <div class="row">
                    <div class="six columns">
                        <h4>Songübersicht:</h4><br>
                        <form action="./assets/php/createMusicPlaylist.php" method="post">
                        <input type="text" name="playlistName"><br>
                            <?php require './assets/php/getMusicFiles.php'; ?>
                            <input type="submit" name="createSubmit" value="Playlist Erstellen!">
                        </form>
                    </div>
                    <div class="six columns">
                        <h4>Playlists:</h4><br>
                        <?php require './assets/php/getMusicPlaylists.php'; ?>
                    </div>
                </div>
            </div>
            
        </div>

    </body>

</html>
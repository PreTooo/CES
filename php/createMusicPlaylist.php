<?php
    $music_dir = "A:/xampp/htdocs/projects/CarSystem/assets/music/";
    $playlist_dir = "A:/xampp/htdocs/projects/CarSystem/playlists/";
    if(isset($_POST['Playlist'])){
        $playlistName = $_POST['playlistName'];
        $createDir = $playlist_dir.$playlistName;
        mkdir($createDir);
        $music_list = fopen('index.txt', "w");
        foreach($_POST['Playlist'] as $playlist){
            $stSource = $music_dir.$playlist;
            $ndSource = $createDir.'/'.$playlist;
            //copy($stSource, $ndSource);
            $content = $playlist."\n";
            fwrite($music_list, $content);
        }
        fclose($music_list);
        

        $playlist_file = fopen('index.php', "w");
        unset($content);
        $content = "<!DOCTYPE html>
        <html>
            <head>
                <title>CarSystem » Playlist</title>
                <meta charset=\"utf-8\" />
        
                <link rel=\"stylesheet\" href=\"../../assets/css/main.css\" />
                <link rel=\"stylesheet\" href=\"../../assets/css/normalize.css\" />
                <link rel=\"stylesheet\" href=\"../../assets/css/skeleton.css\" />
        
                <style>
                    #playlist{
                        list-style: none;
                    }
                    #playlist span a{
                        color: rgb(235,235,235);
                        text-decoration: none;
                    }
                    #playlist .current-song a{
                        color: lightcoral;
                    }
                </style>
        
            </head>
        
            <body>
                <div class=\"container\">
                    <div class=\"heading\">
                        <h1><a href=\"../../index.htm\">CarSystem</a> » Playlist</h1>
                    </div>
        
                    <div class=\"playlist\">
                        <div class=\"row\">
                            <div class=\"six columns\">
                                <audio src=\"\" id=\"audioPlayer\" controls>
                                    Was genau ist \"Musik\"?
                                </audio>
                            </div>
                            <div class=\"six columns\">
                                <div id=\"playlist\">
                                    <?php require '../../assets/php/getPlaylistSongs.php'; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <script src=\"../../assets/js/jquery-2.2.0.js\"></script>
                <script src=\"../../assets/js/musicPlayer.js\"></script>
                <script>audioPlayer();</script>
        
            </body>
        
        </html>";
        fwrite($playlist_file, $content);
        fclose($playlist_file);
        $link = "A:/xampp/htdocs/projects/CarSystem/playlists/".$playlistName."/";
        if(copy("A:/xampp/htdocs/projects/CarSystem/assets/php/".'index.php', $link.'index.php')){unlink('index.php');}
        if(copy("A:/xampp/htdocs/projects/CarSystem/assets/php/".'index.txt', $link.'index.txt')){unlink('index.txt');}

    }

    header("location: ../../music.php?source:".$playlistName.'.php'."&dest:".$createDir.'/'.$playlistName.'/'.'index.php');
    exit();
?>
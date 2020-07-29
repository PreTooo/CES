<?php
    /*$dir = ".";
    $extension;
    $allowed = array("mp3", "wav", "ogg", "m4a");

    if(is_dir($dir)){
        //echo 'is dir<br>';
        if($dh = opendir($dir)){
            //echo 'opened dir<br>';
            while(($file = readdir($dh)) !== false){
                //echo 'found<br>';
                $extension = pathinfo($file, PATHINFO_EXTENSION);
                if(in_array($extension, $allowed)){
                    $name = explode(".", $file);
                    echo "<li><a href=\"$file\">".$name[0]."</a></li>";
                    //echo '<span><a href>'.$file.'</a></span><br>';
                }
            }
        }
        
    }*/

    $dir = ".";
    $handle = fopen("index.txt", "r");
    while($content = fgets($handle)){
        $name = explode(".", $content);
        echo "<li><a href=\"../../assets/music"."/$content\">".$name[0]."</a></li>";
    }
?>
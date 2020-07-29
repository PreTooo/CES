<?php
    $dir = "A:/xampp/htdocs/projects/CarSystem/assets/music/";
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
                    echo '<span><input type="checkbox" name="Playlist[]" value="'.$file.'"> '.$name[0].'</input></span><br />';
                    //echo '<span><a href>'.$file.'</a></span><br>';
                }
            }
        }
        
    }
?>
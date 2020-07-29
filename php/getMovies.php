<?php
    $dir = "A:/xampp/htdocs/projects/CarSystem/assets/movies/";
    $char_old = "";
    $extension;
    $allowed = array("mp4", "mov", "avi");
    /*if($handle = opendir($dir)){
        while(false !== ($entry = readdir($handle))){
            $file_extension = pathinfo($entry, PATHINFO_EXTENSION);
            if($entry != "." && $entry != ".."){
                $char = strtoupper(mb_substr($entry, 0, 1));
                if(!strstr($char_old, $char)){
                    echo '<br />';
                }
                echo '<span><a href=\"'. $dir .'/'. $entry .'\"></a></span><br />';
            }
        }
    }
    closedir($dir);*/

    if(is_dir($dir)){
        //echo 'is dir<br>';
        if($dh = opendir($dir)){
            //echo 'opened dir<br>';
            while(($file = readdir($dh)) !== false){
                //echo 'found<br>';
                $extension = pathinfo($file, PATHINFO_EXTENSION);
                if(in_array($extension, $allowed)){
                    $link = "assets/movies/".$file;
                    echo '<span><a href="'.$link.'">'.$file.'</a></span><br />';
                    //echo '<span><a href>'.$file.'</a></span><br>';
                }
            }
        }
        
    }
?>
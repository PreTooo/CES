<?php
    $dir = "A:/xampp/htdocs/projects/CarSystem/playlists/";
    $extension;
    //$allowed = array("txt");

    if(is_dir($dir)){
        //echo 'is dir<br>';
        if($dh = opendir($dir)){
            //echo 'opened dir<br>';
            while(($file = readdir($dh)) !== false){
                //echo 'found<br>';
                $extension = pathinfo($file, PATHINFO_EXTENSION);
                //if(in_array($extension, $allowed)){
                    if($file != ".."){
                    $list = explode(".", $file);
                    $link = "playlists/".$list[0];
                    echo '<span><a href="'.$link.'">» '.$list[0].'</a></span><br />';
                    //echo '<span><a href>'.$file.'</a></span><br>';
                }
            }
        }
    }
?>
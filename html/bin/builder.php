<?php
require_once "filesManager.php";
class Builder{
    public static function generateCssfiles($themes,$colors){
        $i=0;
        foreach($themes as $theme){
            foreach($colors as $color){
                $index = file_get_contents("./theme-color.model");
                $index = str_replace('dark',$theme,$index);
                $index = str_replace('blue',$color,$index);
                file_put_contents("./assets/scss/colors/$theme-$color.scss",$index);
                $i++;
            }
        }
        echo $i." css files was created.\n";
    }
    public static function generateProdHtmlFiles($themes,$colors){
        
        foreach($themes as $theme){
            foreach($colors as $color){
                $index = file_get_contents("index.min.html");
                $index = str_replace('src="assets/js/script.js"','src="assets/js/script.min.js"',$index);
                $index = str_replace('rel="stylesheet" href="assets/css/light-style.css"','rel="stylesheet" href="assets/css/'.$theme.'-style.min.css"',$index);
                $index = str_replace('rel="stylesheet" href="assets/css/light-red.css"','rel="stylesheet" href="assets/css/'.$theme.'-'.$color.'.min.css"',$index);
                $index = str_replace('data-color="assets/css/light-red.css"','data-color="assets/css/light-'.$color.'.min.css"',$index);
                $index = str_replace('data-color="assets/css/dark-red.css"','data-color="assets/css/dark-'.$color.'.min.css"',$index);
                $index = str_replace('data-mode="assets/css/light-style.css"','data-mode="assets/css/light-style.min.css"',$index);
                $index = str_replace('data-mode="assets/css/dark-style.css"','data-mode="assets/css/dark-style.min.css"',$index);
                $index = str_replace('images/prod/','images/',$index);
                if($theme == "dark"){
                    $index = str_replace('class="img-fluid logo light d-none"','class="img-fluid logo light"',$index);
                    $index = str_replace('class="img-fluid logo dark"','class="img-fluid logo dark d-none"',$index);
                    $index = str_replace('class="light d-none ','class="light ',$index);
                    $index = str_replace('class="dark','class="dark d-none',$index);
                } 
                file_put_contents("../build/prod/$theme-$color.html",$index);
            }
        }
    }
    public static function generateDevHtmlFiles($themes,$colors){
        
        foreach($themes as $theme){
            foreach($colors as $color){
                $index = file_get_contents("index.html");
                $index = str_replace('rel="stylesheet" href="assets/css/light-style.css"','rel="stylesheet" href="assets/css/'.$theme.'-style.css"',$index);
                $index = str_replace('rel="stylesheet" href="assets/css/light-red.css"','rel="stylesheet" href="assets/css/'.$theme.'-'.$color.'.css"',$index);
                $index = str_replace('data-color="assets/css/light-red.css"','data-color="assets/css/light-'.$color.'.css"',$index);
                $index = str_replace('data-color="assets/css/dark-red.css"','data-color="assets/css/dark-'.$color.'.css"',$index);
                $index = str_replace('images/prod/','images/',$index);
                if($theme == "dark"){
                    $index = str_replace('class="img-fluid logo light d-none"','class="img-fluid logo light"',$index);
                    $index = str_replace('class="img-fluid logo dark"','class="img-fluid logo dark d-none"',$index);
                    $index = str_replace('class="light d-none ','class="light ',$index);
                    $index = str_replace('class="dark ','class="dark d-none ',$index);
                    
                } 
                file_put_contents("../build/dev/$theme-$color.html",$index);
            }
        }
    }
    
    
    
    public static function generateProdFiles($themes,$colors){
        try {
            
            FilesManager::mkdir("../build/prod/");
            FilesManager::mkdir("../build/prod/assets/");
            FilesManager::mkdir("../build/prod/assets/js");
            FilesManager::mkdir("../build/prod/assets/css");
            FilesManager::mkdir("../build/prod/assets/webfonts");
            FilesManager::mkdir("../build/prod/images");
            FilesManager::copy("./assets/cssmin","../build/prod/assets/css");
            FilesManager::copy("./assets/webfonts","../build/prod/assets/webfonts");
            FilesManager::copy("./images/prod","../build/prod/images");
            copy("./assets/css/bootstrap.min.css","../build/prod/assets/css/bootstrap.min.css");
            copy("./assets/css/fontawesome.css","../build/prod/assets/css/fontawesome.css");
            copy("./assets/js/bootstrap.min.js","../build/prod/assets/js/bootstrap.min.js");
            copy("./assets/js/isotope.min.js","../build/prod/assets/js/isotope.min.js");
            copy("./assets/js/script.min.js","../build/prod/assets/js/script.min.js");
            self::generateProdHtmlFiles($themes,$colors);
        echo " ==========================\n :: Prod created with success.\n ==========================\n";
        } catch (Exception $e) {
            echo 'Error : ',  $e->getMessage(), "\n";
        }
    }

    public static function generateDevFiles($themes,$colors){
        try {
            FilesManager::mkdir("../build/dev/");
            FilesManager::mkdir("../build/dev/assets/");
            FilesManager::mkdir("../build/dev/assets/js");
            FilesManager::mkdir("../build/dev/assets/css");
            FilesManager::mkdir("../build/dev/assets/webfonts");
            FilesManager::mkdir("../build/dev/images");
            FilesManager::copy("./assets/css","../build/dev/assets/css");
            FilesManager::copy("./assets/webfonts","../build/dev/assets/webfonts");
            FilesManager::copy("./assets/js","../build/dev/assets/js");
            FilesManager::copy("./assets/scss","../build/dev/assets/scss");
            FilesManager::copy("./images/dev","../build/dev/images");
            copy("./assets/css/bootstrap.min.css","../build/dev/assets/css/bootstrap.min.css");
            copy("./assets/css/fontawesome.css","../build/dev/assets/css/fontawesome.css");
            self::generateDevHtmlFiles($themes,$colors);
        echo " ==========================\n :: Dev created with success.\n ==========================\n";
        } catch (Exception $e) {
            echo 'Error : ',  $e->getMessage(), "\n";
        }
    }

    
}
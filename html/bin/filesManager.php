<?php
class FilesManager{
    public static function copy($src, $dst) {
        if (file_exists($dst)) self::rrmdir($dst);
        if (is_dir($src)) {
            mkdir($dst);
            $files = scandir($src);
            foreach ($files as $file)
            if ($file != "." && $file != "..") self::copy("$src/$file", "$dst/$file");
        }
        else if (file_exists($src)) copy($src, $dst);
    }
    public static function mkdir($directory){
        if(!is_dir($directory))mkdir($directory);
    }
    
    public static function rrmdir($src) {
        $dir = opendir($src);
        while(false !== ( $file = readdir($dir)) ) {
            if (( $file != '.' ) && ( $file != '..' )) {
                $full = $src . '/' . $file;
                if ( is_dir($full) ) {
                    self::rrmdir($full);
                }
                else {
                    unlink($full);
                }
            }
        }
        closedir($dir);
        rmdir($src);
    }
}
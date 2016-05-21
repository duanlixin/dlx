<?php 
$files = my_scandir("./");
$items=array();
foreach($files as $file){
    $mTime = date("Y-m-d H:i:s",filemtime("./{$file}"));
    $items[$mTime] = $file;
}
ksort($items);
print_r($items);

function my_scandir($dir)
{
    $files = array();
    if ( $handle = opendir($dir) ) {
        while ( ($file = readdir($handle)) !== false ){
            if ( $file != ".." && $file != "." ){
                if ( is_dir($dir . "/" . $file) ){                    
                    continue;
                }
                else{
                    $files[] = $file;
                }
            }
        }
        closedir($handle);
        return $files;
    }
}
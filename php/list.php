<?php
$dir = 'D:\workspace\php\page';
$filesnames = scandir($dir);
// print_r(file_get_contents($filesnames[3]));
// for ($x=0; $x<=count($filesnames); $x++) {
//   echo "数字是：$x <br>";
//   print_r($filesnames[x]);
// }
$page = dirname(__FILE__);
for($i = 0; $i < count($filesnames); ++$i) {
    // print_r($filesnames[$i].'<br>');
    if($filesnames[$i] != '.' && $filesnames[$i] != '..') {
        $content = file_get_contents($page.'\page'.'\\'.$filesnames[$i]);
        print_r(basename($filesnames[$i], '.txt').'<br>');
        // print_r($filesnames[$i].$content.'<br>');
        print_r('++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++');
        print_r('<br>');
    }
        // print_r($page.'\page'.'\\'.$filesnames[$i].'<br>');
}

// echo $page.'\page';
// function dir_size($dir){
//      $dh = @opendir($dir);             //打开目录，返回一个目录流
//      $return = array();
//       $i = 0;
//           while($file = @readdir($dh)){     //循环读取目录下的文件
//              if($file!='.' and $file!='..'){
//               $path = $dir.'/'.$file;     //设置目录，用于含有子目录的情况
//               if(is_dir($path)){
//           }elseif(is_file($path)){
//               $filesize[] =  round((filesize($path)/1024),2);//获取文件大小
//               $filename[] = $path;//获取文件名称                     
//               $filetime[] = date("Y-m-d H:i:s",filemtime($path));//获取文件最近修改日期    
    
//           }
//           }
//           }  
//           @closedir($dh);             //关闭目录流
//           // array_multisort($filesize,SORT_DESC,SORT_NUMERIC, $return);//按大小排序
//           //array_multisort($filename,SORT_DESC,SORT_STRING, $files);//按名字排序
//           array_multisort($filetime,SORT_DESC,SORT_STRING);//按时间排序
//           return $filetime;               //返回文件
//      }

// print_r(dir_size($dir));
?>
// <?php 
//   $mydir = './'; 
//   
//   $myfiles = array_diff(scandir($mydir), array('.', '..')); 
//   
//   print_r($myfiles); 
// ?> 

// <?php
// 
// $fileList = glob('./*');
// foreach($fileList as $filename){
//     if(is_file($filename)){
//         echo $filename, '<br>'; 
//     }   
// }
// ?>

// <?php
// 
// $fileList = glob('./*');
// foreach($fileList as $filename){
//     if(is_file($filename)){
//         echo '<br>', $filename, '<br>'; 
//     }   
// }
// ?>

// <?php
// 
// if ($handle = opendir('./')) {
// 
//     while (false !== ($entry = readdir($handle))) {
// 
//         if ($entry != "." && $entry != "..") {
// 
//             echo '<br>', "$entry\n", '<br>';
//         }
//     }
// 
//     closedir($handle);
// }
// ?>

<?php

ini_set('post_max_size', '200M');
ini_set('upload_max_filesize', '200M');
if ($handle = opendir('./')) {

    while (false !== ($entry = readdir($handle))) {

        if ($entry != "." && $entry != "..") {

            echo '<br>', "<a href=\"./$entry\">$entry</a>", '<br>';
        }
    }

    closedir($handle);
}
?>

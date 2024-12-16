<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

print_r(scandir('files'));


/// open and read/write file
// 1 :

//$data = file_get_contents('filename');
//file_put_contents('filename','info');
//file_exists('filename');

//$path = 'files/melorinet.txt';
//
//if(file_exists($path))
//{
//    $oldData = file_get_contents($path);
//    file_put_contents($path,$oldData."\n".'https://melorinet.io');
//}else{
//    file_put_contents($path,'https://melorinet.com');
//}


/// open and read/write file
// 2 :

//$path2 = 'files/melo.txt';
//$openedFile = fopen($path2,'c+') or die('invalid file or file not found');
//if(filesize($path2) > 0)
//    echo fread($openedFile,filesize($path2));
//
//fwrite($openedFile,"https://melorinet.org\n");
//fclose($openedFile);


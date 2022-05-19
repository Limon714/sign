<?php 
$file = fopen('info.txt', 'r') or die ('Unable to open the file');

while(!feof($file)){
    echo fgets($file). " ";
}

fclose($file);
?>
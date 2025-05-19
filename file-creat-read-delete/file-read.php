<?php 
//check file path
$file = 'testFile.txt';

//file_exists use file ase kina 
//file_get_contents use for file read

if(file_exists($file)){
    $content = file_get_contents($file);
    echo $content;
}else{
    echo "not found";
}

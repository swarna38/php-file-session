<?php 
$file = 'testFile.txt';
$newContent = "hi developers";

if(file_put_contents($file, $newContent, FILE_APPEND)){
    echo "new content added successfully";
}else{
    echo "failed";
}
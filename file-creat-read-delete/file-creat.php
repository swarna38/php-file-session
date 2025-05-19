<?php
//txt file create for php code 

$file = 'testFile.txt';
$content = 'this is my first content for first  test file';

//file_put_content file create
if(file_put_contents($file, $content)){
    echo 'successfully file create';
}else{
    echo 'failed';
}
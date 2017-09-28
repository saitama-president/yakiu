<?php



function log($text){
    
    $file="app.log";
    
    file_put_contents($file, $text,FILE_APPEND);
    
}
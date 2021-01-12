<?php


function insertIntoDB($value){
    $db_folder = 'zelje_db';
    if(!file_exists($db_folder)) {
        mkdir($db_folder);
    }
    $table = uniqid();
    $h = fopen($db_folder.'/'.$table.'.txt','a+');
    fwrite($h,$value);
    fclose($h);
}



?>


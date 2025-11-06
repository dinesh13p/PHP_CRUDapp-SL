<?php
    $fileName = 'info.txt';

    if(file_exists(filename: $fileName)){
        fopen(filename: $fileName, mode: 'r');
    // Different modes r, r+, w, w+, a, a+, x, x+
    // $content = fread($fo, 20);
    // $content = readfile($fileName) or die("Error: Unable to read file!");

    $content = file_get_contents(filename: $fileName);
    echo $content;
    } else {
        die("ERROR! File does not exist!");

}
?>
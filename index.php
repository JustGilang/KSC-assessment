<?php
error_reporting(0);
$file_handle = fopen("unsorted-names-list.txt", "rb");
$no = 1;

while (!feof($file_handle) ) {
    $line_of_text = fgets($file_handle);
    $parts = explode(' ', $line_of_text);
    echo $no++ .'. ' .$parts[0] .' ' .$parts[1] .' ' .$parts[2] .'<br>';
}
fclose($file_handle);
?>
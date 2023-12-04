<?php
// Open a file for reading
$file = fopen(__DIR__. "/../../docker-compose.yaml", "r");

if ($file) {
    var_dump(gettype($file));
    fclose($file);
    var_dump(gettype($file));
} else {
    echo "Unable to open the file.";
}
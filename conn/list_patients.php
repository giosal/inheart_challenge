<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$patients = json_decode(file_get_contents("../data/data.txt"));

#$patients_file = fopen("../data/data.txt", "r+");
#$patients = array();
#while (($line = stream_get_line($patients_file, 1024 * 1024, "\n")) !== false) {
#    array_push($patients, $line);
#}
print_r(json_encode($patients));
?>
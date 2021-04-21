<?php

$id = $_POST["id"];
$name = $_POST["name"];
$age = $_POST["age"];
$dob = $_POST["dob"];

$patients_file = json_decode("../data/data.txt");
$patient = "patient" + $id;
$id = "ID";
$oldname = "name";
$oldage = "age";
$olddob = "date of birth";

$patients_file->$patient->$oldname = $name;
$patients_file->$patient->$oldage = $age;
$patients_file->$patient->$olddob = $dob;

print_r($patients_file->$patient);
file_put_contents($patients_file, json_encode($patients_file), LOCK_EX);

?>
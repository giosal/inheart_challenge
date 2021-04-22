<?php

$id = $_POST["id"];
$name = $_POST["name"];
$lastname = $_POST["lastname"];
$age = $_POST["age"];
$dob = $_POST["dob"];

$patients_file = json_decode(file_get_contents("../data/data.txt"));
$patient = "patient" . strval($id);
print_r($patients_file);
$oldid = "ID";
$oldname = "name";
$oldlastname = "lastname";
$oldage = "age";
$olddob = "date of birth";
$patients_file->$patient->$oldid = $id;
$patients_file->$patient->$oldname = $name;
$patients_file->$patient->$oldlastname = $lastname;
$patients_file->$patient->$oldage = $age;
$patients_file->$patient->$olddob = $dob;

print_r($patients_file);
file_put_contents("../data/data.txt", json_encode($patients_file), LOCK_EX);

?>
<?php

$name = $_POST["name"];
$age = $_POST["age"];
$dob = $_POST["dob"];

$patients_file = json_decode(file_get_contents("../data/data.txt"));
end($patients_file);
$last_key = key($patients_file);
$id = "ID";
$oldname = "name";
$oldage = "age";
$olddob = "date of birth";
$last_id = $patients_file->$last_key->$id;

$newid = $last_id + 1;
$new_patient = (object) array();
$new_patient->$id = $newid;
$new_patient->$oldname = $name;
$new_patient->$oldage = $age;
$new_patient->$olddob = $dob;
$new_key = "patient" . $newid;
#print_r(json_encode($new_patient));
$patients_file->$new_key = $new_patient;
#array_push($patients_file, $result);
#print_r($patients_file);
print_r(file_put_contents("../data/data.txt", json_encode($patients_file)));
#print_r(file_get_contents("../data/data.txt"));
?>
<?php
// Get the number of students from the database
$numStudents = 5;

// Create an array to hold the names of the students
$studentNames = [];

// Loop through the number of students and add their names to the array
for ($i = 0; $i < $numStudents; $i++) {
    $firstName = 'Student';
    $lastName = rand(1, 10);
    $fullName = "$firstName $lastName";
    array_push($studentNames, $fullName);
}

// Print the names of the students
foreach ($studentNames as $name) {
    echo "$name <br>";
}
?>
 <?php
function getRandomName() {
    $names = ["Ava", "Oliver", "Isabella", "Ethan", "Sophia", "Mason", "Liam", "Abigail", "Noah", "Charlotte", "Alexander"];
    return $names[array_rand($names)];
}

function getRandomNumber() {
    return rand(1, 5);
}
?>
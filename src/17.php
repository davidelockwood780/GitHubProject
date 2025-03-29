<?php
// This is a sample PHP code.
function displayRandomText() {
    $texts = array(
        "Hello, world!",
        "PHP is a fun language to learn.",
        "Let's play a game of 'Guess My Number'!"
    );
    return $texts[array_rand($texts)];
}

$text = displayRandomText();
echo $text;
?>

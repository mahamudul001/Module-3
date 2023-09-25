<?php

$text = "The quick brown fox jumps over the lazy dog.";

function modifyText($text)
{
    // Convert the string to all lowercase
    $text = strtolower($text);

    // Replace "brown" with "red"
    $text = str_replace("brown", "red", $text);

    echo $text;
}


modifyText($text);
?>
<?php

// Input string
$inputString = "Hello, welcome to the world of PHP programming!";

// Calculate string length without using built-in functions
$length = 0;
while (isset($inputString[$length])) {
    $length++;
}

// Count the number of words without using built-in functions
$wordCount = 0;
$isInsideWord = false;

for ($i = 0; $i < $length; $i++) {
    // Check if the current character is a letter or a digit
    if (($inputString[$i] >= 'A' && $inputString[$i] <= 'Z') ||
        ($inputString[$i] >= 'a' && $inputString[$i] <= 'z') ||
        ($inputString[$i] >= '0' && $inputString[$i] <= '9')) {
        if (!$isInsideWord) {
            $wordCount++;
            $isInsideWord = true;
        }
    } else {
        $isInsideWord = false;
    }
}

// Output results
echo "The length of the string is: $length\n";
echo "The number of words in the string is: $wordCount\n";

?>

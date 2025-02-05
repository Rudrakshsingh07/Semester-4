<?php
// Function to check if a string is lowercase
function isLowercase($string) {
    return ctype_lower($string);
}

// Function to reverse a string
function reverseString($string) {
    return strrev($string);
}

// Function to remove white spaces from a string
function removeWhitespace($string) {
    return preg_replace('/\s+/', '', $string);
}

// Function to replace a word in a string
function replaceWord($string, $search, $replace) {
    return str_replace($search, $replace, $string);
}

// Example Usage
$inputString = "hello world";
$searchWord = "world";
$replaceWord = "PHP";

echo "Original String: \"$inputString\"\n";

// Check if the string is lowercase
echo "Is the string lowercase? " . (isLowercase($inputString) ? "Yes" : "No") . "\n";

// Reverse the string
echo "Reversed String: \"" . reverseString($inputString) . "\"\n";

// Remove whitespace from the string
echo "String without whitespace: \"" . removeWhitespace($inputString) . "\"\n";

// Replace a word in the string
echo "String after replacing \"$searchWord\" with \"$replaceWord\": \"" . replaceWord($inputString, $searchWord, $replaceWord) . "\"\n";
?>

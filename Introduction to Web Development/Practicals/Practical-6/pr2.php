<?php

// Example usage:
$inputString = "hello world";
$searchWord = "world";
$replaceWord = "PHP";

echo "Is Lowercase: " . (mb_strtolower($inputString) === $inputString ? "The string is lowercase." : "The string is not lowercase.") . "\n";
echo "Reversed String: " . strrev($inputString) . "\n";
echo "Without White Spaces: " . preg_replace('/\s+/', '', $inputString) . "\n";
echo "Replaced String: " . str_replace($searchWord, $replaceWord, $inputString) . "\n";

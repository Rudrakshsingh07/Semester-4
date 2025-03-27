<?php

// Example usage:
$min = 1;
$max = 100;
$decimal = 42;
$angle = 30;

// Generate a random number
echo "Random Number: " . random_int($min, $max) . "\n";

// Convert number to different bases
echo "Binary: " . decbin($decimal) . "\n";
echo "Octal: " . decoct($decimal) . "\n";
echo "Hexadecimal: " . dechex($decimal) . "\n";

// Calculate trigonometric values
$radians = deg2rad($angle);
echo "Sin($angle°): " . sin($radians) . "\n";
echo "Cos($angle°): " . cos($radians) . "\n";
echo "Tan($angle°): " . tan($radians) . "\n";

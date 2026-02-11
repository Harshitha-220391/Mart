<?php
echo "<h2>String Functions in PHP</h2>";
$str=" lab task of string functions by chinni";
echo "Original String: $str <br><br>";
echo "1. Length of the string: ". strlen($str) ."<br>";
echo "2. Word count of the string: ". str_word_count($str) ."<br>";
echo "3. Reverse of the string: ". strrev($str) ."<br>";
echo "4. Position of 'string' in the string: ". strpos($str, "string") ."<br>";
echo "5. Replace 'chinni' with 'yash': ". str_replace("chinni", "yash", $str) ."<br>";
echo "6. Convert to uppercase: ". strtoupper($str) ."<br>";
echo "7. Convert to lowercase: ". strtolower($str) ."<br>";
echo "8. Capitalize first letter: ". ucfirst($str) ."<br>";
echo "9. Capitalize first letter of each word: ". ucwords($str) ."<br>";
echo "10. Trimmed string: '". trim("   $str   ") ."' <br>";
echo "11. String comparison with ' lab task of string functions by chinni': ". strcmp($str, " lab task of string functions by chinni") ."<br>";
echo "12. Substring from position 5 with length 10: ". substr($str, 5, 10) ."<br>";

$special = "<script>alert('XSS');</script>";
echo "13. HTML special characters conversion: ". htmlspecialchars($special) ."<br>";
echo "14.addslashes: ". addslashes("O'Reilly") ."<br>";

?>
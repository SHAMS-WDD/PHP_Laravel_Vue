<?php
	
function countVowels($string) {
   
    $vowelCount = preg_match_all('/[aeiou]/i', $string);
    return $vowelCount;
}

function reverseString($string) {
    
    return strrev($string);
}


$strings = ["Hello", "World", "PHP", "Programming"];


foreach ($strings as $string) {
    $vowelCount = countVowels($string);
    $reversedString = reverseString($string);

    
    echo "Original String: $string, Vowel Count: $vowelCount, Reversed String: $reversedString\n";
}


?>
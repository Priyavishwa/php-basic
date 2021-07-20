<?php

// strlen() - Return the Length of a String
echo strlen('hello');
echo "<br>";

// str_word_count() - Count Words in a String
echo str_word_count('hello world!'); //output is 2
echo "<br>";

//strrev() - Reverse a String
echo strrev('hello');
echo "<br>";

//strpos() - Search For a Text Within a String
/*
The PHP strpos() function searches for a specific text within a string. If a match is found, the function returns the character position of the first match. If no match is found, it will return FALSE.
*/
echo strpos('hello world', 'world');//outputs 6
//Tip: The first character position in a string is 0 (not 1).


//str_replace() - Replace Text Within a String

// Replace the text "world" with "Dolly"
echo str_replace("world", "Dolly", "Hello world!"); // outputs Hello Dolly!

?>

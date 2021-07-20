<?php


//PHP Operators
/*
Operators are used to perform operations on variables and values.

PHP divides the operators in the following groups:

Arithmetic operators
Assignment operators
Comparison operators
Increment/Decrement operators
Logical operators
String operators
Array operators
Conditional assignment operators



//PHP Arithmetic Operators
The PHP arithmetic operators are used with numeric values to perform common arithmetical operations, such as addition, subtraction, multiplication etc.

Operator	Name	Example	Result	
+	Addition	$x + $y	Sum of $x and $y	
-	Subtraction	$x - $y	Difference of $x and $y	
*	Multiplication	$x * $y	Product of $x and $y	
/	Division	$x / $y	Quotient of $x and $y	
%	Modulus	$x % $y	Remainder of $x divided by $y	
**	Exponentiation	$x ** $y	Result of raising $x to the $y'th power





*/
echo "Arithmetic Operators";
echo "<br>";

// Addition
$a = 3;
$b = 5;
$c = $a + $b;
echo "The add is ".$c;
echo "<br>";

//Subtraction
$a = 3;
$b = 5;
$c = $a - $b;
echo "The sub is ".$c;
echo "<br>";

//MULTIPLICATION
$a = 3;
$b = 5;
$c = $a * $b;
echo "The mul is ".$c;
echo "<br>";

//DIVISION
$a = 3;
$b = 5;
$c = $a / $b;
echo "The div is ".$c;
echo "<br>";

//MODULUS
$a = 3;
$b = 5;
$c = $a % $b;
echo "The modu is ".$c;
echo "<br>";

//EXPONENTIATION
$a = 3;
$b = 5;
$c = $a ** $b;
echo "The exponen is ".$c;
echo "<br>";






echo "Assignment Operators";
echo "<br>";
/*
The PHP assignment operators are used with numeric values to write a value to a variable.

The basic assignment operator in PHP is "=". It means that the left operand gets set to the value of the assignment expression on the right.

Assignment	Same as	Description	
x = y	x = y	The left operand gets set to the value of the expression on the right	
x += y	x = x + y	Addition	
x -= y	x = x - y	Subtraction	
x *= y	x = x * y	Multiplication	
x /= y	x = x / y	Division	
x %= y	x = x % y	Modulus

*/

$b = 10;
echo $b;
echo "<br>";

$b += 10;
echo $b;
echo "<br>";

$b -= 5;
echo $b;
echo "<br>";

$b *= 2;
echo $b;
echo "<br>";

$b/= 3;
echo $b;
echo "<br>";

$b %= 3;
echo $b;
echo "<br>";





//PHP Increment / Decrement Operators
/*
The PHP increment operators are used to increment a variable's value.

The PHP decrement operators are used to decrement a variable's value.

Operator	Name	Description	
++$x	Pre-increment	Increments $x by one, then returns $x	
$x++	Post-increment	Returns $x, then increments $x by one	
--$x	Pre-decrement	Decrements $x by one, then returns $x	
$x--	Post-decrement	Returns $x, then decrements $x by one	


*/
echo "Increment / Decrement Operators";
echo "<br>";


$c = 10;
echo ++$c;
echo "<br>";

$c = 10;
echo $c++;
echo "<br>";

$c = 10;
echo --$c;
echo "<br>";

$c = 10;
echo $c--;
echo "<br>";



//PHP Logical Operators
/*
The PHP logical operators are used to combine conditional statements.

Operator	Name	Example	Result	
and	And	$x and $y	True if both $x and $y are true	
or	Or	$x or $y	True if either $x or $y is true	
xor	Xor	$x xor $y	True if either $x or $y is true, but not both	
&&	And	$x && $y	True if both $x and $y are true	
||	Or	$x || $y	True if either $x or $y is true	
!	Not	!$x	True if $x is not true

*/
/*
echo "Logical Operators";
echo "<br>";

//and
$x = 100;  
$y = 50;

if ($x == 100 and $y == 50) {
    echo "Hello world!";
*/
/*
//or
$x = 100;  
$y = 50;

if ($x == 100 or $y == 80) {
    echo "Hello world!";


//xor
$x = 100;  
$y = 50;

if ($x == 100 xor $y == 40) {
    echo "Hello world!";

$x = 100;  
$y = 50;

if ($x == 100 && $y == 40) {
    echo "Hello world!";    


$x = 100;  
$y = 50;

if ($x == 100 || $y == 40) {
    echo "Hello world!";




//not
$x = 100;  

if ($x !== 90) {
    echo "Hello world!";
} 

*/
?>
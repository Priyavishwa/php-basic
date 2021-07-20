<?php
// PHP CONSTANT
/*
A constant is an identifier (name) for a simple value. The value cannot be changed during the script.

A valid constant name starts with a letter or underscore (no $ sign before the constant name).

Note: Unlike variables, constants are automatically global across the entire script.

Create a PHP Constant
To create a constant, use the define() function.Constants are like variables except that once they are defined they cannot be changed or undefined.


Syntax
define(name, value, case-insensitive)
*/

define("HELLO", "Hi there, This is Priya");
echo HELLO;
echo "<br>";

// case-insensitive constant name
define("GREETING", "Welcome to session", true);
echo greeting;
echo "<br>";

//Create an Array constant:
define("cars", [
  "Alfa Romeo",
  "BMW",
  "Toyota"
]);
echo cars[0];
echo "<br>";


//Constants are Global
//Constants are automatically global and can be used across the entire script.

//This example uses a constant inside a function, even if it is defined outside the function:
define("GREETING", "Welcome to session!");

function myTest() {
  echo GREETING;
}
myTest();



?>
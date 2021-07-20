<?php
/*
PHP supports the following data types:

String
Integer
Float (floating point numbers - also called double)
Boolean
Array
Object
NULL

*/

// STRING
/*
A string is a sequence of characters, like "Hello world!".
*/
$x = "Hello priya";
echo $x;
echo "<br>";

// INTEGER
$a = 345;
//var_dump() function returns the data type and value
var_dump($a);// outputs is int(345)
echo "<br>";

//FLOAT
//A float (floating point number) is a number with a decimal point or a number in exponential form.
$b = 12.45;
var_dump($b); //output is float(12.45)
echo "<br>";

// BOOLEAN
//A Boolean represents two possible states: TRUE or FALSE.
//$x = true; 


// ARRAY
//An array stores multiple values in one single variable.
$fruits = array("Mango","Grapes","Banana");
var_dump($fruits);
echo "<br>";



// OBJECT
/*
Classes and objects are the two main aspects of object-oriented programming.

A class is a template for objects, and an object is an instance of a class.

When the individual objects are created, they inherit all the properties and behaviors from the class, but each object will have different values for the properties.

Let's assume we have a class named Car. A Car can have properties like model, color, etc. We can define variables like $model, $color, and so on, to hold the values of these properties.

When the individual objects (Volvo, BMW, Toyota, etc.) are created, they inherit all the properties and behaviors from the class, but each object will have different values for the properties.

If you create a __construct() function, PHP will automatically call this function when you create an object from a class.
*/
class Car {
  public $color;
  public $model;
  public function __construct($color, $model) {
    $this->color = $color;
    $this->model = $model;
  }
  public function message() {
    return "My car is a " . $this->color . " " . $this->model . "!";
  }
}

$myCar = new Car("black", "Volvo");
echo $myCar -> message();
echo "<br>";
$myCar = new Car("red", "Toyota");
echo $myCar -> message();
echo "<br>";
$myCar = new Car("white", "Toyota");
echo $myCar -> message();



echo "<br>";

// NULL 
/*
Null is a special data type which can have only one value: NULL.

A variable of data type NULL is a variable that has no value assigned to it.

Tip: If a variable is created without a value, it is automatically assigned a value of NULL.

Variables can also be emptied by setting the value to NULL:
*/

$var1 = "Hello world!";
$var1 = null;
var_dump($var1);

?>


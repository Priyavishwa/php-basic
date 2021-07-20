<?php 

//Remember that PHP variable names are case-sensitive!
//In PHP, variables can be declared anywhere in the script.

$var1 = "myvariable 1";
echo "This is $var1!";
echo "<br>";
echo "This is ".$var1."!";
echo "<br>";

// Print the sum of two number using variable
$x = 3;
$y = 2;
echo $x + $y;
echo "<br>";

/*
PHP has three different variable scopes:

local
global
static


 Global scope :
A variable declared outside a function has a GLOBAL SCOPE and can only be accessed outside a function 
*/

$a = 5; // global scope
function myFun() {
	//using 'a' inside this function will generate an error
	echo "<p> variable a inside function is: $a </p>";
}
myFun();
echo "<p> variable a outside function is: $a </p>"; 


/*
Local scope :
A variable declared within a function has a LOCAL SCOPE and can only be accessed within that function
*/

function myFun2() {
	$b = 6; // local scope
	echo "<p> variable b inside function is: $b </p>";
}
myFun2();
//using 'b' outside the function will generate an error
echo "<p> variable b outside function is: $b </p>";


/*
You can have local variables with the same name in different functions, because local variables are only recognized by the function in which they are declared.
*/



// PHP Global keyword
/*
The global keyword is used to access a global variable from within a function.

To do this, use the global keyword before the variables (inside the function)
*/
$c = 1;
$d = 7;
function myTest() {
	global $c, $d;
	$d = $c + $d;
}
myTest();
echo $d; // output 8
echo "<br>";


/*
PHP also stores all global variables in an array called $GLOBALS[index]. The index holds the name of the variable. This array is also accessible from within functions and can be used to update global variables directly.
*/
$x1 = 5;
$y1 = 10;

function myTest3() {
  $GLOBALS['y1'] = $GLOBALS['x1'] + $GLOBALS['y1'];
}

myTest3();
echo $y1; // outputs 15
echo "<br>";


/*
PHP The static Keyword
Normally, when a function is completed/executed, all of its variables are deleted. However, sometimes we want a local variable NOT to be deleted. We need it for a further job.

To do this, use the static keyword when you first declare the variable:
*/
function myTest4() {
  static $x2 = 0;
  echo $x2;
  $x2++;
}

myTest4();
echo "<br>";
myTest4();
echo "<br>";
myTest4();
echo "<br>";
myTest4();
echo "<br>";





?>
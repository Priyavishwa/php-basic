<?php

/*
ways to connect to a MySQL Database
1. MySQLi extension -within mysql database
2. PDO - To integrate multiple database type
*/

//connecting to the database
$servername = "localhost";
$username = "root";
$password = "";

// create a connection
$conn = mysqli_connect($servername, $username, $password);

// Die if connection was not sucessfull
if(!$conn) {
    die("sorry we failed to connect:".mysqli_connect_error());
}else{
    echo "connection was successfull<br>";

}

// create a database
$sql = "CREATE DATABASE employee";
$result = mysqli_query($conn,$sql); //to execute query

//check for the database creation success
if($result) {
    echo "The database was created successfully<br>";
}
else{
    echo "The database was not created successfully";
}




?>
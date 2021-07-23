<?php

//connecting to the database
$servername = "localhost";
$username = "root";
$password = "";
$database = "employee";

// create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Die if connection was not sucessfull
if(!$conn) {
    die("sorry we failed to connect:".mysqli_connect_error());
}else{
    echo "connection was successfull<br>";

}

// create a table into the db
$sql = "CREATE TABLE `admin` ( `id` INT NOT NULL AUTO_INCREMENT ,  
`name` VARCHAR(100) NOT NULL ,  
`email` VARCHAR(100) NOT NULL ,    
PRIMARY KEY  (`id`))";
$result = mysqli_query($conn,$sql); //to execute query

//check for the table creation success
if($result) {
    echo "The table was created successfully<br>";
}
else{
    echo "The table was not created successfully";
}


?>
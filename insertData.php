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

//variables to be inserted into the table
$name = "Prachi";
$email = "prachi@gmail.com";

//sql query to be executed
$sql = "INSERT INTO `admin` (`name`, `email`) VALUES ('$name', '$email')";
$result = mysqli_query($conn,$sql); 

//add a new data to to table
if($result) {
    echo "The record has been inserted successfully<br>";
}
else{
    echo "The record was not inserted successfully";
    mysqli_error($conn);
}

?>
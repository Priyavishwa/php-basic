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

$sql = "DELETE FROM `admin` WHERE `name` = 'Prachi' LIMIT 3";
$result = mysqli_query($conn, $sql);
$affec = mysqli_affected_rows($conn);
echo "<br>Number of affected rows: $affec <br>";

if($result){
    echo "Deleted successfully";

}else{
    $err = mysqli_error($conn);
    echo "Not deleted successfully due to this error $err";
}


?>
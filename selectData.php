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

$sql = "SELECT * FROM `admin`";
$result = mysqli_query($conn, $sql);

//find the number of record return
$num = mysqli_num_rows($result);
echo $num;
echo " Records found in the database<br>";

//Display the rows returned by the sql query
if($num > 0) {
    /*this function return data one by one in the form of associative array
    $row = mysqli_fetch_assoc($result);
    echo var_dump($row);
    echo "<br>";
    $row = mysqli_fetch_assoc($result);
    echo var_dump($row);
    echo "<br>";
    $row = mysqli_fetch_assoc($result);
    echo var_dump($row);
    echo "<br>";
    $row = mysqli_fetch_assoc($result);
    echo var_dump($row);
    echo "<br>";
    $row = mysqli_fetch_assoc($result);
    echo var_dump($row);
    echo "<br>";
    $row = mysqli_fetch_assoc($result);
    echo var_dump($row);
    echo "<br>";
    $row = mysqli_fetch_assoc($result);
    echo var_dump($row);
    echo "<br>";
    $row = mysqli_fetch_assoc($result);
    echo var_dump($row);
    echo "<br>";
    $row = mysqli_fetch_assoc($result);
    echo var_dump($row);
    echo "<br>";
    */

    // We can fetch in a better way using the while loop
    while($row = mysqli_fetch_assoc($result)){
        //echo var_dump($row);
        echo $row['id']. " Hello ". $row['name']."Your email is ".$row['email'];
        echo "<br>";

    }

}


?>
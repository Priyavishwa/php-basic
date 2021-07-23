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

$sql = "SELECT * FROM `admin` WHERE name='Alex'";
$result = mysqli_query($conn, $sql);

//Usage of WHERE Clause to fetch data from database
$num = mysqli_num_rows($result);
echo $num.  " Records found in the database<br>";
//Display the rows returned by the sql query
$no =1;;
if($num > 0) {
    while($row = mysqli_fetch_assoc($result)){
        //echo var_dump($row);
        echo $no. " Hello ". $row['name']."Your email is ".$row['email'];
        echo "<br>";
        $no = $no +1;

    }
} 

//Usage of WHERE Clause to update data 
$sql = "UPDATE `admin` SET `name` = 'Rohanupdate3' WHERE `id` = 1";
$result = mysqli_query($conn, $sql);
echo var_dump($result);
$affec = mysqli_affected_rows($conn);
echo "<br>Number of affected rows: $affec <br>";
if($result){
    echo "We updated the record successfully.";
}else{
    echo "We could not update the record successfully";
}

?>
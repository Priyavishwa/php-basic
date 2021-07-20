<?php
//define the variable and set to empty values
$name = $email = $gender = "";
$nameErr = $emailErr = $genderErr = "";


if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if(empty($_POST["name"])) {
        $nameErr = "Name is required";
    }else {
        $name = test_input($_POST["name"]);
        //check if name only contain letter and whitespace
        if(!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
            $nameErr = "Only letters and white space allowed";
        }
    }

    if(empty($_POST["email"])) {
        $emailErr = "Email is required";
    }else {
        $email = test_input($_POST["email"]);
        // check if e-mail address is well-formed
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
        //The FILTER_VALIDATE_EMAIL filter validates an e-mail address.
    }

    if(empty($_POST["gender"])) {
        $genderErr = "Gender is required";
    }else {
        $gender = test_input($_POST["gender"]);
    }
    
}
function test_input($data) {
    $data = trim($data);//Strip unnecessary characters (extra space, tab, newline) from the user input data
    $data = stripslashes($data);//Remove backslashes (\) from the user input data
    $data = htmlspecialchars($data);//converts special characters to HTML entities
    return $data;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
    <style>
        .error {color:#ff0000;}
    </style>
</head>
<body>
    <h2>Form validation</h2>
    <p><span class="error">* Required field</span></p>
    <!-- $_SERVER["PHP_SELF"] sends the submitted form data to the page itself, 
    instead of jumping to a different page. This way, the user will 
    get error messages on the same page as the form. -->
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        Name: <input type="text" name="name">
        <span class="error">* <?php echo $nameErr; ?> </span>
        <br><br>
        E-mail: <input type="text" name="email">
        <span class="error">* <?php echo $emailErr; ?> </span>
        <br><br>
        Gender:
        <input type="radio" name="gender" <?php if(isset($gender) && $gender=="female") 
        echo "checked"; ?> value="female">Female
        <input type="radio" name="gender" <?php if(isset($gender) && $gender=="male") 
        echo "checked"; ?> value="male">Male
        <input type="radio" name="gender" <?php if(isset($gender) && $gender=="other") 
        echo "checked"; ?> value="other">Other 
        <span class="error">* <?php echo $genderErr; ?> </span>
        <br><br>
        <input type="submit" name="submit" value="Submit">
    </form>
    
</body>
</html>
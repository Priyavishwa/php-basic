<?php
if(isset($_POST['submit'])) {
    foreach($_FILES['doc']['name'] as $key=>$val){
     move_uploaded_file($_FILES['doc']['tmp_name'][$key],'media/'.$val);
    
    }
}
 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fileupload</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="fname">First name:</label>
        <input type="text" id="fname" name="fname"><br><br>
        <label for="lname">Last name:</label>
        <input type="text" id="lname" name="lname"><br><br>
        <label for="profile">fileupload:</label>
        <input type="file" id="pphoto" name="doc[]" multiple /><br><br>
        <input type="submit" value="Submit" name="submit">
        

    </form>
    
</body>
</html>
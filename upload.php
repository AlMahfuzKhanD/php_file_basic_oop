<?php
/**
 * Created by PhpStorm.
 * User: Mahfuz
 * Date: 20-Mar-19
 * Time: 3:24 PM
 */

if(isset($_POST['submit'])){
    echo "<pre>";

    print_r($_FILES['file_upload']);
    echo "</pre>";
}


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="file_upload">
    <input type="submit" name="submit">
    
</form>
</body>
</html>

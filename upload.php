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

    $upload_errors = array(
        UPLOAD_ERR_OK => "There is no error",
        UPLOAD_ERR_INI_SIZE => "The uploaded file exceeds the upload_max_filesiz directive in php.ini",
        UPLOAD_ERR_FORM_SIZE => "The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form",
        UPLOAD_ERR_PARTIAL => "The uploaded file was only partially uploaded",
        UPLOAD_ERR_NO_FILE => "No file was uploaded",
        UPLOAD_ERR_NO_TMP_DIR => "Missing a temporary folder",
        UPLOAD_ERR_CANT_WRITE => "Failed to write file to disk",
        UPLOAD_ERR_EXTENSION => "A PHP extension stopped the file upload."
    );
    $the_error = $_FILES['file_upload']['error']; // error what is catched in the file after being uploaded
    $the_message = $upload_errors[$the_error];
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

    <h2>

        <?php
        if(!empty($upload_errors)){
            echo $the_message;
        }

        ?>

    </h2>

    <input type="file" name="file_upload">
    <input type="submit" name="submit">
    
</form>
</body>
</html>

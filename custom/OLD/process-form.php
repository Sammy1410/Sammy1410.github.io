<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $time = date('H:i:s');
    $id = uniqid();

    //Files upload of any type are allowed.
    //The file is stored in a temporary location on the server.
    //The file is deleted when the script ends.
    //To keep the file, we can move it to a permanent location.

    $filename = $_FILES['file']['name'];
    $filedata = $_FILES['file']['tmp_name'];
    $filesize = $_FILES['file']['size'];
    $filetype = $_FILES['file']['type'];

    //move_uploaded_file($filedata, 'uploads/' . $filename);
    move_uploaded_file($filedata, 'uploads/' . $filename);

    $data = "[$time] $id \"$name, $email, $filename\"\n";
    $msg = "$id \"$message\"\n";
    $postfile = 'logs/postdata.log';
    $msgfile = 'logs/msg.log';
    
    file_put_contents($postfile, $data, FILE_APPEND);
    file_put_contents($msgfile, $msg, FILE_APPEND);

    //header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1.    
    //header("Location: /thank-you.php");
?>
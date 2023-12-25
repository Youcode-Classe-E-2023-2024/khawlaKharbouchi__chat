<?php

     $_SERVER["REQUEST_METHOD"];

if (isset($_FILES["profile"])) {
   
    $targetDir = "uploads/";

    $fileName = uniqid() . "_" . basename($_FILES["profile"]["name"]);


    $targetFile = $targetDir . $fileName;


    if (move_uploaded_file($_FILES["profile"]["tmp_name"], $targetFile)) {
      $imageName = $fileName;
        

        echo "File uploaded successfully.";
    } else {
        echo "Error uploading file.";
    }
} else {
    echo "Invalid file or no file was chosen.";
}
 $_POST["users_username"];
 $_POST["users_email"];
 $_POST["users_password"];

if($_POST["users_email"] != "")
    User::INSERT($imageName,$_POST["users_username"],$_POST["users_email"],$_POST["users_password"]);
$users = User::getAll();



<?php
require_once __DIR__ . "/../_classes/User.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
   
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

    // Check if the necessary POST variables are set
    if (
        isset($_POST["users_username"]) &&
        isset($_POST["users_email"]) &&
        isset($_POST["users_password"])
    ) {
        // Use appropriate validation/sanitization for the input data

        // Assuming User::INSERT method is used to insert data into the database
        $imageName = isset($imageName) ? $imageName : null; // Set default value if $imageName is not set
        if (User::INSERT($imageName, $_POST["users_username"], $_POST["users_email"], $_POST["users_password"])) {
            // Insertion successful, redirect to signin.php

        } else {
            echo "Error inserting data.";
        }
    } else {
        echo "Invalid input data.";
    }
} else {
    echo "Invalid request method.";

}

// Assuming User::getAll method is used to retrieve all users from the database
$users = User::getAll();

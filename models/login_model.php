<?php 
require_once "../_classes/User.php";
echo $_POST['users_email'];
$email = $_POST['users_email'];

print_r($imad = User::selectwhere("WHERE users_email= '$email'"));
if(count($imad ) === 0){
    echo "makayench";
}else{
    echo "kayen";
}
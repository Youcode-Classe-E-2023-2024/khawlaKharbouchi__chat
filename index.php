<?php

include_once '_config/config.php';
include_once '_functions/functions.php';
include_once '_config/db.php';
echo "h";
dd($_SERVER['PHP_SELF']);
echo "b";
spl_autoload_register(function ($class) {
    echo "l";
    include_once '_classes/' . $class . '.php';
});
echo "k";
if (isset($_GET['page']) && !empty($_GET['page'])) {
    $page = trim(strtolower($_GET['page']));
    echo "imad";
} else {
    $page = 'home';
    echo "hi";
}

$all_pages = scandir('controllers');

if (in_array($page . '_controller.php', $all_pages)) {
    include_once 'models/' . $page . '_model.php';
    include_once 'controllers/' . $page . '_controller.php';
    include_once 'views/_layout.php';
} else {
    header('Location: 404.html');
}

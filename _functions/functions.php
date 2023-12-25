<?php

/**
 * Dump and die.
 *
 * @param $var
 * @return void
 */
// function dd($var) {
//     echo '<pre>';
//     echo '<code>';
//     var_dump($var);
//     echo '</code>';
//     echo '</pre>';
    
// }

/**
 * Prevent inputs from XSS vulnerability.
 *
 * @param string $str
 * @return string
 */
function str_secure($str) {
    return trim(htmlspecialchars($str));
}

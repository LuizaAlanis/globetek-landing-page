<?php

if (isset($_GET['language'])) {
    $language = $_GET['language'];
} else {
    $language = 'en';
}

switch ($language) {
    case 'es':
        $lang_file = 'es.php';
        $lang_name = 'ES';
        $lang_flag = 'flag_spain.png';
        break;

    default:
        $lang_file = 'en.php';
        $lang_name = 'EN';
        $lang_flag = 'flag_eua.png';
}

include_once 'locales/' . $lang_file;

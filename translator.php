<?php

// TODO: Acho que você sabe que uso muito os recursos da IDE.
//       E o IntelliJ sugeriu substituir esse if por isso aqui: $language = $_GET['language'] ?? 'en';
//       Vivendo e aprendendo rs.
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

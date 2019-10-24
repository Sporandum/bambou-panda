<?php
include_once './data/datas.php';

$datas = [];
$collection = str_replace('/','', $_SERVER['REQUEST_URI']);

switch ($collection) {
    case 'enfant':
        $datas = COL_ENFANT;
        break;

    case 'femme':
        $datas = COL_FEMME;
        break;

    case 'homme':
        $datas = COL_HOMME;
        break;
}

include_once './views/catalogue.php';

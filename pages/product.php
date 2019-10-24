<?php
include './data/datas.php';


$string = $_SERVER['REQUEST_URI'];
$pattern = '#/(\w+)\?(.*)#';
$replacement = '${1}';
$collection = preg_replace($pattern, $replacement, $string);


$data = [];
switch ($collection) {
    case 'femme':
        $data = COL_FEMME;
        break;
    case 'homme':
        $data = COL_HOMME;
        break;
    case 'enfant':
        $data = COL_ENFANT;
        break;
    default:
        header('Location: /404');
        break;
}

foreach ($data as $product) {
    if ($_GET['ref'] == $product['ref']) {
        break;
    }
}

include_once './views/product.php';

<?php

$collection = collection();
$data = catalogue($collection);

if (!empty($_GET['product']) && !empty($_GET['ref'])) {

    $product = product($data, $_GET);

    if (!empty($product)) {
        include_once './views/product.php';
    } else {
        redirect_404();
    }
}

<?php

$data = [];

foreach (COL_LIST as $collection => $product) {
    $data[$collection] = end($product);
}

include_once './views/accueil.php';
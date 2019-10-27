<?php

if (!empty($_SESSION['cart'])) {
    $product = $_SESSION['cart'];
} else {
    $_SESSION['message'] = 'Votre panier est vide';
}

include_once './views/cart.php';
<?php

if (!empty($_POST)) {
    $page = $_POST['productUrl'];

    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    // If product already exist, add quantity
    $indexProduct = 0;
    foreach ($_SESSION['cart'] as $product) {
        
        if ($product['ref'] == $_POST['ref']) {
            $_SESSION['cart'][$indexProduct]['quantity'] += $_POST['quantity'];
            $_SESSION['message'] = 'Produit(s) ajouté au panier';
            break;
        }
        $indexProduct++;
    }

    // Add new product if don't exist yet
    if (empty($_SESSION['message'])) {
        if (array_push($_SESSION['cart'], $_POST)) {

            $_SESSION['message'] = 'Produit(s) ajouté au panier';
        } else {

            $_SESSION['message'] = 'Une erreur s\'est produite';
        }
    }

    header("Location: $page");
} else {
    redirect_404();
}
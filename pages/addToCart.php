<?php
if (!empty($_POST)) {
    $page = $_POST['productUrl'];

    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    // Tester duplication et ajoute la quantité au produit dans le panier
    $a = 0;
    foreach ($_SESSION['cart'] as $product) {
        
        if ($product['ref'] == $_POST['ref']) {
            $_SESSION['cart'][$a]['quantity'] += $_POST['quantity'];
            $_SESSION['message'] = 'Produit(s) ajouté au panier';
            break;
        }
        $a++;
    }

    // Ajoute un nouveau produit au panier si il n'existe pas
    if (empty($_SESSION['message'])) {
        if (array_push($_SESSION['cart'], $_POST)) {

            $_SESSION['message'] = 'Produit(s) ajouté au panier';
        } else {

            $_SESSION['message'] = 'Une erreur s\'est produite';
        }
    }

    header("Location: $page");
} else {
    header('Location: /404');
}

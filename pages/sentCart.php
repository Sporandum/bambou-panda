<?php

// Traitement of the order ...

$_SESSION['message'] = 'La commande a été envoyé, merci de votre achat';
unset($_SESSION['cart']);

include_once './views/sentCart.php';
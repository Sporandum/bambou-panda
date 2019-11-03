<?php
const ROUTES = [
    '/' => ['accueil.php', 'Accueil'],
    '/accueil' => ['accueil.php', 'Accueil'],
    '/#shops' => ['accueil.php#shops', 'Magasins'],
    '/cgv' => ['cgv.php', 'Conditions générale de vente'],
    '/cart' => ['cart.php', 'Panier'],
    '/addToCart' => ['addToCart.php', 'Page de traitement d\'ajout au panier'],
    '/sessionDestroy' => ['sessionDestroy.php', 'Destruction de la session utilisateur'],
    '/sentCart' => ['sentCart.php', 'Envoi de la commande'],
    '/enfant' => ['catalogue.php', 'Collection enfant'],
    '/femme' => ['catalogue.php', 'Collection femme'],
    '/homme' => ['catalogue.php', 'Collection homme'],
    '/404' => ['404.php', 'Page introuvable']
];

const CONTACT = 'mailto:contact@bambou-panda.fr';
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./public/css/bambou-panda.css">
    <!-- <link rel="stylesheet" href="./public/css/all.min.css"> -->
    <title><?= title() ?? $product['designation']; ?></title>
</head>

<body>
    <header>
        <div class="container">
            <div id="nav-secondary">
                <div>
                    <a href="mailto:contact@bambou-panda.fr">Nous Contacter <i class="fab fa-telegram-plane"></i></a>
                </div>
                <div>
                    <a href="cart">Panier <i class="fas fa-shopping-basket"></i></a>
                </div>
            </div>
            <div id="nav" class="row">
                <div id="brand-logo"><a href="/"><img src="./public/img/Logo-BambouPanda.png"
                alt="Logo Bambou Panda"></a>
            </div>
            <nav>
                <ul id="nav-primary">
                    <li><a href="femme">Femme</a></li>
                    <li><a href="homme">Homme</a></li>
                    <li><a href="enfant">Enfant</a></li>
                </ul>
            </nav>
            
        </div>
        
    </div>
</header>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./public/css/bambou-panda.css">
    <!-- <link rel="stylesheet" href="./public/css/all.min.css"> -->
    <script src="https://unpkg.com/feather-icons"></script>

    <title><?= title() ?? $product['designation']; ?></title>
</head>

<body>
    <div id="menu">
        <nav>
            <h3>Collections</h3>
            <ul>
                <li><a href="enfant">Enfant</a></li>
                <li><a href="femme">Femme</a></li>
                <li><a href="homme">Homme</a></li>
            </ul>
            <h3>Informations</h3>
            <ul>
                <li><a href="/#shops">Boutiques</a></li>
                <li><a href="<?= CONTACT; ?>" target="_blank">Contact</a></li>
                <li><a href="cgv">CGV</a></li>
            </ul>
        </nav>
    </div>

    <header>
        <div class="container">


            <div class="row align-items-center">

                <div class="d-md-none col-3">
                    <button onclick="window.location.href='cart'" class="btn btn-cart"><i data-feather="shopping-bag"></i></button>
                </div>

                <div class="col-md-5 col-6">
                    <div class="brand-logo"><a href="/"><img src="./public/img/Logo-BambouPanda.png" alt="Logo de Bambou panda"></a></div>
                </div>

                <div class="col-md-7 col-3">
                    <div class="row justify-content-end">

                        <button onclick="window.location.href='cart'" class="btn btn-cart d-none d-md-flex">Panier <i data-feather="shopping-bag"></i>
                        </button>

                        <button id="btn-menu" class="btn btn-menu"><span class="d-none d-md-inline">Menu </span><span id="btn-menu-icon"><i data-feather="menu"></i></span></button>

                    </div>
                </div>
            </div>

        </div>
    </header>
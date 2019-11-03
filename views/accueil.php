<main>
    <div class="container">

        <section id="hero">
            <div>
                <h1>bambou panda</h1>
                <h2>Vétements éco-responsables</h2>
                <button onclick="window.open('<?= CONTACT; ?>')" class="btn call-to-action">Contactez nous <i data-feather='smile'></i></button>
                <div class="chevrons-down"><i data-feather="chevrons-down"></i></div>
            </div>
        </section>
    </div>

    <section id="values">
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <div class="value">
                        <i data-feather="heart"></i>
                        <h3>Made with love</h3>
                    </div>
                </div>
                <div class="col-4">
                    <div class="value">
                        <i data-feather="triangle"></i>
                        <h3>Recycling</h3>
                    </div>
                </div>
                <div class="col-4">
                    <div class="value">
                        <i data-feather="thumbs-up"></i>
                        <h3>Panda friendly</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="products">
        <div class="container">

            <div class="row justify-content-center">
                <h2>Nouveautés</h2>
            </div>

            <div class="row">
                <?php foreach ($data as $collection => $product) : ?>

                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="item">
                            <a href="<?= productUrl($collection, $product); ?>"></a>
                            <img src="./public/img/<?= $product['image']; ?>" alt="<?= $product['designation']; ?>">
                            <div class="description">
                                <div class="top">
                                    <h3><?= $product['designation']; ?></h3>
                                </div>
                                <div class="center">
                                    <p class="prix"><?= $product['prix']; ?> €</p>
                                    <p><em>Description :</em> <br>
                                        <?= $product['description'] ?></p>
                                </div>
                                <div class="bottom">Voir le Produit</div>
                            </div>
                        </div>
                    </div>

                <?php endforeach; ?>
            </div>

        </div>
    </section>

    </div>

    <section id="who-are-we">

        <div class="container">

            <div class="row">

                <div class="col-md-4 d-md-flex d-none h-100">
                    <img src="./public/img/PinClipart.com_library-images-clip-art_86047.png" alt="logo-panda">
                </div>

                <div class="col-md-8 col-12 d-flex">
                    <div id="who-are-we-text">

                        <h2>Qui sommes nous ?</h2>

                        <p>La société Bambou Panda est une boutique qui a ouvert en 2013 à Lyon, qui commercialise
                            des
                            vêtements faits en fibre de bambou, afin de vendre des habits éco-responsables et
                            équitables. <br>
                            Depuis la société s'est aggrandie, de par deux nouvelles boutiques, à Paris et Nantes et
                            les
                            produits se sont diversifiés pour proposer du chanvre, du lyocell et du coton
                            biologique. <br>
                            Afin de livrer chaque personne intéressée aux quatres coins de l'hexagone, la société a
                            créée une boutique internet.</p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section id="shops">
        <div class="container">

            <div class="row justify-content-center">
                <h2>Nos Magasins</h2>
            </div>
            <div class="row">
                <div class="col-md-4 col-12">
                    <div class="shop">
                        <h2 class="city">Lyon</h2>
                        <p class="street">4 Place Bellecour</p>
                        <p class="cp-city">69 000 Lyon</p>
                        <p class="open">Ouvert du lundi au samedi de 10h à 19h</p>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="shop">
                        <h2 class="city">Paris</h2>
                        <p class="street">Quai Aimé Césaire</p>
                        <p class="cp-city">75 001 PARIS</p>
                        <p class="open">Ouvert du lundi au samedi de 10h à 19h</p>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="shop">
                        <h2 class="city">Nantes</h2>
                        <p class="street">Quai Aimé Césaire</p>
                        <p class="cp-city">75 001 PARIS</p>
                        <p class="open">Ouvert du lundi au samedi de 10h à 19h</p>
                    </div>
                </div>
            </div>

    </section>

</main>
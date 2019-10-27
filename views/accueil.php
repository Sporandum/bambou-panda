<main>
    <div class="container">

        <section id="hero">
            <div>
                <h1>bambou panda <br>vétements éco-responsables</h1>
            </div>
        </section>

        <section id="new-products">
            <div class="row">
                <div class="col">
                    <h2>Nouveautés</h2>

                </div>
            </div>
            <div id="new-products-blocs" class="row">

                <?php foreach ($data as $collection => $product) : ?>

                    <div class="card">
                        <div class="zoom-img">
                            <a href="<?= productUrl($collection, $product); ?>"><img src="./public/img/<?= $product['image']; ?>" alt="<?= $product['designation']; ?>"></a>
                        </div>
                        <div class="mt-auto">
                            <h3><?= $product['designation']; ?></h3>
                            <p class="price"><?= $product['prix']; ?> €</p>
                            <button onclick="window.location.href = '<?= productUrl($collection, $product); ?>';">Voir</button>
                        </div>
                    </div>

                <?php endforeach; ?>

            </div>
        </section>

    </div>

    <section id="who-are-we">

        <div class="container">

            <div class="row">

                <div class="who-are-we-bloc">
                    <img id="who-are-we-img" src="./public/img/PinClipart.com_library-images-clip-art_86047.png" alt="logo-panda">
                </div>

                <div class="who-are-we-bloc">
                    <div id="who-are-we-text">

                        <h2>Qui sommes nous</h2>

                        <p>La société Bambou Panda est une boutique qui a ouvert en 2013 à Lyon, qui commercialise
                            des
                            vêtements faits en fibre de bambou, afin de vendre des habits éco-responsables et
                            équitables.
                            Depuis la société s'est aggrandie, de par deux nouvelles boutiques, à Paris et Nantes et
                            les
                            produits se sont diversifiés pour proposer du chanvre, du lyocell et du coton
                            biologique.
                            Afin de livrer chaque personne intéressée aux quatres coins de l'hexagone, la société a
                            créée une boutique internet.</p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section id="shops">
        <div class="container">

            <div class="row">
                <div class="col">
                    <h2>Nos Magasins</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-33 card text-center">
                    <h2>Lyon</h2>
                    <p>4 Place Bellecour</p>
                    <p>69 000 Lyon</p>
                    <p>Ouvert du lundi au samedi de 10h à 19h</p>
                </div>
                <div class="col-33 card text-center">
                    <h2>Paris</h2>
                    <p>Quai Aimé Césaire</p>
                    <p>75 001 PARIS</p>
                    <p>Ouvert du lundi au samedi de 10h à 19h</p>
                </div>
                <div class="col-33 card text-center">
                    <h2>Nantes</h2>
                    <p>Quai Aimé Césaire</p>
                    <p>75 001 PARIS</p>
                    <p>Ouvert du lundi au samedi de 10h à 19h</p>
                </div>
            </div>
        </div>

    </section>

</main>
<main>

    <?php include_once './views/parts/breadcrumb.php'; ?>
    <div class="products">

        <div class="container">
            <div class="row justify-content-center">
                <h2><?= title() ?></h2>
            </div>

            <div class="row">
                <?php foreach ($data as $product) : ?>

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
    </div>

</main>
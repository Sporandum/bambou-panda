<main>

    <?php include_once './views/parts/breadcrumb.php'; ?>

    <div class="container">

        <h2><?= title() ?></h2>

        <div class="catalogue">
            <div class="row">
                <?php foreach ($data as $product) : ?>

                    <div class="card">
                        <div class="zoom-img">
                            <a href="<?= productUrl($collection, $product); ?>"><img src="./public/img/<?= $product['image']; ?>" alt="<?= $product['designation'] ?>"></a>
                        </div>
                        <div class="mt-auto">
                            <h3><?= $product['designation']; ?></h3>
                            <p class="price"><?= $product['prix']; ?> €</p>
                            <p class="ref">ref : <?= $product['ref']; ?></p>
                            <p>Description : <br><?= $product['description']; ?></p>
                            <button onclick="window.location.href = '<?= productUrl($collection, $product); ?>';">Voir</button>
                        </div>
                    </div>

                <?php endforeach; ?>

            </div>
        </div>
    </div>

</main>
<main>

    <?php include_once './views/breadcrumb.php'; ?>

    <div>
        <h2><?= title() ?></h2>
    </div>

    <div class="container">
        <div class="catalogue">
            <div class="row">
                <?php foreach ($datas as $product) : ?>

                    <?php $productUrl = $collection . '?product=' . strtolower(str_replace(' ', '_', $product['designation'])) . '&ref=' . $product['ref']; ?>

                    <div class="card">
                        <div class="zoom-img">
                            <a href="../public/img/<?= $product['image']; ?>"><img src="../public/img/<?= $product['image']; ?>" alt="<?= $product['designation'] ?>"></a>
                        </div>
                        <div class="mt-auto">
                            <h3><?= $product['designation']; ?></h3>
                            <p class="price"><?= $product['prix']; ?> €</p>
                            <p class="ref">ref : <?= $product['ref']; ?></p>
                            <p>Description : <br><?= $product['description']; ?></p>
                            <button onclick="window.location.href = '<?= $productUrl; ?>';">Voir</button>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>
        </div>
    </div>

</main>
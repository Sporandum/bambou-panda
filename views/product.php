<main>

    <?php include_once './views/parts/breadcrumb.php'; ?>

    <div class="container">

        <?php if (!empty($message = message())) : ?>
            <div class="message"><?= $message; ?></div>
        <?php endif; ?>

        <h2 class="text-center"><?= $product['designation'] ?></h2>
        <div class="row">
            <div class="col-50">
                <img src="./public/img/<?= $product['image']; ?>" alt="<?= $product['designation'] ?>">
            </div>
            <div class="col-50">
                <p>prix : <?= $product['prix'] ?> €</p>
                <p>description : <?= $product['description'] ?></p>

                <form action="addToCart" method="post">
                    <input type="hidden" name="name" value="<?= $product['designation'] ?>">
                    <input type="hidden" name="ref" value="<?= $product['ref'] ?>">
                    <input type="hidden" name="productUrl" value="<?= $_SERVER['REQUEST_URI'] ?>">
                    <input type="hidden" name="prix" value="<?= $product['prix'] ?>">
                    <label for="quantity">Quantité</label>
                    <input type="number" name="quantity" id="quantity" required value="1">
                    <input type="submit" value="Ajouter au panier">
                </form>

            </div>
        </div>
    </div>
</main>
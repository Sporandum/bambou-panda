<main>

    <?php include_once './views/parts/breadcrumb.php'; ?>
    <?php include_once './views/parts/message.php'; ?>
    <div class="container">
        <div id="product">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <img src="./public/img/<?= $product['image']; ?>" alt="<?= $product['designation'] ?>">

                </div>
                <div class="col-lg-8 col-md-6 col-12">
                    <form action="addToCart" method="post">
                        <h2><?= $product['designation']; ?></h2>
                        <div class="row">
                            <div class="col-lg-7 col-12">
                                <p class="ref">ref : <?= $product['ref']; ?></p>
                            </div>
                            <div class="col-lg-7 col-12">
                                <p class="prix"><?= $product['prix']; ?> €</p>
                                <div class="form-group">
                                    <label for="quantity">Quantité</label>
                                    <input class="form-control" type="number" name="quantity" id="quantity" required value="1">

                                </div>
                            </div>
                            <div class="col-lg-7 col-12">
                                <input type="hidden" name="name" value="<?= $product['designation'] ?>">
                                <input type="hidden" name="ref" value="<?= $product['ref'] ?>">
                                <input type="hidden" name="productUrl" value="<?= $_SERVER['REQUEST_URI'] ?>">
                                <input type="hidden" name="prix" value="<?= $product['prix'] ?>">
                                <button class="btn" type="submit">Ajouter au panier</button>
                            </div>
                            <div class="col-lg-7 col-10">
                                <p class="product-description"><em>Description :</em><br><?= $product['description']; ?></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    <?php /*
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
 */ ?>
    </div>
</main>
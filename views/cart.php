<main>

    <?php include_once './views/parts/breadcrumb.php'; ?>

    <div class="container">
        <div class="row justify-content-center">
            <h2><?= title(); ?></h2>
        </div>
    </div>

    <?php include_once './views/parts/message.php'; ?>

    <?php if (!empty($product)) : ?>
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-md-10 col-12">
                    <?php $total = 0; ?>
                    <div class="col">
                        <table class="table">
                            <thead>
                                <tr>
                                    <td>Réference</td>
                                    <td>Name</td>
                                    <td class="text-right">Quantité</td>
                                    <td class="text-right">Prix</td>
                                    <td class="text-right">Total</td>
                                </tr>
                            </thead>
                            <?php foreach ($product as $prod) : ?>
                                <tr>
                                    <td><?= $prod['ref']; ?></td>
                                    <td><a href="<?= $prod['productUrl'] ?>"><?= $prod['name']; ?></a></td>
                                    <td class="text-right"><?= $prod['quantity']; ?></td>
                                    <td class="text-right"><?= $prod['prix']; ?> €</td>
                                    <td class="text-right"><?= $produit_x_quantity = $prod['quantity'] * $prod['prix'];
                                                                    $total += $produit_x_quantity; ?> €</td>
                                </tr>
                            <?php endforeach; ?>
                            <tfoot>
                                <tr>
                                    <td colspan="4" class="text-right">Prix total</td>
                                    <td class="text-right"><?= $total; ?> €</td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-10 col-12">
                    <form action="sentCart" method="post">
                        <div class="form-group form-check">
                            <input class="form-check-input" type="checkbox" name="cgv" id="cgv" required>
                            <label class="form-check-label" for="cgv">En cochant cette case, vous confirmez avoir pris connaissance des <a href="cgv" target="_blank"><strong>conditions générale de vente</strong></a></label>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-12 order-lg-3">
                                <button id="btn-order" type="submit" class="btn">Valider le panier</button>
                            </div>
                            <div class="offset-4 order-lg-2"></div>
                            <div class="col-lg-4 col-12 order-lg-1">
                                <button id="btn-session-destroy" class="btn">Vider le panier</button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    <?php endif; ?>
</main>
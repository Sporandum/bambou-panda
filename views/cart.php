<main>

    <?php include_once './views/parts/breadcrumb.php'; ?>

    <div class="container">

        <h2><?= title(); ?></h2>

        <?php if (!empty($message = message())) : ?>
            <div class="message"><?= $message; ?></div>
        <?php endif; ?>

        <div class="row">


            <?php if (!empty($product)) : ?>
                <?php $total = 0; ?>
                <div class="col">
                    <table>
                        <thead>
                            <tr>
                                <td>Réference</td>
                                <td>Name</td>
                                <td>Quantité</td>
                                <td class="text-right">Prix</td>
                                <td class="text-right">Total</td>
                            </tr>
                        </thead>
                        <?php foreach ($product as $prod) : ?>
                            <tr>
                                <td><?= $prod['ref']; ?></td>
                                <td><a href="<?= $prod['productUrl'] ?>"><?= $prod['name']; ?></a></td>
                                <td><?= $prod['quantity']; ?></td>
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
                <div class="row">
                    <button class="bg-black" onclick="window.location.href ='sessionDestroy';">Vider le panier</button>
                    <button class="bg-green ml-auto" onclick="window.location.href ='sentCart';">Valider le panier</button>
                </div>
            <?php endif; ?>

        </div>
    </div>
</main>
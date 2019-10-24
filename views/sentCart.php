<main>
    <div class="container">
        <h2 class="text-center">Etat de la commande</h2>

        <?php if (!empty($message = message())) : ?>
            <div class="message"><?= $message; ?></div>
        <?php endif; ?>

    </div>
</main>
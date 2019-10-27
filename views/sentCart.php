<main>

    <?php include_once './views/parts/breadcrumb.php'; ?>

    <div class="container">

        <h2><?= title(); ?></h2>

        <?php if (!empty($message = message())) : ?>
            <div class="message"><?= $message; ?></div>
        <?php endif; ?>

    </div>
</main>
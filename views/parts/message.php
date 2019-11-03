<div class="container">
    <div class="row justify-content-center">
        <div class="col-10">
            <?php if (!empty($message = message())) : ?>
                <div class="message"><?= $message; ?></div>
            <?php endif; ?>
        </div>
    </div>
</div>
<!-- SECTION 2 : Other Available Items -->
<?php if (!empty($otherItems)) : ?>
    <section class="section">
        <h2>Other Available Items</h2>

        <div class="items-grid">
            <?php foreach ($otherItems as $item) : ?>
                <div class="item-card">

                    <div class="badges">
                        <?php if ($item->isAuction) : ?>
                            <span class="badge auction">Auction</span>
                        <?php endif; ?>

                        <?php if ($item->isDirectSale) : ?>
                            <span class="badge direct">Direct Sale</span>
                        <?php endif; ?>
                    </div>

                    <!-- Image principale -->
                    <img src="<?= htmlspecialchars($item->mainImageThumbnail) ?>"
                         class="item-img">

                    <!-- Compteur des images -->
                    <div class="img-count">
                        <?= $item->imagesCount ?> images
                    </div>

                    <h3><?= htmlspecialchars($item->title) ?></h3>

                    <p class="owner">
                        by <?= htmlspecialchars($item->creatorPseudo) ?>
                    </p>

                    <?php if ($item->buyNowPrice !== null) : ?>
                        <div class="price">€ <?= number_format($item->buyNowPrice, 2, ',', ' ') ?></div>
                    <?php else : ?>
                        <div class="price">Starting: € <?= number_format($item->startingPrice, 2, ',', ' ') ?></div>
                    <?php endif; ?>

                    <div class="time-left">
                        <?= htmlspecialchars($item->timeRemaining) ?> left
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
<?php endif; ?>


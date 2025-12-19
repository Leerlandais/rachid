<!-- SECTION 1 : Items I'm participating in -->
{% if participatingItems|length > 0 %}
    <section class="section">
        <h2>Items I'm Participating In</h2>

        <div class="items-grid">
            <?php foreach ($participatingItems as $item) : ?>
                <div class="item-card">

                    <div class="badges">
                        <?php if ($item->hasUserBid) : ?>
                            <span class="badge bidder">Bidder</span>
                        <?php endif; ?>

                        <?php if ($item->isUserHighestBidder) : ?>
                            <span class="badge best">Best Bidder</span>
                        <?php endif; ?>

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

                    <?php if ($item->highestBid !== null) : ?>
                        <div class="current-bid">Current bid
                            <span>€ <?= number_format($item->highestBid, 2, ',', ' ') ?></span>
                        </div>
                    <?php endif; ?>

                    <div class="time-left">
                        <?= htmlspecialchars($item->timeRemaining) ?> left
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
{% else %}
<p>Hi</p>
{% endif %}


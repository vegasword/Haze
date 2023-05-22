<?php foreach ($featured as $f) { ?>
    <div class="featured-container">
        <img class="featured-cover fade" src="images/covers/<?= $f['gameAssetsFileName'] ?>.jpg" alt="Featured game cover"></img>
        <div class="featured-content fade">
            <div>
                <h2 class="featured-title"><?= $f['gameTitle'] ?></h2>
                <div class="game-tags-container">
                    <?php
                    $tags = explode(';', $f['gameTags']);
                    $tagsIndices = array_map('intval', $tags);
                    foreach (array_values($tagsIndices) as $t)
                        echo ('<div class="game-tags">' . $gameTags[$t - 1]['tags'] . '</div>');
                    ?>
                </div>
                <p class="featured-description"><?= $f['gameDescription'] ?></p>
            </div>
            <div class="featured-content-end">
                <div class="featured-buy-button">
                    <button href="#">BUY NOW</button>
                    <div class="featured-price">
                        <p>FOR <?= $f['gamePrice'] ?>$</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
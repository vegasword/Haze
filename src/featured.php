<?php foreach ($featured as $f) { ?>
<div class="featured-container">
  <img class="featured-cover fade" src="images/covers/<?=$f['gameAssetsFileName']?>.jpg" alt="Featured game cover"></img>
  <div class="featured-content fade">
    <div>
      <h2 class="featured-title"><?=$f['gameTitle']?></h2>
      <div class="game-tags-container">
        <?php
          $gameTags = explode(';', $f['gameTags']);
          foreach ($gameTags as $gt) echo('<div class="game-tags">'.$gt.'</div>');
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
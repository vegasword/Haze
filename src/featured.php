<?php foreach ($featured as $f) { ?>
<div class="featured-container">
  <img class="featured-cover fade" src="images/covers/<?=$f['gameAssetsFileName']?>.jpg" alt="Featured game cover"></img>
  <div class="featured-content fade">
    <h2 class="featured-title"><?=$f['gameTitle']?></h2>
    <div class="game-tags-container">
      <?php
        $gameTags = explode(';', $f['gameTags']);
        foreach ($gameTags as $gt) echo('<div class="game-tags">'.$gt.'</div>');
      ?>
    </div>
    <p><?= $f['gameDescription'] ?></p>
    <div class="featured-footer">
      <div class="featured-buy-button">
        <button href="#">BUY NOW</button>
        <p>FOR <?= $f['gamePrice'] ?>$</p>
      </div>
    </div>
  </div>
</div>
<?php } ?>